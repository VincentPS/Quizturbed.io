<nav>
	<a href="<?php echo URL; ?>" ><button class="marginFix" ><?=$nav1?></button></a>
	<button class="marginFix selected"><?=$nav2?></button>
	<a href="<?php echo URL; ?>main/information" class="marginFix" ><button><?=$nav3?></button></a>
	<a href="https://www.google.com" ><button><?=$nav4?></button></a>
</nav>
<?php
readScore('USER', 'SCORE');
?>
