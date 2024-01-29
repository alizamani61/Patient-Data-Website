<div class="row">
    <?php $pageTitle = "Musculoskeletal" ?>
    <?= IHTML::BreadCrump("Review Of System", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='review_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_review=1&musculoskeletal=1&func=save" ?>" method='POST'>


        <input name='review_of_systemsid' type='hidden' value="<?php echo $form['review_of_systemsid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(BONEPAINE, "bonepaine", $form, $error, true) ?>
                <div id="bonepaine-td" class="condition-form-item" <?= (($form["bonepaine"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(BONEPAINEGENE, "bonepainegene", $form, $error) ?>
                    <?= $this->CheckBox(BONEPAINEOTHER, "bonepaineother", $form, $error) ?>
                </div>

                <?= $this->CheckBox(LOWBACKPAIN, "lowbackpain", $form, $error, true) ?>
                <div id="lowbackpain-td" class="condition-form-item" <?= (($form["lowbackpain"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(LOWBACKPAININSUPINE, "lowbackpaininsupine", $form, $error) ?>
                    <?= $this->CheckBox(LOWBACKPAINONST, "lowbackpainonst", $form, $error) ?>
                    <?= $this->CheckBox(LOWBACKPAINWITHWA, "lowbackpainwithwa", $form, $error) ?>
                    <?= $this->CheckBox(LOWBACKPAINRAD, "lowbackpainrad", $form, $error) ?>
                    <?= $this->CheckBox(LOWBACKPAINBUTTOCK, "lowbackpainbuttock", $form, $error) ?>
                    <?= $this->CheckBox(LOWBACKPAINTHIGH, "lowbackpainthigh", $form, $error) ?>
                    <?= $this->CheckBox(LOWBACKPAINFOOT, "lowbackpainfoot", $form, $error) ?>
                </div>

                <?= $this->CheckBox(HIPPAIN, "hippain", $form, $error, true) ?>
                <div id="hippain-td" class="condition-form-item" <?= (($form["hippain"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(HIPPAINEXACERBATION, "hippainexacerbation", $form, $error) ?>
                    <?= $this->CheckBox(HIPPAINWITH, "hippainwith", $form, $error) ?>
                    <?= $this->CheckBox(HIPPAINRELIEVE, "hippainrelieve", $form, $error) ?>
                </div>

                <?= $this->CheckBox(KNEEPAIN, "kneepain", $form, $error, true) ?>
                <div id="kneepain-td" class="condition-form-item" <?= (($form["kneepain"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(KNEEPAINEXAGG, "kneepainexagg", $form, $error) ?>
                    <?= $this->CheckBox(KNEEPAINRELIEVE, "kneepainrelieve", $form, $error) ?>
                    <?= $this->CheckBox(KNEEPAINCREP, "kneepaincrep", $form, $error) ?>
                    <?= $this->CheckBox(KNEEPAINSWELLING, "kneepainswelling", $form, $error) ?>
                </div> 


                <?= $this->CheckBox(KNEEPAINLEG, "kneepainleg", $form, $error) ?>

                <?= $this->CheckBox(FIRSTMEPAIN, "firstmepain", $form, $error, true) ?>
                <div id="firstmepain-td" class="condition-form-item" <?= (($form["firstmepain"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(FIRSTMEPAININT, "firstmepainint", $form, $error) ?>
                    <?= $this->CheckBox(FIRSTMEPAINNIGHT, "firstmepainnight", $form, $error) ?>
                    <?= $this->CheckBox(FIRSTMEPAINWARMNESS, "firstmepainwarmness", $form, $error) ?>
                    <?= $this->CheckBox(FIRSTMEPAINREDNESS, "firstmepainredness", $form, $error) ?>
                    <?= $this->CheckBox(FIRSTMEPAINSWELLING, "firstmepainswelling", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(ANKLEPAINE, "anklepaine", $form, $error, true) ?>
                <div id="anklepaine-td" class="condition-form-item" <?= (($form["anklepaine"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(ANKLEPAINEINTER, "anklepaineinter", $form, $error) ?>
                    <?= $this->CheckBox(ANKLEPAINENIGHT, "anklepainenight", $form, $error) ?>
                    <?= $this->CheckBox(ANKLEPAINEWARM, "anklepainewarm", $form, $error) ?>
                    <?= $this->CheckBox(ANKLEPAINERED, "anklepainered", $form, $error) ?>
                    <?= $this->CheckBox(ANKLEPAINESWE, "anklepaineswe", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(WEAKNESS, "weakness", $form, $error, true) ?>
                <div id="weakness-td" class="condition-form-item" <?= (($form["weakness"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(WEAKNESSGENE, "weaknessgene", $form, $error) ?>
                    <?= $this->CheckBox(WEAKNESSONCOMBING, "weaknessoncombing", $form, $error) ?>
                    <?= $this->CheckBox(WEAKNESSONSTAND, "weaknessonstand", $form, $error) ?>
                    <?= $this->CheckBox(WEAKNESSWRITING, "weaknesswriting", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(FATIGUE, "fatigue", $form, $error, true) ?>
                <div id="fatigue-td" class="condition-form-item" <?= (($form["fatigue"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(FATIGUEALLDAY, "fatigueallday", $form, $error) ?>
                    <?= $this->CheckBox(FATIGUEEVENING, "fatigueevening", $form, $error) ?>
                    <?= $this->CheckBox(FATIGUEAFTERPH, "fatigueafterph", $form, $error) ?>
                </div> 

            </div>
            <div class="col-md-6">



            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="col-md-12">
            <input name='com_review_save' type='hidden' value="1" />
            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
            <button class="btn btn-round btn-success" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>

            <?php if ($message != "") IHTML::GetMessage($message); ?>
        </div>
    </form>
    <?= $this->EndPanel(); ?>
</div>