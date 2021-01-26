<?php
	require "./conn.php";
	$id = $_GET["id"];
	echo $id;
	$sql = "DELETE FROM content WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if($result) {
		echo "<script>alert('删除成功');</script>";
		echo "<script>location.href='./guangli.php'</script>";
	} else {
		echo "<script>alert('删除失败');</script>";
		echo "<script>location.href='./guangli.php'</script>";
	}
?>