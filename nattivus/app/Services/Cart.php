<?php

namespace AgenciaS3\Services;


class Cart
{

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id, $qty = null, $technical_id = null)
    {

        $priceItem = $item->price;

        //check product exists
        $existProd = false;
        $countProd = 0;
        $storedItem = ['qty' => 0, 'price' => $priceItem, 'item' => $item];
        if ($this->items) {
            foreach ($this->items as $key => $products) {
                if (!empty($products)) {
                    foreach ($products as $idProd => $product) {
                        if ($idProd == $id) {
                            $existProd = true;
                            $countProd = $key;
                            $qty += $product['qty'];
                        }
                    }
                }
            }
        }

        if ($qty) {
            $storedItem['qty'] = $qty;
        } else {
            $storedItem['qty']++;
        }

        if ($technical_id) {
            $storedItem['technical_id'] = $technical_id;
        } else {
            $storedItem['technical_id'] = null;
        }

        $storedItem['price'] = $priceItem * $storedItem['qty'];

        if ($existProd) {
            $count = $countProd;
        } else {
            $count = isset($this->items) ? count($this->items) : 0;
        }

        $this->items[$count][$id] = $storedItem;
        $this->totalQty++;
        //$this->totalPrice += $storedItem['price'];
        $this->totalPrice = $this->calcTotal();
    }

    public function calcTotal()
    {
        $totalPrice = 0;
        foreach ($this->items as $product) {
            if ($product) {
                foreach ($product as $key => $item) {
                    $priceItem = $item['item']['price'];
                    $totalPrice += $priceItem * $item['qty'];
                }
            }
        }

        return $totalPrice;
    }

    public function addByOne($id)
    {
        //dd($this->items[$id]);
        $product = current($this->items[$id]);
        //dd('asdas');
        $idProd = key($this->items[$id]);

        $this->items[$id][$idProd]['qty']++;
        $this->totalQty++;

        $this->items[$id][$idProd]['price'] += $this->items[$id][$idProd]['item']['price'];
        $this->totalPrice += $this->items[$id][$idProd]['item']['price'];

        if ($this->items[$id][$idProd]['qty'] <= 0) {
            unset($this->items[$id][$idProd]);
        }
    }

    public function reduceByOne($id)
    {
        $product = current($this->items[$id]);
        $idProd = key($this->items[$id]);

        $this->items[$id][$idProd]['qty']--;
        $this->totalQty--;

        $this->items[$id][$idProd]['price'] -= $this->items[$id][$idProd]['item']['price'];
        $this->totalPrice -= $this->items[$id][$idProd]['item']['price'];

        if ($this->items[$id][$idProd]['qty'] <= 0) {
            unset($this->items[$id][$idProd]);
        }
    }

    public function removeItem($id)
    {
        $product = current($this->items[$id]);
        $idProd = key($this->items[$id]);

        $this->totalQty -= $product['qty'];
        $this->totalPrice -= $product['item']['price'];

        unset($this->items[$id]);
    }

}