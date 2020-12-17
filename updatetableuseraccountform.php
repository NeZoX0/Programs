<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Оновлення даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("tableuseraccount.php")    
    ?>

<form action="updatetableuseraccount.php" method="post">
        <label>Логін рядка який змінюємо</label><input name="login" type="text"><br>
        <label>Нове значення Паролю</label><br><input name="password" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>