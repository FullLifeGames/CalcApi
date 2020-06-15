<?php
	if (isset($_GET['ownPokemon']) && isset($_GET['oppPokemon']) && isset($_GET['tier'])) {
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

				function getSearchParameters() {
					var prmstr = window.location.search.substr(1);
					return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
				}

				function transformToAssocArray( prmstr ) {
					var params = {};
					var prmarr = prmstr.split("&");
					for ( var i = 0; i < prmarr.length; i++) {
						var tmparr = prmarr[i].split("=");
						params[tmparr[0]] = tmparr[1];
					}
					return params;
				}

				function handleInput(input) {
					var handledInput = input;
					handledInput = handledInput.charAt(0).toUpperCase() + handledInput.slice(1);
					if (handledInput.indexOf('-') !== -1) {
						var charIndex = handledInput.lastIndexOf('-') + 1;					
						handledInput = handledInput.slice(0, charIndex) + handledInput.charAt(charIndex).toUpperCase() + handledInput.slice(charIndex + 1);
					}
					return handledInput;
				}
				
				function getDifference(a, b)
				{
					var i = 0;
					var j = 0;
					var result = "";

					while (j < b.length)
					{
						if (a[i] != b[j] || i == a.length)
							result += b[j];
						else
							i++;
						j++;
					}
					return result;
				}

				function argmin( arr ) {
					if ( !Array.isArray( arr ) ) {
						throw new TypeError( 'argmin()::invalid input argument. Must provide an array.' );
					}
					var len = arr.length,
						min = arr[ 0 ],
						idx = [ 0 ],
						val;

					for ( var i = 1; i < len; i++ ) {
						val = arr[ i ];
						if ( val < min ) {
							min = val;
							idx.length = 0;
							idx.push( i );
						}
						else if ( val === min ) {
							idx.push( i );
						}
					}
					return idx;
				}

				function getSetPokemon(setdex, pokemon) {
					if (pokemon in setdex) {
						return pokemon;
					}
					var setKeys = Object.keys(setdex);
					for (var i = 0; i < setKeys.length; i++) {
						if (setKeys[i].indexOf(pokemon) !== -1) {
							return setKeys[i];
						}
					}
					var chosenKey = argmin(setKeys.map((f) => getDifference(pokemon, f).length));
					pokemon = setKeys[chosenKey[0]];
					return pokemon;
				}

				var getParameters = getSearchParameters();

				var ownPokemon = getParameters['ownPokemon'];
				ownPokemon = handleInput(ownPokemon);
				var oppPokemon = getParameters['oppPokemon'];
				oppPokemon = handleInput(oppPokemon);

				var generation = parseInt(getParameters['tier'][3]);
				var mode = getParameters['tier'].slice(4);
				var setdex = SETDEX[generation];

				ownPokemon = getSetPokemon(setdex, ownPokemon);
				var setsOwn = setdex[ownPokemon];
				oppPokemon = getSetPokemon(setdex, oppPokemon);
				var setsOpp = setdex[oppPokemon];
				var owncalcs = {};
				var oppcalcs = {}

				var gen = new Generation(generation);

				var hasOwnCustomSet = false;
				if ("Custom Set" in setsOwn) {
					hasOwnCustomSet = true;
				}
				var hasOppCustomSet = false;
				if ("Custom Set" in setsOpp) {
					hasOppCustomSet = true;
				}
				
				function isTierAvailable(setCompilation) {
					for (var key in setCompilation) {
						if (key.toLowerCase().indexOf(mode + " ") !== -1) {
							return true;
						}
					}
					return false;
				}

				var ownTierAvailable = isTierAvailable(setsOwn);

				for (var key in setsOwn) {
					if (hasOwnCustomSet && "Custom Set" !== key) {
						continue;
					}
					if (ownTierAvailable && key.toLowerCase().indexOf(mode + " ") === -1 && !hasOwnCustomSet) {
						continue;
					}
					owncalcs[key] = {};
					var setOwn = setsOwn[key];
					translateEvs(setOwn);

					var oppTierAvailable = isTierAvailable(setsOpp);

					for (var key2 in setsOpp) {
						if (hasOppCustomSet && "Custom Set" !== key2) {
							continue;
						}
						if (oppTierAvailable && key2.toLowerCase().indexOf(mode + " ") === -1 && !hasOppCustomSet) {
							continue;
						}
						var setOpp = setsOpp[key2];
						if (!(key2 in oppcalcs)) {
							oppcalcs[key2] = {};
						}
						if (!(key2 in owncalcs[key])) {
							owncalcs[key][key2] = [];
						}
						if (!(key in oppcalcs[key2])) {
							oppcalcs[key2][key] = [];
						}
						translateEvs(setOpp);
						var pokeOwn = new Pokemon(gen, ownPokemon, setOwn);
						if ("evs" in setOwn) pokeOwn.evs = setOwn.evs;
						var pokeOpp = new Pokemon(gen, oppPokemon, setOpp);	
						if ("evs" in setOpp) pokeOpp.evs = setOpp.evs;
						for (var i = 0; i < pokeOwn.moves.length; i++) {
							var moveOwn = new Move(gen, pokeOwn.moves[i]);
							for (var j = 0; j < pokeOpp.moves.length; j++) {
								var calc = calculate(generation, pokeOwn, pokeOpp, moveOwn, undefined);
								var desc = calc.fullDesc(notation, null);
								var def = calc.rawDesc.moveName;
								var range = desc.substr(desc.lastIndexOf('('));
								range = range.substr(0, range.indexOf(')') + 1);
								def = def + ': ' + range;
								owncalcs[key][key2].push(def);
							}
						}
						for (var j = 0; j < pokeOpp.moves.length; j++) {
							var moveOpp = new Move(gen, pokeOpp.moves[j]);
							for (var i = 0; i < pokeOwn.moves.length; i++) {
								var calc = calculate(generation, pokeOpp, pokeOwn, moveOpp, undefined);
								var desc = calc.fullDesc(notation, null);
								var def = calc.rawDesc.moveName;
								var range = desc.substr(desc.lastIndexOf('('));
								range = range.substr(0, range.indexOf(')') + 1);
								def = def + ': ' + range;
								oppcalcs[key2][key].push(def);
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
				function handleCalcs(key, list) {
					output += '<th scope="row">';
					output += key;
					output += '</th>';
					for (var k in list) {
						list[k] = list[k].filter(onlyUnique);
						list[k] = list[k].filter(onlyDamage);
						output += '<td>';

						output += '<ul class="list-group">';

						for (var listKey in list[k]) {			
							var listVal = list[k][listKey];				
							var move = listVal.substr(0, listVal.lastIndexOf(':'));
							var percentage = listVal.substr(listVal.lastIndexOf(':') + 2);
							percentage = percentage.replace('(', '').replace(')', '');
							output += '<li class="list-group-item"><span class="badge">';
							output += percentage;
							output += '</span>';
							output += move;
							output += '</li>';
						}

						output += '</ul>';
						
						output += '</td>';
					}
				}
				
				output += '<table class="table table-condensed">';
				output += '<thead><th scope="col">' + ownPokemon + '</th>';
				for (var key in oppcalcs) {
					output += '<th scope="col">' + oppPokemon + ' - ' + key + '</th>';
				}
				output += '</thead>';
				output += '<tbody>';
				for (var key in owncalcs) {					
					output += '<tr>';
					handleCalcs(key, owncalcs[key]);
					output += '</tr>';
				}
				output += '</tbody></table>';
				

				output += '<table class="table table-condensed">';
				output += '<thead><th scope="col">' + oppPokemon + '</th>';
				for (var key in owncalcs) {
						output += '<th scope="col">' + ownPokemon + ' - ' + key + '</th>';
				}
				output += '</thead>';
				output += '<tbody>';

				for (var key in oppcalcs) {
					output += '<tr>';
					handleCalcs(key, oppcalcs[key]);
					output += '</tr>';
				}
				output += '</tbody></table>';

				$('#results').html(output);
		});
                </script>
	</body>
</html>
<?php
	}
?>
