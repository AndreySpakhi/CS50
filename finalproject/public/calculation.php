<?php
 // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("calculation_form.php", ["title" => "Calculation"]);
    }
    else
    {
        if (empty($_POST["phases"]))
        {
            apologize ("Please input phases");
        }
        if (empty($_POST["voltagesides"]))
        {
            apologize ("Please input voltagesides");
        }
        if (empty($_POST["power"]))
        {
            apologize ("Please input power");
        }
        if (empty($_POST["frequency"]))
        {
            apologize ("Please input frequency");
        }
        if (empty($_POST["coolingtype"]))
        {
            apologize ("Please input coolingtype");
        }
        if (empty($_POST["coretype"]))
        {
            apologize ("Please input coretype");
        }
        if (empty($_POST["material"]))
        {
            apologize ("Please input material");
        }
        if (empty($_POST["thickness"]))
        {
            apologize ("Please input thickness");
        }
        if (empty($_POST["h_dim"]))
        {
            apologize ("Please input h_dim");
        }
        if (empty($_POST["v_dim"]))
        {
            apologize ("Please input v_dim");
        }
        if (empty($_POST["hv_windingstype"]))
        {
            apologize ("Please input hv_windingstype");
        }
        if (empty($_POST["mv_windingstype"]))
        {
            apologize ("Please input mv_windingstype");
        }
        if (empty($_POST["lv_windingstype"]))
        {
            apologize ("Please input lv_windingstype");
        }
        $rows = CS50::query("SELECT h_section, v_section, g_section, t_section FROM coretype WHERE description=?", $_POST["coretype"]);
        $row = $rows[0];
        $Hsection = $row["h_section"];
        $Vsection = $row["v_section"];
        $Gsection = $row["g_section"];
        $Tsection = $row["t_section"];
        
        $Dh = $_POST["h_dim"];
        $Dv = $_POST["v_dim"];
        
        $Vh = ($Hsection * 3.14 * $Dh / 4) * 400;
        $Vv = ($Vsection * 3.14 * $Dv / 4) * 400;
        $Vg = $Gsection * (((3.14 * $Dh / 4) * 200) + ((3.14 * $Dv / 4) * 200));
        $Vt = $Tsection * (((0.0755 * 3.14 * $Dv / 4) * 200) + ((3.14 * $Dv / 4) * 200));
        
        $Vsumm = $Vh + $Vv + $Vg + $Vt;
        
        $Msumm = $Vsumm * 7.8;
        
        $_SESSION["Mass"] = $Msumm;
        
        render ("calculation_result_form.php", ["title" => "Calculation Result"]);
       
    }
?>