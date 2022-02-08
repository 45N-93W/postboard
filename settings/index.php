<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="journal ">
    <meta name="author" content="austin heisley-cook">
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
    <header>settings</header>
    <nav class="nav-menu">
        <ul class="nav navbar-nav nav">
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
        echo "<div class='user-info'>";
        echo "<b>current user:$_Session[username]</b>";

        echo "</div>";
        ?>
        <form method="POST" action="/settings/login.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <br>
            <input type="submit" value="Login">
        </form>
    </main>

</body>

</html>