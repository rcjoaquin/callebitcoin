$lineas = file('empresas.txt');

foreach ($lineas as $linea) 
{
	$campos = explode("#",$linea);

  //Por cada linea que seria una empresa, mostrariamos un row de Bootstrap	
	echo "<div class=\"row\">";
	
	//Como en el ejemplo solo hay 4 columnas por empresa, entonces mostrariamos 4 columnas de Bootstrap
	foreach($campos as $campo)
	{
    	echo "<div class=\"col-lg-3\">".$campo."</div>";
	}
	echo "</div>";
}
