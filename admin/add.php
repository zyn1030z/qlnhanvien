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
   <?php if(isset($_SESSION['user'])) { ?>
<form method="POST"  enctype="multipart/form-data">
	<h1>Thêm nhân viên</h1>
<label>1. Tên nhân viên</label><br>
<input type="" name="name" placeholder="Nhập tên nhân viên"><br><br>
<label>2. Quê quán </label><br>
<input type="" name="address" placeholder="Nhập tên quê quán"><br><br>
<label>3. Số điện thoại</label><br>
<input type="" name="phone" placeholder="Nhập số điện thoại"><br><br>
<label>4. Ngày sinh </label><br>
<input type="date" name="date" ><br><br>
<label>5. Thuộc Bộ phận, Ban, Ngành</label><br>
<input type="" name="department" placeholder="Nhập tên bộ phận, ban, ngành"><br><br>
<label>6. Lương</label><br>
<input type="" name="salary" placeholder="Nhập Lương"><br><br>
<label>7. Chức vụ</label><br>
<input type="" name="level" placeholder="Nhập chức vụ"><br><br>
<label>8. Ảnh</label><br>
<input type="file" name="image" required=""></td></tr>
<input class="A" type="submit" name="submit" value="Thêm nhân viên">
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

		$sql = "INSERT INTO `employees` (`name`, `address`, `phone`, `date`, `department`, `image`, `salary`, `level`) VALUES ('$name', '$address', '$phone', '$date', '$department', '$image', '$salary', '$level')";
		mysqli_query($conn, $sql);

	}}
 ?>

<?php require 'footer.php'; ?>
