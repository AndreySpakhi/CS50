<?php

                // configuration
    require("../includes/config.php"); 
    if ($_SESSION["permission"] == 0)
    {
                // render portfolio
        $rows = CS50::query("SELECT number, country, transformertype, date FROM calculationinfo 
                        INNER JOIN calculation ON calculationinfo.calculationid = calculation.id
                        INNER JOIN users ON calculation.owner = users.id WHERE users.id = ?",$_SESSION["id"]);
                //$balance = CS50::query("SELECT cash FROM users WHERE id = ?",$_SESSION["id"]);
                //$_SESSION["balance"] = $balance[0]["cash"];
    
        $calculations = [];
        foreach ($rows as $row)
        {
                    //$stock = lookup($row["symbol"]);
                    //if ($stock !== false)
                    //{
                $calculations[] = [
                    "number" => $row["number"],
                    "country" => $row["country"],
                    "transformertype" => $row["transformertype"],
                    "date" => $row["date"],
                ];
                    //}
        }
    render("user_form.php", ["calculations" => $calculations, "title" => "User"]);
    }
    else 
    {
        render("admin_form.php", ["title" => "User"]);
    }
?>
