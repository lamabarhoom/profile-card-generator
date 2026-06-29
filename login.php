<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = htmlspecialchars($_POST['username']);
    if (!empty($user)) {
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial; text-align: center; padding-top: 100px; background: #f4f4f4; }
        form { display: inline-block; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 0 10px #ccc; }
        input { display: block; width: 250px; margin-bottom: 20px; padding: 10px; border: 1px solid #ddd; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <form method="POST">
        <h2>تسجيل الدخول</h2>
        <input type="text" name="username" placeholder="أدخل اسمك هنا" required>
        <button type="submit">دخول</button>
    </form>
</body>
</html>