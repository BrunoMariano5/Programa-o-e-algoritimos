<html>
<head>

</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden; 
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

form{
	margin:20px auto;
	display: block;
	width: 60%;
	text-align: center;
}

.submit{
	padding: 15px 30px;
	background: #bcc9d1; 
	border: none;
	font-size: 1.3em;
	border-radius: 5px; 
}
h3{
	text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1>Seja bem vindo a pagina de dowload</h1>
</div>

	<div class="topnav">
	  <a href="#">Arquivo png</a>
  		<a href="#">arquivo jpg</a>
	  <a href="#">arquivo mp4 </a>
	</div>
	 

	<form action="processamento.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="arq"> <br> <br>
		<input class="submit" type="submit" name="Up">
	</form>

	<br><br>

	<h3>Arquivos Salvos</h3>
	<hr>
	<div style="display: flex; justify-content: space-around;">
	<?php
		require 'exibir.php';
	?>
</div>

	
</body>
</html>