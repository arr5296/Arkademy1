<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'koneksi/koneksi.php';
$sql=mysql_query("select * from users order by Id DESC LIMIT 0,1");
$data = mysql_fetch_array($sql);
//echo $tahun=date('y').date('m').date('d');

$kodeawal=  substr($data['Id'],6,7)+1;

if($kodeawal<10){
    $kode='ID00000'.$kodeawal;
}
elseif($kodeawal>9 && $kodeawal<=99){
    $kode='ID0000'.$kodeawal;
}
elseif($kodeawal>99 && $kodeawal<=999){
    $kode='ID000'.$kodeawal;
}
elseif($kodeawal>999 && $kodeawal<=9999){
    $kode='ID00'.$kodeawal;
}
else{
    $kode='ID0'.$kodeawal;
}
?>
<form name="input" action="CentralIndex.php?index=TambahUser" method="POST">
    <div class="jumbotron">
	 <div class="container">
	 	<div class="row">
                   <div class="panel panel-default">
                        <div class="panel-heading"><center><h3>Add Users</h3></center></div>
                        <div class="panel-body">
            <div class="form-group" >
                <div class="col-md-3">
                <label>Id Users</label>
                </div>
                <div class="col-md-9">
                    <input type="text" style="margin-bottom: 5px;" class="form-control" name="Id" id="Id" value="<?php echo $kode?>" placeholder="<?php echo $kode?>" readonly>
                </div>
            </div> 
            <div class="form-group" >
                <div class="col-md-3">
                <label>Email</label>
                </div>
                <div class="col-md-9">
                    <input type="text" style="margin-bottom: 5px;" class="form-control" name="Email" id="Email" placeholder="Entry Email" required="">
                </div>
            </div>
            <div class="form-group" >
                <div class="col-md-3">
                <label>Password</label>
                </div>
                <div class="col-md-9">
                    <input type="password" style="margin-bottom: 5px;" class="form-control" name="Password" id="Password" placeholder="Entry Password" required="">
                </div>
            </div>
            
            
            <button style="margin-left: 280px; float: right" type="submit" class="btn btn-success">Save</button>
        </div>
    </div>
                </div>
         </div>
    </div>
</form>


