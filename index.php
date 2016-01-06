<?php
/**
 * MASTER LOGIN SYSTEM
 * @author Mihai Ionut Vilcu (ionutvmi@gmail.com)
 * June 2013
 *
 */


include "inc/init.php";



$page->title = "Sveiki atvyke į ". $set->site_name;

$presets->setActive("home"); // we highlith the home link


include 'header.php';


echo "
<div class=\"container\">

<div class=\"hero-unit\">
    <h1>Sveikas ".$user->filter->username." </h1>
    <p>
        This is a template for a simple website. It includes a user system with signup, login, password recovery and many more. It's a perfect stratup for your projects.
    </p>";
if(!$user->islg()) {
    echo "<p>
        <a class=\"btn btn-primary btn-large\" href=\"$set->url/register.php\">Registruotis</a>
        <a class=\"btn btn-large\" href=\"$set->url/login.php\">Prisijungti</a>
    </p>";

}

echo "</div></div> <!-- /container -->";
include 'footer.php';
