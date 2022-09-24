<?php
	$Link = mysqli_connect("host", "user", "password", "db");
	if (!$Link) 
	{
		echo "Ошибка: Невозможно установить соединение с MySQL.";
		exit;
	}
	mysqli_set_charset($Link, 'utf8'); 

	function Select($Link, $Column, $db, $Where)
	{
		$A1 = $Link->query("SELECT " . $Column . " FROM " . $db . " WHERE " . $Where);
		$A2 = $A1->fetch_array(MYSQLI_ASSOC);
		$result=$A2[$Column];
		return $result;
	}

	function GetPost($Post) //::::::
	{
		if(isset($_POST[$Post])) { $Post = $_POST[$Post]; }
		$Post = mb_convert_encoding($Post, 'windows-1251', mb_detect_encoding($Post));
		$Post = trim($Post);
		$Post = stripslashes($Post);
		return $Post;
	}

	function GetGet($Get) //::::::
	{
		if(isset($_GET[$Get])) { $Get = $_GET[$Get]; }
		$Get = mb_convert_encoding($Get, 'windows-1251', mb_detect_encoding($Get));
		$Get = trim($Get);
		$Get = stripslashes($Get);
		return $Get;
	}
?>