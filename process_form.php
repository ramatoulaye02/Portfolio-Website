if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "balde.rama@outlook.com";
    $headers = "From: $email\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: thank_you.html");
    exit();
}