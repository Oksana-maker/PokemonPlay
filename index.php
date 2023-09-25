<?php 
    $today = date('l d.m.Y');// declared here using a function
    $SEPARATOR = ";";
    $option = $_REQUEST['option']??"Unknown";
    $vorname = $_REQUEST['vorname']??"Unknown";
    $name = $_REQUEST['name']??"Unknown";
    $email = $_REQUEST['email']??"Unknown";
    $line = "$vorname $SEPARATOR $name $SEPARATOR $email $SEPARATOR $option $SEPARATOR $today";
    file_put_contents("log.csv", $line.PHP_EOL, FILE_APPEND);
    setcookie("myName",$name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 
<title>Покемон Игра - Заставка</title>
  
  <
<style>
   

    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
      background-image: url('background_image.jpg'); /* Замените на свой фоновый рисунок */
      background-size: cover;
      background-position: center;
      font-family: Arial, sans-serif;
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .splash-screen {
      text-align: center;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 10px;
    }

    .splash-screen img {
      width: 350px; /* Размер изображения покемона */
    }

    .splash-screen h1 {
      font-size: 2em;
      margin-top: 20px;
    }

    .advertisement {
      margin-top: 30px;
      font-size: 1.2em;
    }
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
  <div class="splash-screen">
    <img src="pokemon.jpg" alt="Логотип Покемон">
<h1>
Welcome to the world of Pokemon!</h1>
<div class="advertisement">
      <p>Play and become the best Pokemon trainer!</p>
<p>Unlock new Pokemon and win battles!</p>
    </div>
     <div class="button-container">
                <a href="autentification.php"><input type="submit" value="Registration"></a>
                <a href="table.php"><input type="submit" value="Login"></a>
            </div>
  </div>
 
</body>

</html>



<!-- <!DOCTYPE html>
<html>
    <head>
        <style>
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
        <h1>Student</h1>
         <p>
               <h3>Student:</h3><code><?php echo( $name );?>  <?php echo( $vorname );?></code><h3>Email:</h3><code><?php echo($email);?></code><h3>Course:</h3><code><?php echo($option);?> <br/><?php echo( $today);?></code> 
            </p>
            <div class="button-container">
                <a href="autentification.php"><input type="submit" value="New Student"></a>
                <a href="table.php"><input type="submit" value="Go to table"></a>
            </div>
    </body>
</html> -->