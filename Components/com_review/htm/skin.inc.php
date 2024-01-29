<div class="row">
    <?php $pageTitle = "Skin" ?>
    <?= IHTML::BreadCrump("Review Of System", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='review_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_review=1&skin=1&func=save" ?>" method='POST'>


        <input name='review_of_systemsid' type='hidden' value="<?php echo $form['review_of_systemsid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(ISOYELLDIS, "isoyelldis", $form, $error, true) ?>
                <div id="isoyelldis-td" class="condition-form-item" <?= (($form["isoyelldis"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(ISOYELLDISESP, "isoyelldisesp", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(DRYSKIN, "dryskin", $form, $error) ?>
                <?= $this->CheckBox(COARSESKIN, "coarseskin", $form, $error) ?>
                <?= $this->CheckBox(HIRSUTISM, "hirsutism", $form, $error) ?>
                <?= $this->CheckBox(HIRSUTISMFACE, "hirsutismface", $form, $error) ?>
                <?= $this->CheckBox(HIRSUTISMCHEST, "hirsutismchest", $form, $error) ?>
                <?= $this->CheckBox(HIRSUTISMABDOMEN, "hirsutismabdomen", $form, $error) ?>
                <?= $this->CheckBox(HIRSUTISMBACK, "hirsutismback", $form, $error) ?>
                <?= $this->CheckBox(HIRSUTISMEXTREMITY, "hirsutismextremity", $form, $error) ?>
                <?= $this->CheckBox(HAIRLOSS, "hairloss", $form, $error) ?>
                <?= $this->CheckBox(HAIRLOSSDIFFUSE, "hairlossdiffuse", $form, $error) ?>
                <?= $this->CheckBox(HAIRLOSSSCALP, "hairlossscalp", $form, $error) ?>

            </div>
            <div class="col-md-6">
                <?= $this->CheckBox(HAIRLOSSEYEBROW, "hairlosseyebrow", $form, $error) ?>
                <?= $this->CheckBox(HAIRLOSSOTHERAREA, "hairlossotherarea", $form, $error) ?>
                <?= $this->CheckBox(DARKOFSKINFOLDS, "darkofskinfolds", $form, $error) ?>
                <?= $this->CheckBox(NAILPROBLEM, "nailproblem", $form, $error) ?>
                <?= $this->CheckBox(BRUISABILITY, "bruisability", $form, $error) ?>
                <?= $this->CheckBox(PROBLEEDING, "probleeding", $form, $error) ?>
                <?= $this->CheckBox(DEWOUNDHEALING, "dewoundhealing", $form, $error) ?>
                <?= $this->CheckBox(MACANDREDNESS, "macandredness", $form, $error) ?>
                <?= $this->CheckBox(ACNE, "acne", $form, $error) ?>

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