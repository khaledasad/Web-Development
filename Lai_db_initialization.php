<?php
require_once('Lai_core_functions.php');

$conn = db_connect();

$sql = "CREATE TABLE categories(
catid       int         UNSIGNED    auto_increment  primary key,    
catname     char(60)    NOT NULL


    );";
my_sql_exec($conn, $sql);

$sql = "INSERT INTO categories VALUES(1, 'Internet');";

my_sql_exec($conn, $sql);

$sql = "INSERT INTO categories VALUES(2, 'Selft-help');";

my_sql_exec($conn, $sql);

$sql = "INSERT INTO categories VALUES(5, 'Fiction');";

my_sql_exec($conn, $sql);

$sql = "INSERT INTO categories VALUES(4, 'Gardening');";

my_sql_exec($conn, $sql);

$sql = "CREATE TABLE admin(
username char(16) NOT NULL PRIMARY KEY,
password char(40) NOT NULL
);";
my_sql_exec($conn, $sql);

$sql = "INSERT INTO admin VALUES('drlai', sha1('ITEC4450'));";
my_sql_exec($conn, $sql);
$sql = "INSERT INTO admin VALUES('kasad', asad('900086597'));";
my_sql_exec($conn, $sql);

$sql = "CREATE TABLE books(
isbn char(13) NOT NULL PRIMARY KEY,
author char(80),
title char(100),
catid int unsigned,
price float(4,2) NOT NULL,
description char(255)
);";
my_sql_exec($conn, $sql);

$sql = "
INSERT INTO books VALUES ('0672329166','Luke Welling and Laura Thomson','PHP and MySQL Web Development',1,49.99,
'PHP & MySQL Web Development teaches the reader to develop dynamic, secure e-commerce web sites. You will learn to integrate and implement these technologies by following real-world examples and working sample projects.');
";
my_sql_exec($conn, $sql);


$sql = "
INSERT INTO books VALUES ('067232976X','Julie Meloni','Sams Teach Yourself PHP, MySQL and Apache All-in-One',1,34.99,
'Using a straightforward, step-by-step approach, each lesson in this book builds on the previous ones, enabling you to learn the essentials of PHP scripting, MySQL databases, and the Apache web server from the ground up.');
";
my_sql_exec($conn, $sql);

$sql = "
INSERT INTO books VALUES ('0672319241','Sterling Hughes and Andrei Zmievski','PHP Developer\'s Cookbook',1,39.99,
'Provides a complete, solutions-oriented guide to the challenges most often faced by PHP developers\r\nWritten specifically for experienced Web developers, the book offers real-world solutions to real-world needs\r\n');
";
my_sql_exec($conn, $sql);




?>
