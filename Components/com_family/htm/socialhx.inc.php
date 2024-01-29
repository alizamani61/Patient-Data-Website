<div class="row">
    <?php $pageTitle = "Social HX" ?>
    <?= IHTML::BreadCrump("Family and Social", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='family_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_family=1&socialhx=1&func=save" ?>" method='POST'>


        <input name='family_and_social_hxid' type='hidden' value="<?php echo $form['family_and_social_hxid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <?= $this->Text(CHILDSNO, "childsno", $form, $error) ?>
            <?= $this->Text(PATTERN, "pattern", $form, $error) ?>
            <?= $this->Text(AGEOFMARRIAGE, "ageofmarriage", $form, $error) ?>
            <?= $this->Text(PARTNERAGEATMARRIAGETIME, "partnerageatmarriagetime", $form, $error) ?>
            <?= $this->Text(PARTNERAGEATMARRIAGETIME, "partnerageatmarriagetime", $form, $error) ?>

            <?= $this->CheckBox(SMOKING, "smoking", $form, $error, true) ?>
            <div id="smoking-td" class="condition-form-item" <?= (($form["smoking"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->CheckBox(SMOKINGCIGA, "smokingciga", $form, $error) ?>
                <?= $this->CheckBox(SMOKINGCIGAR, "smokingcigar", $form, $error) ?>
                <?= $this->CheckBox(SMOKINGWATERPIPE, "smokingwaterpipe", $form, $error) ?>
                <?= $this->CheckBox(SMOKINGOPIUM, "smokingopium", $form, $error) ?>
                <?= $this->CheckBox(SMOKINGCANNABIS, "smokingcannabis", $form, $error) ?>
                <?= $this->Text(SMOKINGHOWMUCH, "smokinghowmuch", $form, $error) ?>
            </div>

            <?= $this->CheckBox(OTHERSUBAGENT, "othersubagent", $form, $error) ?>
            <?= $this->CheckBox(PERSONALINCOME, "personalincome", $form, $error) ?>
            <?= $this->CheckBox(FAMILYINCOME, "familyincome", $form, $error) ?>

            <?= $this->CheckBox(LIFESTRESSOR, "lifestressor", $form, $error, true) ?>
            <div id="lifestressor-td" class="condition-form-item" <?= (($form["lifestressor"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(LIFESTRESSORWHAT, "lifestressorwhat", $form, $error) ?>
                <?= $this->Text(LIFESTRESSORTIME, "lifestressortime", $form, $error) ?>
            </div>

        </div>
        <div class="ln_solid"></div>
        <div class="col-md-12">
            <input name='com_family_save' type='hidden' value="1" />
            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
            <button class="btn btn-round btn-success" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>

            <?php if ($message != "") IHTML::GetMessage($message); ?>
        </div>
    </form>
    <?= $this->EndPanel(); ?>
</div>

<script>
    $(document).ready(function () {
        $(".select2_single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>