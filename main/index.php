<!doctype html>
<html>
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="journal ">
    <meta name="description" content="journal ">
    <style type="text/css">
        body {
            transition:1s;
        }
        header {
            color: white;
            background: gray;
        }

        .nav-menu .nav-list {
            display: inline-block;
            padding: 4px;
        }

        .nav-list .nav-list a {
            display: inline-block;
            list-style-type: none;
        }
    </style>
    <script>
        function SetDarkTheme() {
           document.body.style.background = "black";
           document.body.style.color = "white";
           var header = document.getElementByTagNames("header");
           header[0].item(0).style.background = "white";
           
        }

        function SetLightTheme() {
            document.body.style.background = "white";
            document.body.style.color = "black";
            var header = document.getElementByTagNames("header");
           header[0].item(0).style.background = "black";


        }
    </script>
</head>

<body id="page">
    <header>about page</header>
    <nav class="nav-menu">
        <ul class="nav-list">
            <li class="active">
                <a href="../main">Home</a>
            </li>
            <li>
                <a href="../about">About</a>
            </li>
            <li>
                <a href="../settings">Settings</a>
            </li>

        </ul>
    </nav>
    <main>
        <?php

        $host = "localhost";
        $username = "aheisleycook";
        $password = "A714708o";
        $db = new mysqli("localhost", $username, $password, "journal");
        $posts = $db->query("SELECT * FROM POSTS")->fetch_Array();
        echo "$posts[1] $posts[2] ";

        ?>
        <button onclick="SetDarkTheme();">dark</button>
        <button onclick="SetLightTheme();">light</button>
    </main>
</body>

</html>