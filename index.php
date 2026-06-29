
<?php
session_start();
require_once 'User.php';

$students = [
    new User("أحمد علي", "مطور ويب PHP", "online"),
    new User("سارة حسن", "مصممة واجهات", "online"),
    new User("عمر خالد", "طالب متدرب", "offline"),
];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>مشروع البرمجة المطور - OOP</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f0f2f5; text-align: center; margin: 0; }
        nav { background: #007bff; padding: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        .container { display: flex; justify-content: center; gap: 25px; margin-top: 50px; flex-wrap: wrap; }
        .card { background: white; padding: 25px; border-radius: 15px; width: 240px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); transition: transform 0.3s; }
        .card:hover { transform: translateY(-10px); }
        .status-online { color: #28a745; font-weight: bold; }
        .status-offline { color: #dc3545; font-weight: bold; }
        h1 { margin-top: 30px; color: #333; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">الرئيسية</a>
        <a href="contact.php">تواصل معنا</a>
        <?php if(isset($_SESSION['user'])): ?>
            <span style="color: #fff200;">| مرحباً يا كابتن: <?= $_SESSION['user'] ?></span>
            <a href="logout.php" style="font-size: 0.8em; color: #ffcccc;">(خروج)</a>
        <?php else: ?>
            <a href="login.php">تسجيل دخول</a>
        <?php endif; ?>
    </nav>

    <h1>فريق العمل (نظام OOP)</h1>

    <div class="container">
        <?php foreach($students as $s): ?>
            <div class="card">
                <!-- الوصول للبيانات عن طريق الخصائص (Properties) -->
                <h3><?= $s->name ?></h3>
                <p style="color: #666;"><?= $s->role ?></p>
                <!-- استخدام ميثود الكلاس لجلب الحالة (Method) -->
                <p class="<?= $s->getStatusClass() ?>">
                    <?= $s->getStatusText() ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>