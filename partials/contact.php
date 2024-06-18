<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com"; // آدرس ایمیل خود را وارد کنید
    $subject = "پیام جدید از $name";
    $body = "نام: $name\nایمیل: $email\nپیام:\n$message";

    if (mail($to, $subject, $body)) {
        echo "پیام با موفقیت ارسال شد.";
    } else {
        echo "خطا در ارسال پیام.";
    }
}
?>
