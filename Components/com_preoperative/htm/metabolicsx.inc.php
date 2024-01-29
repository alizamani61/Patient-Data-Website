<div class="row">
    <?php $pageTitle = "MetabolicSX" ?>
    <?= IHTML::BreadCrump("Preoperative Evaluation", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    
    <form class="form-horizontal" name='preoperative_form' id='preoperative_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_preoperative=1&metabolicsx=1&func=save" ?>" method='POST'>
        <input name='preoperativeid' type='hidden' value="<?php echo $form['preoperativeid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <?= $this->Text(SYSTOLICBP, "systolicbp", $form, $error) ?>
            <?= $this->Text(DIASTOLICBP, "diastolicbp", $form, $error) ?>
            <?= $this->Text(MSXTG, "msxtg", $form, $error) ?>
            <?= $this->Text(MSXHDL, "msxhdl", $form, $error) ?>
            <?= $this->Text(MSXFBS, "msxfbs", $form, $error) ?>
            <?= $this->Text(MSXWCF, "msxwcf", $form, $error) ?> 

        </div>
        <div class="ln_solid"></div>
        <div class="col-md-12">
            <input name='com_preoperative_save' type='hidden' value="1" />
            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
            <button class="btn btn-round btn-success" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>

            <?php if ($message != "") IHTML::GetMessage($message); ?>
        </div>
    </form>
    <?= $this->EndPanel(); ?>
</div>