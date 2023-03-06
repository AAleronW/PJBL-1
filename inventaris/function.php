<?php
$conn = mysqli_connect("localhost","root","","inventaris");
// Tampil data
function query($query){

    global $conn;

    $result= mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}






// Input data
function tambah($data){
    $kode =htmlspecialchars($data["kode_barang"]);
    $nama =htmlspecialchars($data["nama_barang"]);
    $no_reg=htmlspecialchars($data["no_registrasi"]);
    $merek=htmlspecialchars($data["merk_type"]);
    $ukuran =htmlspecialchars($data["ukuran"]);
    $bahan =htmlspecialchars($data["bahan"]);
    $tahun =htmlspecialchars($data["tahun_pembelian"]);
    $asal =htmlspecialchars($data["asal_usul"]);
    $harga= htmlspecialchars($data["harga"]); 
    $ket =htmlspecialchars($data["keterangan"]);
    $lok =htmlspecialchars($data["lokasi_barang"]);
    $jmlh =htmlspecialchars($data["jumlah_barang"]);
    
    
    global $conn;
    


$query = "INSERT INTO barang VALUES ('$kode','$nama','$no_reg','$merek','$ukuran','$bahan','$tahun','$asal','$harga','$ket','$lok','$jmlh','')";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}
function hapus($kd){
    global $conn;
    mysqli_query($conn,"DELETE FROM barang WHERE kode_barang =$kd");
    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;

    $kode =htmlspecialchars($data["kode_barang"]);
    $nama =htmlspecialchars($data["nama_barang"]);
    $no_reg=htmlspecialchars($data["no_registrasi"]);
    $merek=htmlspecialchars($data["merk_type"]);
    $ukuran =htmlspecialchars($data["ukuran"]);
    $bahan =htmlspecialchars($data["bahan"]);
    $tahun =htmlspecialchars($data["tahun_pembelian"]);
    $asal =htmlspecialchars($data["asal_usul"]);
    $harga= htmlspecialchars($data["harga"]); 
    $ket =htmlspecialchars($data["keterangan"]);
    $lok =htmlspecialchars($data["lokasi_barang"]);
    $jmlh =htmlspecialchars($data["jumlah_barang"]);
    
    
    global $conn;
    


$query = "UPDATE barang SET 
        kode_barang = '$kode',
        nama_barang = '$nama',
        no_reg = '$no_reg',
        merk_type = '$merek',
        ukuran = '$ukuran',
        bahan = '$bahan',
        tahun_pembelian = '$tahun',
        asal_usul = '$asal',
        harga = '$harga',
        keterangan = '$ket',
        lokasi_barang = '$lok',
        jumlah_barang = '$jmlh'
        WHERE kode_barang = $kode";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);






}


function cari($keyword){
    $query = "SELECT * FROM barang WHERE 
    kode_barang LIKE '%$keyword%' OR
    nama_barang LIKE '%$keyword%' OR
    no_reg      LIKE '%$keyword%' OR
    merk_type   LIKE '%$keyword%' OR
    ukuran      LIKE '%$keyword%' OR
    bahan       LIKE '%$keyword%' OR
    tahun_pembelian LIKE '%$keyword' OR
    asal_usul      LIKE '%$keyword%' OR
    harga       LIKE '%$keyword%' OR
    keterangan       LIKE '%$keyword%' OR
    lokasi_barang      LIKE '%$keyword%' OR
    jumlah_barang       LIKE '%$keyword%' 

    ";
    return query($query);

}

function search($keyword){
    $query = "SELECT * FROM barang WHERE 
    nama_barang LIKE '%$keyword%' OR
    no_reg      LIKE '%$keyword%' 

    ";
    return query($query);

}


?>