

<?php
	$titulo = "<center><b>GALERIA</b>
	</center>";
	$contenido = "<center>Estas  en la galeria</center>";
	
	$variables = array(
		'titulo' => $titulo,
		'contenido' => $contenido
	);
	
	view('galeria',$variables);
?>