<?php
	if (isset($_GET['ownPokemon']) && isset($_GET['oppPokemon']) && isset($_GET['generation'])) {
?>
<html>
	<head>
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
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
			<?php include('body.php'); ?>
		</div>
		<script>
			$(function() {

				function translateEvs(pokeInfo) {
					if ("at" in pokeInfo.evs) pokeInfo.evs.atk = pokeInfo.evs.at;
					if ("df" in pokeInfo.evs) pokeInfo.evs.def = pokeInfo.evs.df;
					if ("sa" in pokeInfo.evs) pokeInfo.evs.spa = pokeInfo.evs.sa;
					if ("sd" in pokeInfo.evs) pokeInfo.evs.spd = pokeInfo.evs.sd;
					if ("sp" in pokeInfo.evs) pokeInfo.evs.spe = pokeInfo.evs.spe;
				}

				var ownPokemon = "<?php echo htmlentities($_GET['ownPokemon']); ?>";
				ownPokemon = ownPokemon.charAt(0).toUpperCase() + ownPokemon.slice(1);
				var oppPokemon = "<?php echo htmlentities($_GET['oppPokemon']); ?>";
				oppPokemon = oppPokemon.charAt(0).toUpperCase() + oppPokemon.slice(1);
				var generation = parseInt("<?php echo htmlentities($_GET['generation']); ?>");
				var setdex = SETDEX[generation];
				var setsOwn = setdex[ownPokemon];
				var setsOpp = setdex[oppPokemon];
				var owncalcs = {};
				var oppcalcs = {}

				var gen = new Generation(generation);

				for (var key in setsOwn) {
					owncalcs[key] = [];
					var setOwn = setsOwn[key];
					translateEvs(setOwn);
					for (var key2 in setsOpp) {
						var setOpp = setsOpp[key2];
						if (!(key2 in oppcalcs)) {
							oppcalcs[key2] = [];
						}
						translateEvs(setOpp);
						var pokeOwn = new Pokemon(gen, ownPokemon, setOwn);
						if ("evs" in setOwn) pokeOwn.evs = setOwn.evs;
						var pokeOpp = new Pokemon(gen, oppPokemon, setOpp);	
						if ("evs" in setOpp) pokeOpp.evs = setOpp.evs;
						for (var i = 0; i < pokeOwn.moves.length; i++) {
							var moveOwn = new Move(gen, pokeOwn.moves[i]);
							for (var j = 0; j < pokeOpp.moves.length; j++) {
								owncalcs[key].push(calculate(generation, pokeOwn, pokeOpp, moveOwn, undefined).fullDesc(notation, null));
							}
						}
						for (var j = 0; j < pokeOpp.moves.length; j++) {
							var moveOpp = new Move(gen, pokeOpp.moves[j]);
							for (var i = 0; i < pokeOwn.moves.length; i++) {
								oppcalcs[key2].push(calculate(generation, pokeOpp, pokeOwn, moveOpp, undefined).fullDesc(notation, null));
							}
						}
					}
				}

				function onlyUnique(value, index, self) { 
				    return self.indexOf(value) === index;
				}
				function onlyDamage(value, index, self) {
				    return value.indexOf("0 - 0%") === -1;
				}

				var output = '';
				var count = 1;
				function handleCalcs(key, list) {
					list = list.filter(onlyUnique);
					list = list.filter(onlyDamage);
					list.sort().reverse();
					
					output += '<div class="panel panel-default"><div class="panel-heading" style="text-align:center;"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion' + count + '" href="#collapse' + count + '">';
					output += key;
					output += '</a></h4></div><div id="collapse' + count + '" class="panel-collapse collapse"><div class="panel-body">';
					output += list.join("<br>");
					output += '</div></div></div>';

					count++;
				}

				output += '<div class="panel-group" id="accordion"><div class="panel panel-default"><div class="panel-heading" style="text-align:center;"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="false">'
				output += ownPokemon;
				output += '</a></h4></div><div id="collapse0" class="panel-collapse collapse" aria-expanded="true" style=""><div class="panel-body">';
				for (var key in owncalcs) {
					var list = owncalcs[key];
					handleCalcs(key, list);
				}
				output += '</div></div></div></div>';
				

				output += '<div class="panel-group" id="accordion' + count + '"><div class="panel panel-default"><div class="panel-heading" style="text-align:center;"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion' + count + '" href="#collapse' + count + '" aria-expanded="false">'
                                output += oppPokemon;
                                output += '</a></h4></div><div id="collapse' + count + '" class="panel-collapse collapse" aria-expanded="true" style=""><div class="panel-body">';
				count++;

				for (var key in oppcalcs) {
					var list = oppcalcs[key];
					handleCalcs(key, list);
				}

				output += '</div></div></div></div>';
				output += '</div>';

                                $('#results').html(output);
                        });
                </script>
	</body>
</html>
<?php
	}
?>
