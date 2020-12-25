<?php require 'header.php'; ?>
<?php require 'connect.php'; ?>
<style type="text/css">
	input {
		width: 350px;
		height: 50px;
	}
	.A {
		background-color: #008CBA;
		border: 1px solid blue;
		color: white;
	}
</style>
<form method="POST">
	<?php 
	$x = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

	$y = strpos($x, '='); // lay stt ky thu =
	$z= substr($x, $y+1); // cat chuoi so ky tu 

		$sql = "SELECT * From employees where id = $z";
    	$result = $conn->query($sql);

		if ($result->num_rows > 0) {
	  	while($row = $result->fetch_assoc()) {
	 ?>
<label>1. Tên nhân viên</label><br>
<input type="" name="name" placeholder="Nhập tên nhân viên" value=" <?php echo $row['name']; ?>" required=""><br><br>
<label>2. Quê quán </label><br>
<input type="" name="address" placeholder="Nhập tên quê quán" value=" <?php echo $row['address']; ?>" required=""><br><br>
<label>3. Số điện thoại</label><br>
<input type="" name="phone" placeholder="Nhập số điện thoại" value=" <?php echo $row['phone']; ?>" required=""><br><br>
<label>4. Ngày sinh: <?php echo $row['date']; ?> </label><br>
<br>
<label>5. Thuộc Bộ phận, Ban, Ngành</label><br>
<input type="" name="department" placeholder="Nhập tên bộ phận, ban, ngành" value=" <?php echo $row['department']; ?>" required=""><br><br>
<input class="A" type="submit" name="submit" value="Xóa thông tin nhân viên">
<?php }} ?>
</form>
<?php 

	if(isset($_POST['submit'])) {
	
		$sql = "DELETE FROM employees WHERE id=$z";
		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}

mysqli_close($conn);
	}
 ?>
<?php require 'footer.php'; ?>
