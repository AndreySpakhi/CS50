<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>CAD: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>CAD</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="CAD" src="/img/logo.png"/></a>
                </div>
                <?php if (!empty($_SESSION["id"])): ?>
                    <?php if ($_SESSION["permission"] == 0) : ?>
                        
                        <ul class="nav nav-pills">
                            <li><a>Welcome, <?= $_SESSION["fullname"] ?></a></li>
                            <li><a href="new_calc.php">New Calculation</a></li>
                            <li><a href="my_calc.php">My Calculations</a></li>
                            <li><a href="view_reference.php">View reference Data</a></li>
                            <li><a href="Chngpswd.php">Change password</a></li>
                            <li><a href="logout.php"><strong>Log Out</strong></a></li>
                        </ul>
                    <?php endif ?>
                    <?php if ($_SESSION["permission"] == 1) : ?>
                    
                        <ul class="nav nav-pills">
                            <li><a>Welcome, <?= $_SESSION["fullname"] ?></a></li>
                            <li><a href="all_calc.php">All Calculations</a></li>
                            <li><a href="view_reference.php">View reference Data</a></li>
                            <li><a href="edit_reference.php">Edit Reference Data</a></li>
                            <li><a href="event.php">Event Log</a></li>
                            <li><a href="Chngpswd.php">Change password</a></li>
                            <li><a href="logout.php"><strong>Log Out</strong></a></li>
                        </ul>
                    <?php endif ?>
                <?php endif ?>
            </div>

            <div id="middle">

