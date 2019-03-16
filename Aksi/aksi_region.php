<?php
//include 'koneksi/koneksi.php';
class regions{

	public $id;
	public $Name;
    

        //untuk data user
	public function ubah_regions() {

		$sql = "UPDATE regions set Name = '$this->Name' where Id = '$this->id'";
		$proses = mysql_query($sql);
			if ($proses) {
				echo "<script>alert('Pengubahan data Pengguna berhasil di Ubah !')</script>";
                echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=regions'>";
                //echo $sql;
			} else { 
				echo "<script>alert('Pengubahan data Pengguna tidak berhasil !')</script>";
				echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=regions'>";
                  //              echo $sql;
			}
		}
                
         public function TambahRegions() {
		   
            $time = date('Y-m-d H:m:s');
           
			$sql = "INSERT INTO regions(Id,Name,Created_at) VALUES ('$this->id','$this->Name','$time')";
		
			$proses = mysql_query($sql);
		
			if ($proses) 
			{
				echo "<script>alert('Data Pengguna berhasil di simpan !!')</script>";
                            echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=regions'>";
                            //echo "INSERT INTO users(Id,Email,Password,Creat_at) VALUES ('$this->id','$this->email','$pass','$time')";
			} else {			
				echo "<script>alert('Data belum dapat di simpan !! ')</script>";
               echo "<meta http-equiv='refresh' content='0;CentralIndex.php?index=regions&do=TambahRegions'>";
                
                        //    echo "INSERT INTO person(Id,nama,Regions_id,Address, Income,Created_at) VALUES ('$this->id','$this->nama','$this->Address','$this->Income','$time')";
			}
		}
	public function HapusRegions($id) {
		$sql = "DELETE from regions where Id ='$id'";
                
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



$dbbuke1  = new regions();

$dbbuke1->id = $_POST['Id'];
$dbbuke1->Name = $_POST['Name'];



echo $aksi = $_GET['index'];
if ($aksi == "regions-simpan"){
 	$dbbuke1->ubah_regions();
} 
else if ($aksi == "TambahRegions"){ 	
 	$dbbuke1->TambahRegions();	
}
else if ($aksi == "HapusRegions"){ 	
 	$dbbuke1->HapusPerson($_GET[Id]);	
} 
else if ($aksi == "UbahRegions"){
 	$dbbuke1->ubah_Regions();
} 



?>
