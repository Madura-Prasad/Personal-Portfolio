<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $noWa = $_POST['noWa'];
    $message = $_POST['message'];

    header("location:https://api.whatsapp.com/send?phone=$noWa&text=Name:%20$name         %Email:%20$email          %20Subject:%20$subject          %20Message:%20$message");
} else {
    echo "
    <script>
    window.location=history.go(-1);
    </script>
    ";
}

?>
