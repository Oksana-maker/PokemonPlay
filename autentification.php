<?php
if(isset($_COOKIE['myName'])){
    $myName = $_COOKIE['myName'];
}else{
    $myName = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Form</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    text-align: center;
    margin: 0;
    padding: 0;
}

.container {
    width: 300px;
    margin: 0 auto;
    background-color: #fff;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
#container-autentification{
  width: 80%;
  margin: 15px;
}

h1 {
    margin: 0;
    font-size: 24px;
    color: 504b4b;
}

h3 {
    font-size: 18px;
    color: #504b4b;
    margin-bottom:0px ;
    padding-bottom:0px ;
    margin-left:15px ;
    text-align: left;
}


/* Стили для формы и элементов ввода */
form {
    text-align: left;
}
#container-autentification label {
    display: block;
    margin-top: 25px;
    margin-bottom: 2px;
    font-weight: bold;
    color: #504b4b;
}
label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #504b4b;
}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 2px solid #ccc;
    border-radius: 5px;
}

input[type="radio"] {
    margin-top: 5px;
}

/* Стили для радиокнопок */
input[type="radio"] + label {
    margin-left: 5px;
}

/* Скрытие стандартных радиокнопок */
input[type="radio"] {
    display: none;
}
.radio-container {
    display: block;
    position: relative;
    padding-left: 30px;
    margin-bottom: 10px;
    cursor: pointer;
    font-size: 16px;
    margin-left:15px ;
    text-align: left;
}

.radio-container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee; /* Цвет фона радиокнопки */
    border: 1px solid #ccc; /* Граница радиокнопки */
    border-radius: 50%; /* Закругление углов, чтобы создать круглую форму */
}

.radio-container:hover input ~ .checkmark {
    background-color: #ccc; /* Изменение цвета фона при наведении на контейнер */
}

.radio-container input:checked ~ .checkmark {
    background-color: #3498db; /* Цвет фона радиокнопки при выборе */
    border: 1px solid #2980b9; /* Граница радиокнопки при выборе */
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.radio-container input:checked ~ .checkmark:after {
    display: block;
}

.radio-container .checkmark:after {
    top: 6px;
    left: 6px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}
/* Стили для кнопок */
.button-container {
    margin-top: 20px;
    margin-left:15px ;
    text-align: left;
}

input[type="submit"],
input[type="reset"] {
    background-color: #ccc;
    color: #504b4b bold;
    padding: 10px ;
    border: 2px #777474 solid;
    cursor: pointer;
    border-radius: 5px;
    margin-right: 10px;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
    background-color: #949191;
}
    </style>
</head>
<body>
    <form action="index.php">
    <div class="container">
        <h1>My Form</h1>
        <div id="container-autentification">
        <form action="#" method="post">
            <label for="vorname">Vorname:</label>
            <input type="text" id="vorname" name="vorname" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
       
            <h3>Meine kurs:</h3>

    <label class="radio-container">Passerelle
        <input type="radio" id="passerelle" value="Passerelle" name="option" />
        <span class="checkmark"></span>
    </label>

    <label class="radio-container">Bakkalaureus
        <input type="radio" id="bakkalaureus" value="Bakkalaureus" name="option" />
        <span class="checkmark"></span>
    </label>
            
            <div class="button-container">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</form>
</body>
</html>
