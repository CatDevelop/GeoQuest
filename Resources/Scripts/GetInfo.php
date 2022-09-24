<?php
	include "GeoQuestLib.php"; 

	$Login = GetPost('Login'); // Получение логина
	$Password = GetPost('Password'); // Получение пароля

	$id = Select($Link, 'id', "`GeoTeam`", "`Login`='".$Login."' AND `Password`='".$Password."'");
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
