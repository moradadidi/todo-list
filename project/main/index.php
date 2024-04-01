<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>todo list</title>

    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php
  include_once "nav.php";
  ?>


    <!-- Header -->
    <header class="header" id="header">
        <div class="container flex">
            <div class="text">
                <h1 class="mb">
                    Your Digital Task Manager <br />
                    <span>to-do list </span>
                </h1>

                <p class="mb">
                    Organize, prioritize, and seize the day, with a to-do list web,
                     keeping distractions at bay. Stay focused, stay on track, let your goals lead the way.
                </p>

                <a href="http://127.0.0.1:122/project/contact/index.php" class="btn mt">Contact Us</a>
            </div>

            <div class="visual">
                <img src="OIG4..jpeg" alt="" />
            </div>
        </div>
    </header>
    
    <!-- End Header -->


    <!-- Footer -->
    <!-- <footer class="footer">
        <div class="container flex">
            <p class="tertiary">
                &copy; 2022 Programmer Cloud. All Rights Reserved.
            </p>
        </div>
    </footer> -->

    <!-- End Footer -->
    <!-- <script src="script.js"></script> -->
</body>

</html>