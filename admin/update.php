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
<form method="POST" enctype="multipart/form-data">
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
<label>4. Ngày sinh </label><br>
<input type="date" name="date" required=""><br><br>
<label>5. Thuộc Bộ phận, Ban, Ngành</label><br>
<input type="" name="department" placeholder="Nhập tên bộ phận, ban, ngành" value=" <?php echo $row['department']; ?>" required=""><br><br>
<label>6. Lương</label><br>
<input type="" name="salary" placeholder="Nhập Lương" value=" <?php echo $row['salary']; ?>" required=""><br><br>
<label>7. Chức vụ</label><br>
<input type="" name="level" placeholder="Nhập chức vụ" value=" <?php echo $row['level']; ?>" required=""><br><br>
<label>8. Ảnh</label><br>
<input type="file" name="image" required=""></td></tr>
<input class="A" type="submit" name="submit" value="Cập nhật thông tin">
<?php }} ?>
</form>
<?php 

	if(isset($_POST['submit'])) {
		$name = $_POST["name"];
		$address = $_POST["address"];
		$phone = $_POST["phone"];
		$date = $_POST["date"];
		$department = $_POST["department"];
		$salary = $_POST["salary"];
		$level = $_POST["level"];
		$path = "../images/"; // file lưu vào thư mục data
     $tmp_name = $_FILES['image']['tmp_name'];
     $image = $_FILES['image']['name'];
     // Upload file
     move_uploaded_file($tmp_name,$path.$image);
	
		$sql = "UPDATE employees 
		SET 
		name = '$name',
		address = '$address',
		phone = '$phone',
		`date` = '$date',
		department = '$department',
		salary = '$salary',
		level = '$level',
		image = '$image'
		WHERE id = $z";

		
		if (mysqli_query($conn, $sql)) {
			echo "cập nhật thành công";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
	}
 ?>
<?php require 'footer.php'; ?>
