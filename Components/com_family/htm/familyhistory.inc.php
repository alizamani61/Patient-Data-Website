<div class="row">
    <?php $pageTitle = "Family History" ?>
    <?= IHTML::BreadCrump("Family and Social", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='family_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_family=1&familyhistory=1&func=save" ?>" method='POST'>


        <input name='family_and_social_hxid' type='hidden' value="<?php echo $form['family_and_social_hxid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(OBESITY, "obesity", $form, $error, true) ?>
                <div id="obesity-td" class="condition-form-item" <?= (($form["obesity"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(OBESITYWHO, "obesitywho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>
                </div>

                <!-- /Select2 -->
                <?= $this->CheckBox(PROSTATECANCER, "prostatecancer", $form, $error, true) ?>
                <div id="prostatecancer-td" class="condition-form-item" <?= (($form["prostatecancer"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(PROSTATECANCERWHO, "prostatecancerwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>
                </div>

                <?= $this->CheckBox(FDM, "dm", $form, $error, true) ?>
                <div id="dm-td" class="condition-form-item" <?= (($form["dm"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(DMWHO, "dmwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>
                </div>

                <?= $this->CheckBox(OTHERMALIGNANCY, "othermalignancy", $form, $error, true) ?>
                <div id="othermalignancy-td" class="condition-form-item" <?= (($form["othermalignancy"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Select(OTHERMALIGNANCYWHO, "othermalignancywho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>    
                </div>

                <?= $this->CheckBox(FHTN, "htn", $form, $error, true) ?>
                <div id="htn-td" class="condition-form-item" <?= (($form["htn"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(HTNWHO, "htnwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>    
                </div>

                <?= $this->CheckBox(RENTALSTONE, "rentalstone", $form, $error, true) ?>
                <div id="rentalstone-td" class="condition-form-item" <?= (($form["rentalstone"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(RENTALSTONEWHO, "rentalstonewho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>    
                </div>

                <?= $this->CheckBox(HYPOTHYROIDISM, "hypothyroidism", $form, $error, true) ?>
                <div id="hypothyroidism-td" class="condition-form-item" <?= (($form["hypothyroidism"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(HYPOTHYROIDISMWHO, "hypothyroidismwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>    
                </div>

                <?= $this->CheckBox(FGALLSTONE, "gallstone", $form, $error, true) ?>
                <div id="gallstone-td" class="condition-form-item" <?= (($form["gallstone"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(GALLSTONEWHO, "gallstonewho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>    
                </div>

                <?= $this->CheckBox(BREASTCANCER, "breastcancer", $form, $error, true) ?>
                <div id="breastcancer-td" class="condition-form-item" <?= (($form["breastcancer"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(BREASTCANCERWHO, "breastcancerwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>    
                </div>

            </div>
            <div class="col-md-6">

                <?= $this->CheckBox(FGOUT, "gout", $form, $error, true) ?>
                <div id="gout-td" class="condition-form-item" <?= (($form["gout"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(GOUTWHO, "goutwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>    
                </div>

                <?= $this->CheckBox(COLONCANCER, "coloncancer", $form, $error, true) ?>
                <div id="coloncancer-td" class="condition-form-item" <?= (($form["coloncancer"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(COLONCANCERWHO, "coloncancerwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>    
                </div>

                <?= $this->CheckBox(MULTIPLEGESTATION, "multiplegestation", $form, $error, true) ?>
                <div id="multiplegestation-td" class="condition-form-item" <?= (($form["multiplegestation"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(MULTIPLEGESTATIONWHO, "multiplegestationwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>    
                </div>
                <?= $this->CheckBox(ENDOMETRIALCANCER, "endometrialcancer", $form, $error, true) ?>
                <div id="endometrialcancer-td" class="condition-form-item" <?= (($form["endometrialcancer"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(ENDOMETRIALCANCERWHO, "endometrialcancerwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>    
                </div>

                <?= $this->CheckBox(OVARIANCANCER, "ovariancancer", $form, $error, true) ?>
                <div id="ovariancancer-td" class="condition-form-item" <?= (($form["ovariancancer"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(OVARIANCANCERWHO, "ovariancancerwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>
                </div>

                <?= $this->CheckBox(HYPERLIPIDEMIA, "hyperlipidemia", $form, $error, true) ?>
                <div id="hyperlipidemia-td" class="condition-form-item" <?= (($form["hyperlipidemia"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(HYPERLIPIDEMIAWHO, "hyperlipidemiawho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>
                </div>
                <?= $this->CheckBox(MI, "mi", $form, $error, true) ?>
                <div id="mi-td" class="condition-form-item" <?= (($form["mi"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(MIWHO, "miwho[]", $form, $error, "combo(Father/Mother/Sister/Brother)", true, " class='select2_multiple form-control' multiple='multiple'") ?>
                </div>
                <?= $this->CheckBox(OTHER, "other", $form, $error, true) ?>
                <div id="other-td" class="condition-form-item" <?= (($form["other"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(OTHERWHO, "otherwho", $form, $error) ?>
                </div>


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