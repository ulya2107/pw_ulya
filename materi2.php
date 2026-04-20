<form method = "POST">
    Masukkan Angka : <input type="number" name="angka">
    <input type="submit" nama="kirim" value="kirim">
</form>

<?php
    if (isset($_POST["angka"])){
        $newAngka = $_POST["angka"];
        for ($i=1; $i <= $newAngka; $i++) {
            echo "Ini angka $i <br>";
        }

    }

?>