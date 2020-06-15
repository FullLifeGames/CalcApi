import {
	translateEvs,
	getSearchParameters,
	handleInput,
	getSetPokemon,
	isTierAvailable,
	describeCalcs,
	handleOutput,
} from "./util.js";

$(function() {
	
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

	var ownTierAvailable = isTierAvailable(setsOwn, mode);

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

		var oppTierAvailable = isTierAvailable(setsOpp, mode);

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
			describeCalcs(pokeOwn, gen, pokeOpp, generation, owncalcs, key, key2);
			describeCalcs(pokeOpp, gen, pokeOwn, generation, oppcalcs, key2, key);
		}
	}

	var output = '';

	output += handleOutput(ownPokemon, oppPokemon, owncalcs, oppcalcs);
	output += handleOutput(oppPokemon, ownPokemon, oppcalcs, owncalcs);

	$('#results').html(output);
});
