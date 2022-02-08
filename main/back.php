<?php
session_start();
$_SESSION['post_id']--;
header("location:/");
