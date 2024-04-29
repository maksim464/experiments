<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "primakmaksim464@gmail.com";
    $subject = "Новий відгук на вашому сайті";
    $message = "Ім'я: " . $_POST['firstName'] . "\n";
    $message .= "Прізвище: " . $_POST['lastName'] . "\n";
    $message .= "Відгук: " . $_POST['feedback'] . "\n";
    
    // Встановлюємо заголовки для правильної кодування
    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
    $headers .= "From: Your Website <noreply@yourwebsite.com>\r\n";
    
    // Відправляємо електронний лист
    mail($to, $subject, $message, $headers);
    
    // Перенаправлення назад на головну сторінку після відправки форми
    header("Location: index.html");
    exit;
}
?>
