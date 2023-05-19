<?php
include('../../Backend/config.php');
// include('header.php');
include('../../Backend/log_auth.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <link rel="stylesheet" href="../CSS/studentIndex.css">

</head>

<body>
    <header>
        <div class="logo">
            <h2>Routine Maker</h2>
        </div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <div class="logo">

            </div>
            <ul>
                <li>
                    <a href="./viewStreamSemSec.html">View</a>
                </li>

                <li>
                    <a href="../../Backend/logout.php">Logout</a>
                </li>
            </ul>
        </nav>

        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>
    <section>
        <h5>user id: <?php echo $row['uid']?></h5>
        <h1 class="fadein">Welcome <?php echo $row['name']?></h1>
    </section>

</body>

</html>