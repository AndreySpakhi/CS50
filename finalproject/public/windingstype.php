<?php

                // configuration
    require("../includes/config.php"); 
               // render portfolio
        $rows = CS50::query("SELECT description FROM windingstype");

        $windingtypes = [];
        foreach ($rows as $row)
        {

                $windingtypes[] = [
                    "description" => $row["description"],
                ];

        }
    render("windingstype_form.php", ["windingtypes" => $windingtypes, "title" => "Winding types"]);

?>