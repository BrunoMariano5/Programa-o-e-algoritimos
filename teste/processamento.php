	
<?php 
	//print_r( $_FILES['arq']);
	

	$arquivo = $_FILES['arq']['name'];
	$caminho = $_FILES['arq']['tmp_name'];
	$destino = "arquivos/".$arquivo;

	$tipo = $_FILES['arq']['type'];

	if ($tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "video/mp4" || $tipo == "video/FLV") {
		if(move_uploaded_file($caminho, $destino)){
			header("Location: index.php");
		}else{
			echo "Erro ao incluir o arquivo!<br>";
			echo "<a href='index.php'>Clique aqui<a> para voltar.";
		}
	}else{
		echo "Erro ao incluir o arquivo!<br>";
		echo "<a href='index.php'>Clique aqui<a> para voltar.";
	}

	

?>
