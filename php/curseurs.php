<?php

/**
 * Connexion � la base de donn�es � partir de variables globales
 */     

		function Connexion(){
			global $bdUser, $bdMdp, $bdBase ;
			
			$bdBase=new PDO('mysql:host=localhost;dbname=boutique', $bdUser, $bdMdp);
				
		}

?>