<?php
class LaporanKelulusanMahasiswaItenas
{
    public function mahasiswaItenas(
        $namadepan,
        $namabelakang,
        $email,
        $notelp,
        $pembukaan = "LAPORAN KELULUSAN TAHUN 2022"
    ) {
        echo $pembukaan . "<br>";
        echo "Nama Depan: " . $namadepan . "<br>Nama Belakang: " . $namabelakang . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Nomor Telepon: " . $notelp . "<br>";
    }

    public function nrpMahasiswa($nrp)
    {
        echo "NRP: " . $nrp . "<br>";
        $tahun = substr($nrp, 2, 4);
        echo "Angkatan: " . $tahun . "<br>";
        return $tahun;
    }

    public function jurusanMahasiswa($namaJurusan)
    {
        $fakultas = '';

        echo "Jurusan: " . $namaJurusan . "<br>";

        switch ($namaJurusan) {
            case "Teknik Arsitektur":
            case "Teknik Sipil":
            case "Teknik Geodesi":
            case "Teknik Planologi":
            case "Teknik Lingkungan":
                $fakultas = "Fakultas Teknik Sipil dan Perencanaan";
                break;
            case "Desain Interior":
            case "Desain Produk":
            case "Desain Komunikasi Visual":
                $fakultas = "Fakultas Seni Rupa dan Desain";
                break;
            case "Teknik Elektro":
            case "Teknik Mesin":
            case "Teknik Industri":
            case "Teknik Kimia":
            case "Teknik Informatika":
            case "Sistem Informasi":
                $fakultas = "Fakultas Teknologi Industri";
                break;
            default:
                $fakultas = "Fakultas anak tere";
                break;
        }

        return $fakultas;
    }

    public function dosenWaliMahasiswa($tahun)
    {
        echo "Dosen Wali: ";
        switch ($tahun) {
            case "2018":
                echo "Asep Nana";
                echo "<br>";
                break;
            case "2017":
                echo "Jasman Pardede";
                echo "<br>";
                break;
            case "2016":
                echo "Dewi Roosmala";
                echo "<br>";
                break;
            case "2015":
                echo "Galih Ashari";
                echo "<br>";
                break;
            case "2014":
                echo "Youllia Indrawaty";
                echo "<br>";
                break;
            case "2013":
                echo "Uung Ungkawa";
                echo "<br>";
                break;
            case "2012":
                echo "Lisa Kristiana";
                echo "<br>";
                break;
            case "2011":
                echo "Yusup Miftahuddin";
                echo "<br>";
                break;
            default:
                echo "Dosen Wali Sudah mengundurkan diri (ngalengit)";
                echo "<br>";
                break;
        }
    }

    public function gelarMahasiswa($fakultas)
    {
        switch ($fakultas) {
            case "Fakultas Seni Rupa dan Desain":
                echo "Gelar: S.Ds";
                echo "<br>";
                break;
            case "Fakultas Teknologi Industri":
                echo "Gelar: S.T";
                echo "<br>";
                break;
            case "Fakultas Teknik Sipil dan Perencanaan":
                echo "Gelar: S. T";
                echo "<br>";
                break;
            default:

                break;
        }
    }

    public function lamaKuliah($i)
    {
        echo "Lama Kuliah : ";
        $mecah = substr($i, 2, 4);
        for ($mecah; $mecah <= 22; $mecah++) {
            switch ($mecah) {
                case 11:
                    $hasil = 22 - $mecah;
                    echo $hasil . "tahun, donatur tetap fix<br>";
                    break;
                case 12:
                    $hasil = 22 - $mecah;
                    echo $hasil . "tahun, nggs poho meren dosen pembimbingna <br>";
                    break;
                case 13:
                    $hasil = 22 - $mecah;
                    echo $hasil . "tahun, aman barudak? <br>";
                    break;
                case 14:
                    $hasil = 22 - $mecah;
                    echo $hasil . "tahun, wellkeunn <br>";
                    break;
                case 15:
                    $hasil = 22 - $mecah;
                    echo $hasil . "tahun, hampir terdegradasi <br>";
                    break;
                case 16:
                    $hasil = 22 - $mecah;
                    echo $hasil . "tahun, korban covid <br>";
                    break;
                case 17:
                    $hasil = 22 - $mecah;
                    echo $hasil . "tahun<br>";
                    break;
                case 18:
                    $hasil = 22 - $mecah;
                    echo $hasil . "tahun, alhamdulillah <br>";
                    break;
                default:

                    break;
            }
        }
    }

    public function laporanKehadiranSemester1($totHadir1)
    {
        if ($totHadir1 === 96) {
            echo "Kehadiran Semester 1 Sempurna";
            echo "<br>";
        } elseif ($totHadir1 >= 80 && $totHadir1 < 96) {
            echo "Kehadiran Semester 1 Baik";
            echo "<br>";
        } elseif ($totHadir1 >= 60 && $totHadir1 < 80) {
            echo "Kehadiran Semester 1 Kurang";
            echo "<br>";
        } elseif ($totHadir1 >= 30 && $totHadir1 < 60) {
            echo "Kehadiran Semester 1 Tidak Baik";
            echo "<br>";
        } elseif ($totHadir1 >= 0 && $totHadir1 < 30) {
            echo "Lebar duit jang Kuliah bro";
            echo "<br>";
        }

        return $totHadir1;
    }

    public function laporanKehadiranSemester2($totHadir2)
    {
        if ($totHadir2 === 96) {
            echo "Kehadiran Semester 2 Sempurna";
            echo "<br>";
        } elseif ($totHadir2 >= 80 && $totHadir2 < 96) {
            echo "Kehadiran Semester 2 Baik";
            echo "<br>";
        } elseif ($totHadir2 >= 60 && $totHadir2 < 80) {
            echo "Kehadiran Semester 2 Kurang";
            echo "<br>";
        } elseif ($totHadir2 >= 30 && $totHadir2 < 60) {
            echo "Kehadiran Semester 2 Tidak Baik";
            echo "<br>";
        } elseif ($totHadir2 >= 0 && $totHadir2 < 30) {
            echo "Lebar duit jang Kuliah bray";
            echo "<br>";
        }

        return $totHadir2;
    }

    public function laporanKehadiranSemester3($totHadir3)
    {
        if ($totHadir3 === 96) {
            echo "Kehadiran Semester 3 Sempurna";
            echo "<br>";
        } elseif ($totHadir3 >= 80 && $totHadir3 < 96) {
            echo "Kehadiran Semester 3 Baik";
            echo "<br>";
        } elseif ($totHadir3 >= 60 && $totHadir3 < 80) {
            echo "Kehadiran Semester 3 Kurang";
            echo "<br>";
        } elseif ($totHadir3 >= 30 && $totHadir3 < 60) {
            echo "Kehadiran Semester 3 Tidak Baik";
            echo "<br>";
        } elseif ($totHadir3 >= 0 && $totHadir3 < 30) {
            echo "Lebar duit jang Kuliah broe";
            echo "<br>";
        }

        return $totHadir3;
    }

    public function laporanKehadiranSemester4($totHadir4)
    {
        if ($totHadir4 === 96) {
            echo "Kehadiran Semester 4 Sempurna";
            echo "<br>";
        } elseif ($totHadir4 >= 80 && $totHadir4 < 96) {
            echo "Kehadiran Semester 4 Baik";
            echo "<br>";
        } elseif ($totHadir4 >= 60 && $totHadir4 < 80) {
            echo "Kehadiran Semester 4 Kurang";
            echo "<br>";
        } elseif ($totHadir4 >= 30 && $totHadir4 < 60) {
            echo "Kehadiran Semester 4 Tidak Baik";
            echo "<br>";
        } elseif ($totHadir4 >= 0 && $totHadir4 < 30) {
            echo "Lebar duit jang Kuliah duh";
            echo "<br>";
        }

        return $totHadir4;
    }

    public function laporanKehadiranSemester5($totHadir5)
    {
        if ($totHadir5 === 96) {
            echo "Kehadiran Semester 5 Sempurna";
            echo "<br>";
        } elseif ($totHadir5 >= 80 && $totHadir5 < 96) {
            echo "Kehadiran Semester 5 Baik";
            echo "<br>";
        } elseif ($totHadir5 >= 60 && $totHadir5 < 80) {
            echo "Kehadiran Semester 5 Kurang";
            echo "<br>";
        } elseif ($totHadir5 >= 30 && $totHadir5 < 60) {
            echo "Kehadiran Semester 5 Tidak Baik";
            echo "<br>";
        } elseif ($totHadir5 >= 0 && $totHadir5 < 30) {
            echo "Lebar duit jang Kuliah euyy";
            echo "<br>";
        }

        return $totHadir5;
    }

    public function laporanKehadiranSemester6($totHadir6)
    {
        if ($totHadir6 === 96) {
            echo "Kehadiran Semester 6 Sempurna";
            echo "<br>";
        } elseif ($totHadir6 >= 80 && $totHadir6 < 96) {
            echo "Kehadiran Semester 6 Baik";
            echo "<br>";
        } elseif ($totHadir6 >= 60 && $totHadir6 < 80) {
            echo "Kehadiran Semester 6 Kurang";
            echo "<br>";
        } elseif ($totHadir6 >= 30 && $totHadir6 < 60) {
            echo "Kehadiran Semester 6 Tidak Baik";
            echo "<br>";
        } elseif ($totHadir6 >= 0 && $totHadir6 < 30) {
            echo "Lebar duitna";
            echo "<br>";
        }

        return $totHadir6;
    }

    public function laporanKehadiranSemester7($totHadir7)
    {
        if ($totHadir7 === 96) {
            echo "Kehadiran Semester 7 Sempurna";
            echo "<br>";
        } elseif ($totHadir7 >= 80 && $totHadir7 < 96) {
            echo "Kehadiran Semester 7 Baik";
            echo "<br>";
        } elseif ($totHadir7 >= 60 && $totHadir7 < 80) {
            echo "Kehadiran Semester 7 Kurang";
            echo "<br>";
        } elseif ($totHadir7 >= 30 && $totHadir7 < 60) {
            echo "Kehadiran Semester 7 Tidak Baik";
            echo "<br>";
        } elseif ($totHadir7 >= 0 && $totHadir7 < 30) {
            echo "ari maneh cager meakkeun duit";
            echo "<br>";
        }

        return $totHadir7;
    }

    public function laporanKehadiranSemester8($totHadir8)
    {
        if ($totHadir8 === 96) {
            echo "Kehadiran Semester 8 Sempurna";
            echo "<br>";
        } elseif ($totHadir8 >= 80 && $totHadir8 < 96) {
            echo "Kehadiran Semester 8 Baik";
            echo "<br>";
        } elseif ($totHadir8 >= 60 && $totHadir8 < 80) {
            echo "Kehadiran Semester 8 Kurang";
            echo "<br>";
        } elseif ($totHadir8 >= 30 && $totHadir8 < 60) {
            echo "Kehadiran Semester 8 Tidak Baik";
            echo "<br>";
        } elseif ($totHadir8 >= 0 && $totHadir8 < 30) {
            echo "Lebar duit";
            echo "<br>";
        }
        echo "Untuk Kehadiran Semester 8 tidak terhitung karena sudah end game<br>";
        return $totHadir8;
    }

    public function totalHadirHinggaLulus(
        $totHadir1,
        $totHadir2,
        $totHadir3,
        $totHadir4,
        $totHadir5,
        $totHadir6,
        $totHadir7
    ) {
        $laporanKehadiranALL =
            $totHadir1 +
            $totHadir2 +
            $totHadir3 +
            $totHadir4 +
            $totHadir5 +
            $totHadir6 +
            $totHadir7;
        echo "Total Kehadiran Hingga Lulus : " . $laporanKehadiranALL . " ";
        if ($laporanKehadiranALL == 672) {
            echo "Kehadiran Sempurna";
            echo "<br>";
        } elseif ($laporanKehadiranALL >= 500 && $laporanKehadiranALL < 671) {
            echo "Kehadiran Baik";
            echo "<br>";
        } else {
            echo "ari mane cager?";
            echo "<br>";
        }
    }
}
class LaporanNilaiMahasiswaItenas
{

    public function laporanNilaiSemester1($sksDiambilSem1, $sksLulusSem1)
    {
        echo "<br>";
        echo "Sks Diambil Semester 1= " . $sksDiambilSem1 . "<br>";
        echo "Sks Lulus Semester 1= " . $sksLulusSem1 . "<br>";
        if ($sksDiambilSem1 != $sksLulusSem1) {
            echo "Sebaiknya betulkan dulu nilai semester 1 nya" . "<br>";
        }
        return $sksDiambilSem1;
    }

    public function laporanNilaiSemester2($sksDiambilSem2, $sksLulusSem2)
    {
        echo "<br>";
        echo "Sks Diambil Semester 2= " . $sksDiambilSem2 . "<br>";
        echo "Sks Lulus Semester 2= " . $sksLulusSem2 . "<br>";
        if ($sksDiambilSem2 != $sksLulusSem2) {
            echo "Sebaiknya betulkan dulu nilai semester 2 nya" . "<br>";
        }
        return $sksDiambilSem2;
    }

    public function laporanNilaiSemester3($sksDiambilSem3, $sksLulusSem3)
    {
        echo "<br>";
        echo "Sks Diambil Semester 3= " . $sksDiambilSem3 . "<br>";
        echo "Sks Lulus Semester 3= " . $sksLulusSem3 . "<br>";
        if ($sksDiambilSem3 != $sksLulusSem3) {
            echo "Sebaiknya betulkan dulu nilai semester 3 nya" . "<br>";
        }
        return $sksDiambilSem3;
    }

    public function laporanNilaiSemester4($sksDiambilSem4, $sksLulusSem4)
    {
        echo "<br>";
        echo "Sks Diambil Semester 4= " . $sksDiambilSem4 . "<br>";
        echo "Sks Lulus Semester 4= " . $sksLulusSem4 . "<br>";
        if ($sksDiambilSem4 != $sksLulusSem4) {
            echo "Sebaiknya betulkan dulu nilai semester 4 nya" . "<br>";
        }
        return $sksDiambilSem4;
    }

    public function laporanNilaiSemester5($sksDiambilSem5, $sksLulusSem5)
    {
        echo "<br>";
        echo "Sks Diambil Semester 5= " . $sksDiambilSem5 . "<br>";
        echo "Sks Lulus Semester 5= " . $sksLulusSem5 . "<br>";
        if ($sksDiambilSem5 != $sksLulusSem5) {
            echo "Sebaiknya betulkan dulu nilai semester 5 nya" . "<br>";
        }
        return $sksDiambilSem5;
    }

    public function laporanNilaiSemester6($sksDiambilSem6, $sksLulusSem6)
    {
        echo "<br>";
        echo "Sks Diambil Semester 6= " . $sksDiambilSem6 . "<br>";
        echo "Sks Lulus Semester 6= " . $sksLulusSem6 . "<br>";
        if ($sksDiambilSem6 != $sksLulusSem6) {
            echo "Sebaiknya betulkan dulu nilai semester 6 nya" . "<br>";
        }
        return $sksDiambilSem6;
    }

    public function laporanNilaiSemester7($sksDiambilSem7, $sksLulusSem7)
    {
        echo "<br>";
        echo "Sks Diambil Semester 7= " . $sksDiambilSem7 . "<br>";
        echo "Sks Lulus Semester 7= " . $sksLulusSem7 . "<br>";
        if ($sksDiambilSem7 != $sksLulusSem7) {
            echo "Sebaiknya betulkan dulu nilai semester 7 nya" . "<br>";
        }
        return $sksDiambilSem7;
    }

    public function laporanNilaiSemester8($sksDiambilSem8, $sksLulusSem8)
    {
        echo "<br>";
        echo "Sks Diambil Semester 8= " . $sksDiambilSem8 . "<br>";
        echo "Sks Lulus Semester 8= " . $sksLulusSem8 . "<br>";
        if ($sksDiambilSem8 != $sksLulusSem8) {
            echo "Sebaiknya betulkan dulu nilai semester 8 nya" . "<br>";
        }
        return $sksDiambilSem8;
    }
}
class LaporanKeuanganMahasiswaItenas
{
    public function keuanganSemester1($uktB1, $sksB1, $sks1)
    {
        $jumlahSks1 = $sksB1 * $sks1;
        $totalsem1 = $uktB1 + $jumlahSks1;
        echo "Biaya Semester 1 = Rp." . $totalsem1;
        echo "<br>";
        return $totalsem1;
    }

    public function keuanganSemester2($uktB2, $sksB2, $sks2)
    {
        $jumlahSks2 = $sksB2 * $sks2;
        $totalsem2 = $uktB2 + $jumlahSks2;
        echo "Biaya Semester 2 = Rp." . $totalsem2;
        echo "<br>";
        return $totalsem2;
    }

    public function keuanganSemester3($uktB3, $sksB3, $sks3)
    {
        $jumlahSks3 = $sksB3 * $sks3;
        $totalsem3 = $uktB3 + $jumlahSks3;
        echo "Biaya Semester 3 = Rp." . $totalsem3;
        echo "<br>";
        return $totalsem3;
    }

    public function keuanganSemester4($uktB4, $sksB4, $sks4)
    {
        $jumlahSks4 = $sksB4 * $sks4;
        $totalsem4 = $uktB4 + $jumlahSks4;
        echo "Biaya Semester 4 = Rp." . $totalsem4;
        echo "<br>";
        return $totalsem4;
    }

    public function keuanganSemester5($uktB5, $sksB5, $sks5)
    {
        $jumlahSks5 = $sksB5 * $sks5;
        $totalsem5 = $uktB5 + $jumlahSks5;
        echo "Biaya Semester 5 = Rp." . $totalsem5;
        echo "<br>";
        return $totalsem5;
    }

    public function keuanganSemester6($uktB6, $sksB6, $sks6)
    {
        $jumlahSks6 = $sksB6 * $sks6;
        $totalsem6 = $uktB6 + $jumlahSks6;
        echo "Biaya Semester 6 = Rp." . $totalsem6;
        echo "<br>";
        return $totalsem6;
    }

    public function keuanganSemester7($uktB7, $sksB7, $sks7)
    {
        $jumlahSks7 = $sksB7 * $sks7;
        $totalsem7 = $uktB7 + $jumlahSks7;
        echo "Biaya Semester 7 = Rp." . $totalsem7;
        echo "<br>";
        return $totalsem7;
    }

    public function keuanganSemester8($uktB8, $sksB8, $sks8)
    {
        $jumlahSks8 = $sksB8 * $sks8;
        $totalsem8 = $uktB8 + $jumlahSks8;
        echo "Biaya Semester 8 = Rp." . $totalsem8;
        echo "<br>";
        return $totalsem8;
    }

    public function totalBayarSelamaKuliah(
        $tot1,
        $tot2,
        $tot3,
        $tot4,
        $tot5,
        $tot6,
        $tot7
    ) {
        $bayareunTotal =
            $tot1 +
            $tot2 +
            $tot3 +
            $tot4 +
            $tot5 +
            $tot6 +
            $tot7 + 2000000;
        echo "Total Bayar Selama Kuliah = Rp." . $bayareunTotal;
    }
}

$out = new LaporanKelulusanMahasiswaItenas();
$out->mahasiswaItenas("Andika Fauzi", "Hadiana", "doneka54@mhs.itenas.ac.id", "085156215489");
$tahun = $out->nrpMahasiswa(152018019);
$fakultas = $out->jurusanMahasiswa("Teknik Informatika");
$out->gelarMahasiswa($fakultas);
$out->dosenWaliMahasiswa($tahun);
$out->lamaKuliah($tahun);
$totHadir1 = $out->laporanKehadiranSemester1(96);
$totHadir2 = $out->laporanKehadiranSemester2(60);
$totHadir3 = $out->laporanKehadiranSemester3(80);
$totHadir4 = $out->laporanKehadiranSemester4(92);
$totHadir5 = $out->laporanKehadiranSemester5(30);
$totHadir6 = $out->laporanKehadiranSemester6(89);
$totHadir7 = $out->laporanKehadiranSemester7(76);
$totHadir8 = $out->laporanKehadiranSemester8(96);
$out->totalHadirHinggaLulus(
    $totHadir1,
    $totHadir2,
    $totHadir3,
    $totHadir4,
    $totHadir5,
    $totHadir6,
    $totHadir7,
    $totHadir8
);
$out = new LaporanNilaiMahasiswaItenas();
$sks1 = $out->laporanNilaiSemester1(20, 18);
$sks2 = $out->laporanNilaiSemester2(20, 20);
$sks3 = $out->laporanNilaiSemester3(20, 17);
$sks4 = $out->laporanNilaiSemester4(20, 20);
$sks5 = $out->laporanNilaiSemester5(20, 18);
$sks6 = $out->laporanNilaiSemester6(20, 18);
$sks7 = $out->laporanNilaiSemester7(20, 18);
$sks8 = $out->laporanNilaiSemester8(6, 6);
$out = new laporanKeuanganMahasiswaItenas();
$tot1 = $out->keuanganSemester1(2000000, 200000, $sks1);
$tot2 = $out->keuanganSemester2(2000000, 200000, $sks2);
$tot3 = $out->keuanganSemester3(2000000, 200000, $sks3);
$tot4 = $out->keuanganSemester4(2000000, 200000, $sks4);
$tot5 = $out->keuanganSemester5(2000000, 200000, $sks5);
$tot6 = $out->keuanganSemester6(2000000, 200000, $sks6);
$tot7 = $out->keuanganSemester7(2000000, 200000, $sks7);
$out->totalBayarSelamaKuliah(
    $tot1,
    $tot2,
    $tot3,
    $tot4,
    $tot5,
    $tot6,
    $tot7
);
