<?php

/**
 * Get request from url
*
* @param string $url
* @return array
*
* $array = array('controller','action','params'=>array())
*/



/**
 /README.md                  -> README.md
/                           -> controller=default, action=default
/kaka                       -> 404
/users                      -> controller=users, action = default
/users/insert               -> controller=users, action = insert
/users/update/id/8          -> controller=users, action = update, params = array(id=>8)
/users/kaka                 -> 404
/users/update/id            -> 400
/users/update/id/8/param    -> 400
/users/update/kaka/kaka     -> controller=users, action = update, params = array(kaka=>kaka)
*/


$urls = array(
		"/",
		"/README.md",
		"/kaka","/users",
		"/users/insert",
		"/users/update/id/8",
		"/users/kaka",
		"/users/update/id",
		"/users/update/id/8/param","/users/update/kaka/kaka");

function parseUrl($url) 
{
    // Explode de $URL
	$parsed_url = parse_url($url);    
	
	echo '<p>';
	print_r($parsed_url);
	echo '<p>';

    // Verifica que el controller existe
    $controllers= array(
    		//read controller dir
    );

    $actions = array("select","insert","update","delete");
    
    // Verificar si la action existe
    
    
    return $request;
}