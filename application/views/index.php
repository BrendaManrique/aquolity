<?php
// session_start();
include "layout/header.php";
include "layout/menu.php";

//Llamada a nueva page:
//<a href="index.php?page=indexpage">page 1</a> 

	$url='';
	//Arreglo que sólo acepta cargar las stes pages
	$pages = array('indexpage',
					'about', 
					'map',
					'contact',
					'graph-world',
					'graph-peru',
					'faq',
					'contact-form-submission');
	if(empty($_GET['page'])){
		$page = 'indexpage';
		include($page.'.php');
	}
	else{
		$page = $_GET['page'];

	//Si la page está dentro de file
	//LLamada: <a href="index.php?category=newfile&page=faq">FAQ</a>
	if (!empty($_GET['category'])) {
		$url .= $_GET['category'] . '/';
	}
	if(in_array($page,$pages)) {
			$url .= $page . '.php' ;
			include($url);
		}
		else {

			echo '<br> <br> <br> <br> Page not found. Return to
			<a href="indexpage.php">INDEX</a>';
		}

	}
	//Cambiar el título de page
	$output = str_replace('%TITLE%', 'AQUOLITY-'.strtoupper($page), $output);
    echo $output;


include "layout/footer.php";	


?>
