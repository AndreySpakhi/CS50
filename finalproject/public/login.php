<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your login.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        // query database for user
        $rows = CS50::query("SELECT * FROM users WHERE login = ?", $_POST["username"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (password_verify($_POST["password"], $row["password"]))
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];
                $_SESSION["permission"] = $row["permission"];
                $_SESSION["fullname"] = $row["fullname"];

                // redirect to portfolio
                $events = CS50::query("INSERT IGNORE INTO events (user, action, date) VALUES (?, 'LOG IN', now())", $_SESSION["fullname"]);
                redirect("/");
            }
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }

?>
