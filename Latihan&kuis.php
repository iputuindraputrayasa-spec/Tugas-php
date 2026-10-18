
<?php

// LATIHAN: BIODATA MAHASISWA
// ========================================
    echo "<h4>BIODATA MAHASISWA</h4>";

        $nim = "250030546";
        $nama = "Putu Indra";
        $kodeJurusan = "SI";
        $angkatan = 2025;
        $umur = 19;
        $gender = "Laki-laki";
        $hobi = array("mengutak atik mesin dan barang elektronik", "gaming");
    

        echo "NIM: $nim<br>";
        echo "Nama: $nama<br>";
        echo "Kode Jurusan: $kodeJurusan<br>";
        echo "Angkatan: $angkatan<br>";
        echo "Umur: $umur<br>";
        echo "Gender: $gender<br>";
        echo "Hobi: " . implode(", ", $hobi) . "<br>";

    echo "<hr>";
// ========================================    
// LATIHAN: OPERATOR ARITMATIKA
// ========================================
    echo "<h4>OPERATOR ARITMATIKA</h4>";

        $x= 15;
        $y = 4;

        echo "Nilai x: $x<br>";
        echo "Nilai y: $y<br><br>";

        echo "Penjumlahan: " . ($x + $y) . "<br>";
        echo "Pengurangan: " . ($x - $y) . "<br>";
        echo "Perkalian: " . ($x * $y) . "<br>";
        echo "Pembagian: " . ($x / $y) . "<br>";
        echo "Modulus: " . ($x % $y) . "<br>";
        echo "Pangkat: " . ($x ** $y) . "<br>";

    echo "<hr>";
// ========================================
// LATIHAN: OPERATOR PERBANDINGAN
// ========================================
    echo "<h4>OPERATOR PERBANDINGAN</h4>";

    
        $x = 10;
        $y = "10";

        echo "Nilai sama: ";
        var_export($x == $y);
        echo "<br>";

        echo "Nilai identik: ";
        var_export($x === $y);
        echo "<br>";

        echo "Lebih besar: ";
        var_export($x > $y);
        echo "<br>";

        echo "Lebih kecil: ";
        var_export($x < $y);
        echo "<br>";

    echo "<hr>";
// ========================================
// LATIHAN 1: Menentukan Grade Nilai Mahasiswa
// ========================================
        $nama = "Putu Indra";
        $nilai = 85;

        echo "<h4>MENENTUKAN GRADE NILAI</h4>";
        echo "Nama Mahasiswa: $nama <br>";
        echo "Nilai: $nilai <br>";

        if ($nilai >= 90) {
            $grade = "A";
        } elseif ($nilai >= 80) {
            $grade = "B";
        } elseif ($nilai >= 70) {
            $grade = "C";
        } elseif ($nilai >= 60) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        echo "Grade: $grade";


    echo "<hr>";
// ========================================
// LATIHAN 2: BILANGAN GENAP DAN GANJIL
// ======================================== 
    echo "<h4>BILANGAN GENAP DAN GANJIL</h4>";

        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "$i = Genap <br>";
            } else {
                echo "$i = Ganjil <br>";
            }
        }

     echo "<hr>";
// ======================================== 
// LATIHAN 3: ARRAY NAMA MAHASISWA
// ========================================
        $mahasiswa = [
            "Indra",
            "Andi",
            "Budi",
            "Citra",
            "Dika"
        ];

    echo "<h4>DAFTAR NAMA MAHASISWA</h4>";

    $nomor = 1;

        foreach ($mahasiswa as $nama) {
            echo "$nomor. $nama <br>";
            $nomor++;
        }

    echo "<hr>";
// ========================================
// KUIS 1: ANGKA YANG HABIS DIBAGI 3 
// ========================================
    echo "<h4>KUIS 1: ANGKA YANG HABIS DIBAGI 3</h4>";

        for ($i = 1; $i <= 20; $i++) {
            if ($i % 3 == 0) {
                echo "$i <br>";
            }
        }

    echo "<hr>";
// ========================================
// LATIHAN 1: MENGHITUNG LUAS LINGKARAN
// ========================================
    echo "<h4>FUNCTION LUAS LINGKARAN  </h4>";

        function hitungLuasLingkaran($jari) {
            $luas = 3.14 * $jari * $jari;
            return $luas;
        }

        $jari = 7;
        $luas = hitungLuasLingkaran($jari);

        echo "Luas lingkaran dengan jari-jari $jari adalah $luas";

    echo "<hr>";
// ========================================
// KUIS 2: FUNCTION AKHIR NILAI AKHIR MAHASISWA 
// ========================================

    echo "<h4>KUIS 2: FUNCTION NILAI AKHIR MAHASISWA</h4>";

        function hitungNilaiAkhir($tugas, $uts, $uas) {
            $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
            return $nilaiAkhir;
        }

        $tugas = 80;
        $uts = 80;
        $uas = 87.5;

        $nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);

        if ($nilaiAkhir >= 70) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
        echo "Status: " . $status;




    
?>
