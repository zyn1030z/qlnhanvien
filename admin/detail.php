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
<label>1. Tên nhân viên: <span style="color: blue; font-size: 20px;"><?php echo $row['name']; ?> </span></label><br><br>

<label>2. Quê quán:<span style="color: blue; font-size: 20px;"> <?php echo $row['address']; ?></span> </label><br><br>

<label>3. Số điện thoại:<span style="color: blue; font-size: 20px;"> <?php echo $row['phone']; ?></span></label><br><br>

<label>4. Ngày sinh:<span style="color: blue; font-size: 20px;">  <?php echo $row['date']; ?></span></label><br><br>

<label>5. Thuộc Bộ phận, Ban, Ngành:<span style="color: blue; font-size: 20px;"> <?php echo $row['department']; ?></label><br><br>

<label>6. Lương:<span style="color: blue; font-size: 20px;"> <?php echo $row['salary']; ?></label><br><br>

<label>7. Chức vụ:<span style="color: blue; font-size: 20px;"> <?php echo $row['level']; ?></label><br><br>

<label>8. Ảnh:</label><br>
<img style="width: 300px; height: 300px" src="../images/<?php echo $row['image']; ?>">
<?php }} ?>
</form>

<?php require 'footer.php'; ?>
