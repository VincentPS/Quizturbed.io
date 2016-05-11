<nav>
	<a href="<?php echo URL; ?>" ><button>Home</button></a>
	<a href="<?php echo URL; ?>main/leaderboard" ><button>Leaderboard</button></a>
	<a href="<?php echo URL; ?>main/information" ><button>Information</button></a>
	<a href="https://www.google.com" ><button>Quit</button></a>
</nav>
<?php
readScore('user', 'score');
?>