<div class="row">
    <?php $pageTitle = "Discharge" ?>
    <?= IHTML::BreadCrump("Hospital Course", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='hospitalcourse_form' id='hospitalcourse_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_hospitalcourse=1&discharge=1&func=save" ?>" method='POST'>


        <input name='hospitalcourseid' type='hidden' value="<?php echo $form['hospitalcourseid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <?= $this->CheckBox(NUTEDU, "nutedu", $form, $error, true) ?>
            <div id="nutedu-td" class="condition-form-item" <?= (($form["nutedu"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(NUTEDUVER, "nuteduver", $form, $error) ?>
            </div>

            <?= $this->StartPanel(MEDIINHOS) ?>
            <?= $this->CheckBox(MEDCEFTRIAXONE, "medceftriaxone", $form, $error) ?>
            <?= $this->CheckBox(MEDMETRONIDAZOLE, "medmetronidazole", $form, $error) ?>
            <?= $this->CheckBox(MEDPETHIDINE, "medpethidine", $form, $error) ?>
            <?= $this->CheckBox(MEDDICLOPHENAC, "meddiclophenac", $form, $error) ?>
            <?= $this->CheckBox(MEDRANITIDINE, "medranitidine", $form, $error) ?>
            <?= $this->CheckBox(MEDGLUCOSAN, "medglucosan", $form, $error) ?>
            <?= $this->EndPanel() ?>

            <?= $this->DateBox(DISCHARGEDATE, "dischargedate", $form, $error) ?>

            <?= $this->StartPanel(PREMED) ?>
            <?= $this->CheckBox(PREMEDCEPHALEXIN, "premedcephalexin", $form, $error) ?>
            <?= $this->CheckBox(PREMEDRANITIDINE, "premedranitidine", $form, $error) ?>
            <?= $this->CheckBox(PREMEDDICLOFENAC, "premeddiclofenac", $form, $error) ?>
            <?= $this->CheckBox(PREMEDCELEXAN40MG, "premedcelexan40mg", $form, $error) ?>
            <?= $this->EndPanel() ?>

            <?= $this->Select(TRANSFERTO, "transferto", $form, $error, "combo(Home/ICU/CCU/Other)", true, "class='form-control'") ?>


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