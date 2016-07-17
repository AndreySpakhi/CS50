<?php

                // configuration
    require("../includes/config.php"); 
               // render portfolio
        $rows = CS50::query("SELECT number, country, transformertype, date FROM calculationinfo 
                        INNER JOIN calculation ON calculationinfo.calculationid = calculation.id
                        INNER JOIN users ON calculation.owner = users.id WHERE users.id = ?",$_SESSION["id"]);

        $mycalculations = [];
        foreach ($rows as $row)
        {

                $mycalculations[] = [
                    "number" => $row["number"],
                    "country" => $row["country"],
                    "transformertype" => $row["transformertype"],
                    "date" => $row["date"],
                ];

        }
    render("my_calc_form.php", ["mycalculations" => $mycalculations, "title" => "User"]);

?>