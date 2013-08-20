<?php

include_once("model/Book.php");

class Model {
	public function getBookList()
	{
		/*
		jagl, ojo que si coloco en el indice, y en el primer parametro, 
 		texto distinto, me dará un error.
		porque con el dato del titulo en la vista se crea un enlace 
		(enviando parametro por get) que no lo encuentra  
		como es el caso Moonwalker y Moonwalker2, en esta version dara error 
		cuando pinche el enlace a Moonwalker
		*/
		// here goes some hardcoded values to simulate the database
		return array(
						"Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
						"Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
						"PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
					);
	}
	
	public function getBook($title)
	{
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		$allBooks = $this->getBookList();
		/*$allBooks es un array
		print_r($allBooks);
		exit();
		*/
		return $allBooks[$title];
	}
	
	
}

?>