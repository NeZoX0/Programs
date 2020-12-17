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
        include("tableuser.php")    
    ?>

    <form action="plustableuser.php" method="post">
        <label>П.І.Б</label><input name="pib" type="text"><br>
		<label>Банковська карта</label><input name="bank_card" type="int"><br>
		<label>Дата народження</label><input name="date_of_birthday" type="date"><br>
		<label>Місце навчання</label><input name="educational_institution" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
