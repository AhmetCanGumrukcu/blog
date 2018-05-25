<?php

include_once("./dbconnect.php");

error_reporting(E_ALL ^ E_NOTICE);

// ini_set('display_errors', 'On');
// error_reporting(E_ALL);



if(isset($_POST)){

    ///// Contact page

    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];
    $map = $_POST["map"];

    $contactQuery = $db->prepare("INSERT INTO contact SET
    email = ?,
    phone = ?,
    adress = ?,
    map = ?");

    $contactInsert = $contactQuery->execute(array(
        $email, $phone, $adress , $map
    ));
    
    if ( $contactInsert ){
        $last_id = $db->lastInsertId();
        print "insert işlemi başarılı!";
    }


    /////// Settings page

    $username = $_POST["username"];
    $password = $_POST["password"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $keywords = $_POST["keywords"];
    $logo = $_POST["logo"];

    $settingsQuery = $db->prepare("INSERT INTO seo SET
    username = ?,
    password = ?,
    title = ?,
    description = ?,
    keywords = ?,
    logo = ?");

    $settingsInsert = $settingsQuery->execute(array(
        $username , $password, $title, $description, $keywords , $logo
    ));

    $loginQuery = $db->prepare("INSERT INTO login SET
    username = ?,
    password = ?
    ");

    $loginInsert = $loginQuery->execute(array(
        $username , $password
    ));

    if ( $settingsInsert){
        $last_id = $db->lastInsertId();
        print "Settings işlemi başarılı!";
    }

    /////// Category page

    $category = $_POST["category"];

    $categoryQuery = $db->prepare("INSERT INTO category SET
    category = ?"
    );

    $categoryInsert = $categoryQuery->execute(array(
        $category
    ));

    if ( $categoryInsert){
        $last_id = $db->lastInsertId();
        print "Kategori ekleme işlemi başarılı!";
    }

}


?>