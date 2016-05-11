<?php

class Leaderboard extends Controller
{

    public function index()
    {
        require APP . 'model/leaderboard.php';
        require APP . 'view/leaderboard/index.php';
    }


}