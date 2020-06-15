// Pure private utility

const getDifference = (a, b) => {
	var i = 0;
	var j = 0;
	var result = "";

	while (j < b.length) {
		if (a[i] != b[j] || i == a.length)
			result += b[j];
		else
			i++;
		j++;
	}
	return result;
};

const argmin = (arr) => {
	if (!Array.isArray(arr)) {
		throw new TypeError('argmin()::invalid input argument. Must provide an array.');
	}
	var len = arr.length,
		min = arr[0],
		idx = [0],
		val;

	for (var i = 1; i < len; i++) {
		val = arr[i];
		if (val < min) {
			min = val;
			idx.length = 0;
			idx.push(i);
		} else if (val === min) {
			idx.push(i);
		}
	}
	return idx;
};

const onlyUnique = (value, index, self) => {
	return self.indexOf(value) === index;
}

const onlyDamage = (value, index, self) => {
	return value.indexOf("0 - 0%") === -1;
}

const handleCalcs = (output, key, list) => {
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
	return output;
};

// Exported functions

const translateEvs = (pokeInfo) => {
	if ("at" in pokeInfo.evs) pokeInfo.evs.atk = pokeInfo.evs.at;
	if ("df" in pokeInfo.evs) pokeInfo.evs.def = pokeInfo.evs.df;
	if ("sa" in pokeInfo.evs) pokeInfo.evs.spa = pokeInfo.evs.sa;
	if ("sd" in pokeInfo.evs) pokeInfo.evs.spd = pokeInfo.evs.sd;
	if ("sp" in pokeInfo.evs) pokeInfo.evs.spe = pokeInfo.evs.spe;
};

const getSearchParameters = () => {
	var prmstr = window.location.search.substr(1);
	return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
};

const transformToAssocArray = (prmstr) => {
	var params = {};
	var prmarr = prmstr.split("&");
	for (var i = 0; i < prmarr.length; i++) {
		var tmparr = prmarr[i].split("=");
		params[tmparr[0]] = tmparr[1];
	}
	return params;
};

const handleInput = (input) => {
	var handledInput = input;
	handledInput = handledInput.charAt(0).toUpperCase() + handledInput.slice(1);
	if (handledInput.indexOf('-') !== -1) {
		var charIndex = handledInput.lastIndexOf('-') + 1;
		handledInput = handledInput.slice(0, charIndex) + handledInput.charAt(charIndex).toUpperCase() + handledInput.slice(charIndex + 1);
	}
	return handledInput;
};

const getSetPokemon = (setdex, pokemon) => {
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
};
					
const isTierAvailable = (setCompilation, mode) => {
	for (var key in setCompilation) {
		if (key.toLowerCase().indexOf(mode + " ") !== -1) {
			return true;
		}
	}
	return false;
};

const describeCalcs = (pokeOwn, gen, pokeOpp, generation, calcs, key, key2) => {
	for (var i = 0; i < pokeOwn.moves.length; i++) {
		var moveOwn = new Move(gen, pokeOwn.moves[i]);
		for (var j = 0; j < pokeOpp.moves.length; j++) {
			var calc = calculate(generation, pokeOwn, pokeOpp, moveOwn, undefined);
			var desc = calc.fullDesc(notation, null);
			var def = calc.rawDesc.moveName;
			var range = desc.substr(desc.lastIndexOf('('));
			range = range.substr(0, range.indexOf(')') + 1);
			def = def + ': ' + range;
			calcs[key][key2].push(def);
		}
	}
};

const handleOutput = (ownPokemon, oppPokemon, owncalcs, oppcalcs) => {
	let output = '';
	output += '<table class="table table-condensed">';
	output += '<thead><th scope="col">' + ownPokemon + '</th>';
	for (var key in oppcalcs) {
		output += '<th scope="col">' + oppPokemon + ' - ' + key + '</th>';
	}
	output += '</thead>';
	output += '<tbody>';
	for (var key in owncalcs) {
		output += '<tr>';
		output = handleCalcs(output, key, owncalcs[key]);
		output += '</tr>';
	}
	output += '</tbody></table>';
	return output;
};

export {
	translateEvs,
	getSearchParameters,
	handleInput,
	getSetPokemon,
	isTierAvailable,
	describeCalcs,
	handleOutput,
};