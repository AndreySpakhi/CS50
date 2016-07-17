<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
         // validate submission
        if (empty($_POST["fullname"]))
        {
            apologize("You must provide your fullname.");
        }
        if (empty($_POST["username"]))
        {
            apologize("You must provide your login.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
         else if (empty($_POST["confirmation"]))
        {
            apologize("You must provide your confirmation password.");
        }
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Passwords do not match.");
        }
        $check = CS50::query("INSERT IGNORE INTO users (fullname, login, password, permission) VALUES(?, ?, ?, 0)",
                $_POST["fullname"], $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
        
        if (!$check)
        {
            apologize("User already exists.");
        }
        //apologize("User created successfully.");
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        $_SESSION["id"] = $id;
        $_SESSION["permission"] = 0;
        $_SESSION["fullname"] = $_POST["fullname"];
        $events = CS50::query("INSERT IGNORE INTO events (user, action, date) VALUES (?, 'REGISTRATION', now())", $_POST["fullname"]);
        redirect("/index.php");
        //redirect("/login.php");
    

    }

?>

