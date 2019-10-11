<?php

use AgenciaS3\Entities\Form;
use AgenciaS3\Mail\Site\Contact\PartnerClientMail;
use AgenciaS3\Mail\Site\Contact\PartnerMail;
use Illuminate\Support\Facades\Mail;

include('admin.php');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//LANDING PAGE / CAMPANHA
Route::group(['prefix' => 'campanha', 'as' => 'landing-page.', 'namespace' => 'LandingPage'], function () {
    Route::get('/', 'LandingPageController@index')->name('index');
    Route::get('/{seo_link}', 'LandingPageController@show')->name('show');
    Route::post('/store', 'LandingPageContactController@store')->name('store');
});

Route::group(['namespace' => 'Site'], function () {
    Route::get('/sitemap.xml', 'SiteMapController@index')->name('sitemap');

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/quem-somos', 'AboutController@index')->name('about');

    Route::get('/categoria', 'CategoryController@index')->name('category');
    Route::get('/categoria/{category}', 'CategoryController@show')->name('category.show');
    Route::get('/categoria/{category}/{category_sub}', 'CategoryController@subCategory')->name('category.sub_category');

    Route::get('/produtos', 'ProductController@index')->name('products');
    Route::get('/produto/{seo_link}', 'ProductController@show')->name('product');

    Route::get('/orcamento', 'BudgetController@index')->name('budget');
    Route::post('/orcamento/store', 'BudgetController@store')->name('budget.store');
    Route::get('/orcamento/addProduto/{id}/{qty?}/{technical_id?}', 'BudgetController@addProduto')->name('budget.addProduct');
    Route::post('/orcamento/addProdutoPost/{id}', 'BudgetController@addProdutoPost')->name('budget.addProductPost');
    Route::get('/orcamento/getAddByOne/{product_id}', 'BudgetController@getAddByOne')->name('getAddByOne');
    Route::get('/orcamento/getReduceByOne/{product_id}', 'BudgetController@getReduceByOne')->name('getReduceByOne');
    Route::get('/orcamento/getRemoveItem/{product_id}', 'BudgetController@getRemoveItem')->name('getRemoveItem');
    Route::get('/orcamento/updateCart', 'BudgetController@updateCart')->name('updateCart');
    Route::get('/orcamento/updateCartTop', 'BudgetController@updateCartTop')->name('updateCartTop');

    Route::get('/cases', 'BlogController@index')->name('blog');
    Route::get('/cases/tag/{tag}', 'BlogController@tag')->name('blog.tag');
    Route::get('/cases/{seo_link}', 'BlogController@show')->name('blog.show');

    Route::get('/contato', 'ContactController@index')->name('contact');
    Route::post('/contato/store', 'ContactController@store')->name('contact.store');

    Route::get('/trabalhe-conosco', 'WorkController@index')->name('work');
    Route::post('/trabalhe-conosco/store', 'WorkController@store')->name('work.store');

    Route::post('/newsletter/store', 'NewsletterController@store')->name('newsletter.store');

    Route::group(['namespace' => 'Ajax', 'prefix' => 'ajax', 'as' => 'ajax.'], function () {
        Route::get('/getAddress/{zip_code}', 'AddressController@getAddress')->name('address.getAddress');
    });

    /*
    Route::get('/test-email', function(){
        $dados = \AgenciaS3\Entities\TechnicalAssistance::find(64);
        $form = Form::with('emails')->find(4);

        //email admin
        if ($form->emails) {
            $emails = [];
            foreach ($form->emails as $row) {
                $emails[] = $row->email;
            }
            Mail::to($emails)->send(new \AgenciaS3\Mail\Site\TechnicalAssistance\TechnicalAssistanceMail($dados));
        }

        //email client
        return Mail::to($dados)->send(new \AgenciaS3\Mail\Site\TechnicalAssistance\TechnicalAssistanceClientMail($dados, $form));
    });
    */

});
