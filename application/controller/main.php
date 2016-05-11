<?php

class Main extends Controller {

	public function index()
	{
		require APP . 'view/main/index.php';
	}

	public function information()
	{
		require APP . 'view/main/information.php';
	}

	public function info()
	{
		require APP . 'view/main/info.php';
	} 	

	public function leaderboard()
	{
		require APP . 'model/leaderboard.php';
        require APP . 'view/main/leaderboard.php';
	}

	public function error()
	{
		require APP . 'view/main/error.php';
	}

}