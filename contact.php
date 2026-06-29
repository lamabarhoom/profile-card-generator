<?php
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // تطهير البيانات (Sanitization)
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "شكراً يا $name، تم استلام رسالتك!";
    } else {
        $msg = "يرجى التأكد من البيانات.";
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial; text-align: center; padding-top: 50px; }
        form { display: inline-block; background: white; padding: 30px; border: 1px solid #ccc; border-radius: 10px; }
        input { display: block; width: 250px; margin-bottom: 10px; padding: 8px; }
        button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <form method="POST">
        <h2>تواصل معنا</h2>
        <p><?= $msg ?></p>
        <input type="text" name="name" placeholder="الاسم" required>
        <input type="email" name="email" placeholder="الإيميل" required>
        <button type="submit">إرسال</button>
        <br><br>
        <a href="index.php">رجوع للرئيسية</a>
    </form>
</body>
</html>