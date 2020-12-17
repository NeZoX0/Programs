<?php

$mysqli = new mysqli('localhost', 'root', '', 'proga'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$login = $pib = $_POST['pib']; $bank_card = $_POST['bank_card']; $date_of_birthday = $_POST['date_of_birthday']; $educational_institution = $_POST['educational_institution'];

$sql = "INSERT INTO user (pib, bank_card, date_of_birthday, educational_institution) VALUES ('$pib', '$bank_card', '$date_of_birthday', '$educational_institution')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("tableuser.php")
?>
