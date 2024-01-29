<div class="row">
    <?php $pageTitle = "Metabolic SX" ?>
    <?= IHTML::BreadCrump("FU", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='fu_form1' id='fu_form1' action="<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&metabolicsx=1&func=save" ?>" method='POST'>


        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <?= $this->Text(SYSTOLICBP, "systolicbp", $form, $error) ?>
            <?= $this->Text(DIASTOLICBP, "diastolicbp", $form, $error) ?>
            <?= $this->Text(TG, "tg", $form, $error) ?>
            <?= $this->Text(HDL, "hdl", $form, $error) ?>
            <?= $this->Text(FBS, "fbs", $form, $error) ?>
            <?= $this->Text(WCF, "wcf", $form, $error) ?> 
        </div>
        <div class="ln_solid"></div>
        <div class="col-md-12">
            <input name='com_fu_save' type='hidden' value="1" />
            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
            <button class="btn btn-round btn-success" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>

            <?php if ($message != "") IHTML::GetMessage($message); ?>
        </div>
    </form>
    <?= $this->EndPanel(); ?>
</div>