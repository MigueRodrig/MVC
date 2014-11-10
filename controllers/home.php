<?php
		$titulo="<center>Bienvenido a MVC</center>";
		$contenido="<center>estas en el home</center>";
		
		$variable=array('titulo'=>$titulo,'contenido'=>$contenido);
		
		view ('home',$variable);
?>
