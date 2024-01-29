<div class="row">
    <?php $pageTitle = "Dietary Assessment" ?>
    <?= IHTML::BreadCrump("Diet & Physical Activity", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='diet_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_diet=1&dietaryassessment=1&func=save" ?>" method='POST'>


        <input name='dietid' type='hidden' value="<?php echo $form['dietid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->Text(ONSETGAIN, "onsetgain", $form, $error) ?>
                <?= $this->Select(ACCELERATEDP, "acceleratedp", $form, $error, "combo(From childhood/Dead relatives/After pregnancy/Drug consumption/After marriage)", true, "class='form-control'") ?>

                <?= $this->CheckBox(BREAKFAST, "breakfast", $form, $error, true) ?>
                <div id="breakfast-td" class="condition-form-item" <?= (($form["breakfast"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(BREAKFASTTIME, "breakfasttime", $form, $error) ?>
                    <?= $this->Select(BREAKFASTWHAT, "breakfastwhat", $form, $error, "combo(No/Simple/Cook/Fried)", true, "class='form-control'") ?>
                </div>

                <?= $this->CheckBox(LUNCH, "lunch", $form, $error, true) ?>
                <div id="lunch-td" class="condition-form-item" <?= (($form["lunch"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(LUNCHTIME, "lunchtime", $form, $error) ?>
                    <?= $this->Select(LUNCHWHAT, "lunchwhat", $form, $error, "combo(No/Simple/Cook/Fried)", true, "class='form-control'") ?>
                </div>

                <?= $this->CheckBox(DINNER, "dinner", $form, $error, true) ?>
                <div id="dinner-td" class="condition-form-item" <?= (($form["dinner"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(DINNERTIME, "dinnertime", $form, $error) ?>
                    <?= $this->Select(DINNERWHAT, "dinnerwhat", $form, $error, "combo(No/Simple/Cook/Fried)", true, "class='form-control'") ?>
                </div>

                <?= $this->CheckBox(OTHERMM, "othermm", $form, $error, true) ?>
                <div id="othermm-td" class="condition-form-item" <?= (($form["othermm"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(OTHERMMTIME, "othermmtime", $form, $error) ?>
                    <?= $this->Select(OTHERMMWHAT, "othermmwhat", $form, $error, "combo(No/Simple/Cook/Fried)", true, "class='form-control'") ?>
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
                    <?= $this->CheckBox(BINGEDIETING, "bingedieting", $form, $error) ?>
                    <?= $this->CheckBox(BINGETV, "bingetv", $form, $error) ?>
                    <?= $this->CheckBox(BINGESTUDY, "bingestudy", $form, $error) ?>
                    <?= $this->CheckBox(BINGEHOMEWORK, "bingehomework", $form, $error) ?>
                    <?= $this->CheckBox(BINGENET, "bingenet", $form, $error) ?>
                    <?= $this->CheckBox(BINGEPLAYING, "bingeplaying", $form, $error) ?>
                    <?= $this->CheckBox(BINGEATJOB, "bingeatjob", $form, $error) ?>
                    <?= $this->CheckBox(BINGEEMOTION, "bingeemotion", $form, $error) ?>
                    <?= $this->CheckBox(BINGESAD, "bingesad", $form, $error) ?>
                    <?= $this->CheckBox(BINGEANGER, "bingeanger", $form, $error) ?>
                    <?= $this->CheckBox(BINGEHAPPINESS, "bingehappiness", $form, $error) ?>
                    <?= $this->CheckBox(BINGENERVOUS, "bingenervous", $form, $error) ?>
                    <?= $this->CheckBox(BINGELOSSCONTROL, "bingelosscontrol", $form, $error) ?>
                    <?= $this->CheckBox(BINGEHUNGER, "bingehunger", $form, $error) ?>
                    <?= $this->Text(BINGEFREQUENCY, "bingefrequency", $form, $error) ?>
                </div>

                <?= $this->CheckBox(RAPIDLYEATING, "rapidlyeating", $form, $error) ?>
                <?= $this->CheckBox(FULLEATING, "fulleating", $form, $error) ?>
                <?= $this->CheckBox(EMBARRASSMENTEAT, "embarrassmenteat", $form, $error) ?>
                <?= $this->CheckBox(OVEREATING, "overeating", $form, $error) ?>
                <?= $this->CheckBox(SWEATLOVER, "sweatlover", $form, $error, true) ?>
                <div id="sweatlover-td" class="condition-form-item" <?= (($form["sweatlover"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select("Time a day", "sweatlovertimes", $form, $error, "combo(Two Times/More)", true," class='form-control'", "", "1/2") ?>
                </div>

            </div>
            <div class="col-md-6">

                <?= $this->CheckBox(BREADRICE, "breadrice", $form, $error, true) ?>
                <div id="breadrice-td" class="condition-form-item" <?= (($form["breadrice"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select("Time a day", "breadricetimes", $form, $error, "combo(Two Times/More)", true," class='form-control'", "", "1/2") ?>
                </div>
                
                <?= $this->CheckBox(POTATOCHIPS, "potatochips", $form, $error, true) ?>
                <div id="potatochips-td" class="condition-form-item" <?= (($form["potatochips"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select("Time a day", "potatochipstimes", $form, $error, "combo(Two Times/More)", true," class='form-control'", "", "1/2") ?>
                </div>
                
                <?= $this->CheckBox(FASTFOOD, "fastfood", $form, $error, true) ?>
                <div id="fastfood-td" class="condition-form-item" <?= (($form["fastfood"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select("Time a day", "fastfoodtimes", $form, $error, "combo(Two Times/More)", true," class='form-control'", "", "1/2") ?>
                </div>

                <?= $this->CheckBox(TEA, "tea", $form, $error, true) ?>
                <div id="tea-td" class="condition-form-item" <?= (($form["tea"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select("Time a day", "teatimes", $form, $error, "combo(Two Times/More)", true," class='form-control'", "", "1/2") ?>
                </div>
                
                <?= $this->CheckBox(CHOCALATELOVER, "chocalatelover", $form, $error, true) ?>
                <div id="chocalatelover-td" class="condition-form-item" <?= (($form["chocalatelover"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select("Time a day", "chocalatelovertimes", $form, $error, "combo(Two Times/More)", true," class='form-control'", "", "1/2") ?>
                </div>
                
                <?= $this->CheckBox(ICECREAMLOVER, "icecreamlover", $form, $error, true) ?>
                <div id="icecreamlover-td" class="condition-form-item" <?= (($form["icecreamlover"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select("Time a day", "icecreamlovertimes", $form, $error, "combo(Two Times/More)", true," class='form-control'", "", "1/2") ?>
                </div>
                <?= $this->CheckBox(CARBONATEDBEVER, "carbonatedbever", $form, $error, true) ?>
                <div id="carbonatedbever-td" class="condition-form-item" <?= (($form["carbonatedbever"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select("Time a day", "carbonatedbevertimes", $form, $error, "combo(Two Times/More)", true," class='form-control'", "", "1/2") ?>
                </div>

                <?= $this->CheckBox(PURGE1, "purge1", $form, $error, true) ?>
                <div id="purge1-td" class="condition-form-item" <?= (($form["purge1"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(PURGEVOMIT, "purgevomit", $form, $error) ?>
                    <?= $this->CheckBox(PURGEABUSE, "purgeabuse", $form, $error) ?>
                    <?= $this->CheckBox(PURGEDIURETIC, "purgediuretic", $form, $error) ?>
                    <?= $this->CheckBox(PURGEOVERUSE, "purgeoveruse", $form, $error) ?>
                    <?= $this->CheckBox(PURGEANT, "purgeant", $form, $error) ?>
                    <?= $this->CheckBox(PURGEINTENSE, "purgeintense", $form, $error) ?>
                </div>

                <?= $this->CheckBox(WEIGHTDIET, "weightdiet", $form, $error, true) ?>
                <div id="weightdiet-td" class="condition-form-item" <?= (($form["weightdiet"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(WEIGHTDIETWHAT, "weightdietwhat", $form, $error) ?>
                    <?= $this->Text(WEIGHTDIETHOWLONG, "weightdiethowlong", $form, $error) ?>
                    
                    <?= $this->Select(WEIGHTDIETDATETYPE, "weightdietdatetype", $form, $error, "combo(Daily/Weekly/Monthly/Yearly)", true," class='form-control'", "", "1/2/3/4") ?>
                    
                    <?= $this->Text(WEIGHTDIETSUCCESS, "weightdietsuccess", $form, $error) ?>
                    
                    <?= $this->Text("Diet Principle Count", "dietprinciplecount", $form, $error) ?>
                    <?= $this->Text("Back Weight Priod of time", "backweighttime", $form, $error) ?>
                    <?= $this->Text("Back Weight loss amount", "backweightloss", $form, $error) ?>

                </div>

                <?= $this->CheckBox(ALCOHOLCONS, "alcoholcons", $form, $error, true) ?>
                <div id="alcoholcons-td" class="condition-form-item" <?= (($form["alcoholcons"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(ALCOHOLCONSWHAT, "alcoholconswhat", $form, $error) ?>
                    <?= $this->Select(ALCOHOLCONSFREQUENT, "alcoholconsfrequent", $form, $error, "combo(Daily/Weekly/Monthly)", true," class='form-control'", "", "1/2/3") ?>
                    <?= $this->Text(ALCOHOLCONSHOWMUCH, "alcoholconshowmuch", $form, $error) ?>
                </div>

            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="col-md-12">
            <input name='com_diet_save' type='hidden' value="1" />
            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
            <button class="btn btn-round btn-success" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>

            <?php if ($message != "") IHTML::GetMessage($message); ?>
        </div>
    </form>
    <?= $this->EndPanel(); ?>
</div>