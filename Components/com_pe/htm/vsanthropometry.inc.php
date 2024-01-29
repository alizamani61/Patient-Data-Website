<div class="row">
    <?php $pageTitle = "V/S & Anthropometry" ?>
    <?= IHTML::BreadCrump("PE", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='pe_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_pe=1&vsanthropometry=1&func=save" ?>" method='POST'>


        <input name='peid' type='hidden' value="<?php echo $form['peid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->Text(SYSTOLIC, "systolic", $form, $error) ?>
                <?= $this->Text(DIASTOLIC, "diastolic", $form, $error) ?>
                <?= $this->Text(PULSE, "pulse", $form, $error) ?>
                <?= $this->Text(RESPIRATION, "respiration", $form, $error) ?>
                <?= $this->Text(TEMP, "temp", $form, $error) ?>
                <?= $this->Text(WEIGHT, "weight", $form, $error) ?>
                <?= $this->Text(MIDAXILLA, "midaxilla", $form, $error) ?>
                <?= $this->Text(HEIGHT, "height", $form, $error) ?>
                <?= $this->Text(ABDOMENSF, "abdomensf", $form, $error) ?>
                <?= $this->Text(BMI, "bmi", $form, $error) ?>
                

            </div>
            <div class="col-md-6">
                <?= $this->Text(SUPRAILIAC, "suprailiac", $form, $error) ?>
                <?= $this->Text(MAC, "mac", $form, $error) ?>
                <?= $this->Text(QUADRICEPS, "quadriceps", $form, $error) ?>
                <?= $this->Text(TSF, "tsf", $form, $error) ?>
                <?= $this->Text(WAISTCIR, "waistcir", $form, $error) ?>
                <?= $this->Text(PECTORAL, "pectoral", $form, $error) ?>
                <?= $this->Text(HIPCIR, "hipcir", $form, $error) ?>
                <?= $this->Text(SUBSCAPULA, "subscapula", $form, $error) ?>
                <?= $this->Text(FATPERCENT, "fatpercent", $form, $error) ?>
                <?= $this->Select(METHOD, "method", $form, $error, "combo(bioimpedance/commercial bioimpedance/DEXA/water displacement/airdisplacement)",true,"class='form-control'") ?>

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