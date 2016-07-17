<?php
 // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("add_coretype_form.php", ["title" => "New"]);
    }
    else
    {
        if (empty($_POST["description"]))
        {
            apologize ("Please input description");
        }
        if (empty($_POST["h_section"]))
        {
            apologize ("Please input h_section");
        }
        if (empty($_POST["v_section"]))
        {
            apologize ("Please input v_section");
        }
        if (empty($_POST["g_section"]))
        {
            apologize ("Please input g_section");
        }
        if (empty($_POST["t_section"]))
        {
            apologize ("Please input t_section");
        }
        
        $addcorematerial = CS50::query("INSERT INTO coretype (description, h_section, v_section, g_section, t_section) VALUES (?, ?, ?, ?, ?)", $_POST["description"], $_POST["h_section"], $_POST["v_section"], $_POST["g_section"], $_POST["t_section"]);
        if (!$addcorematerial)
        {
            apologize("Core type already exists.");
        }
        render ("edit_reference_form.php", ["title" => "Edit data"]);
    }
?>