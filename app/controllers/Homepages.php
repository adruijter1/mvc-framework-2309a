<?php

class Homepages
{

    public function index($firstname = NULL, $infix = NULL, $lastname = NULL)
    {
        echo "Dit is de homepage! Welkom " . $firstname . " " . $infix . " " . $lastname;
    }
}