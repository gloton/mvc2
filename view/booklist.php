<html>
<head></head>

<body>

<table border="1">
	<tr>
		<th>Title</th>
		<th>Author</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?php 
	/*
	 ["Jungle Book"]=>	object(Book)#3 (3) {
	["title"]	=>		string(11) "Jungle Book"
	["author"]	=>		string(10) "R. Kipling"
	["description"]=>	string(15) "A classic book."
	}
	["Moonwalker"]	=>	object(Book)#4 (3) {
	["title"]	=>		string(10) "Moonwalker"
	["author"]	=>		string(9) "J. Walker"
	["description"]	=>	string(0) ""
	}
	["PHP for Dummies"]=>	object(Book)#5 (3) {
	["title"]	=>		string(14) "PHP or Dummies"
	["author"]	=>		string(14) "Some Smart Guy"
	["description"]=>	string(0) ""
	}
	echo "<pre>";
	var_dump($books);
	echo "</pre>";
	exit();
	*/
		foreach ($books as $title => $book)
		{
			echo '<tr>
					<td colspan="3">'.$title.'</td>
				  </tr>';
			echo '<tr>
				  	<td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td>
					<td>'.$book->author.'</td>
					<td>'.$book->description.'</td>
				  </tr>';
			echo '<tr>
				  	<td>&nbsp;</td>
				  	<td>&nbsp;</td>
				  	<td>&nbsp;</td>
				  </tr>';
		}

	?>
</table>

</body>
</html>