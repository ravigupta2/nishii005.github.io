<!DOCTYPE html>
<html>
<head>
	<title>todo applicatopn</title>
	<link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Alef&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
	<!--<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">-->
	<link rel="stylesheet" type="text/css" href="todo.css">
</head>
<body>

	<!--How to use php to get data from html form
How to save data in form to database
How to save database in json in php
How to get data  from json file in php-->
<div class="container">

<?php
	require("table_connection.php");
?>

	<p>TODO LIST</p>
	<div class="content">
		<form action="" method="POST">
			

			
			<label>TODO : </label>

			<input type="text" placeholder="ADD NEW" name="todo" required><br>

			<label>DEADLINE : </label>
			<input type="date" name="deadline" required><br>

		<div class="btn">	
			<button name="submit" type="submit" >SUBMIT</button>
			<a href="todo-table.php">TODO-LIST</a>
			<button name="clear" type="clear">CLEAR</button>
		</div>

		</form>
	</div>
</div>
<?php
if(isset($_POST["todo"])){
	$todo = $_POST['todo'];
	$deadline = $_POST['deadline'];
	$query = "INSERT INTO TODO_LIST (todo, deadline) VALUES ('".$_POST["todo"]."', '".$_POST["deadline"]."')";
	$data = mysqli_query($conn,$query);

	if($data){
		echo "<div class='status green'>DATA ENTERED</div>";

	}
	else{
		echo "<div class='status red'>DATA ENTERED FAILED</div>";
	}
}
?>

</body>
</html>