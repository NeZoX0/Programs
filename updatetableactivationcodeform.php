<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("tableactivationcode.php")    
    ?>

<form action="updatetableactivationcode.php" method="post">
        <label>Код рядка який змінюємо</label><input name="code" type="int"><br>
        <label>Нове значення Ім'я програми</label><input name="name_program" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>