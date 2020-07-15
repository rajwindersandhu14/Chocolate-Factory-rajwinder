




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?=$page_title ?> </title>
</head>
<style>
    h1
{
    background-image:url("images/cc1.jpg");
}
#menu-links
{
  //display:inline;
text-align:center;
//margin-left: 200px;  
padding:50px;
color:white;

}
 
 #anch   
 {
     color:blue;
     font-size:75px;

 }


</style>

<body>
<header>

<h1 id="headd" style="background-color:chocolate ;height:500px ">

<?=  '<p align="center">' ,    $page_title , '</p>'   ?>
<div id="menu-links">
    <a href="<?= dirname($_SERVER['PHP_SELF']) . '/index_1.php'  ?>"  id= "anch" >MENU</a> <br>
    <a href="<?= dirname($_SERVER['PHP_SELF']) . '/login.php' ?>"  id="anch">(ADMIN)LOG-IN</a> <br>
    <a href="<?= dirname($_SERVER['PHP_SELF']) . '/db.php' ?>" id ="anch">Catalog</a>  <br>

     
    </div>
</h1>





<div>
</div>
</header>