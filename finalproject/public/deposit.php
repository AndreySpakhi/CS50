<?php
 require("../includes/config.php");
  //if info not supplied, go to proper form
 if($_SERVER["REQUEST_METHOD"]=="GET")
 {
    render("deposit_form.php");
 }
 
 else
 {
     $rows =  CS50::query("UPDATE users SET cash = cash+?", $_POST["deposit"]);
 }
 redirect("/index.php");
 
?>