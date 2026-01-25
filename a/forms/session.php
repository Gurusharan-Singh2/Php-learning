<?php 
session_start();
?>



<form method="post">
    <input type="text" name="name" placeholder="Enter Your Name">
    <br><br>

    <button type="submit" name="button" value="set">Set</button>
    <br><br>

    <button type="submit" name="button" value="get">Display</button>
    <br><br>

    <button type="submit" name="button" value="delete">Remove</button>
</form>


<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['button'] === 'set' && $_POST['name']) {

        $name = $_POST['name'] ?? '';
        $_SESSION['user']=$name;
       echo "Session  is set";

    } elseif ($_POST['button'] === 'get') {

        if (isset($_SESSION['user'])) {
           echo "Your session is: " . $_SESSION['user'];
        } else {
            echo "Session not found";
        }

    } elseif ($_POST['button'] === 'delete') {

       session_destroy();
        echo "Cookie is removed";
    }
}
?>
