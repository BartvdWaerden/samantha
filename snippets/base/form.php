<div id="form">

    <h2 class="u-space-leader-m">Form</h2>

    <form method="post" action="#" class="c-form">

        <fieldset>
            <legend><span>Legend</span></legend>
            <ol class="c-form-fields">

                <li class="c-form-item c-form-item--stacked">
                    <label for="label" class="c-form-label">Label</label>
                    <input type="text" name="label" id="label" class="c-form-input" required/>
                </li>

                <li class="c-form-item c-form-item--stacked">
                    <fieldset>
                        <span class="c-form-label">Radio set <em class="c-form-optional">(optional)</em></span>

                        <ul class="c-input-set c-input-set--horizontal">
                            <li>
                                <label class="c-input-set-label">
                                    <input type="radio" name="radioset" value="Option 1"/>
                                    <span>Option 1</span>
                                </label>
                            </li>
                            <li>
                                <label class="c-input-set-label">
                                    <input type="radio" name="radioset" value="Option 2"/>
                                    <span>Option 2</span>
                                </label>
                            </li>
                            <li>
                                <label class="c-input-set-label">
                                    <input type="radio" name="radioset" value="Option 3"/>
                                    <span>Option 3</span>
                                </label>
                            </li>
                            <li>
                                <label class="c-input-set-label">
                                    <input type="radio" name="radioset" value="Option 3"/>
                                    <span>Option 3</span>
                                </label>
                            </li>
                        </ul>

                    </fieldset>
                </li>

                <li class="c-form-item c-form-item--stacked">
                    <label for="bmonth" class="c-form-label">Date of birth</label>
                    <select id="bmonth">
                        <option>Month:</option>
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                    </select>

                    <!-- <label for="bday">Birth day</label> -->
                    <select id="bday">
                        <option>Day:</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                    </select>

                    <!-- <label for="byear">Birth year</label> -->
                    <select id="byear">
                        <option>Year:</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                    </select>
                </li>

                <li class="c-form-item">
                    <label for="text" class="c-form-label">Type="text"</label>
                    <input type="text" name="text" id="text" class="c-form-input" placeholder="Placeholder"/>
                </li>

                <li class="c-form-item">
                    <label for="email" class="c-form-label">Type="email"</label>
                    <input type="email" name="email" id="email" class="c-form-input"/>
                    <!-- <a href="#">Weet ik niet?</a> -->
                </li>

                <li class="c-form-item">
                    <label for="url" class="c-form-label">Type="url"</label>
                    <input type="url" name="url" id="url" class="c-form-input"/>
                </li>

                <li class="c-form-item">
                    <label for="number" class="c-form-label">Type="number"</label>
                    <input type="number" name="number" id="number" class="c-form-input"/>
                </li>

                <li class="c-form-item">
                    <label for="tel" class="c-form-label">Type="tel"</label>
                    <input type="tel" name="tel" id="tel" class="c-form-input"/>
                </li>

                <li class="c-form-item">
                    <label for="password" class="c-form-label">Type="password"</label>
                    <input type="password" name="password" id="password" class="c-form-input" value="password"/>
                </li>

                <li class="c-form-item">
                    <label for="zipcode" class="c-form-label">Zip code</label>
                    <input type="text" name="zipcode" id="zipcode" class="c-form-input" pattern="^[0-9]{4}\s*[a-zA-Z]{2}" title="A Dutch zip code, with or without space" placeholder="1234 AB"/>
                    <small class="c-form-helper">Dutch zip code pattern check</small>
                </li>

                <li class="c-form-item c-form-item--stacked">
                    <label for="select" class="c-form-label">Select with optgroup <em class="c-form-optional">(optional)</em></label>
                    <select id="select">
                        <optgroup label="Optgroup 1">
                            <option value="Option 1">Option 1</option>
                            <option value="Option 2">Option 2</option>
                            <option value="Option 3">Option 3</option>
                            <option value="Option 4">Option 4</option>
                            <option value="Option 5">Option 5</option>
                        </optgroup>

                        <optgroup label="Optgroup 2">
                            <option selected="selected" value="Option 6">Option 6</option>
                            <option value="Option 7">Option 7</option>
                            <option value="Option 8">Option 8</option>
                            <option value="Option 9">Option 9</option>
                            <option value="Option 10">Option 10</option>
                        </optgroup>
                    </select>
                </li>

                <li class="c-form-item">
                    <fieldset>
                        <span class="c-form-label">Check set</span>
                        <ul class="c-input-set">
                            <li>
                                <label class="c-input-set-label">
                                    <input type="checkbox" name="checkset" value="Option 1"/>
                                    <span>Option 1</span>
                                </label>
                            </li>

                            <li>
                                <label class="c-input-set-label">
                                    <input type="checkbox" name="checkset" value="Option 2"/>
                                    <span>Option 2</span>
                                </label>
                            </li>

                            <li>
                                <label class="c-input-set-label">
                                    <input type="checkbox" name="checkset" value="Option 3"/>
                                    <span>Option 3</span>
                                </label>
                            </li>

                            <li>
                                <label class="c-input-set-label">
                                    <input type="checkbox" name="checkset" value="Option 4"/>
                                    <span>Option 4</span>
                                </label>
                            </li>
                        </ul>
                    </fieldset>
                </li>

                <li class="c-form-item c-form-item--stacked">
                    <label for="comments" class="c-form-label">Comments</label>
                    <textarea id="comments" rows="8" cols="24" class="c-form-input c-form-input--full"></textarea>
                </li>
            </ol>

            <p class="u-text-max-width">
                <small>Uw persoonsgegevens worden alleen gebruikt voor het beantwoorden van de door u gestelde vraag. Ze worden niet langer bewaard dan voor dat doel nodig is. U kunt dit nalezen in onze <a href="http://www.rodesk.nl" title="privacyverklaring">privacyverklaring</a>.</small>
            </p>

        </fieldset>

        <input type="submit" name="submit" class="c-btn c-btn--full c-btn--primary" value="Submit button"/>

    </form>
</div>
