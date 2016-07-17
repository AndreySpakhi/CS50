<?php

                // configuration
    require("../includes/config.php"); 
               // render
        $rows = CS50::query("SELECT name, thickness, fillfactor FROM corematerial");

        $corematerials = [];
        foreach ($rows as $row)
        {

                $corematerials[] = [
                    "name" => $row["name"],
                    "thickness" => $row["thickness"],
                    "fillfactor" => $row["fillfactor"],
                ];

        }
    render("corematerial_form.php", ["corematerials" => $corematerials, "title" => "Core materials"]);

?>