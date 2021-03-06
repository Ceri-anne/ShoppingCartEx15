<?php
namespace Cart\App;

use function Cart\Db\create_item;
use function Cart\Db\read_item_name;
use function Cart\Db\save_cart;

//CART APPLICATION

$new_id = create_item($cart, [
	'name' => 'HTC m8',
	'price' => 500
]);

$new_item = read_item_name($cart, 'HTC m8');

save_cart($cart);