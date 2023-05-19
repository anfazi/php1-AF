<?php
$data = <<<'EOD'
X, -9\\\10\100\-5\\\0\\\\, A
Y, \\13\\1\, B
Z, \\\5\\\-3\\2\\\800, C
EOD;
// Tujuan : Mengolah data menjadi format teks dan mengubahnya menjadi struktur data yang sesuai dari soal

$a = explode("\n", $data); //Fungsi untuk memisahkan $data berformat string menjadi array yang berdasarkan karakter baris baru
$output = array(); //sebagai variabel penyimpanan data dari hasil pengolahan
// print_r($a);

foreach ($a as $baris) { // Perulangan untuk setiap data($a) dalam array $baris
    $perBaris = array_map('trim', explode(',', $baris));  //Memecahkan atau memisahkan array menggunakan fungsi explode dan array_map digunakan untuk memanggil fungsi trip. Tujuan baris ini untuk menghapus spasi

    $barisPertama = $perBaris[0]; //Memasukkan nilai pertama di variabel tersebut
    $barisKedua = preg_replace('/\\\\+/', ',', $perBaris[1]); //mengganti (/\\\\) menjadi koma menggunakan fungsi preg_place 
    $barisKetiga = $perBaris[2]; //Memasukkan nilai ketiga di variabel tersebut

    $values = explode(',', $barisKedua); //setelah diubah nilai $barisKedua, nilai tersebut dipecah menjadi array menggunakan fungsi explode
    sort($values, SORT_ASC); //sorting hasil nilai dengan format ASCENDING

    $begin = 1; //Inisialisasi dengan isi nomor 1 untuk menghitung nomor urut
    foreach ($values as $value) {
        if (is_numeric($value)) { //mengecek nilai tersebut apaah berformat angka (is_numeric)
            $output[] = $barisPertama . ', ' . $value . ', ' . $barisKetiga . ', ' . $begin; //Jika $value adalah angka, maka baris yang terdiri dari $barisPertama nilai $value $barisKetiga dan $begin ditambahkan ke array $output 
            $begin++; //dan selanjutnya nilai $begin ditambah +1 hingga 10 langkah sesuai data EOD
        } else {
            // echo"false";
        }
    }
}

usort($output, function ($a, $b) { //usort untuk mengurutkan array $output
    $nilaiPertama = intval(explode(',', $a)[1]); //Fungsi komparasi $a dan $b dipisahkan menjadi array menggunakan fungsi explode dan nilai kedua array diambil menggunakan fungsi intval
    $nilaiKedua = intval(explode(',', $b)[1]);

    return ($nilaiPertama < $nilaiKedua) ? -1 : 1; //mengembalikai nilai negatif jika nilai $nilaiPertama kurang dari $nilaiKedua, begitu sebaliknya
});

foreach ($output as $baris) { //setelah diurutkan, perulangan digunakan untukprint setiap baris dalam array $output dan dipisahkan oleh </br>
    echo $baris . "</br>";
}
