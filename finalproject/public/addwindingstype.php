<?php
 // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("add_windingstype_form.php", ["title" => "New"]);
    }
    else
    {
        if (empty($_POST["description"]))
        {
            apologize ("Please input description");
        }
        $addwindingstype = CS50::query("INSERT INTO windingstype (description) VALUES (?)",$_POST["description"]);
        if (!$addwindingstype)
        {
            apologize("Winding type already exists.");
        }
        render ("edit_reference_form.php", ["title" => "Edit data"]);
    }
?>