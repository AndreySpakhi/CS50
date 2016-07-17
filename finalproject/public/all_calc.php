<?php

                // configuration
    require("../includes/config.php"); 
   
    $rows = CS50::query("SELECT id, number, country, transformertype, date FROM calculationinfo");

        $allcalculations = [];
        foreach ($rows as $row)
        {
                    
                $allcalculations[] = [
                    "id" => $row["id"],
                    "number" => $row["number"],
                    "country" => $row["country"],
                    "transformertype" => $row["transformertype"],
                    "date" => $row["date"],
                ];
                   
        }
    render("all_calc_form.php", ["allcalculations" => $allcalculations, "title" => "All"]);

?>