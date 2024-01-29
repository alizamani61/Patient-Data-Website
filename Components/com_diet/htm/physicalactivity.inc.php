<div class="row">
    <?php $pageTitle = "Physical Activity" ?>
    <?= IHTML::BreadCrump("Diet & Physical Activity", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='diet_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_diet=1&physicalactivity=1&func=save" ?>" method='POST'>


        <input name='dietid' type='hidden' value="<?php echo $form['dietid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <?= $this->Text("Sendentary(Daily Activity Only)", "exercisesedentary", $form, $error) ?>
            <?= $this->Text("Hypo Active(Exercise or Walking occationally)", "exercisehypoactive", $form, $error) ?>
            <?= $this->Text("Active(Regular Exercise at least 3 Times a Week)", "exerciseactive", $form, $error) ?>
            <?= $this->Text("Hyper Active(Professional Exercise)", "exercisehyperactive", $form, $error) ?>
            <?= $this->Text("Description", "exercisedesc", $form, $error) ?>

            
            <?= $this->CheckBox(WALKING, "walking", $form, $error, true) ?>
            <div id="walking-td" class="condition-form-item" <?= (($form["walking"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->CheckBox(WALKINGHOME, "walkinghome", $form, $error) ?>
                <?= $this->CheckBox(WALKINGWORK, "walkingwork", $form, $error) ?>
                <?= $this->CheckBox(WALKINGHABITUAL, "walkinghabitual", $form, $error) ?>
                <?= $this->Text(WALKINGFRE, "walkingfre", $form, $error) ?>
                <?= $this->Text(WALKINGDURATION, "walkingduration", $form, $error) ?>
            </div>

            <?= $this->CheckBox(SPORTACTIVITY, "sportactivity", $form, $error, true) ?>
            <div id="sportactivity-td" class="condition-form-item" <?= (($form["sportactivity"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(SPORTACTIVITYWHAT, "sportactivitywhat", $form, $error) ?>
                <?= $this->Text(SPORTACTIVITYF, "sportactivityf", $form, $error) ?>
                <?= $this->Text(SPORTACTIVITYD, "sportactivityd", $form, $error) ?>
                <?= $this->Text(SPORTACTIVITYTIME, "sportactivitytime", $form, $error) ?>
            </div>

            <?= $this->CheckBox(PPHYSICAL, "pphysical", $form, $error, true) ?>
            <div id="pphysical-td" class="condition-form-item" <?= (($form["pphysical"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(PPHYSICALWHAT, "pphysicalwhat", $form, $error) ?>
                <?= $this->Text(PPHYSICALFRE, "pphysicalfre", $form, $error) ?>
                <?= $this->Text(PPHYSICALDU, "pphysicaldu", $form, $error) ?>
                <?= $this->Text(PPHYSICALREASON, "pphysicalreason", $form, $error) ?>
            </div>


            <?= $this->Select(PALSE, "palse", $form, $error, "combo(sedentary/hypoactive/active/overactive)", true, "class='form-control'") ?>
            <?= $this->TextArea(PHYSICALDESC, "physicaldesc", $form, $error, true, "", "", 10, null) ?>



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