<?php
    // configuration
    require("../includes/config.php"); 
    
    $actions = CS50::query("SELECT id, user, action, date FROM events");
    render("event_form.php", ["actions" => $actions, "title" => "Events"]);
?>