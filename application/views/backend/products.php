<html>
 <head>
 <title>Data Products Northwind</title>
 <style>
 body
 {
 font-family:arial;
 background:#FFF7E7;
 }

.t_data
 {
 border-collapse:collapse;
 }

.t_data tr th
 {
 font-size:12px;
 font-weight:bold;
 background:#A46D07;
 color:#FFFF00;
 padding:4px;
 }

.t_data tr td
 {
 font-size:12px;
 padding:4px;
 }

.t_data tr:hover
 {
 background:#C8FABF;

}

.halaman
 {
 margin:10px;
 font-size:11px;
 }

.halaman a
 {

padding:3px;
 background:#990000;
 -moz-border-radius:5px;
 -webkit-border-radius:5px;
 border:1px solid #FFA500;
 font-size:10px;
 font-weight:bold;
 color:#FFF;
 text-decoration:none;

}
 </style>
 </head>
 <body>
 <h2>Data Products</h2>
 <table class="t_data" border="1">
 <tr>
 <th>No</th>
 <th>ProductID</th>
 <th>ProductName</th>
 <th>SupplierID</th>
 <th>CategoryID</th>
 <th>QuantityPerUnit</th>
 <th>UnitPrice</th>
 </tr>
 <?php
 //kalo data tidak ada didatabase
 if(empty($query))
 {
 echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
 }else
 {
 $no = 1;
 foreach($query as $row)
 {
 ?>
 <tr>
 <td><?php echo $no;?></td>
 <td><?php echo $row->ProductID;?></td>
 <td><?php echo $row->ProductName;?></td>
 <td><?php echo $row->SupplierID;?></td>
 <td><?php echo $row->CategoryID;?></td>
 <td><?php echo $row->QuantityPerUnit;?></td>
 <td><?php echo $row->UnitPrice;?></td>
 </tr>
 <?php
 $no++;
 }}
 ?>
 </table>
 <div class="halaman">Halaman : <?php echo $halaman;?></div>
 </body>
</html>