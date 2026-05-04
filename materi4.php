<?php
include 'koneksi.php';
if(isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (username, password, nama, email) VALUES ('$username', '$password', '$nama', '$email')";
    $query = mysqli_query($conn, $sql);
    
    if ($query) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan";
    }
}
?>

<form method = "POST">
    Username : <input type= "text" name= "username">
    Password : <input type= "password" name= "password">
    Nama : <input type= "text" name= "nama">
    Email : <input type= "email" name= "email">
    <input type= "submit" value= "Kirim Data" name= "kirim">
</form>
