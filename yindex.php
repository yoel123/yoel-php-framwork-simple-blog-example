<?php 

$dsn = 'mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME;
$pdo = new PDO($dsn, DB_USER, DB_PASSWORD);

//category table
$cats =  new ycrud($pdo,"cat"); 
//posts table
$posts =  new ycrud($pdo,"post"); 
//call config table
$config =  new ycrud($pdo,"config"); 


$view = new Template(); 
$view->title = $cats->get_where("att_name = 'site_title'");; //config get title
$view->cats = $cats->get_all();//get all categories 
$view->posts = $posts->get_where("cat_id=1");//get where category = 1 = show on main page cat 
$view->site_title = $config->get_where("att_name='site_title'")[0];//get site title
	
//render
$view->content .= $view->render('templates/post/all_posts.ytpl') ; //all categories template
echo $view->render('templates/bootstrap.ytpl'); 

 ?>

