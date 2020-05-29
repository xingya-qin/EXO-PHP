<?php 

if($_POST){
 // var_dump($_POST);
if(strpos($_POST["email"],".com") == false){
  echo "<h2 style= 'color:red';> Veuillez renseigner une adresse email internationale </h2>";
}
else{
  echo "email : " . $_POST["email"] . "<br>";
  echo "password : " . $_POST["password"]. "<br>";


  $file = fopen("list.txt","a");
  fwrite($file, $_POST["email"] . "-");
  fwrite($file , $_POST["password"] . "\n");
  $file = fclose($file);
}

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

	<div class="container-fluid" style="margin-top:50px">

		<div class="d-flex row justify-content-center">

			<form method="post">

			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
			</div>

			<button type="submit" class="btn btn-primary">S'inscrire</button>

			</form>

	</div>

</body>

</html>