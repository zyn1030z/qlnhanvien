<?php require 'header.php'; ?>
<?php require 'connect.php'; ?>

<style type="text/css">
table {
  width: 70%; 
  border: 1px  black;
  border-style: ridge;
}
table tr th {
  height: 50px;
  border: 1px white;
  background-color: #4d90fe;
  color: white;
  padding-left: 7px;
  padding-right: 7px;
  border-style: ridge;

}
table tr td {
  height: 60px;
  border: 1px   black;
  padding-left: 7px;
  padding-right: 7px;
  border-style: ridge;
}


</style>
<h1> Danh sách Nhân viên</h1><br>
<div class="container">
  <table class="table-hover" >
    <thead>
      <tr >
        <th> Stt </th>
        <th> Tên Nhân viên </th>
        <th> Địa chỉ </th>
        <th> Điện thoại </th>
        <th> Ngành ban</th>
        <th> Ngày sinh <br> ( yy/mm/dd ) </th>
        <th> Thao tác</th>
      </tr>
    </thead>

    <tbody>	
    	<?php $sql = "SELECT * From employees";
    	$result = $conn->query($sql);
$x = 1;
if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
	  
		 ?>
      <tr>
      	<td> <?php echo $x; ?> </td>
        <td ><a href="detail.php?id=<?php echo $row['id']; ?> "><?php echo $row['name']; ?></a>  </td>       
        <td> <?php echo $row['address']; ?>  </td>
       	<td> <?php echo $row['phone']; ?> </td>
         <td> <?php echo $row['department']; ?> 
         </td>
         <td> <?php echo $row['date']; ?> </td>

         <td><a href="delete.php?id=<?php echo $row['id']; ?> ">Xóa </a> , 
            <a href="update.php?id=<?php echo $row['id']; ?> "> Sửa </a>
            </td>

      </tr>
      <?php $x++;
  		}
  		}
  		?>
    </tbody>

    
  </table>
</div>
<?php require 'footer.php'; ?>
