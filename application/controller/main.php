<?php

class Main extends Controller {

	public function index()
	{

		require APP . 'view/_templates/header_main.php';
		require APP . 'view/main/index.php';
		require APP . 'view/_templates/footer_main.php';
	}

	public function information()
	{
		require APP . 'view/_templates/header_main.php';
		require APP . 'view/main/information.php';
		require APP . 'view/_templates/footer_main.php';
	}

	public function info()
	{
		require APP . 'view/_templates/header_main.php';
		require APP . 'view/main/info.php';
		require APP . 'view/_templates/footer_main.php';
	} 	

	public function leaderboard()
	{
		require APP . 'view/_templates/header_main.php';
		require APP . 'model/leaderboard.php';
        require APP . 'view/main/leaderboard.php';
        require APP . 'view/_templates/footer_main.php';
	}

	public function error()
	{
		require APP . 'view/_templates/header_main.php';
		require APP . 'view/main/error.php';
		require APP . 'view/_templates/footer_main.php';
	}

}