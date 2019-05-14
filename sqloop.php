<?php
$mysqli=new mysqli('localhost','root','','company');

if(mysqli_connect_errno()){
  print_f("connection failed:%s\n",mysqli_connect_error());
  
}

$result=$mysqli->query("select * from employees");

?>

<h1>Employees</h1>
<table width="500" cellpadding=5 cellspacing=5 border=1>
 <tr>
   <th>Id</th>
   <th>firstname </th>
   <th>lastname</th>
   <th>dept </th>
   <th>email</th>
   </tr>
   <?php while($row=$result->fetch_object()): ?>
   <tr>
   <td><?php echo $row->id;?></td>
    <td><?php echo $row->firstname;?></td>
	 <td><?php echo $row->lastname;?></td>
	  <td><?php echo $row->dept;?></td>
	   <td><?php echo $row->email;?></td>
 </tr>

<?php endwhile; ?>
</table> 


<?php $result= $mysqli->query("select * from products"); ?>
<h1>Products</h1>
<table width="500" cellpadding=5 cellspacing=5 border=1>
 <tr>
   <th>Id</th>
   <th>product </th>
   <th>category</th>
   </tr>
   <?php while($row=$result->fetch_object()): ?>
 <tr>
   <td><?php echo $row->id;?></td>
    <td><?php echo $row->name;?></td>
	 <td><?php echo $row->category;?></td>
 </tr>

<?php endwhile; ?>
</table> 

<?php $result= $mysqli->query("select * from category"); ?>
<h1>Category</h1>
<table width="500" cellpadding=5 cellspacing=5 border=1>
 <tr>
   <th>Id</th>
   <th>category </th>
 </tr>
   <?php while($row=$result->fetch_object()): ?>
 <tr>
   <td><?php echo $row->id;?></td>
    <td><?php echo $row->name;?></td>
 </tr>

<?php endwhile; ?>
</table> 