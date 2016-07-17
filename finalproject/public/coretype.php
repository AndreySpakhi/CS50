<?php

                // configuration
    require("../includes/config.php"); 
               // render portfolio
        $rows = CS50::query("SELECT description, h_section, v_section, g_section, t_section FROM coretype");

        $coretypes = [];
        foreach ($rows as $row)
        {

                $coretypes[] = [
                    "description" => $row["description"],
                    "h_section" => $row["h_section"],
                    "v_section" => $row["v_section"],
                    "g_section" => $row["g_section"],
                    "t_section" => $row["t_section"],
                ];

        }
    render("coretype_form.php", ["coretypes" => $coretypes, "title" => "Core types"]);

?>