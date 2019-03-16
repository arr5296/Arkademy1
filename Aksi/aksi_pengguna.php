<?php
//include 'koneksi/koneksi.php';
class user{

	public $id;
	public $email;
	public $password;
        
        //untuk data user
	public function ubah_user() {
		$pass= md5($this->password);
		$sql = "UPDATE Users set Email = '$this->email', Password= '$pass' where Id = '$this->id'";
		$proses = mysql_query($sql);
			if ($proses) {
				echo "<script>alert('Pengubahan data Pengguna berhasil di Ubah !')</script>";
                echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=pengguna'>";
                //echo $sql;
			} else { 
				echo "<script>alert('Pengubahan data Pengguna tidak berhasil !')</script>";
				echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=pengguna'>";
                  //              echo $sql;
			}
		}
                
         public function TambahUser() {
		    $pass= md5($this->password);
            $time = date('Y-m-d H:m:s');

			$sql = "INSERT INTO users(Id,Email,Password,Creat_at) VALUES ('$this->id','$this->email','$pass','$time')";
		
			$proses = mysql_query($sql);
		
			if ($proses) 
			{
				echo "<script>alert('Data Pengguna berhasil di simpan !!')</script>";
                             echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=pengguna'>";
                            //echo "INSERT INTO users(Id,Email,Password,Creat_at) VALUES ('$this->id','$this->email','$pass','$time')";
			} else {			
				echo "<script>alert('Data belum dapat di simpan !! ')</script>";
				echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=tambah_pengguna'>";
                                //echo "INSERT INTO lowongan_kerja(id_lk,id_perusahaan,jenis_pekerjaan,persyaratan,keterangan,tgl) VALUES ('$this->id_lk','$this->id_perusahaan','$this->jenis_pekerjaan','$this->persyaratan','$this->tgl')";
			}
		}
         
        
	public function HapusUser($id) {
		$sql = "DELETE from Users where Id ='$id'";
                
		$proses = mysql_query($sql);
                
		if ($proses ) {
			echo "<script>alert('Penghapusan data Pengguna berhasil !')</script>";
			echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=pengguna'>";
		} else { 
			echo "<script>alert('Penghapusan data Pengguna tidak berhasil !')</script>";
			echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=pengguna'>";
		}
	}      
        
}       



$dbbuke  = new user();

$dbbuke->id = $_POST['Id'];
$dbbuke->email = $_POST['Email'];
$dbbuke->password = $_POST['Password'];


$aksi = $_GET['index'];
if ($aksi == "user-simpan"){
 	$dbbuke->ubah_user();
} 
else if ($aksi == "TambahUser"){ 	
 	$dbbuke->TambahUser();	
}
else if ($aksi == "HapusUser"){ 	
 	$dbbuke->HapusUser($_GET[Id]);	
} 
else if ($aksi == "UbahUser"){
 	$dbbuke->ubah_user();
} 



?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

