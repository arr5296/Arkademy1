<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$id=$_SESSION[id_user];

$id=$_GET["do"];
$sql=mysql_query("select * from regions order by Id DESC LIMIT 0,1");
$data = mysql_fetch_array($sql);
//echo $tahun=date('y').date('m').date('d');

$kodeawal=  substr($data['Id'],6,7)+1;

if($kodeawal<10){
    $kode='RG00000'.$kodeawal;
}
elseif($kodeawal>9 && $kodeawal<=99){
    $kode='RG0000'.$kodeawal;
}
elseif($kodeawal>99 && $kodeawal<=999){
    $kode='RG000'.$kodeawal;
}
elseif($kodeawal>999 && $kodeawal<=9999){
    $kode='RG00'.$kodeawal;
}
else{
    $kode='RG0'.$kodeawal;
}
function rupiah($angka){
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;

}
?>

        <?php
switch($id){
          default:
   ?>
<div class="jumbotron">
	 <div class="container">
	 	<div class="row">
                   <div class="panel panel-default">
                        <div class="panel-heading"><center><h3>Data Regions</h3></center></div>
                        <div class="panel-body">
                        <button type="button" class="btn btn-primary" onclick=location.href="?index=regions&do=TambahRegions"> Add Regions</button>
                   
                    <div class="table-responsive">
                        <!--<button type="button" class="btn btn-primary" onclick=location.href="?buke=tambah_pelamar"> Tambah Pelamar Kerja</button>-->
                         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                
                                <th width="7">No</th>
                                <th>ID Regions </th>
                                <th>Nama Regions</th>
                                <th>Jumlah Penduduk</th>
                                <th>Total Pendapatan</th>
                                <th>Rata-Rata Pendapatan</th>
                                <th>Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            $sql= mysql_query("SELECT a.*,b.Name from person as a, regions as b WHERE a.Regions_id=b.Id ");
                  while ($p=mysql_fetch_array($sql)){ 
                            ?>
                            <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo strtoupper($p['Id']);?></td>
                                <td><?php echo strtoupper($p['nama']);?></td>
                                <td><?php echo rupiah($p['Income']);?></td>
                                <td><?php echo strtoupper($p['Name']);?></td>
                                
                                <td class="text-center">
                                    <div class="btn-group">
                                        <center>
                                   
                                            <?php
                                            //if($p['keterangan']==1){
                                                ?>
                                            <!--<a href="?buke=user-aktif&id_user=<?php// echo $p['id_user']?>" data-toggle="tooltip" onclick="return confirm('Apakah Anda Ingin Non-Aktifkan Informasi ini ?')" title="Tidak Aktif" class="btn btn-xs btn-default">Tidak Aktif</a>
                                            <?php
                                           // }
                                            //else if($p['keterangan']==0){
                                                ?>
                                            <a href="?buke=user-aktif&id_user=<?php// echo $p['id_user']?>" data-toggle="tooltip" onclick="return confirm('Apakah Anda Ingin Mengaktifkan Informasi ini ?')"  title="Aktif" class="btn btn-xs btn-default">Aktif</a>-->
                                            <?php
                                            //}
                                            ?>
                                           
                                        <a href="?index=HapusRegions&Id=<?php echo $p['Id']?>" data-toggle="tooltip" title="Hapus" onclick="return confirm('Apakah Anda Ingin Menghapus Pengguna ini ?')" class="btn btn-xs btn-danger">Hapus</a>
                                        <a href="?index=regions&do=ubah-regions&Id=<?php echo $p['Id']?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success">Ubah</a>
                                        
                                        </center>                                        
                                    </div>
                                </td>
                            </tr>
                            <?php $i++;}?>


                            
                        </tbody>
                    </table>
                    </div><! --/row -->
	 </div><! --/container -->
</div>
      </div>

    </div> 
                                            </div>
        
<!--Ubah User-->        
<?php
        break;	
                                                             case "ubah-person":
                                                                 $id=$_GET['Id'];
                                                                 $usr= mysql_query("select * from regions where Id ='$id'");
                                                                 $u=  mysql_fetch_array($usr);
                                                                 
        ?>
<div class="jumbotron">
	 <div class="container">
	 	<div class="row">
                   <div class="panel panel-default">
                        <div class="panel-heading"><center><h3>Ubah Data Person</h3></center></div>
                        <div class="panel-body">
                                   <form role="form" action="CentralIndex.php?index=UbahRegions" method="POST">
                                       <div class="col-sm-12  main">
                                       
                                            
                                        <div class="panel panel-default">
                                         <div class="panel-body"> 
                                       <div class="form-group">
                                           <div class="col-md-2">
                                        
                                         <label>ID Regions</label>
                                           </div>
                                           <div class="col-md-10">
                                               <input style="margin-bottom: 10px" type="text"  class="form-control" name="Id" value="<?php echo $u['Id']?>" readonly=""  required >
                                           </div>
                                           
                                           </div>
                                             
                                             <div class="form-group">
                                           <div class="col-md-2">
                                            <label>Nama</label>
                                           </div>
                                           
                                                 <div class="col-md-10">
                                            <input style="margin-bottom: 10px" class="form-control" placeholder="Nama" name="Name" value="<?php echo $u['Name']?>" required>
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                           <div class="col-md-2">
                                            <label>Gaji</label>
                                           </div>
                                             
                                             <button style="float: right" type="submit" class="btn btn-success">Simpan</button>
                                       </div>
                                       </div>
                                           
                                       </div>
                                       
                                    </form>
        </div>
</div>

</div>	 </div>	 </div>
<!-- Tambah User-->        
<?php
        break;	
                                                             case "TambahRegions":
                                                                 
                                                                 
        ?>
<div class="jumbotron">
	 <div class="container">
	 	<div class="row">
                   <div class="panel panel-default">
                        <div class="panel-heading"><center><h3>Tambah Data Regions</h3></center></div>
                        <div class="panel-body">
                                   <form role="form" action="CentralIndex.php?index=TambahRegions" method="POST">
                                       <div class="col-sm-12  main">
                                          
                                       <div class="panel panel-default">
                                         <div class="panel-body"> 
                                       <div class="form-group">
                                           <div class="col-md-2">
                                        
                                         <label>ID Person</label>
                                           </div>
                                           <div class="col-md-10">
                                               <input style="margin-bottom: 10px" type="text"  class="form-control" name="Id" value="<?php echo $kode?>" readonly=""  required >
                                           </div>
                                           
                                           </div>
                                             
                                             <div class="form-group">
                                           <div class="col-md-2">
                                            <label>Nama Regions</label>
                                           </div>
                                           
                                                 <div class="col-md-10">
                                            <input style="margin-bottom: 10px" class="form-control" placeholder="Nama" id="Name" name="Name" required>
                                                 </div>
                                             </div>
                                             
                                             <button style="float: right" type="submit" class="btn btn-success">Simpan</button>
                                       </div>
                                       </div>
                                           
                                       </div>
                                    </form>
        </div>
</div>
     </div>
    	 </div>
</div>
<?php  break;	} 

?>        
        <!-- /container -->
        
