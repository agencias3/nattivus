<?php
$total = 0;
$oldCart = \Illuminate\Support\Facades\Session::get('cart');
$cart = new \AgenciaS3\Services\Cart($oldCart);
if ($cart->items) {
    $total = count($cart->items);
}
?>
({{ $total }}) itens