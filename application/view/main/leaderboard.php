<nav>
	<a href="<?php echo URL; ?>" ><button class="marginFix" >Home</button></a>
	<button class="marginFix selected">Leaderboard</button>
	<a href="<?php echo URL; ?>main/information" class="marginFix" ><button>Information</button></a>
	<a href="https://www.google.com" ><button>Quit</button></a>
</nav>
<?php
readScore('USER', 'SCORE');
?>
