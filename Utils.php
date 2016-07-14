<?php
class Utils{
	
	/*IO Helpers*/
    public static function copy_r( $path, $dest ){
        if( is_dir($path) )
        {
            @mkdir( $dest );
            $objects = scandir($path);
            if( sizeof($objects) > 0 )
            {
                foreach( $objects as $file )
                {
                    if( $file == "." || $file == ".." )
                        continue;
                    // go on
                    if( is_dir( $path.DIRECTORY_SEPARATOR.$file ) )
                    {
                        self::copy_r( $path.DIRECTORY_SEPARATOR.$file, $dest.DIRECTORY_SEPARATOR.$file );
                    }
                    else
                    {
                        copy( $path.DIRECTORY_SEPARATOR.$file, $dest.DIRECTORY_SEPARATOR.$file );
                    }
                }
            }
            return true;
        }
        elseif( is_file($path) )
        {
            return copy($path, $dest);
        }
        else
        {
            return false;
        }
    }
    
    
    public static function delTree($dir)
    {
    	$files = array_diff(scandir($dir), array('.','..'));
    
    	foreach ($files as $file) {
    		(is_dir("$dir/$file")) ? self::delTree("$dir/$file") : unlink("$dir/$file");
    	}
    
    	return rmdir($dir);
    }
    
    
    /*Strpos for arrays*/
    public static function strpos_arr($haystack, $needle) {
    	if(!is_array($needle)) $needle = array($needle);
    	foreach($needle as $what) {
    		if(($pos = strpos($haystack, $what))!==false) return $pos;
    	}
    	return false;
    }

	
	/*Misc*/
	function validar_dni($dni){
		$letra = substr($dni, -1);
		$numeros = substr($dni, 0, -1);
		if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
			echo 'valido';
		}else{
			echo 'no valido';
		}
	}

}//class
	


?>
