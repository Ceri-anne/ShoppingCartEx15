<?php 
include 'cart_db.php';
include 'cart_additem.php';
include 'cart_validate.php';


const TEMPLATE_EXTENSION = '.phtml';
const TEMPLATE_FOLDER = 'templates/';
const TEMPLATE_PREFIX = 'cart_view_';

function display($template, $variables, $extension = TEMPLATE_EXTENSION) {
    
	extract($variables);
	
	ob_start();
	include TEMPLATE_FOLDER . TEMPLATE_PREFIX . $template . $extension;
	return ob_get_clean();
}
?>

<!doctype html>
<html>
<head><title>Shopping Cart</title></head>
<body>

<h1>Shopping Cart</h1>

<?php echo display('user', ['users' => $users, 'cart' => $cart]); ?>
<?php echo display('item', ['new_item' => $new_item]); ?>
<?php echo display('items', ['cart' => $cart]); ?>

<h1>All Users</h1>
<?php foreach($users as $username => $user) {
	printf("<li>%s</li>\n", $username);
}
?> 

</body>
</html>
