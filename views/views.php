<?php
class Views
{
    public function __construct()
    {
    }
    public function Home()
    {
        header('Location:"/views/home/');
    }
    public function About()
    {
        header('Location:"/views/about/');
    }
    public function login()
    {
        header('Location:"/views/login/');
    }
}
