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
        include("tablemanufactures.php")    
    ?>

    <form action="plustablemanufactures.php" method="post">
        <label>Ім'я компанії</label><input name="name_company" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
