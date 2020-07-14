// Pure private utility

declare class Field {
  weather?: any;
  terrain?: any;
  constructor(field: Field);
}

const getDifference = (a: string, b: string): string => {
  let i = 0;
  let j = 0;
  let result = '';

  while (j < b.length) {
    if (a[i] != b[j] || i == a.length) result += b[j];
    else i++;
    j++;
  }
  return result;
};

const argmin = (arr: number[]) => {
  if (!Array.isArray(arr)) {
    throw new TypeError(
      'argmin()::invalid input argument. Must provide an array.'
    );
  }
  const len = arr.length;
  let min = arr[0];
  const idx = [0];
  let val;

  for (let i = 1; i < len; i++) {
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

const onlyUnique = (value: string, index: any, self: any) => {
  return self.indexOf(value) === index;
};

const onlyDamage = (value: string) => {
  return value.indexOf('0 - 0%') === -1;
};

const handleCalcs = (output: string, key: string, list: any) => {
  output += '<th scope="row">';
  output += key;
  output += '</th>';
  for (const k in list) {
    list[k] = list[k].filter(onlyUnique);
    list[k] = list[k].filter(onlyDamage);
    output += '<td>';

    output += '<ul class="list-group">';

    for (const listKey in list[k]) {
      const listVal = list[k][listKey];
      const move = listVal.substr(0, listVal.lastIndexOf(':'));
      let percentage = listVal.substr(listVal.lastIndexOf(':') + 2);
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

const translateEvs = (pokeInfo: any) => {
  if ('at' in pokeInfo.evs) pokeInfo.evs.atk = pokeInfo.evs.at;
  if ('df' in pokeInfo.evs) pokeInfo.evs.def = pokeInfo.evs.df;
  if ('sa' in pokeInfo.evs) pokeInfo.evs.spa = pokeInfo.evs.sa;
  if ('sd' in pokeInfo.evs) pokeInfo.evs.spd = pokeInfo.evs.sd;
  if ('sp' in pokeInfo.evs) pokeInfo.evs.spe = pokeInfo.evs.spe;
};

const getSearchParameters = (): any => {
  const prmstr = window.location.search.substr(1);
  return prmstr != null && prmstr != '' ? transformToAssocArray(prmstr) : {};
};

const transformToAssocArray = (prmstr: string) => {
  const params = {} as any;
  const prmarr = prmstr.split('&');
  for (let i = 0; i < prmarr.length; i++) {
    const tmparr = prmarr[i].split('=');
    params[tmparr[0]] = tmparr[1];
  }
  return params;
};

const handleInput = (input: string) => {
  let handledInput = input;
  handledInput = handledInput.charAt(0).toUpperCase() + handledInput.slice(1);
  if (handledInput.indexOf('-') !== -1) {
    const charIndex = handledInput.lastIndexOf('-') + 1;
    handledInput =
      handledInput.slice(0, charIndex) +
      handledInput.charAt(charIndex).toUpperCase() +
      handledInput.slice(charIndex + 1);
  }
  return handledInput;
};

const getSetPokemon = (setdex: any, pokemon: string) => {
  if (pokemon in setdex) {
    return pokemon;
  }
  const setKeys = Object.keys(setdex);
  for (let i = 0; i < setKeys.length; i++) {
    if (setKeys[i].indexOf(pokemon) !== -1) {
      return setKeys[i];
    }
  }
  const chosenKey = argmin(
    setKeys.map((f) => getDifference(pokemon, f).length)
  );
  pokemon = setKeys[chosenKey[0]];
  return pokemon;
};

const isTierAvailable = (setCompilation: any, mode: string) => {
  for (const key in setCompilation) {
    if (key.toLowerCase().indexOf(mode + ' ') !== -1) {
      return true;
    }
  }
  return false;
};

declare let notation: any;
declare class Move {
  constructor(gen: any, poke: any);
}
declare function calculate(
  generation: any,
  pokeOwn: any,
  pokeOpp: any,
  moveOwn: any,
  filler: any
): any;

const describeCalcs = (
  pokeOwn: any,
  gen: any,
  pokeOpp: any,
  generation: any,
  weather: any, 
  terrain: any,
  calcs: any,
  key: any,
  key2: any
): void => {
  for (let i = 0; i < pokeOwn.moves.length; i++) {
    const moveOwn = new Move(gen, pokeOwn.moves[i]);
    for (let j = 0; j < pokeOpp.moves.length; j++) {
      const calc = calculate(generation, pokeOwn, pokeOpp, moveOwn, new Field({ weather, terrain }));
      const desc = calc.fullDesc(notation, null);
      let def = calc.rawDesc.moveName;
      let range = desc.substr(desc.lastIndexOf('('));
      range = range.substr(0, range.indexOf(')') + 1);
      def = def + ': ' + range;
      calcs[key][key2].push(def);
    }
  }
};

const handleOutput = (
  ownPokemon: string,
  oppPokemon: string,
  owncalcs: any,
  oppcalcs: any
): string => {
  let output = '';
  output += '<table class="table table-condensed">';
  output += '<thead><th scope="col">' + ownPokemon + '</th>';
  for (const key in oppcalcs) {
    output += '<th scope="col">' + oppPokemon + ' - ' + key + '</th>';
  }
  output += '</thead>';
  output += '<tbody>';
  for (const key in owncalcs) {
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
