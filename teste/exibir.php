<?php
	$destino = "arquivos/";
	$dir = dir($destino);

	while($arquivos = $dir->read()){
		if($arquivos != "." && $arquivos != "..")
		echo "<div style='display: block; width:100px; height:175px; overflow:hidden;'>
			<div>
			<p style='text-align:center; '>".$arquivos."</p>
			</div>

		<img style='display:block; width:100%;' src='".$destino.$arquivos."'>
			
			</div>";
	}

?>




