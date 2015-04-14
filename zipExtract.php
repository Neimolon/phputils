<?php
/**
*  Extracts a ZIP archive to the specified extract path
*
*  @param string $file The ZIP archive to extract (including the path)    
*  @param string $extractPath The path to extract the ZIP archive to
*
*  @return boolean TURE if the ZIP archive is successfully extracted, FALSE if there was an errror 
*  
*/
function zip_extract($file, $extractPath) {

    $zip = new ZipArchive;
    $res = $zip->open($file);
    if ($res === TRUE) {
        $zip->extractTo($extractPath);
        $zip->close();
        return TRUE;
    } else {
        return FALSE;
    }

} // end function
?>