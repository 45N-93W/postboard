<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="journal ">
    <style type="text/css">
          header {
            color: white;
            background: gray;
        }

        .nav-menu .nav-list {
            display: inline-block;
            padding: 4px;
        }

        .nav-list .nav-list li a {
            display: inline-block;
            list-style-type: none;
        }

    </style>
</head>

<body>
    <header>about page</header>
    <nav class="nav-menu">
        <ul class="nav-list">
            <li class="active">
                <a href="/">Home</a>
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
        <div class="page">
            <h1>about me</h1>
            <h3>bio></h3>
            <p>php and python and technology and science society</p>


        </div>
    </main>
</body>

</html>