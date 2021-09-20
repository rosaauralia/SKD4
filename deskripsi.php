<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tutu.css">
</head>
<body>
    <form action="" method="POST">
       <div class="container">
        <input type="text" name="input" class="submit">
        <input type="submit" value="Deskripsi" class="submit">
   <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
       deskripsi();
    }
    function deskripsi(){
        $input=$_POST["input"];

        $key = array(
            'r' => 'j', 'o' => 'c', 's' => 'd', 'a' => 'a', 'u' => 'm', 'l' => 'z', 'i' => 't', 
            'R' => 'J', 'O' => 'C', 'S' => 'D', 'A' => 'A', 'U' => 'M', 'L' => 'Z', 'I' => 'T',
        );

        $deskripsi = str_replace(array_keys($key), $key, $input);

        echo "Kata yang deskripsi adalah ", $deskripsi;

        echo "<br><br>";
        echo "Hasil deskripsi adalah ", $input;
        }
   ?>
       </div>
    </form>
</body>
</html>