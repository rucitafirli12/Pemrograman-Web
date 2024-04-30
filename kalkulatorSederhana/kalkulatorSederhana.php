<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="style.css">

<?php
    if(isset($_POST['hitung'])) {
        if($_POST['operator'] == '+') {
            $hasil = $_POST['angka1'] + $_POST['angka2'];
        } elseif($_POST['operator'] == '-') {
            $hasil = $_POST['angka1'] - $_POST['angka2'];
        } elseif($_POST['operator'] == '*') {
            $hasil = $_POST['angka1'] * $_POST['angka2'];
        } else {
            $hasil = $_POST['angka1'] / $_POST['angka2'];
        }
    } else {
        $hasil = 0;
    }
?>

</head>
<body>
    <div class="content">
        <h1 class="title">Kalkulator Sederhana</h1>
        <form action="kalkulatorSederhana.php" method="POST" name="kalkulator">
            <input type="text" name="angka1" class="input">
            <select name="operator" class="operator">
                <option value="+"> + </option>
                <option value="-"> - </option>
                <option value="*"> * </option>
                <option value="/"> / </option>
            </select>
            <input type="text" name="angka2" class="input">
            <button type="submit" name="hitung" class="hitung">Hitung</button>
            <h2>Hasil : <?php echo $hasil; ?></h2>
        </form>
    </div>
        
</body>
</html>