<div aria-label="Settings" role="region">
        <span class="title-text">Pok&eacute;mon Damage Calculator</span>
        <span class="genSelection" aria-labelledby="selectGenInstruction" role="radiogroup" title="Select the generation.">
            <span class="visually-hidden" id="selectGenInstruction">Select the generation.</span>
            <input class="gen visually-hidden" type="radio" name="gen" value="1" id="gen1" /><label class="btn btn-small btn-left" for="gen1">RBY</label>
            <input class="gen visually-hidden" type="radio" name="gen" value="2" id="gen2" /><label class="btn btn-small btn-mid" for="gen2">GSC</label>
            <input class="gen visually-hidden" type="radio" name="gen" value="3" id="gen3" /><label class="btn btn-small btn-mid" for="gen3">ADV</label>
            <input class="gen visually-hidden" type="radio" name="gen" value="4" id="gen4" /><label class="btn btn-small btn-mid" for="gen4">DPP</label>
            <input class="gen visually-hidden" type="radio" name="gen" value="5" id="gen5" /><label class="btn btn-small btn-mid" for="gen5">B/W</label>
            <input class="gen visually-hidden" type="radio" name="gen" value="6" id="gen6" /><label class="btn btn-small btn-mid" for="gen6">X/Y</label>
            <input class="gen visually-hidden" type="radio" name="gen" value="7" id="gen7" /><label class="btn btn-small btn-mid" for="gen7">S/M</label>
            <input class="gen visually-hidden" type="radio" name="gen" value="8" id="gen8" checked="checked" /><label class="btn btn-small btn-right" for="gen8">S/S</label>
        </span>
        <span class="notationSelection" aria-labelledby="selectNotationInstruction" role="radiogroup" title="Select the output notation.">
            <span class="visually-hidden" id="selectNotationInstruction">Select the output notation.</span>
            <input class="notation visually-hidden" type="radio" name="notation" id="pixels" value="px" /><label class="btn btn-small btn-left" for="pixels">48th</label>
            <input class="notation visually-hidden" type="radio" name="notation" id="percentage" value="%" /><label class="btn btn-small btn-right" for="percentage">100%</label>
        </span>
        <span class="modeSelection" aria-labelledby="selectModeInstruction" role="radiogroup" title="Select the calculator's mode of function.">
            <span class="visually-hidden" id="selectModeInstruction">Select the calculator's mode of function.</span>
            <input class="mode visually-hidden" type="radio" name="mode" id="one-vs-one" checked="checked" /><label class="btn btn-left" for="one-vs-one">One vs One</label>
            <input class="mode visually-hidden" type="radio" name="mode" id="one-vs-all" /><label class="btn btn-mid" for="one-vs-all">One vs All</label>
            <input class="mode visually-hidden" type="radio" name="mode" id="all-vs-one" /><label class="btn btn-mid" for="all-vs-one">All vs One</label>
            <input class="mode visually-hidden" type="radio" name="mode" id="randoms" /><label class="btn btn-right" for="randoms">Random Battles</label>
        </span>
    </div>
    <hr />
    <div aria-label="Move selection" class="move-result-group" role="region" title="Select a move to show detailed results.">
        <div  aria-labelledby="resultHeaderL" class="move-result-subgroup" role="radiogroup">
            <div class="result-move-header"><span id="resultHeaderL">Pok&eacute;mon 1's Moves (select one to show detailed results)</span>
            </div>
            <div>
                <input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMoveL1" checked="checked" aria-describedby="resultDamageL1" />
                <label class="btn btn-xxxwide btn-top" for="resultMoveL1">Loading...</label>
                <span id="resultDamageL1">??? - ???%</span>
            </div>
            <div>
                <input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMoveL2" aria-describedby="resultDamageL2" />
                <label class="btn btn-xxxwide btn-mid" for="resultMoveL2">Loading...</label>
                <span id="resultDamageL2">??? - ???%</span>
            </div>
            <div>
                <input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMoveL3" aria-describedby="resultDamageL3" />
                <label class="btn btn-xxxwide btn-mid" for="resultMoveL3">Loading...</label>
                <span id="resultDamageL3">??? - ???%</span>
            </div>
            <div>
                <input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMoveL4" aria-describedby="resultDamageL4" />
                <label class="btn btn-xxxwide btn-bottom" for="resultMoveL4">Loading...</label>
                <span id="resultDamageL4">??? - ???%</span>
            </div>
        </div>
        <div aria-labelledby="resultHeaderR" class="move-result-subgroup" role="radiogroup">
            <div class="result-move-header"><span id="resultHeaderR">Pok&eacute;mon 2's Moves (select one to show detailed results)</span>
            </div>
            <div>
                <input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMoveR1" aria-describedby="resultDamageR1" />
                <label class="btn btn-xxxwide btn-top" for="resultMoveR1">Loading...</label>
                <span id="resultDamageR1">??? - ???%</span>
            </div>
            <div>
                <input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMoveR2" aria-describedby="resultDamageR2" />
                <label class="btn btn-xxxwide btn-mid" for="resultMoveR2">Loading...</label>
                <span id="resultDamageR2">??? - ???%</span>
            </div>
            <div>
                <input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMoveR3" aria-describedby="resultDamageR3" />
                <label class="btn btn-xxxwide btn-mid" for="resultMoveR3">Loading...</label>
                <span id="resultDamageR3">??? - ???%</span>
            </div>
            <div>
                <input class="result-move visually-hidden" type="radio" name="resultMove" id="resultMoveR4" aria-describedby="resultDamageR4" />
                <label class="btn btn-xxxwide btn-bottom" for="resultMoveR4">Loading...</label>
                <span id="resultDamageR4">??? - ???%</span>
            </div>
        </div>
    </div>
    <div aria-label="Calculation results" class="main-result-group" role="region">
        <div class="big-text"><span id="mainResult">Loading...</span>
        </div>
        <div class="small-text"><span id="damageValues">(If you see this message for more than a few seconds, try enabling JavaScript.)</span>
        </div>
    </div>

    <div aria-label="Pok&eacute;mon 1" class="panel" role="region">
        <fieldset class="poke-info" id="p1">
            <legend align="center">Pok&eacute;mon 1</legend>
            <input type="text" class="set-selector calc-trigger" />
            <span id="importedSetsOptions" style="width:auto; display:none">
                <input type="checkbox" id="importedSets" /> Only show imported sets <br />
                <button id="clearSets">Clear Custom Sets</button>
            </span>
            <div class="info-group top">
                <div>
                    <label>Type</label>
                    <select aria-label="type1" class="type1 terrain-trigger calc-trigger"></select>
                    <select aria-label="type2" class="type2 terrain-trigger calc-trigger"></select>
                    <small class="right">(<a class="analysis" target="_blank" href="">Smogon&nbsp;analysis</a>)</small>
                </div>
                <div class="hide">
                    <label>Forme</label>
                    <select class="forme calc-trigger"></select>
                </div>
                <div class="hide">
                    <label>Gender</label>
                    <select class="gender calc-trigger"><option></option><option selected="selected">Male</option><option>Female</option></select>
                </div>
                <div>
                    <label for="levelL1">Level</label>
                    <input class="level calc-trigger" id="levelL1" value="100" />
                </div>
                <div class="hide">
                    <label for="weightL1">Weight (kg)</label>
                    <input class="weight calc-trigger" id="weightL1" value="10.0" />
                </div>
            </div>
            <div class="info-group">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Base</th>
                            <th class="gen-specific g3 g4 g5 g6 g7 g8" scope="col">IVs</th>
                            <th class="gen-specific g3 g4 g5 g6 g7 g8" scope="col">EVs</th>
                            <th class="gen-specific g1 g2 hide" scope="col">DVs</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hp">
                            <th scope="row">
                                <label>HP</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" disabled="disabled" />
                            </td>
                            <td><span class="total">341</span>
                            </td>
                            <td></td>
                        </tr>
                        <tr class="at">
                            <th scope="row">
                                <label>Attack</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="df">
                            <th scope="row">
                                <label>Defense</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="sa gen-specific g2 g3 g4 g5 g6 g7 g8">
                            <th scope="row">
                                <label>Sp. Atk</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="sd gen-specific g2 g3 g4 g5 g6 g7 g8">
                            <th scope="row">
                                <label>Sp. Def</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" disabled="disabled" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="sl gen-specific g1 hide">
                            <th scope="row">
                                <label>Special</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td>
                                <input class="dvs calc-trigger" value="15" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="sp">
                            <th scope="row">
                                <label>Speed</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                            <td><span class="totalMod">---</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="info-group info-selectors">
                <div class="gen-specific g3 g4 g5 g6 g7 g8">
                    <label for="natureL1">Nature</label>
                    <select class="nature calc-trigger" id="natureL1">
                        <option value="Adamant">Adamant (+Atk, -SpA)</option>
                        <option value="Bashful">Bashful</option>
                        <option value="Bold">Bold (+Def, -Atk)</option>
                        <option value="Brave">Brave (+Atk, -Spe)</option>
                        <option value="Calm">Calm (+SpD, -Atk)</option>
                        <option value="Careful">Careful (+SpD, -SpA)</option>
                        <option value="Docile">Docile</option>
                        <option value="Gentle">Gentle (+SpD, -Def)</option>
                        <option value="Hardy" selected="selected">Hardy</option>
                        <option value="Hasty">Hasty (+Spe, -Def)</option>
                        <option value="Impish">Impish (+Def, -SpA)</option>
                        <option value="Jolly">Jolly (+Spe, -SpA)</option>
                        <option value="Lax">Lax (+Def, -SpD)</option>
                        <option value="Lonely">Lonely (+Atk, -Def)</option>
                        <option value="Mild">Mild (+SpA, -Def)</option>
                        <option value="Modest">Modest (+SpA, -Atk)</option>
                        <option value="Naive">Naive (+Spe, -SpD)</option>
                        <option value="Naughty">Naughty (+Atk, -SpD)</option>
                        <option value="Quiet">Quiet (+SpA, -Spe)</option>
                        <option value="Quirky">Quirky</option>
                        <option value="Rash">Rash (+SpA, -SpD)</option>
                        <option value="Relaxed">Relaxed (+Def, -Spe)</option>
                        <option value="Sassy">Sassy (+SpD, -Spe)</option>
                        <option value="Serious">Serious</option>
                        <option value="Timid">Timid (+Spe, -Atk)</option>
                    </select>
                </div>
                <div class="gen-specific g3 g4 g5 g6 g7 g8">
                    <label for="abilityL1">Ability</label>
                    <select class="ability terrain-trigger calc-trigger" id="abilityL1"></select>
                    <input hidden type="checkbox" title= "Is this ability active?" class="abilityToggle calc-trigger">
                </div>
                <div class="gen-specific g2 g3 g4 g5 g6 g7 g8">
                    <label for="itemL1">Item</label>
                    <select class="item terrain-trigger calc-trigger" id="itemL1"></select>
                </div>
                <div>
                    <label for="statusL1">Status</label>
                    <select class="status calc-trigger" id="statusL1">
                        <option value="Healthy">Healthy</option>
                        <option value="Poisoned">Poisoned</option>
                        <option value="Badly Poisoned">Badly Poisoned</option>
                        <option value="Burned">Burned</option>
                        <option value="Paralyzed">Paralyzed</option>
                        <option value="Asleep">Asleep</option>
                        <option value="Frozen">Frozen</option>
                    </select>
                    <select aria-label="Toxic counter" class="toxic-counter calc-trigger hide">
                        <option value="1">1/16</option>
                        <option value="2">2/16</option>
                        <option value="3">3/16</option>
                        <option value="4">4/16</option>
                        <option value="5">5/16</option>
                        <option value="6">6/16</option>
                        <option value="7">7/16</option>
                        <option value="8">8/16</option>
                        <option value="9">9/16</option>
                        <option value="10">10/16</option>
                        <option value="11">11/16</option>
                        <option value="12">12/16</option>
                        <option value="13">13/16</option>
                        <option value="14">14/16</option>
                        <option value="15">15/16</option>
                    </select>
                </div>
            </div>
            <div class="info-group">
                <label for="currentHpL1">Current HP</label>
                <input class="current-hp calc-trigger" id="currentHpL1" value="341" />/<span class="max-hp">341</span> (
                <input class="percent-hp calc-trigger" value="100" />%)
					 <input class="visually-hidden max calc-trigger btn-input" type="checkbox" id="maxL" />
					 <label class="btn btn-xwide gen-specific g8" for="maxL"
					 title="Use the corresponding Max Move?">Dynamax</label>
					 <br />
                <br />
                Health <div class="hpbar"></div>
            </div>
            <div hidden id="criticalHitInstruction">Force this attack to be a critical hit?</div>
            <div hidden id="zMoveInstruction">Make this attack a Z-move?</div>
            <div class="move1">
                <select class="move-selector calc-trigger small-select"></select>
                <input class="move-bp calc-trigger" value="50" />
                <select class="move-type calc-trigger"></select>
                <select class="move-cat calc-trigger gen-specific g4 g5 g6 g7 g8">
                    <option value="Physical">Physical</option>
                    <option value="Special">Special</option>
                </select>
                <input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critL1" />
                <label class="btn crit-btn" for="critL1" title="Force this attack to be a critical hit?">Crit</label>
                <input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zL1"/>
                <label class="btn z-btn gen-specific g7 g8" for="zL1" title="Make this attack a Z-move?">Z</label>
                <select class="move-hits calc-trigger hide">
                    <option value="2">2 hits</option>
                    <option value="3">3 hits</option>
                    <option value="4">4 hits</option>
                    <option value="5">5 hits</option>
                </select>
                <select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
                <select class="metronome calc-trigger hide" title="How many times was this move successfully and consecutively used while holding Metronome before this turn?">
                    <option value="0">Never</option>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
            </div>
            <div class="move2">
                <select class="move-selector calc-trigger small-select"></select>
                <input class="move-bp calc-trigger" value="0" />
                <select class="move-type calc-trigger"></select>
                <select class="move-cat calc-trigger gen-specific g4 g5 g6 g7 g8">
                    <option value="Physical">Physical</option>
                    <option value="Special">Special</option>
                </select>
                <input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critL2" />
                <label class="btn crit-btn" for="critL2" title="Force this attack to be a critical hit?">Crit</label>
                <input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zL2"/>
                <label class="btn z-btn gen-specific g7 g8" for="zL2" title="Make this attack a Z-move?">Z</label>
                <select class="move-hits calc-trigger hide">
                    <option value="2">2 hits</option>
                    <option value="3">3 hits</option>
                    <option value="4">4 hits</option>
                    <option value="5">5 hits</option>
                </select>
                <select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
                <select class="metronome calc-trigger hide" title="How many times was this move successfully and consecutively used while holding Metronome before this turn?">
                    <option value="0">Never</option>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
            </div>
            <div class="move3">
                <select class="move-selector calc-trigger small-select"></select>
                <input class="move-bp calc-trigger" value="0" />
                <select class="move-type calc-trigger"></select>
                <select class="move-cat calc-trigger gen-specific g4 g5 g6 g7 g8">
                    <option value="Physical">Physical</option>
                    <option value="Special">Special</option>
                </select>
                <input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critL3" />
                <label class="btn crit-btn" for="critL3" title="Force this attack to be a critical hit?">Crit</label>
                <input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zL3"/>
                <label class="btn z-btn gen-specific g7 g8" for="zL3" title="Make this attack a Z-move?">Z</label>
                <select class="move-hits calc-trigger hide">
                    <option value="2">2 hits</option>
                    <option value="3">3 hits</option>
                    <option value="4">4 hits</option>
                    <option value="5">5 hits</option>
                </select>
                <select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
                <select class="metronome calc-trigger hide" title="How many times was this move successfully and consecutively used while holding Metronome before this turn?">
                    <option value="0">Never</option>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
            </div>
            <div class="move4">
                <select class="move-selector calc-trigger small-select"></select>
                <input class="move-bp calc-trigger" value="0" />
                <select class="move-type calc-trigger"></select>
                <select class="move-cat calc-trigger gen-specific g4 g5 g6 g7 g8">
                    <option value="Physical">Physical</option>
                    <option value="Special">Special</option>
                </select>
                <input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critL4" />
                <label class="btn crit-btn" for="critL4" title="Force this attack to be a critical hit?">Crit</label>
                <input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zL4"/>
                <label class="btn z-btn gen-specific g7 g8" for="zL4" title="Make this attack a Z-move?">Z</label>
                <select class="move-hits calc-trigger hide">
                    <option value="2">2 hits</option>
                    <option value="3">3 hits</option>
                    <option value="4">4 hits</option>
                    <option value="5">5 hits</option>
                </select>
                <select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
                <select class="metronome calc-trigger hide" title="How many times was this move successfully and consecutively used while holding Metronome before this turn?">
                    <option value="0">Never</option>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
            </div>
        </fieldset>
    </div>

    <div class="panel">
        <div aria-label="Field information" role="region">
            <fieldset class="field-info">
                <legend align="center">Field</legend>
                <div aria-labelledby="selectBattleFormatInstruction" class="gen-specific g3 g4 g5 g6 g7 g8" role="radiogroup" style="width: 10.6em; margin: 0 auto 5px;" title="Select the battle format.">
                    <span class="visually-hidden" id="selectBattleFormatInstruction">Select the battle format.</span>
                    <input class="visually-hidden calc-trigger" type="radio" name="format" value="Singles" id="singles-format" checked="checked" />
                    <label class="btn btn-left" for="singles-format">Singles</label>
                    <input class="visually-hidden calc-trigger" type="radio" name="format" value="Doubles" id="doubles-format" />
                    <label class="btn btn-right" for="doubles-format">Doubles</label>
                </div>
                <div aria-labelledby="selectTerrainInstruction" class="gen-specific g6 g7 g8" role="group" title="Select the current terrain.">
                    <span class="visually-hidden" id="selectTerrainInstruction">Select the current terrain.</span>
                    <input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Electric" id="electric" /><label class="btn btn-xxxwide btn-left" for="electric">Electric Terrain</label>
                    <input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Grassy" id="grassy" /><label class="btn btn-xxxwide btn-mid" for="grassy">Grassy Terrain</label>
                    <input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Misty" id="misty" /><label class="btn btn-xxxwide btn-right" for="misty">Misty Terrain</label>
                    <input class="visually-hidden terrain-trigger calc-trigger" type="checkbox" name="terrain" value="Psychic" id="psychic" /><label class="btn btn-xxxwide btn-mid" for="psychic">Psychic Terrain</label>
                </div>
                <hr class="gen-specific g6 g7 g8" />
                <div aria-labelledby="selectWeatherInstruction" role="radiogroup">
                    <span class="visually-hidden" id="selectWeatherInstruction">Select the current weather condition.</span>
                    <div  class="gen-specific g3 g4 g5 g6 g7 g8" style="width: 22.2em; margin: 5px auto;" title="Select the current weather condition.">
                        <input class="visually-hidden calc-trigger" type="radio" name="weather" value="" id="clear" checked="checked" />
                        <label class="btn btn-small btn-left" for="clear">None</label>
                        <input class="visually-hidden calc-trigger" type="radio" name="weather" value="Sun" id="sun" />
                        <label class="btn btn-small btn-mid" for="sun">Sun</label>
                        <input class="visually-hidden calc-trigger" type="radio" name="weather" value="Rain" id="rain" />
                        <label class="btn btn-small btn-mid" for="rain">Rain</label>
                        <input class="visually-hidden calc-trigger" type="radio" name="weather" value="Sand" id="sand" />
                        <label class="btn btn-small btn-mid" for="sand">Sand</label>
                        <input class="visually-hidden calc-trigger" type="radio" name="weather" value="Hail" id="hail" />
                        <label class="btn btn-small btn-right" for="hail">Hail</label>
                    </div>
                    <div class="gen-specific g6 g7 g8" title="Select the current weather condition.">
                        <input class="visually-hidden calc-trigger" type="radio" name="weather" value="Harsh Sunshine" id="harsh-sunshine" />
                        <label class="btn btn-xxxwide btn-left" for="harsh-sunshine">Harsh Sunshine</label>
                        <input class="visually-hidden calc-trigger" type="radio" name="weather" value="Heavy Rain" id="heavy-rain" />
                        <label class="btn btn-xxxwide btn-mid" for="heavy-rain">Heavy Rain</label>
                        <input class="visually-hidden calc-trigger" type="radio" name="weather" value="Strong Winds" id="strong-winds" />
                        <label class="btn btn-xxxwide btn-right" for="strong-winds">Strong Winds</label>
                    </div>
                  </div>
                <div aria-labelledby="selectGscWeatherInstruction" class="gen-specific g2 hide" role="radiogroup" style="width: 17.8em; margin: 0 auto 5px;" title="Select the current weather condition.">
                    <span class="visually-hidden" id="selectGscWeatherInstruction">Select the current weather condition.</span>
                    <input class="visually-hidden calc-trigger" type="radio" name="gscWeather" value="" id="gscClear" checked="checked" />
                    <label class="btn btn-small btn-left" for="gscClear">None</label>
                    <input class="visually-hidden calc-trigger" type="radio" name="gscWeather" value="Sun" id="gscSun" />
                    <label class="btn btn-small btn-mid" for="gscSun">Sun</label>
                    <input class="visually-hidden calc-trigger" type="radio" name="gscWeather" value="Rain" id="gscRain" />
                    <label class="btn btn-small btn-mid" for="gscRain">Rain</label>
                    <input class="visually-hidden calc-trigger" type="radio" name="gscWeather" value="Sand" id="gscSand" />
                    <label class="btn btn-small btn-right" for="gscSand">Sand</label>
                </div>
                <div class="gen-specific g4 g5 g6 g7 g8" style="width: 5.3em; margin: 5px auto;" title="Is gravity in effect?">
                    <span hidden id="gravityInstruction">Is gravity in effect?</span>
                    <input aria-describedby="gravityInstruction" class="visually-hidden calc-trigger" type="checkbox" id="gravity" />
                    <label class="btn" for="gravity">Gravity</label>
                </div>
                <hr class="gen-specific g2 g3 g4 g5 g6 g7 g8" />
                <table class="field">
                    <thead>
                        <tr>
                            <th scope="col"><div class="visually-hidden">Pok&eacute;mon 1's side</div></th>
                            <th scope="col"><div class="visually-hidden">Pok&eacute;mon 2's side</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gen-specific g4 g5 g6 g7 g8">
                            <div hidden id="selectStealthRockInstruction">Is Stealth Rock affecting this side of the field?</div>
                            <td><div class="left" title="Is Stealth Rock affecting this side of the field?">
                                <input aria-describedby="selectStealthRockInstruction" class="visually-hidden calc-trigger" type="checkbox" id="srL" />
                                <label class="btn btn-xwide" for="srL">Stealth Rock</label>
                            </div></td>
                            <td><div class="right" title="Is Stealth Rock affecting this side of the field?">
                                <input aria-describedby="selectStealthRockInstruction" class="visually-hidden calc-trigger" type="checkbox" id="srR" />
                                <label class="btn btn-xwide" for="srR">Stealth Rock</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g8">
                            <div hidden id="selectSteelsurgeInstruction">Is Steelsurge affecting this side of the field?</div>
                            <td><div class="left" title="Is Steelsurge affecting this side of the field?">
                                <input aria-describedby="selectSteelsurgeInstruction" class="visually-hidden calc-trigger" type="checkbox" id="steelsurgeL" />
                                <label class="btn btn-xwide" for="steelsurgeL">Steelsurge</label>
                            </div></td>
                            <td><div class="right" title="Is Steelsurge affecting this side of the field?">
                                <input aria-describedby="selectSteelsurgeInstruction" class="visually-hidden calc-trigger" type="checkbox" id="steelsurgeR" />
                                <label class="btn btn-xwide" for="steelsurgeR">Steelsurge</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g3 g4 g5 g6 g7 g8">
                            <div hidden id="selectSpikeInstruction">Are there Spikes on this side of the field?</div>
                            <td><div aria-labelledby="selectSpikeInstruction" class="left" role="radiogroup" title="Are there Spikes on this side of the field?">
                                <input class="visually-hidden calc-trigger" type="radio" name="spikesL" value="0" id="spikesL0" checked="checked" />
                                <label class="btn btn-xsmall btn-left" for="spikesL0">0</label>
                                <input class="visually-hidden calc-trigger" type="radio" name="spikesL" value="1" id="spikesL1" />
                                <label class="btn btn-xsmall btn-mid" for="spikesL1">1</label>
                                <input class="visually-hidden calc-trigger" type="radio" name="spikesL" value="2" id="spikesL2" />
                                <label class="btn btn-xsmall btn-mid" for="spikesL2">2</label>
                                <input class="visually-hidden calc-trigger" type="radio" name="spikesL" value="3" id="spikesL3" />
                                <label class="btn btn-wide btn-right" for="spikesL3">3 Spikes</label>
                            </div></td>
                            <td><div aria-labelledby="selectSpikeInstruction" class="right" role="radiogroup" title="Are there Spikes on this side of the field?">
                                <input class="visually-hidden calc-trigger" type="radio" name="spikesR" value="3" id="spikesR3" />
                                <label class="btn btn-wide btn-left" for="spikesR3">3 Spikes</label>
                                <input class="visually-hidden calc-trigger" type="radio" name="spikesR" value="2" id="spikesR2" />
                                <label class="btn btn-xsmall btn-mid" for="spikesR2">2</label>
                                <input class="visually-hidden calc-trigger" type="radio" name="spikesR" value="1" id="spikesR1" />
                                <label class="btn btn-xsmall btn-mid" for="spikesR1">1</label>
                                <input class="visually-hidden calc-trigger" type="radio" name="spikesR" value="0" id="spikesR0" checked="checked" />
                                <label class="btn btn-xsmall btn-right" for="spikesR0">0</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g2">
                            <td><div class="left" title="Are there Spikes on this side of the field?">
                                <input aria-describedby="selectSpikeInstruction" class="visually-hidden calc-trigger" type="checkbox" id="gscSpikesL" />
                                <label class="btn" for="gscSpikesL">Spikes</label>
                            </div></td>
                            <td><div class="right" title="Are there Spikes on this side of the field?">
                                <input aria-describedby="selectSpikeInstruction" class="visually-hidden calc-trigger" type="checkbox" id="gscSpikesR" />
                                <label class="btn" for="gscSpikesR">Spikes</label>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="left" title="Is this Pok&eacute;mon protected by Reflect and/or Light Screen?">
                                <div hidden id="selectScreenInstruction">Is this Pok&eacute;mon protected by Reflect and/or Light Screen?</div>
                                <input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="reflectL" />
                                <label class="btn btn-left" for="reflectL">Reflect</label>
                                <input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="lightScreenL" />
                                <label class="btn btn-xwide btn-right" for="lightScreenL">Light Screen</label>
                            </div></td>
                            <td><div class="right" title="Is this Pok&eacute;mon protected by Reflect and/or Light Screen?">
                                <input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="lightScreenR" />
                                <label class="btn btn-xwide btn-left" for="lightScreenR">Light Screen</label>
                                <input aria-describedby="selectScreenInstruction" class="visually-hidden calc-trigger" type="checkbox" id="reflectR" />
                                <label class="btn btn-right" for="reflectR">Reflect</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g2 g3 g4 g5 g6 g7 g8">
                            <td><div class="left" title="Is this Pok&eacute;mon protected?">
                                <div hidden id="selectProtectInstruction">Is this Pok&eacute;mon protected?</div>
                                <input aria-describedby="selectProtectInstruction" class="visually-hidden calc-trigger" type="checkbox" id="protectL" />
                                <label class="btn btn-wide" for="protectL">Protect</label>
                            </div></td>
                            <td><div class="right" title="Is this Pok&eacute;mon protected?">
                                <input aria-describedby="selectProtectInstruction" class="visually-hidden calc-trigger" type="checkbox" id="protectR" />
                                <label class="btn btn-wide" for="protectR">Protect</label>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="left" title="Has this Pok&eacute;mon been affected by Leech Seed?">
                                <div hidden id="selectLeechSeedInstruction">Has this Pok&eacute;mon been affected by Leech Seed?</div>
                                <input aria-describedby="selectLeechSeedInstruction" class="visually-hidden calc-trigger" type="checkbox" id="leechSeedL" />
                                <label class="btn btn-wide" for="leechSeedL">Leech Seed</label>
                            </div></td>
                            <td><div class="right" title="Has this Pok&eacute;mon been affected by Leech Seed?">
                                <input aria-describedby="selectLeechSeedInstruction" class="visually-hidden calc-trigger" type="checkbox" id="leechSeedR" />
                                <label class="btn btn-wide" for="leechSeedR">Leech Seed</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g2 g3 g4 g5 g6 g7 g8">
                            <td><div class="left" title="Has this Pok&eacute;mon been revealed with Foresight or Odor Sleuth?">
                                <div hidden id="selectRevealInstruction">Has this Pok&eacute;mon been revealed with Foresight or Odor Sleuth?</div>
                                <input aria-describedby="selectRevealInstruction" class="visually-hidden calc-trigger" type="checkbox" id="foresightL" />
                                <label class="btn btn-wide" for="foresightL">Foresight</label>
                            </div></td>
                            <td><div class="right" title="Has this Pok&eacute;mon been revealed with Foresight or Odor Sleuth?">
                                <input aria-describedby="selectRevealInstruction" class="visually-hidden calc-trigger" type="checkbox" id="foresightR" />
                                <label class="btn btn-wide" for="foresightR">Foresight</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g3 g4 g5 g6 g7 g8">
                            <td><div class="left" title="Has this Pok&eacute;mon's power been boosted by an ally's Helping Hand?">
                                <div hidden id="selectHelpingHandInstruction">Has this Pok&eacute;mon's power been boosted by an ally's Helping Hand?</div>
                                <input aria-describedby="selectHelpingHandInstruction" class="visually-hidden calc-trigger" type="checkbox" id="helpingHandL" />
                                <label class="btn btn-xxwide" for="helpingHandL">Helping Hand</label>
                            </div></td>
                            <td><div class="right" title="Has this Pok&eacute;mon's power been boosted by an ally's Helping Hand?">
                                <input aria-describedby="selectHelpingHandInstruction" class="visually-hidden calc-trigger" type="checkbox" id="helpingHandR" />
                                <label class="btn btn-xxwide" for="helpingHandR">Helping Hand</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g4 g5 g6 g7 g8">
                            <td><div class="left" title="Has this Pok&eacute;mon's speed been boosted by Tailwind?">
                                <div hidden id="selectTailwindInstruction">Has this Pok&eacute;mon's power been boosted by an ally's Helping Hand?</div>
                                <input aria-describedby="selectTailwindInstruction" class="visually-hidden calc-trigger" type="checkbox" id="tailwindL" />
                                <label class="btn btn-xxwide" for="tailwindL">Tailwind</label>
                            </div></td>
                            <td><div class="right" title="Has this Pok&eacute;mon's speed been boosted by Tailwind?">
                                <input aria-describedby="selectTailwindInstruction" class="visually-hidden calc-trigger" type="checkbox" id="tailwindR" />
                                <label class="btn btn-xxwide" for="tailwindR">Tailwind</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g5 g6 g7 g8">
                            <td><div class="left" title="Is the Pok&eacute;mon protected by an ally's Friend Guard?">
                                <div hidden id="selectFriendGuardInstruction">Is the Pok&eacute;mon protected by an ally's Friend Guard?</div>
                                <input aria-describedby="selectFriendGuardInstruction" class="visually-hidden calc-trigger" type="checkbox" id="friendGuardL" />
                                <label class="btn btn-xxwide" for="friendGuardL">Friend Guard</label>
                            </div></td>
                            <td><div class="right" title="Is the Pok&eacute;mon protected by an ally's Friend Guard?">
                                <input aria-describedby="selectFriendGuardInstruction" class="visually-hidden calc-trigger" type="checkbox" id="friendGuardR" />
                                <label class="btn btn-xxwide" for="friendGuardR">Friend Guard</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g7 g8">
                            <td><div class="left" title="Is the Pok&eacute;mon protected by an ally's Aurora Veil?">
                                <div hidden id="selectAuroraVeilInstruction">Is the Pok&eacute;mon protected by an ally's Aurora Veil?</div>
                                <input aria-describedby="selectAuroraVeilInstruction" class="visually-hidden calc-trigger" type="checkbox" id="auroraVeilL" />
                                <label class="btn btn-xxwide" for="auroraVeilL">Aurora Veil</label>
                            </div></td>
                            <td><div class="right" title="Is the Pok&eacute;mon protected by an ally's Aurora Veil?">
                                <input aria-describedby="selectAuroraVeilInstruction" class="visually-hidden calc-trigger" type="checkbox" id="auroraVeilR" />
                                <label class="btn btn-xxwide" for="auroraVeilR">Aurora Veil</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g7">
                          <td><div class="left" title="Has the Pok&eacute;mon boosted all its stats one stage?">
                              <div hidden id="selectStatBoostInstruction">Has the Pok&eacute;mon boosted all its stats one stage?</div>
                                <input aria-describedby="selectStatBoostInstruction" class="visually-hidden calc-trigger" type="checkbox" id="StatBoostL" />
                                <label class="btn btn-xxwide" for="StatBoostL">+1 All Stats</label>
                              </div></td>
                            <td><div class="right" title="Has the Pok&eacute;mon boosted all its stats one stage?">
                                <input aria-describedby="selectStatBoostInstruction" class="visually-hidden calc-trigger" type="checkbox" id="StatBoostR" />
                                <label class="btn btn-xxwide" for="StatBoostR">+1 All Stats</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g7 g8">
                          <td><div class="left" title="Is the Pok&eacute;mon boosted by an ally's Battery ability?">
                              <div hidden id="selectBatteryInstruction">Is the Pok&eacute;mon boosted by an ally's Battery ability?</div>
                                <input aria-describedby="selectBatteryInstruction" class="visually-hidden calc-trigger" type="checkbox" id="batteryL" />
                                <label class="btn btn-xxwide" for="batteryL">Battery</label>
                              </div></td>
                            <td><div class="right" title="Is the Pok&eacute;mon boosted by an ally's Battery ability?">
                                <input aria-describedby="selectBatteryInstruction" class="visually-hidden calc-trigger" type="checkbox" id="batteryR" />
                                <label class="btn btn-xxwide" for="batteryR">Battery</label>
                            </div></td>
                        </tr>
                        <tr class="gen-specific g2 g3 g4 g5 g6 g7 g8">
                            <td><div class="left" title="Is the defending Pok&eacute;mon switching out?">
                              <div hidden id="selectSwitchingInstruction">Is the defending Pok&eacute;mon switching out?</div>
                                <input aria-describedby="selectSwitchingInstruction" class="visually-hidden calc-trigger" type="checkbox" id="switchingL" />
                                <label class="btn btn-xxwide" for="switchingL">Switching Out</label>
                              </div></td>
                            <td><div class="right" title="Is the defending Pok&eacute;mon switching out?">
                                <input aria-describedby="selectSwitchingInstruction" class="visually-hidden calc-trigger" type="checkbox" id="switchingR" />
                                <label class="btn btn-xxwide" for="switchingR">Switching Out</label>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="left" title="Export the leftmost Pok&eacute;mon set">
                                <button id="exportL">Export</button>
                            </div></td>
                            <td><div class="right" title="Export the rightmost Pok&eacute;mon set">
                                <button id="exportR">Export</button>
                            </div></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </div>
        <div aria-label="Import team" role="region">
            <fieldset class="poke-import">
                <legend align="center">Import / Export</legend>
                <div id="import-1_wrapper" class="dataTables_wrapper no-footer">
                    <form class="import-team">
                        <textarea class="import-team-text"></textarea>
                        <!--<button style='position:absolute' class='bs-btn bs-btn-default'>Import</button>-->
                    </form>
                </div>
            </fieldset>
        </div>
    </div>
    <div aria-label="Pok&eacute;mon 2" role="region" class="panel">
        <fieldset class="poke-info" id="p2">
            <legend align="center">Pok&eacute;mon 2</legend>
            <input type="text" class="set-selector calc-trigger" />
            <span id="importedSetsOptions" style="width:auto; display:none">
                <input type="checkbox" id="importedSets" /> Only show imported sets <br />
                <button id="clearSets">Clear Custom Sets</button>
            </span>
            <div class="info-group top">
                <div>
                    <label>Type</label>
                    <select aria-label="Type 1" class="type1 terrain-trigger calc-trigger"></select>
                    <select aria-label="Type 2" class="type2 terrain-trigger calc-trigger"></select>
                    <small class="right">(<a class="analysis" target="_blank" href="">Smogon&nbsp;analysis</a>)</small>
                </div>
                <div class="hide">
                    <label>Forme</label>
                    <select class="forme calc-trigger"></select>
                </div>
                <div class="hide">
                    <label>Gender</label>
                    <select class="gender calc-trigger"><option></option><option selected="selected">Male</option><option>Female</option></select>
                </div>
                <div>
                    <label for="levelR1">Level</label>
                    <input class="level calc-trigger" id="levelR1" value="100" />
                </div>
                <div class="hide">
                    <label for="weightR1">Weight (kg)</label>
                    <input class="weight calc-trigger" id="weightR1" value="10.0" />
                </div>
            </div>
            <div class="info-group">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Base</th>
                            <th class="gen-specific g3 g4 g5 g6 g7 g8" scope="col">IVs</th>
                            <th class="gen-specific g3 g4 g5 g6 g7 g8" scope="col">EVs</th>
                            <th class="gen-specific g1 g2 hide" scope="col">DVs</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hp">
                            <th scope="row">
                                <label>HP</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" disabled="disabled" />
                            </td>
                            <td><span class="total">341</span>
                            </td>
                            <td></td>
                        </tr>
                        <tr class="at">
                            <th scope="row">
                                <label>Attack</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="df">
                            <th scope="row">
                                <label>Defense</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="sa gen-specific g2 g3 g4 g5 g6 g7 g8">
                            <th scope="row">
                                <label>Sp. Atk</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="sd gen-specific g2 g3 g4 g5 g6 g7 g8">
                            <th scope="row">
                                <label>Sp. Def</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" disabled="disabled" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="sl gen-specific g1 hide">
                            <th scope="row">
                                <label>Special</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td>
                                <input class="dvs calc-trigger" value="15" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="sp">
                            <th scope="row">
                                <label>Speed</label>
                            </th>
                            <td>
                                <input class="base calc-trigger" value="100" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="ivs calc-trigger" value="31" />
                            </td>
                            <td class="gen-specific g3 g4 g5 g6 g7 g8">
                                <input class="evs calc-trigger" type="number" min="0" max="252" step="4" value="0" />
                            </td>
                            <td class="gen-specific g1 g2 hide">
                                <input class="dvs calc-trigger" value="15" />
                            </td>
                            <td><span class="total">236</span>
                            </td>
                            <td>
                                <select class="boost calc-trigger">
                                    <option value="6">+6</option>
                                    <option value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="0" selected="selected">--</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                    <option value="-6">-6</option>
                                </select>
                            </td>
                            <td><span class="totalMod">---</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="info-group info-selectors">
                <div class="gen-specific g3 g4 g5 g6 g7 g8">
                    <label for="natureR1">Nature</label>
                    <select class="nature calc-trigger" id="natureR1">
                        <option value="Adamant">Adamant (+Atk, -SpA)</option>
                        <option value="Bashful">Bashful</option>
                        <option value="Bold">Bold (+Def, -Atk)</option>
                        <option value="Brave">Brave (+Atk, -Spe)</option>
                        <option value="Calm">Calm (+SpD, -Atk)</option>
                        <option value="Careful">Careful (+SpD, -SpA)</option>
                        <option value="Docile">Docile</option>
                        <option value="Gentle">Gentle (+SpD, -Def)</option>
                        <option value="Hardy" selected="selected">Hardy</option>
                        <option value="Hasty">Hasty (+Spe, -Def)</option>
                        <option value="Impish">Impish (+Def, -SpA)</option>
                        <option value="Jolly">Jolly (+Spe, -SpA)</option>
                        <option value="Lax">Lax (+Def, -SpD)</option>
                        <option value="Lonely">Lonely (+Atk, -Def)</option>
                        <option value="Mild">Mild (+SpA, -Def)</option>
                        <option value="Modest">Modest (+SpA, -Atk)</option>
                        <option value="Naive">Naive (+Spe, -SpD)</option>
                        <option value="Naughty">Naughty (+Atk, -SpD)</option>
                        <option value="Quiet">Quiet (+SpA, -Spe)</option>
                        <option value="Quirky">Quirky</option>
                        <option value="Rash">Rash (+SpA, -SpD)</option>
                        <option value="Relaxed">Relaxed (+Def, -Spe)</option>
                        <option value="Sassy">Sassy (+SpD, -Spe)</option>
                        <option value="Serious">Serious</option>
                        <option value="Timid">Timid (+Spe, -Atk)</option>
                    </select>
                </div>
                <div class="gen-specific g3 g4 g5 g6 g7 g8">
                    <label for="abilityR1">Ability</label>
                    <select class="ability terrain-trigger calc-trigger" id="abilityR1"></select>
                    <input hidden type="checkbox" title= "Is this ability active?" class="abilityToggle calc-trigger">
                </div>
                <div class="gen-specific g2 g3 g4 g5 g6 g7 g8">
                    <label for="itemR1">Item</label>
                    <select class="item terrain-trigger calc-trigger" id="itemR1"></select>
                </div>
                <div>
                    <label for="statusR1">Status</label>
                    <select class="status calc-trigger" id="statusR1">
                        <option value="Healthy">Healthy</option>
                        <option value="Poisoned">Poisoned</option>
                        <option value="Badly Poisoned">Badly Poisoned</option>
                        <option value="Burned">Burned</option>
                        <option value="Paralyzed">Paralyzed</option>
                        <option value="Asleep">Asleep</option>
                        <option value="Frozen">Frozen</option>
                    </select>
                    <select aria-label="Toxic counter" class="toxic-counter calc-trigger hide">
                        <option value="1">1/16</option>
                        <option value="2">2/16</option>
                        <option value="3">3/16</option>
                        <option value="4">4/16</option>
                        <option value="5">5/16</option>
                        <option value="6">6/16</option>
                        <option value="7">7/16</option>
                        <option value="8">8/16</option>
                        <option value="9">9/16</option>
                        <option value="10">10/16</option>
                        <option value="11">11/16</option>
                        <option value="12">12/16</option>
                        <option value="13">13/16</option>
                        <option value="14">14/16</option>
                        <option value="15">15/16</option>
                    </select>
                </div>
            </div>
            <div class="info-group">
                <label for="currentHpR1">Current HP</label>
                <input class="current-hp calc-trigger" id="currentHpR1" value="341" />/<span class="max-hp">341</span> (
                <input class="percent-hp calc-trigger" value="100" />%)
					 <input class="visually-hidden max calc-trigger btn-input" type="checkbox" id="maxR" />
					 <label class="btn btn-xwide gen-specific g8" for="maxR"
					 title="Use the corresponding Max Move?">Dynamax</label>
					 <br />
                <br />
                Health <div class="hpbar"></div>
            </div>
            <div class="move1">
                <select class="move-selector calc-trigger small-select"></select>
                <input class="move-bp calc-trigger" value="50" />
                <select class="move-type calc-trigger"></select>
                <select class="move-cat calc-trigger gen-specific g4 g5 g6 g7 g8">
                    <option value="Physical">Physical</option>
                    <option value="Special">Special</option>
                </select>
                <input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critR1" />
                <label class="btn crit-btn" for="critR1" title="Force this attack to be a critical hit?">Crit</label>
                <input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zR1"/>
                <label class="btn z-btn gen-specific g7 g8" for="zR1" title="Make this attack a Z-move?">Z</label>
                <select class="move-hits calc-trigger hide">
                    <option value="2">2 hits</option>
                    <option value="3">3 hits</option>
                    <option value="4">4 hits</option>
                    <option value="5">5 hits</option>
                </select>
                <select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
                <select class="metronome calc-trigger hide" title="How many times was this move successfully and consecutively used while holding Metronome before this turn?">
                    <option value="0">Never</option>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
            </div>
            <div class="move2">
                <select class="move-selector calc-trigger small-select"></select>
                <input class="move-bp calc-trigger" value="0" />
                <select class="move-type calc-trigger"></select>
                <select class="move-cat calc-trigger gen-specific g4 g5 g6 g7 g8">
                    <option value="Physical">Physical</option>
                    <option value="Special">Special</option>
                </select>
                <input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critR2" />
                <label class="btn crit-btn" for="critR2" title="Force this attack to be a critical hit?">Crit</label>
                <input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zR2"/>
                <label class="btn z-btn gen-specific g7 g8" for="zR2" title="Make this attack a Z-move?">Z</label>
                <select class="move-hits calc-trigger hide">
                    <option value="2">2 hits</option>
                    <option value="3">3 hits</option>
                    <option value="4">4 hits</option>
                    <option value="5">5 hits</option>
                </select>
                <select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
                <select class="metronome calc-trigger hide" title="How many times was this move successfully and consecutively used while holding Metronome before this turn?">
                    <option value="0">Never</option>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
            </div>
            <div class="move3">
                <select class="move-selector calc-trigger small-select"></select>
                <input class="move-bp calc-trigger" value="0" />
                <select class="move-type calc-trigger"></select>
                <select class="move-cat calc-trigger gen-specific g4 g5 g6 g7 g8">
                    <option value="Physical">Physical</option>
                    <option value="Special">Special</option>
                </select>
                <input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critR3" />
                <label class="btn crit-btn" for="critR3" title="Force this attack to be a critical hit?">Crit</label>
                <input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zR3"/>
                <label class="btn z-btn gen-specific g7 g8" for="zR3" title="Make this attack a Z-move?">Z</label>
                <select class="move-hits calc-trigger hide">
                    <option value="2">2 hits</option>
                    <option value="3">3 hits</option>
                    <option value="4">4 hits</option>
                    <option value="5">5 hits</option>
                </select>
                <select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
                <select class="metronome calc-trigger hide" title="How many times was this move successfully and consecutively used while holding Metronome before this turn?">
                    <option value="0">Never</option>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
            </div>
            <div class="move4">
                <select class="move-selector calc-trigger small-select"></select>
                <input class="move-bp calc-trigger" value="0" />
                <select class="move-type calc-trigger"></select>
                <select class="move-cat calc-trigger gen-specific g4 g5 g6 g7 g8">
                    <option value="Physical">Physical</option>
                    <option value="Special">Special</option>
                </select>
                <input aria-describedby="criticalHitInstruction" class="move-crit calc-trigger visually-hidden" type="checkbox" id="critR4" />
                <label class="btn crit-btn" for="critR4" title="Force this attack to be a critical hit?">Crit</label>
                <input aria-describedby="zMoveInstruction" class="move-z calc-trigger visually-hidden" type="checkbox" id="zR4"/>
                <label class="btn z-btn gen-specific g7 g8" for="zR4" title="Make this attack a Z-move?">Z</label>
                <select class="move-hits calc-trigger hide">
                    <option value="2">2 hits</option>
                    <option value="3">3 hits</option>
                    <option value="4">4 hits</option>
                    <option value="5">5 hits</option>
                </select>
                <select class="stat-drops calc-trigger hide" title="How many times was this move used in a row?">>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
                <select class="metronome calc-trigger hide" title="How many times was this move successfully and consecutively used while holding Metronome before this turn?">
                    <option value="0">Never</option>
                    <option value="1">Once</option>
                    <option value="2">Twice</option>
                    <option value="3">3 times</option>
                    <option value="4">4 times</option>
                    <option value="5">5 times</option>
                </select>
            </div>
        </fieldset>
    </div>

                <script type="text/javascript">
                        var linkExtension = '.html';
                </script>
                <script type="text/javascript" src="./Calc/js/vendor/jquery-1.9.1.min.js"></script>
                <script type="text/javascript" src="./Calc/js/vendor/select2/select2.min.js"></script>
                <script type="text/javascript" src="./Calc/js/vendor/url-search-params-0.1.2.min.js"></script>
                <script type="text/javascript">
                        var calc = exports = {};
                        function require() { return exports };
                </script>
                <script type="text/javascript" src="./Calc/calc/util.js?a2cec604"></script>
                <script type="text/javascript" src="./Calc/calc/stats.js?3088ed63"></script>
                <script type="text/javascript" src="./Calc/calc/data/species.js?63ffacc5"></script>
                <script type="text/javascript" src="./Calc/js/data/sets/gen8.js?554823cd"></script>
                <script type="text/javascript" src="./Calc/js/data/sets/gen7.js?b7663161"></script>
                <script type="text/javascript" src="./Calc/js/data/sets/gen6.js?92fd12d4"></script>
                <script type="text/javascript" src="./Calc/js/data/sets/gen5.js?ebcf5d94"></script>
                <script type="text/javascript" src="./Calc/js/data/sets/gen4.js?ef2aeb89"></script>
                <script type="text/javascript" src="./Calc/js/data/sets/gen3.js?8a35bb41"></script>
                <script type="text/javascript" src="./Calc/js/data/sets/gen2.js?774d1f59"></script>
                <script type="text/javascript" src="./Calc/js/data/sets/gen1.js?efceb901"></script>
                <script type="text/javascript" src="./Calc/calc/data/types.js?2132406c"></script>
                <script type="text/javascript" src="./Calc/calc/data/natures.js?dc7f2fe5"></script>
                <script type="text/javascript" src="./Calc/calc/data/abilities.js?d1685f09"></script>
                <script type="text/javascript" src="./Calc/calc/data/moves.js?11cc8b10"></script>
                <script type="text/javascript" src="./Calc/calc/data/items.js?79f35a5c"></script>
                <script type="text/javascript" src="./Calc/calc/data/index.js?3dac0698"></script>
                <script type="text/javascript" src="./Calc/calc/move.js?31847cd7"></script>
                <script type="text/javascript" src="./Calc/calc/pokemon.js?72f63b7b"></script>
                <script type="text/javascript" src="./Calc/calc/field.js?f728fcaf"></script>
                <script type="text/javascript" src="./Calc/calc/items.js?dd8957a9"></script>
                <script type="text/javascript" src="./Calc/calc/mechanics/util.js?35418527"></script>
                <script type="text/javascript" src="./Calc/calc/mechanics/gen78.js?213c7184"></script>
                <script type="text/javascript" src="./Calc/calc/mechanics/gen56.js?2c9e9e19"></script>
                <script type="text/javascript" src="./Calc/calc/mechanics/gen4.js?94725eaa"></script>
                <script type="text/javascript" src="./Calc/calc/mechanics/gen3.js?3b9a8bc5"></script>
                <script type="text/javascript" src="./Calc/calc/mechanics/gen12.js?72794ffc"></script>
                <script type="text/javascript" src="./Calc/calc/calc.js?29d1338c"></script>
                <script type="text/javascript" src="./Calc/calc/desc.js?ea76a1ef"></script>
                <script type="text/javascript" src="./Calc/calc/result.js?41d4f6be"></script>
                <script type="text/javascript" src="./Calc/calc/adaptable.js?cd3e6f17"></script>
                <script type="text/javascript" src="./Calc/calc/index.js?7ce34c52"></script>
                <script type="text/javascript" src="./Calc/js/shared_controls.js?07045ecd"></script>
                <script type="text/javascript" src="./Calc/js/index_randoms_controls.js?c05b55a3"></script>
                <script type="text/javascript" src="./Calc/js/moveset_import.js?a0c32dc6"></script>
