<?php
$servername="localhost";
$username="root";
$password="123456789";
$dbname="sourabhdb";

$con=new mysqli($servername,$username,$password,$dbname);
$name="";
$age="";
if(isset($_POST['save']))
{
   $name=$_POST['name'];
   $age=$_POST['age'];

  $sql="insert into sourabh(name,age)values('$name','$age')";
 if($con->query($sql)==true)
  {
    echo"record insert successfully";
   }


}
?>
<html>

</head>

</head>
<body>

<form method="post" action="">
<input type="text" name="name">
<input type="number" name="age">
<button type="submit" name="save">save</button>

</form>

</body>

</html>

<html>
<head>

</head>
<body>
  <?php 
  $servername="localhost";
  $username="root";
  $password="123456789";
  $dbname="sourabhdb";
  
  $con=new mysqli($servername,$username,$password,$dbname);
  
  $result= mysqli_query($con,"select * from sourabh");

 //$result=$con->query($sql);

?>
<table>
<tr>
  <th>name</th>
  <th>age</th>
</tr>

<?php while($row=mysqli_fetch_array($result))
 {?>
  <tr>
    <td> <?php echo $row['name']?> </td>
    <td> <?php echo $row['age']?> </td>
</tr>
<?php }  ?>
</table>
</body>
</html>
