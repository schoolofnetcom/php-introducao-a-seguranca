<?php

session_start();

$token = $_SESSION['token'] ?? sha1(uniqid());
$_SESSION['token'] = $token;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['_token'] !== $_SESSION['token']) {
        throw new Exception('Token inválido');
        die();
    }
    var_dump($_POST);
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/csrf.php" method="POST">
        <input type="hidden" name="_token" value="<?php echo $token; ?>">
        <input type="text" name="nome">
        <input type="submit">
    </form>
</body>
</html>
