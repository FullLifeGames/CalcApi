<?php
	if (isset($_GET['ownPokemon']) && isset($_GET['oppPokemon']) && isset($_GET['tier'])) {
?>
<html>
	<head>
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<style>
			.notshown {
				display: none;
			}
		</style>
	</head>
	<body>
		<p />
		<div id="results" class="container" />
		<div class="notshown">
	        <?php include('body.html'); ?>
		</div>
		<script type="module" type="text/javascript">
			<?php include('injection.js'); ?>
		</script>
	</body>
</html>
<?php
	}
?>
