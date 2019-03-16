<?php
//include 'koneksi/koneksi.php';
class person{

	public $id;
	public $nama;
    public $Regions_id;
    public $Address;
    public $Income;

        //untuk data user
	public function ubah_person() {

		$sql = "UPDATE person set nama = '$this->nama', Regions_id= '$this->Regions_id', Address='$this->Address', Income='$this->Income' where Id = '$this->id'";
		$proses = mysql_query($sql);
			if ($proses) {
				echo "<script>alert('Pengubahan data Pengguna berhasil di Ubah !')</script>";
                echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=person'>";
                //echo $sql;
			} else { 
				echo "<script>alert('Pengubahan data Pengguna tidak berhasil !')</script>";
				echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=person'>";
                  //              echo $sql;
			}
		}
                
         public function TambahPerson() {
		   
            $time = date('Y-m-d H:m:s');
           
			$sql = "INSERT INTO person(Id,nama,Regions_id,Address, Income,Created_at) VALUES ('$this->id','$this->nama','$this->Regions_id','$this->Address','$this->Income','$time')";
		
			$proses = mysql_query($sql);
		
			if ($proses) 
			{
				echo "<script>alert('Data Pengguna berhasil di simpan !!')</script>";
                            echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=person'>";
                            //echo "INSERT INTO users(Id,Email,Password,Creat_at) VALUES ('$this->id','$this->email','$pass','$time')";
			} else {			
				echo "<script>alert('Data belum dapat di simpan !! ')</script>";
               // echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=person&do=TambahPerson'>";
                
                            echo "INSERT INTO person(Id,nama,Regions_id,Address, Income,Created_at) VALUES ('$this->id','$this->nama','$this->Address','$this->Income','$time')";
			}
		}
	public function HapusPerson($id) {
		$sql = "DELETE from person where Id ='$id'";
                
		$proses = mysql_query($sql);
                
		if ($proses ) {
			echo "<script>alert('Penghapusan data Pengguna berhasil !')</script>";
			echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=person'>";
		} else { 
			echo "<script>alert('Penghapusan data Pengguna tidak berhasil !')</script>";
			echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=person'>";
		}
	}      
        
}       



$dbbuke1  = new person();

$dbbuke1->id = $_POST['Id'];
$dbbuke1->nama = $_POST['nama'];
$dbbuke1->Regions_id = $_POST['Regions_id'];
$dbbuke1->Address = $_POST['Address'];
$dbbuke1->Income = $_POST['Income'];


echo $aksi = $_GET['index'];
if ($aksi == "person-simpan"){
 	$dbbuke1->ubah_person();
} 
else if ($aksi == "TambahPerson1"){ 	
 	$dbbuke1->TambahPerson();	
}
else if ($aksi == "HapusPerson"){ 	
 	$dbbuke1->HapusPerson($_GET[Id]);	
} 
else if ($aksi == "UbahPerson"){
 	$dbbuke1->ubah_person();
} 



?>
