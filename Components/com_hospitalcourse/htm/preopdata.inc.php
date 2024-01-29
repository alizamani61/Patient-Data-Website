<div class="row">
    <?php $pageTitle = "Pre-op Data" ?>
    <?= IHTML::BreadCrump("Hospital Course", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='hospitalcourse_form' id='hospitalcourse_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_hospitalcourse=1&preopdata=1&func=save" ?>" method='POST'>


        <input name='hospitalcourseid' type='hidden' value="<?php echo $form['hospitalcourseid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->Text(HOSNAME, "hosname", $form, $error) ?>
                <?= $this->Text(HOSFILE, "hosfile", $form, $error) ?>
                <?= $this->DateBox(ADMISSIONADTE, "admissionadte", $form, $error) ?>

                <?= $this->Text(SURGEONNAME, "surgeonname", $form, $error) ?>

                <?= $this->CheckBox(PREWEIGHTREDUC, "preweightreduc", $form, $error, true) ?>
                <div id="preweightreduc-td" class="condition-form-item" <?= (($form["preweightreduc"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(PREWEIGHTREDUCMUCH, "preweightreducmuch", $form, $error) ?>
                </div>


            </div>
            <div class="col-md-6">
                

            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="col-md-12">
            <input name='com_hospitalcourse_save' type='hidden' value="1" />
            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
            <button class="btn btn-round btn-success" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>

            <?php if ($message != "") IHTML::GetMessage($message); ?>
        </div>
    </form>
    <?= $this->EndPanel(); ?>
</div>