<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $satisfaction = htmlspecialchars($_POST['satisfaction']);
    $comments = htmlspecialchars($_POST['comments']);

    $to = "your-email@example.com"; 
    $subject = "نظرسنجی جدید";
    $body = "رضایت: $satisfaction\nنظرات:\n$comments";

    if (mail($to, $subject, $body)) {
        echo "نظرسنجی با موفقیت ارسال شد.";
    } else {
        echo "خطا در ارسال نظرسنجی.";
    }
}
?>