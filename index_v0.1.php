<?php
	if (isset($_GET['ownPokemon']) && isset($_GET['oppPokemon']) && isset($_GET['generation'])) {
?>
<html>
	<head>
		<style>
			.notshown {
				display: none;
			}
		</style>
	</head>
	<body>
		<div id="results" />
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
				var owncalcs = [];
				var oppcalcs = []

				var gen = new Generation(generation);

				for (var key in setsOwn) {
					var setOwn = setsOwn[key];
					translateEvs(setOwn);
					for (var key2 in setsOpp) {
						var setOpp = setsOpp[key2];
						translateEvs(setOpp);
						var pokeOwn = new Pokemon(gen, ownPokemon, setOwn);
						if ("evs" in setOwn) pokeOwn.evs = setOwn.evs;
						var pokeOpp = new Pokemon(gen, oppPokemon, setOpp);	
						if ("evs" in setOpp) pokeOpp.evs = setOpp.evs;
						for (var i = 0; i < pokeOwn.moves.length; i++) {
							var moveOwn = new Move(gen, pokeOwn.moves[i]);
							for (var j = 0; j < pokeOpp.moves.length; j++) {
								owncalcs.push(calculate(generation, pokeOwn, pokeOpp, moveOwn, undefined).fullDesc(notation, null));
							}
						}
						for (var j = 0; j < pokeOpp.moves.length; j++) {
							var moveOpp = new Move(gen, pokeOpp.moves[j]);
							for (var i = 0; i < pokeOwn.moves.length; i++) {
								var moveOpp = new Move(gen, pokeOpp.moves[j]);
								oppcalcs.push(calculate(generation, pokeOpp, pokeOwn, moveOpp, undefined).fullDesc(notation, null));
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
				owncalcs = owncalcs.filter(onlyUnique);	
				owncalcs = owncalcs.filter(onlyDamage);
				owncalcs.sort().reverse();
				oppcalcs = oppcalcs.filter(onlyUnique);
				oppcalcs = oppcalcs.filter(onlyDamage);
				oppcalcs.sort().reverse();
                                $('#results').html(owncalcs.join("<br>") + "<br>====================================<br>" + oppcalcs.join("<br>"));
                        });
                </script>
	</body>
</html>
<?php
	}
?>
