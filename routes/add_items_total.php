<?php
$app->get('/cart/add_item_price', function() use ($app) {
    $cart = $_SESSION['cart'];

    foreach ($cart as $item)
    {
        $item[0] = $product_id;
        $item[1] = $qty;

        $product = Product::find($product_id);

        $item_price = $product->getPrice();

        $price = $item_price * $qty;
    }
    return $price;

    return $app['twig']->render('cart.html.twig', array('line_item_price' => $price));

});




 ?>
