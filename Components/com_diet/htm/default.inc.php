<form class="form-horizontal" name='diet_form' id='diet_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_diet=1&func=save" ?>" method='POST'>
    <fieldset>
        
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
            	<?=IHTML::ReceptionData()?>
                <li class="active"><a href="#DietaryAssessmentTab" data-toggle="tab">Dietary Assessment</a></li>
                <li><a href="#PhysicalActivityTab" data-toggle="tab">Physical Activity</a></li>
            </ul>
            <div class="well bs-component"> 
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="DietaryAssessmentTab">
                        <input name='dietid' type='hidden' value="<?php echo $form['dietid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <?= $this->Text(ONSETGAIN, "onsetgain", $form, $error) ?>
                        <?= $this->Select(ACCELERATEDP, "acceleratedp", $form, $error, "combo(From childhood/Dead relatives/After pregnancy/Drug consumption/After marriage)") ?>
                        
                        <?= $this->CheckBox(BREAKFAST, "breakfast", $form, $error, true) ?>
                        <div id="breakfast-td" class="condition-form-item" <?= (($form["breakfast"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(BREAKFASTTIME, "breakfasttime", $form, $error) ?>
                            <?= $this->Select(BREAKFASTWHAT, "breakfastwhat", $form, $error, "combo(No/Simple/Cook/Fried)") ?>
                        </div>
                        
                        <?= $this->CheckBox(LUNCH, "lunch", $form, $error, true) ?>
                        <div id="lunch-td" class="condition-form-item" <?= (($form["lunch"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(LUNCHTIME, "lunchtime", $form, $error) ?>
                            <?= $this->Select(LUNCHWHAT, "lunchwhat", $form, $error, "combo(No/Simple/Cook/Fried)") ?>
                        </div>
                        
                        <?= $this->CheckBox(DINNER, "dinner", $form, $error, true) ?>
                        <div id="dinner-td" class="condition-form-item" <?= (($form["dinner"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(DINNERTIME, "dinnertime", $form, $error) ?>
                            <?= $this->Select(DINNERWHAT, "dinnerwhat", $form, $error, "combo(No/Simple/Cook/Fried)") ?>
                        </div>

                        <?= $this->CheckBox(OTHERMM, "othermm", $form, $error, true) ?>
                        <div id="othermm-td" class="condition-form-item" <?= (($form["othermm"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(OTHERMMTIME, "othermmtime", $form, $error) ?>
                            <?= $this->Select(OTHERMMWHAT, "othermmwhat", $form, $error, "combo(No/Simple/Cook/Fried)") ?>
                        </div>

                        <?= $this->CheckBox(SNACKBEBRLU, "snackbebrlu", $form, $error, true) ?>
                        <div id="snackbebrlu-td" class="condition-form-item" <?= (($form["snackbebrlu"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(SNACKBEBRLUNO, "snackbebrluno", $form, $error) ?>
                            <?= $this->Text(SNACKBEBRLUWHAT, "snackbebrluwhat", $form, $error) ?>
                            <?= $this->Text(SNACKBEBRLUTIME, "snackbebrlutime", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(SNACKBELUDI, "snackbeludi", $form, $error, true) ?>
                        <div id="snackbeludi-td" class="condition-form-item" <?= (($form["snackbeludi"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(SNACKBELUDINO, "snackbeludino", $form, $error) ?>
                            <?= $this->Text(SNACKBELUDIWHAT, "snackbeludiwhat", $form, $error) ?>
                            <?= $this->Text(SNACKBELUDITIME, "snackbeluditime", $form, $error) ?>
                        </div>


                        <?= $this->CheckBox(BREAKFASTMORE, "breakfastmore", $form, $error) ?>
                        <?= $this->CheckBox(LUNCHMORE, "lunchmore", $form, $error) ?>
                        <?= $this->CheckBox(DINNERMORE, "dinnermore", $form, $error) ?>
                        
                        <?= $this->CheckBox(BINGE, "binge", $form, $error, true) ?>
                        <div id="binge-td" class="condition-form-item" <?= (($form["binge"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(BINGEDIETING, "bingedieting", $form, $error) ?>
                            <?=$this->CheckBox(BINGETV, "bingetv", $form, $error) ?>
                            <?=$this->CheckBox(BINGESTUDY, "bingestudy", $form, $error) ?>
                            <?=$this->CheckBox(BINGEHOMEWORK, "bingehomework", $form, $error) ?>
                            <?=$this->CheckBox(BINGENET, "bingenet", $form, $error) ?>
                            <?=$this->CheckBox(BINGEPLAYING, "bingeplaying", $form, $error) ?>
                            <?=$this->CheckBox(BINGEATJOB, "bingeatjob", $form, $error) ?>
                            <?=$this->CheckBox(BINGEEMOTION, "bingeemotion", $form, $error) ?>
                            <?=$this->CheckBox(BINGESAD, "bingesad", $form, $error) ?>
                            <?=$this->CheckBox(BINGEANGER, "bingeanger", $form, $error) ?>
                            <?=$this->CheckBox(BINGEHAPPINESS, "bingehappiness", $form, $error) ?>
                            <?=$this->CheckBox(BINGENERVOUS, "bingenervous", $form, $error) ?>
                            <?=$this->CheckBox(BINGELOSSCONTROL, "bingelosscontrol", $form, $error) ?>
                            <?=$this->CheckBox(BINGEHUNGER, "bingehunger", $form, $error) ?>
                            <?=$this->Text(BINGEFREQUENCY, "bingefrequency", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(RAPIDLYEATING, "rapidlyeating", $form, $error) ?>
                        <?= $this->CheckBox(FULLEATING, "fulleating", $form, $error) ?>
                        <?= $this->CheckBox(EMBARRASSMENTEAT, "embarrassmenteat", $form, $error) ?>
                        <?= $this->CheckBox(OVEREATING , "overeating", $form, $error) ?>
                        <?= $this->CheckBox(SWEATLOVER , "sweatlover", $form, $error) ?>
                        <?= $this->CheckBox(BREADRICE, "breadrice", $form, $error) ?>
                        <?= $this->CheckBox(POTATOCHIPS, "potatochips", $form, $error) ?>
                        <?= $this->CheckBox(FASTFOOD, "fastfood", $form, $error) ?>
                        <?= $this->CheckBox(TEA, "tea", $form, $error) ?>
                        
                        <?= $this->CheckBox(CHOCALATELOVER , "chocalatelover", $form, $error) ?>
                        <?= $this->CheckBox(ICECREAMLOVER , "icecreamlover", $form, $error) ?>
                        <?= $this->CheckBox(CARBONATEDBEVER , "carbonatedbever", $form, $error) ?>
                        
                        
                        <?= $this->CheckBox(PURGE1, "purge1", $form, $error, true) ?>
                        <div id="purge1-td" class="condition-form-item" <?= (($form["purge1"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(PURGEVOMIT, "purgevomit",  $form, $error) ?>
                            <?=$this->CheckBox(PURGEABUSE, "purgeabuse",  $form, $error) ?>
                            <?=$this->CheckBox(PURGEDIURETIC, "purgediuretic",  $form, $error) ?>
                            <?=$this->CheckBox(PURGEOVERUSE, "purgeoveruse",  $form, $error) ?>
                            <?=$this->CheckBox(PURGEANT, "purgeant",  $form, $error) ?>
                            <?=$this->CheckBox(PURGEINTENSE, "purgeintense",  $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(WEIGHTDIET, "weightdiet", $form, $error, true) ?>
                        <div id="weightdiet-td" class="condition-form-item" <?= (($form["weightdiet"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->Text(WEIGHTDIETWHAT, "weightdietwhat",  $form, $error) ?>
                            <?=$this->Text(WEIGHTDIETHOWLONG, "weightdiethowlong",  $form, $error) ?>
                            <?=$this->Text(WEIGHTDIETSUCCESS, "weightdietsuccess",  $form, $error) ?>
                            
                        </div>

                        <?= $this->CheckBox(ALCOHOLCONS, "alcoholcons", $form, $error, true) ?>
                        <div id="alcoholcons-td" class="condition-form-item" <?= (($form["alcoholcons"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->Text(ALCOHOLCONSWHAT, "alcoholconswhat",  $form, $error) ?>
                            <?=$this->Text(ALCOHOLCONSFREQUENT, "alcoholconsfrequent",  $form, $error) ?>
                            <?=$this->Text(ALCOHOLCONSHOWMUCH, "alcoholconshowmuch",  $form, $error) ?>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="PhysicalActivityTab">
                        
                        <?= $this->CheckBox(WALKING, "walking", $form, $error, true) ?>
                        <div id="walking-td" class="condition-form-item" <?= (($form["walking"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(WALKINGHOME, "walkinghome",  $form, $error) ?>
                            <?=$this->CheckBox(WALKINGWORK, "walkingwork",  $form, $error) ?>
                            <?=$this->CheckBox(WALKINGHABITUAL, "walkinghabitual",  $form, $error) ?>
                            <?=$this->Text(WALKINGFRE, "walkingfre",  $form, $error) ?>
                            <?=$this->Text(WALKINGDURATION, "walkingduration",  $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(SPORTACTIVITY, "sportactivity", $form, $error, true) ?>
                        <div id="sportactivity-td" class="condition-form-item" <?= (($form["sportactivity"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->Text(SPORTACTIVITYWHAT, "sportactivitywhat",  $form, $error) ?>
                            <?=$this->Text(SPORTACTIVITYF, "sportactivityf",  $form, $error) ?>
                            <?=$this->Text(SPORTACTIVITYD, "sportactivityd",  $form, $error) ?>
                            <?=$this->Text(SPORTACTIVITYTIME, "sportactivitytime",  $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(PPHYSICAL, "pphysical", $form, $error, true) ?>
                        <div id="pphysical-td" class="condition-form-item" <?= (($form["pphysical"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->Text(PPHYSICALWHAT, "pphysicalwhat",  $form, $error) ?>
                            <?=$this->Text(PPHYSICALFRE, "pphysicalfre",  $form, $error) ?>
                            <?=$this->Text(PPHYSICALDU, "pphysicaldu",  $form, $error) ?>
                            <?=$this->Text(PPHYSICALREASON, "pphysicalreason",  $form, $error) ?>
                        </div>

                        
                        <?= $this->Select(PALSE, "palse", $form, $error, "combo(sedentary/hypoactive/active/overactive)") ?>
                        <?=$this->TextArea(PHYSICALDESC, "physicaldesc",  $form, $error,true,"","",10,null) ?>
                        
                    </div>
                    <div id="buttons_div" >
                        <input name='com_diet_save' type='hidden' value="1" />
                        <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                        <button class="btn btn-primary" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                    </div>
<?php if ($message != ""): ?>
                        <div id="message_div"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
<?php endif; ?>
                </div><!-- well End-->
            </div><!-- col-lg-6 End-->
    </fieldset>
</form>