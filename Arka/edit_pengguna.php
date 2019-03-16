<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../koneksi/koneksi.php';
 $id= $_GET[Id];
$sql=  mysql_query("select * from users where Id='$id'");
$data=  mysql_fetch_array($sql);

?>
<form name="input" action="CentralIndex.php?index=UbahUser" method="POST">
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
                    <input type="text" style="margin-bottom: 5px;" class="form-control" name="Id" id="Id" value="<?php echo $id?>" placeholder="<?php echo $kode?>" readonly>
                </div>
            </div> 
            <div class="form-group" >
                <div class="col-md-3">
                <label>Email</label>
                </div>
                <div class="col-md-9">
                    <input type="text" style="margin-bottom: 5px;" class="form-control" name="Email" id="Email" value="<?php echo $data['Email']?>" placeholder="Entry Email" required="">
                </div>
            </div>
            <div class="form-group" >
                <div class="col-md-3">
                <label>Password</label>
                </div>
                <div class="col-md-9">
                    <input type="password" style="margin-bottom: 5px;" class="form-control" name="Password" id="Password" value="<?php echo $data['Password']?>" placeholder="Entry Password" required="">
                </div>
            </div>
            
            
            <button style="margin-left: 280px; float: right" type="submit" class="btn btn-success">Save</button>
        </div>
    </div>
                </div>
         </div>
    </div>
</form>

