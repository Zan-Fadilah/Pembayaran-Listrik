<?php
// Koneksi ke database MySQL
$konek = mysqli_connect('localhost', 'root', '', 'listrik');

/**
 * Menjalankan query SQL
 * @param string $sql Query SQL yang akan dijalankan
 * @return mysqli_result Hasil dari query
 */
function query($sql) {
    global $konek;
    $query = mysqli_query($konek, $sql);
    return $query;
}

/**
 * Mengubah hasil query menjadi array asosiatif
 * @param mysqli_result $query Hasil dari query
 * @return array|null Array hasil query, atau null jika tidak ada
 */
function jadiArray($query) {
    $hasil = mysqli_fetch_array($query);
    return $hasil;
}

/**
 * Menghitung jumlah baris dari hasil query
 * @param mysqli_result $query Hasil dari query
 * @return int Jumlah baris data
 */
function hitungBaris($query) {
    $cek = mysqli_num_rows($query);
    return $cek;
}

/**
 * Menghitung jumlah data pada tabel 'tbtarif'
 * @return int Jumlah baris data pada tabel tbtarif
 */
function hitungBarisTarif() {
    global $konek;
    $sql = "SELECT * FROM tbtarif";
    $query = mysqli_query($konek, $sql);
    $hitung = mysqli_num_rows($query);
    return $hitung;
}

/**
 * Menghitung jumlah data pada tabel 'tbtagihan'
 * @return int Jumlah baris data pada tabel tbtagihan
 */
function hitungBarisTagihan() {
    global $konek;
    $sql = "SELECT * FROM tbtagihan";
    $query = mysqli_query($konek, $sql);
    $hitung = mysqli_num_rows($query);
    return $hitung;
}

/**
 * Menghitung jumlah data pada tabel 'tbpelanggan'
 * @return int Jumlah baris data pada tabel tbpelanggan
 */
function hitungBarisPelanggan() {
    global $konek;
    $sql = "SELECT * FROM tbpelanggan";
    $query = mysqli_query($konek, $sql);
    $hitung = mysqli_num_rows($query);
    return $hitung;
}

/**
 * Menghitung jumlah petugas (Level bukan 'Pelanggan') pada tabel 'tblogin'
 * @return int Jumlah baris data petugas
 */
function hitungBarisPetugas() {
    global $konek;
    $sql = "SELECT * FROM tblogin WHERE Level <> 'Pelanggan'";
    $query = mysqli_query($konek, $sql);
    $hitung = mysqli_num_rows($query);
    return $hitung;
}

/**
 * Menghitung jumlah data pada tabel 'tbpembayaran'
 * @return int Jumlah baris data pada tabel tbpembayaran
 */
function hitungBarisPembayaran() {
    global $konek;
    $sql = "SELECT * FROM tbpembayaran";
    $query = mysqli_query($konek, $sql);
    $hitung = mysqli_num_rows($query);
    return $hitung;
}
?>
