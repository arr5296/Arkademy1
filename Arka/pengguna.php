
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'koneksi/koneksi.php';
?>
<div class="jumbotron">
	 <div class="container">
	 	<div class="row">
                   <div class="panel panel-default">
                        <div class="panel-heading"><center><h3>Data Users</h3></center></div>
                        <div class="panel-body">
                        <button type="button" class="btn btn-primary" onclick=location.href="?index=tambah_pengguna"> Add Users</button>
                        <table style="margin-top: 10px;" id="example-datatables" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                
                                <th width="7">No</th>
                                <th>Id Users</th>
                                <th>Nama</th>
                                <th>Time Acses</th>
                                <th>Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            $sql= mysql_query("select * from users ");
                           
                            while ($p=  mysql_fetch_array($sql)){
                            
                            ?>

                            <tr>
                                
                                <td><?php echo $i?></td>
                                <td><?php echo strtoupper($p['Id']);?></td>
                                <td><?php echo strtoupper($p['Email']);?></td>
                                <td><?php echo strtoupper($p['Creat_at']);?></td>
                               
                                
                                <td class="text-center">
                                    <div class="btn-group">
                                        <center>
                                        <a href="?index=edit_pengguna&Id=<?php echo $p[Id]?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success">Edit</a>
                                        <a href="?index=HapusUser&Id=<?php echo $p[Id]?>" data-toggle="tooltip" onclick="return confirm('Apakah Anda Ingin Menghapus ?')" title="Delet" class="btn btn-xs btn-primary">Delete</a>
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

       


