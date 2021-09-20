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
        <input type="submit" value="Enkripsi" class="submit">
   <?php
    if($_SERVER['REQUEST_METHOD']=='POST') // digunakan untuk mengirim file yang dipilih untuk diunggah ke lokasi target server. Untuk mengirim data dengan cara seperti itu melalui pengiriman form HTML, kita perlu menentukan metode form sebagai POST. Setelah mengubah metode form, diperlukan untuk menggunakan $ _POST global di dalam bagian PHP dari contoh di samping, untuk menampilkan data yang diposting ke browser.
    {
       enkripsi();  // untuk mengamankan data
    }
    function enkripsi(){ // informasi ini dapat diteruskan ke fungsi melalui argumen yang sama seperti variabel.  argumen sendiri dapat ditentukan setelah nama fungsi.
        $input=$_POST["input"];

        $key = array( // Array adalah variabel khusus, yang dapat menampung lebih dari satu nilai pada satu waktu.
            'r' => 'j', 'o' => 'c', 's' => 'd', 'a' => 'a', 'u' => 'm', 'l' => 'z', 'i' => 't', 
            'R' => 'J', 'O' => 'C', 'S' => 'D', 'A' => 'A', 'U' => 'M', 'L' => 'Z', 'I' => 'T',
        );

        $enkripsi = str_replace(array_keys($key), $key, $input);

        echo "Kata yang di enkripsi adalah ", $input; //echo mengambil beberapa parameter, echo sendiri lebih cepat daripada print

        echo "<br><br>";
        echo "hasil enkripsi adalah ", $enkripsi;
        }
   ?>
       </div>
    </form>
</body>
</html>

