<?php

	$DB_HOST = 'mysql.1freehosting.com';
	$DB_USER = 'u763106475_test';
	$DB_PASS = 'saikat95';
	$DB_NAME = 'u763106475_test';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}