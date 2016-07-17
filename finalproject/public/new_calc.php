<?php
 // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("new_form.php", ["title" => "New"]);
    }
    else
    {
        if (empty($_POST["number"]))
        {
            apologize ("Please input number of calculation");
        }
        if (empty($_POST["country"]))
        {
            apologize ("Please input country");
        }
        if (empty($_POST["transformertype"]))
        {
            apologize ("Please input type of transformer");
        }
        $addnewcalc = CS50::query("INSERT INTO calculation (owner) VALUES (?)", $_SESSION["id"]);
        if (!$addnewcalc)
        {
            apologize("Calculation already exists.");
        }
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $lastid = $rows[0]["id"];
        $addnewcalcinfo = CS50::query("INSERT INTO calculationinfo (calculationid, number, country, transformertype, date)
                                    VALUES (?, ?, ?, ?, now())", $rows[0]["id"], $_POST["number"], $_POST["country"], $_POST["transformertype"]);
        $events = CS50::query("INSERT IGNORE INTO events (user, action, date) VALUES (?, 'CREATE', now())", $_SESSION["fullname"]);
        render ("calculation_form.php", ["currentcalc" => $lastid, "title" => "Calculation"]);
    }
?>