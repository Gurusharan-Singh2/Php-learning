<?php
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['button'] === 'set' && $_POST['name']) {

        $name = $_POST['name'] ?? '';
        setcookie('user', $name, time() + 3600, '/');
        $message = "Cookie is set";

    } elseif ($_POST['button'] === 'get') {

        if (isset($_COOKIE['user'])) {
            $message = "Your cookie is: " . $_COOKIE['user'];
        } else {
            $message = "Cookie not found";
        }

    } elseif ($_POST['button'] === 'delete') {

        setcookie('user', '', time() - 3600, '/');
        $message = "Cookie is removed";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>

<?php if ($message): ?>
    <p><strong><?php echo $message; ?></strong></p>
<?php endif; ?>

<form method="post">
    <input type="text" name="name" placeholder="Enter Your Name">
    <br><br>

    <button type="submit" name="button" value="set">Set</button>
    <br><br>

    <button type="submit" name="button" value="get">Display</button>
    <br><br>

    <button type="submit" name="button" value="delete">Remove</button>
</form>

</body>
</html>
