<div class="row">
    <?php $pageTitle = "General Appearance"?>
    <?=IHTML::BreadCrump("PE", $pageTitle)?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='pe_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_pe=1&generalappearance=1&func=save" ?>" method='POST'>


        <input name='peid' type='hidden' value="<?php echo $form['peid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->Select(GROSSBODY, "grossbody", $form, $error, "combo(Central obesity/peripheral obesity)",true,"class='form-control'") ?>
                <?= $this->Select(OBESITYTYPE, "obesitytype", $form, $error, "combo(Apple shape obesity/Pear shape obesity)",true,"class='form-control'") ?>

                <?= $this->CheckBox(RESDISTRESS, "resdistress", $form, $error) ?>
                <?= $this->CheckBox(CYANOSIS, "cyanosis", $form, $error) ?>
                <?= $this->CheckBox(PALLOR, "pallor", $form, $error) ?>

                <?= $this->CheckBox(CRIPPLE, "cripple", $form, $error, true) ?>
                <div id="cripple-td" class="condition-form-item" <?= (($form["cripple"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(CRIPPLECANE, "cripplecane", $form, $error) ?>
                    <?= $this->CheckBox(CRIPPLEWALKER, "cripplewalker", $form, $error) ?>
                    <?= $this->CheckBox(CRIPPLEWHEEL, "cripplewheel", $form, $error) ?>
                    <?= $this->CheckBox(CRIPPLEBEDRIDDEN, "cripplebedridden", $form, $error) ?>
                </div>

                <?= $this->CheckBox(WELLBEING, "wellbeing", $form, $error, true) ?>
                <div id="wellbeing-td" class="condition-form-item" <?= (($form["wellbeing"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(WELLBEINGHEALTH, "wellbeinghealth", $form, $error) ?>
                    <?= $this->CheckBox(WELLBEINGMILDLY, "wellbeingmildly", $form, $error) ?>
                    <?= $this->CheckBox(WELLBEINGILL, "wellbeingill", $form, $error) ?>
                </div>

                <?= $this->CheckBox(PICKAPPEAR, "pickappear", $form, $error) ?>
                
            </div>
            <div class="col-md-6">
                <?= $this->CheckBox(MOONFACED, "moonfaced", $form, $error) ?>
                <?= $this->CheckBox(ACROMEGALIC, "acromegalic", $form, $error) ?>
                <?= $this->CheckBox(MYXEDEMATOUS, "myxedematous", $form, $error) ?>
                <?= $this->CheckBox(SUPTAFAT, "suptafat", $form, $error) ?>
                <?= $this->CheckBox(RETROCERVICAL, "retrocervical", $form, $error) ?>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="col-md-12">
            <input name='com_pe_save' type='hidden' value="1" />
            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
            <button class="btn btn-round btn-success" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>

            <?php if ($message != "") IHTML::GetMessage($message); ?>
        </div>
    </form>
    <?= $this->EndPanel(); ?>
</div>