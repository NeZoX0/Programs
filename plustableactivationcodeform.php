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

    <form action="plustableactivationcode.php" method="post">
        <label>Код</label><input name="code" type="int"><br>
        <label>Ім'я програми</label><input name="name_program" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
