<?php
     // configuration
require("../includes/config.php");
     // if user reached page via GET (as by clicking a link or via redirect)
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
         // else render form
         render("change_password_form.php", ["title" => "Change Password"]);
}
     // else if user reached page via POST (as by submitting a form via POST)
else if ($_SERVER["REQUEST_METHOD"] == "POST")
{
        // TODO
        // validate submission
        if (empty($_POST["old_password"]))
        {
            apologize("You must provide your old password.");
        }
        else if (empty($_POST["new_password"]))
        {
            apologize("You must provide a new password.");
        }
        else if (empty($_POST["new_confirmation"]))
        {
            apologize("You must provide a confirmation password");
        }
        else if ($_POST["new_password"] != $_POST["new_confirmation"])
        {
            apologize("Your password and confirmation password must match!");
        }
        
        $rows = CS50::query("SELECT hash FROM users WHERE id = ?", $_SESSION["id"]);
       
        if (password_hash($_POST["old_password"], PASSWORD_DEFAULT) == $rows[0]["hash"])
        // else change password
        {
            CS50::query("UPDATE users SET hash = ? where id = ?", password_hash($_POST["new_password"], PASSWORD_DEFAULT), $_SESSION["id"]);
            
            // redirect to index
        }
        redirect("/index.php");
}
?>