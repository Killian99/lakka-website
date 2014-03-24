<?php
	$step = isset($_GET['step']) ? $_GET['step'] : 1;
	include "includes/steps.php";
?>

<div class="container">

	<?php include "includes/step_" . $step . ".php"; ?>

</div>

<?php include "includes/steps.php"; ?>
