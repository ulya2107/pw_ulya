<?php
function hello()
{
    echo "Selamat Datang di Kelas TIA1";
}
hello();

function tambah(int $a, int $b){
    $hasil = $a + $b;
    return $hasil;
}
echo "<br><br>";
echo tambah(12, 8);

function kali(int $a, int $b){
    $hasil = $a * $b;
    return $hasil;
}

function bagi(int $a, int $b){
    $hasil = $a / $b;
    return $hasil;
}

function kurang(int $a, int $b){
    $hasil = $a - $b;
    return $hasil;
}
?>

<form method= "POST">
    Maskukkan Angka 1 : <input type="number" name="angka1">
    Maskukkan Angka 2 : <input type="number" name="angka2">
    <input type="submit" name="kirim" value="kirim">
</form>

<?php
if (isset($_POST["angka1"])){
    $newAngka1 = $_POST["angka1"];
    $newAngka2 = $_POST["angka2"];
    echo tambah($newAngka1, $newAngka2);
    echo "<br>";
    echo kali($newAngka1, $newAngka2);
    echo "<br>";
    echo bagi($newAngka1, $newAngka2);
    echo "<br>";
    echo kurang($newAngka1, $newAngka2);
}


function login(string $username, string $password){
    $usernamebenar = "admin";
    $passwordbenar = "12345";
    if($username == $usernamebenar && $password == $passwordbenar) {
        return true;
    }else {
        return False;
    }
}
?>

<form method= "POST">
    <label for = "username">Username:</label>
    <input type = "text" name = "username"><br><br>
    <label for = "password">Password:</label>
    <input type = "password" name = "password"><br><br>
    <input type = "submit" name = "login" value = "login">
</form>

<?php
if (isset($_POST["login"])){
    $newUsername = $_POST["username"];
    $newPassword = $_POST["password"];
    if (login ($newUsername, $newPassword)){
        echo "Login Berhasil";
    }else {
        echo "Login Gagal";
    }
}
?>