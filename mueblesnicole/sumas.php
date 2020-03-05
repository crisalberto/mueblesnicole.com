<!DOCTYPE html PUBLIC >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Suma con palabras</title>
<style>
	body{
		background-color: #ccc;
		font-family: Constantia, Lucida Bright, DejaVu Serif, Georgia, serif;
	    }
	fieldset{
		width: 600px;
		margin: 0 auto;
		background-color: #999;
	    }
		

	</style>
</head>

<body>
<a href="index.html">Pagina principal</a>
 
<?php

if($_POST){
    $arreglo= array(
     "a"=>"1", "b"=>"2", "c"=>"3", "d"=>"4", "e"=>"5", "f"=>"6", "g"=>"7", "h"=>"8", "i"=>"9",
	 "j"=>"10", "k"=>"11", "l"=>"12", "m"=>"13", "n"=>"14", "o"=>"15", "p"=>"16", "q"=>"17", "r"=>"18",
	 "s"=>"19", "t"=>"20", "u"=>"21", "v"=>"22", "w"=>"23", "x"=>"24", "y"=>"25", "z"=>"26");

 
    $nombre=$_POST["nombre"];
     $suma=0;
    foreach (count_chars($nombre,1)as $clave=>$valor)
    {
        
        //echo "Se ha encontrado $valor instancia (s) de \"" , $arreglo[chr(++$clave)] , "\" en la cadena.\n<br>";
        $suma+=($arreglo[chr($clave)]*$valor);
		
	}
        
	echo "El resultado es:" .$suma;
}
?>
 <fieldset>
   <legend>   Introduce minusculas.</legend>
      <form name="formulario" action="sumas.php" method="POST">
	    Introduce una palabra: <input type="text" name="nombre">
	    <input type="submit" value="Enviar">
        
      </form>
  	</fieldset>

</body>
</html>