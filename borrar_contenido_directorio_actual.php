<?php
	
	$dir = "./";
	echo "Estas seguro que quieres borrar todos los directorios de '$dir'   ?????";

	echo '<form action="./delete.php" method="get">
			<input type="radio" name="group1" value="1"> Si<br>
			<input type="radio" name="group1" value="0" checked> NO<br>
			<input type="submit">
		</form>';


	if(isset($_GET['group1']) && $_GET['group1']){
		$files = array_diff(scandir($dir), array('.','..'));
		foreach ($files as $file) {
    		if(is_dir("$dir/$file"))
			echo "Borrando $dir/$file...". Rem::delTree("$dir/$file");
    	}
	}else{
		echo 'Abortada';
	}
	
	

	
class Rem{
	
    public static function delTree($dir){
    	$files = array_diff(scandir($dir), array('.','..'));
    
    	foreach ($files as $file) {
    		(is_dir("$dir/$file")) ? self::delTree("$dir/$file") : unlink("$dir/$file");
    	}
    
    	return rmdir($dir);
    }
}


?>