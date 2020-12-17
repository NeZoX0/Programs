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
        include("tableprogram.php")    
    ?>

    <form action="plustableprogram.php" method="post">
        <label>Ім'я</label><input name="name" type="text"><br>
		<label>Опис</label><input name="opys" type="int"><br>
		<label>Розмір</label><input name="size" type="float"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
