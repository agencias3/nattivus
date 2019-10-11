<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Entities\Form;
use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Mail\Site\Budget\BudgetClientMail;
use AgenciaS3\Mail\Site\Budget\BudgetMail;
use AgenciaS3\Repositories\BudgetProductRepository;
use AgenciaS3\Repositories\BudgetRepository;
use AgenciaS3\Repositories\ProductRepository;
use AgenciaS3\Services\Cart;
use AgenciaS3\Services\SEOService;
use AgenciaS3\Services\UtilObjeto;
use AgenciaS3\Validators\BudgetProductValidator;
use AgenciaS3\Validators\BudgetValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class BudgetController extends Controller
{

    protected $repository;

    protected $validator;

    protected $budgetProductRepository;

    protected $budgetProductValidator;

    protected $productRepository;

    protected $SEOService;

    protected $path;

    public function __construct(BudgetRepository $repository,
                                BudgetValidator $validator,
                                BudgetProductRepository $budgetProductRepository,
                                BudgetProductValidator $budgetProductValidator,
                                ProductRepository $productRepository,
                                SEOService $SEOService)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->budgetProductRepository = $budgetProductRepository;
        $this->budgetProductValidator = $budgetProductValidator;
        $this->productRepository = $productRepository;
        $this->SEOService = $SEOService;
        $this->path = 'uploads/budget/';
    }

    public function index(SiteRequest $request)
    {
        $oldCart = Session::get('cart');

        $cart = new Cart($oldCart);
        $products = $cart->items;
        $totalPrice = $cart->totalPrice;

        $seoPage = $this->SEOService->getSeoPageSession(7);
        $this->SEOService->getPage($seoPage);

        return view('site.budget.index', compact('cart', 'products', 'seoPage'));
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $data['view'] = 'n';
            $data['ip'] = (new UtilObjeto)->ip();
            $data['session_id'] = $request->session()->getId();

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $budget = $this->repository->create($data);

            $this->saveProducts($budget->id);
            $this->sendMail($budget);

            //limpa a session
            Session::forget('cart');

            return response()->json([
                'success' => true,
                'message' => 'Orçamento enviado com sucesso!'
            ]);

        } catch (ValidatorException $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessageBag()
            ]);
        }
    }

    public function saveProducts($budget_id)
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        if (isset($cart->items)) {
            foreach ($cart->items as $row) {
                foreach ($row as $product) {
                    $dataProduct['budget_id'] = $budget_id;
                    $dataProduct['product_id'] = $product['item']['id'];
                    $dataProduct['quantity'] = $product['qty'];
                    $dataProduct['technical_id'] = isset($product['technical_id']) ? $product['technical_id'] : null;
                    $dataProduct['total'] = trataCampoValor($product['item']['price'] * $product['qty']);

                    $this->budgetProductValidator->with($dataProduct)->passesOrFail(ValidatorInterface::RULE_CREATE);
                    $orderProduct = $this->budgetProductRepository->create($dataProduct);
                }
            }
        }

        return true;
    }

    public function sendMail($dados)
    {
        $form = Form::find(3);

        //email admin
        if ($form->emails) {
            $emails = [];
            foreach ($form->emails as $row) {
                $emails[] = $row->email;
            }
            Mail::to($emails)->send(new BudgetMail($dados));
        }

        //email client
        return Mail::to($dados)->send(new BudgetClientMail($dados, $form));
    }

    public function addProduto(Request $request, $product_id)
    {
        $product = $this->productRepository->find($product_id);
        if ($product) {
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($product, $product->id, 1);

            $request->session()->put('cart', $cart);

            return redirect()->route('budget');
            /*
            return response()->json([
                'success' => true,
                'message' => 'Produto adicionado com sucesso!'
            ]);
            */
        } else {
            return redirect()->route('budget');
            /*
            return response()->json([
                'error' => true,
                'message' => ['Erro ao adicionar produto ao carrinho']
            ]);
            */
        }
    }

    public function addProdutoPost(Request $request, $product_id)
    {
        $product = $this->productRepository->find($product_id);
        if ($product) {

            $data = $request->all();
            $data['technical_id'] = isset($data['technical_id']) ? $data['technical_id'] : null;
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($product, $product->id, $data['quantity'], $data['technical_id']);

            $request->session()->put('cart', $cart);

            return redirect()->route('budget');
        } else {
            return redirect()->route('budget');
        }
    }

    public function getAddByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        //dd($oldCart);
        $cart = new Cart($oldCart);
        $cart->addByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('budget');
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return response()->json([
            'success' => true,
            'message' => 'Produto removido com sucesso!'
        ]);
    }

    public function updateCart()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $products = $cart->items;
        $totalPrice = $cart->totalPrice;

        return view('site.budget.cart', compact('products', 'totalPrice', 'cart'));
    }

    public function updateCartTop()
    {
        return view('site.layouts.cart-header');
    }

}
