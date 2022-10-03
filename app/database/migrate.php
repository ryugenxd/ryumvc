<?php
$connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS);
$db = "CREATE DATABASE IF NOT EXISTS ".DB_NAME;
mysqli_query($connect,$db);
$tb = "CREATE TABLE IF NOT EXISTS ".TABEL1."(id INT NOT NULL AUTO_INCREMENT,
judul VARCHAR(100) NOT NULL,gambar TEXT NOT NULL,sinopsi TEXT NOT NULL,kategori VARCHAR(100) NOT NULL,
PRIMARY KEY (id))";
$ok = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_query($ok,$tb);
//echo "DATABASE SELESAI DIBUAT\n";