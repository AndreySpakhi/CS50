<?php
 // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("add_material_form.php", ["title" => "New"]);
    }
    else
    {
        if (empty($_POST["name"]))
        {
            apologize ("Please input name");
        }
        if (empty($_POST["thickness"]))
        {
            apologize ("Please input thickness");
        }
        if (empty($_POST["fillfactor"]))
        {
            apologize ("Please input fillfactor");
        }
        $addcorematerial = CS50::query("INSERT INTO corematerial (name, thickness, fillfactor) VALUES (?, ?, ?)",$_POST["name"], $_POST["thickness"], $_POST["fillfactor"]);
        if (!$addcorematerial)
        {
            apologize("Material already exists.");
        }
        render ("edit_reference_form.php", ["title" => "Edit data"]);
    }
?>