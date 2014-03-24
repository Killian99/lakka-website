<nav class="getlakka step<?php echo $step; ?>">
	<div class="container clearer">
		<?php if ($step > 1) { ?>
		<a class="previous" href="/getlakka?step=<?php echo $step - 1; ?>&amp;os=<?php echo $_GET['os']; ?>&amp;platform=<?php echo $_GET['platform']; ?>">Previous step</a>
		<?php } ?>
		<?php if ($step > 2 and $step < 6) { ?>
		<a class="next"     href="/getlakka?step=<?php echo $step + 1; ?>&amp;os=<?php echo $_GET['os']; ?>&amp;platform=<?php echo $_GET['platform']; ?>">Next step</a>
		<?php } ?>
	</div>
</nav>
