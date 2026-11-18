<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cek Nilai Mahasiswa</title>
</head>

<body>
    <h2>Form input Nilai Mahasiswa</h2>
    <!-- Perbaikan: method="get", penambahan name="nilai", dan perbaikan "submit" -->
    <form method="get" action="">
    <label>Nama Mahasiswa</label>     
    <input type="text" name="nama" required><br><br>

    <label>matkul</label>
    <select name="pelajaran">
        <option value="pemweb">Pemweb</option>
        <option value="so">SO</option>
    </select>  
    <br><br>
    
    <label>NILAI UTS (0-100) :</label><br>
    <input type="number" name="nilai" required><br><br>

    <input type="submit" value="cek hasil">
    </form>

    <?php
    if (isset($_GET['nama'])){
     
    //definisikan
    $nama = $_GET['nama'];
    $pelajaran = $_GET['pelajaran'];
    $nilai = $_GET['nilai'];

    //Logika if else
    if ($nilai >= 60){
        $status = "lulus!";
    } else {
        $status = "Tidak lulus.";
    }
    
    //cetak
    echo "<h3>Hasil Evaluasi Nilai Mahasiswa</h3>";
    echo "<p>Nama Mahasiswa : " . $nama . "</p>";
    echo "<p>Pelajaran : " . $pelajaran . "</p>";
    echo "<p>Nilai Mahasiswa : " . $nilai . "</p>";
    echo "<p>Status : ". $status . "</p>";
    }
    ?> <!-- Perbaikan: Tag penutup PHP ditambahkan di sini -->
</body>
</html>