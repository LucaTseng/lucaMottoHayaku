<?php
// $[a-zA-Z][a-zA-Z0-9_]*
//盡量避免使用$$進行宣告
// 弱型別程式語言PHP, JavaScript => 強型別 Java
// php 用＄進行宣告,javascript不能用關鍵字宣告 但PHP可以
$var1 = 123; //integer
echo gettype($var1) . '<br />';   //字串相加用.來做
$var1 = 12.3; //double
echo gettype($var1) . '<br />';
$var1 = 'Brad'; //string 
echo gettype($var1) . '<br />';
$var1 = false; //boolean
echo gettype($var1) . '<br />';
$var1 = new DateTime(); //object
echo gettype($var1) . '<br />';
//從網頁裡面拿出來的任何東西 都只會是字串