<?php

class Main extends Controller {

	public function main()
	{
		require APP . 'view/main/main.php';
	}

	public function information()
	{
		require APP . 'view/main/disclaimer.php';
	}

	public function info()
	{
		require APP . 'view/main/info.php';
	} 	

	public function leaderboard()
	{
		require APP . 'view/leaderboard/index.php';
	}

	public function Question_1()
    {
		require APP . 'view/questions/question_1.php';
    }

    public function Question_2()
    {
		require APP . 'view/questions/question_2.php';
    }

    public function Question_3()
    {
		require APP . 'view/questions/question_3.php';
    }

    public function Question_4()
    {
		require APP . 'view/questions/question_4.php';
    }

    public function Question_5()
    {
		require APP . 'view/questions/question_5.php';
    }

    public function Question_6()
    {
		require APP . 'view/questions/question_6.php';
    }

    public function Question_7()
    {
		require APP . 'view/questions/question_7.php';
    }

    public function Question_8()
    {
		require APP . 'view/questions/question_8.php';
    }
}