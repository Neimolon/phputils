<?php
function sanitizeFileName($file,$ext = ".php"){
	$file = basename($file,$ext);
	$file = strtolower($file);
	return $file;
}