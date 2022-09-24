<?php
	include "GeoQuestLib.php"; 

	$Login = GetPost('Login'); // Получение логина
	$Password = GetPost('Password'); // Получение пароля

	if(empty($Login) or empty($Password)) // Если какое-то из полей пустое
	{
		echo "Вы ввели не всю информацию, заполните все поля!";
		exit();
	}

	if(isset($Login) && isset($Password))
	{
		$Loginbd = Select($Link, 'Login', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'"); // Получение логина из базы данных
		$Passwordbd = Select($Link, 'Password', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'");  // Получение пароля из базы данных

		
		if($Passwordbd == $Password) //Проверка введенных данных
		{
			$id = Select($Link, 'id', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'");
			echo "Вы успешно авторизировались!/*/";
		}
		else{
			echo "Неправильный логин или пароль!";
			exit();
		}
	} 
	else{
		echo "Значение не пришло!";
		exit();
	}

	$Name = Select($Link, 'Name', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'");
	$School = Select($Link, 'School', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'");
	$Leaders = Select($Link, 'Leaders', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'");
	$Players = Select($Link, 'Players', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'");
	$Task = Select($Link, 'Task', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'");
	$Balls = Select($Link, 'Balls', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'");
	$Time = Select($Link, 'Time', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'");

	echo $id . "/*/" . $Login . "/*/" . $Password . "/*/" . $Name . "/*/" . $School . "/*/" . $Leaders . "/*/" . $Players . "/*/" . $Task . "/*/" . $Balls . "/*/" . $Time; // Вывод данных о команде в приложение
	
	mysqli_close($Link);
?>