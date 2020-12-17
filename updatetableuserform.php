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
        include("tableuser.php")    
    ?>

<form action="updatetableuser.php" method="post">
        <label>ІД рядка який змінюємо</label><br><input name="id" type="int"><br>
        <label>Нове значення П.І.Б</label><br><input name="pib" type="text"><br>
		<label>Нове значення Банковської карти</label><br><input name="bank_card" type="int"><br>
		<label>Нове значення Дати народження</label><br><input name="date_of_birthday" type="date"><br>
		<label>Нове значення Навчального закладу</label><br><input name="educational_institution" type="text">
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>