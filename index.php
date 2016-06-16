<?php
require 'yapi/Slim/Slim.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$app = new Slim();

//index
$app->get('/','yindex');

//single category
$app->get('/category/:name','ysingle_cat'); //ysingle_cat on line 33 on this page

//user routes
require "routes/user.php";

$app->run();


function yindex()
{
	include "header.php";
    include "yindex.php";


}//end yindex


function ysingle_cat($name)
{
	include "controlers/cat/single_cat.php";
}//end ysingle_cat






?>
