import {
  translateEvs,
  getSearchParameters,
  handleInput,
  getSetPokemon,
  isTierAvailable,
  describeCalcs,
  handleOutput,
} from './util.js';

declare let SETDEX: any;
declare class Generation {
  constructor(generation: number);
}
declare class Pokemon {
  constructor(generation: Generation, pokemon: string, setOwn: any);
  evs: any;
}

$(function () {
  const getParameters = getSearchParameters();

  let ownPokemon = getParameters['ownPokemon'];
  ownPokemon = handleInput(ownPokemon);
  let oppPokemon = getParameters['oppPokemon'];
  oppPokemon = handleInput(oppPokemon);

  const generation = parseInt(getParameters['tier'][3]);
  const mode = getParameters['tier'].slice(4);
  const setdex = SETDEX[generation];

  ownPokemon = getSetPokemon(setdex, ownPokemon);
  const setsOwn = setdex[ownPokemon];
  oppPokemon = getSetPokemon(setdex, oppPokemon);
  const setsOpp = setdex[oppPokemon];
  const owncalcs = {} as any;
  const oppcalcs = {} as any;

  const gen = new Generation(generation);

  const hasOwnCustomSet = Object.values(setsOwn).some(
    (entry: any) => 'isCustomSet' in entry
  );
  const hasOppCustomSet = Object.values(setsOpp).some(
    (entry: any) => 'isCustomSet' in entry
  );

  const ownTierAvailable = isTierAvailable(setsOwn, mode);

  for (const key in setsOwn) {
    if (hasOwnCustomSet && !('isCustomSet' in setsOwn[key])) {
      continue;
    }
    if (
      ownTierAvailable &&
      key.toLowerCase().indexOf(mode + ' ') === -1 &&
      !hasOwnCustomSet
    ) {
      continue;
    }
    owncalcs[key] = {};
    const setOwn = setsOwn[key];
    translateEvs(setOwn);

    const oppTierAvailable = isTierAvailable(setsOpp, mode);

    for (const key2 in setsOpp) {
      if (hasOppCustomSet && !('isCustomSet' in setsOpp[key2])) {
        continue;
      }
      if (
        oppTierAvailable &&
        key2.toLowerCase().indexOf(mode + ' ') === -1 &&
        !hasOppCustomSet
      ) {
        continue;
      }
      const setOpp = setsOpp[key2];
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
      const pokeOwn = new Pokemon(gen, ownPokemon, setOwn);
      if ('evs' in setOwn) pokeOwn.evs = setOwn.evs;
      const pokeOpp = new Pokemon(gen, oppPokemon, setOpp);
      if ('evs' in setOpp) pokeOpp.evs = setOpp.evs;
      describeCalcs(pokeOwn, gen, pokeOpp, generation, owncalcs, key, key2);
      describeCalcs(pokeOpp, gen, pokeOwn, generation, oppcalcs, key2, key);
    }
  }

  let output = '';

  output += handleOutput(ownPokemon, oppPokemon, owncalcs, oppcalcs);
  output += handleOutput(oppPokemon, ownPokemon, oppcalcs, owncalcs);

  $('#results').html(output);
});
