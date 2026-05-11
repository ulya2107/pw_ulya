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

//menampilkan Data dalam tabel

<table border="1">
    <tr>
        <th>id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

<?php
$sql = "SELECT * FROM user";
$query = mysqli_query ($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['username']}</td>
    <td>{$row['password']}</td>
    <td>{$row['nama']}</td>
    <td>{$row['email']}</td>
    <td><a href='materi4.php?hapus={$row['id']}'>Hapus</a> | <a href=?edit={$row['id']}>Edit</a></td>
    </tr>";
}
//proses hapus
if(isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $sql = "DELETE FROM user WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Data berhasil dihapus";
    } else {
        echo "Data gagal dihapus";
    }
}
?>
</table>

//proses edit
<?php
if (isset($_GET["edit"])) {
    $id = $_GET["edit"];
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    echo "<form method='POST'>
    Username : <input type=' text' name='username' value='{$row['username']}'>
    Password : <input type=' password' name=' password' value='{$row['password']}'>
    Nama : <input type=' text' name=' nama' value='{$row['nama']}'>
    Email : <input type=' email' name=' email' value='{$row['email']}'>
    <input type='submit' value='Edit Data' name='edit'>
    </form>";
}

if (isset($_POST['edit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql ="UPDATE user SET username = '$username', password = '$password', nama = '$nama', email = '$email' WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data Berhasil Diupdate";
    } else {
        echo "Data Gagal Diupdate";
    }
}
?>