<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP switch-case Statement</title>
</head>
<body>

<?php
/* niekedy je if_statement nevýhodný
namiesto veľakrát opakovanému if_statementu:   */
$role = 'subscriber';
$message = '';

if ('admin' === $role) {
	$message = 'Welcome, admin!';
} elseif ('editor' === $role) {
	$message = 'Welcome! You have some pending articles to edit';
} elseif ('author' === $role) {
	$message = 'Welcome! Do you want to publish the draft article?';
} elseif ('subscriber' === $role) {
	$message = 'Welcome! Check out some new articles.';
} else {
	$message = 'Sorry! You are not authorized to access this page';
}

echo $message;
echo '<br>';

/* použijeme switch statement - menej písania 
asi aj rýchlejšie, lebo keď nájde odpoveď, už nepokračuje ďalej */

$role = 'admin';
$message = '';

switch ($role) {
	case 'admin':
		$message = 'Welcome, admin!';
		break;
	case 'editor':
		$message = 'Welcome! You have some pending articles to edit';
		break;
	case 'author':
		$message = 'Welcome! Do you want to publish the draft article?';
		break;
	case 'subscriber':
		$message = 'Welcome! Check out some new articles.';
		break;
	default:
		$message = 'You are not authorized to access this page';
}

echo $message;




?>

</body>
</html>