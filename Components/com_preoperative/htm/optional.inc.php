<div class="row">
    <?php $pageTitle = "Optional" ?>
    <?= IHTML::BreadCrump("Preoperative Evaluation", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='preoperative_form' id='preoperative_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_preoperative=1&optional=1&func=save" ?>" method='POST'>


        <input name='preoperativeid' type='hidden' value="<?php echo $form['preoperativeid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <?= $this->StartPanel("ECG") ?>
            <?= $this->Text(ECGRATE, "ecgrate", $form, $error) ?>
            <?= $this->Select(ECGRHYTHM, "ecgrhythm", $form, $error, "combo(sinus/junction/ventricle)", true, "class='form-control'") ?>
            <?= $this->Text(ECGQRS, "ecgqrs", $form, $error) ?>
            <?= $this->Text(ECGRR, "ecgrr", $form, $error) ?>
            <?= $this->Text(ECGQT, "ecgqt", $form, $error) ?>
            <?= $this->TextArea(ECGDESCRIPTION, "ecgdescription", $form, $error) ?>
            <?= $this->EndPanel() ?>


            <?= $this->StartPanel("CXR") ?>
            <?= $this->Text(CXRAIRWAY, "cxrairway", $form, $error) ?>
            <?= $this->Text(CXRMEDI, "cxrmedi", $form, $error) ?>
            <?= $this->Text(CXRLUNG, "cxrlung", $form, $error) ?>
            <?= $this->Text(CXRHEART, "cxrheart", $form, $error) ?>
            <?= $this->Text(CXRBONE, "cxrbone", $form, $error) ?>
            <?= $this->Text(CXRLESION, "cxrlesion", $form, $error) ?>
            <?= $this->Text(CXRCPA, "cxrcpa", $form, $error) ?>
            <?= $this->Text(CXRLOBE, "cxrlobe", $form, $error) ?>
            <?= $this->Text(CXRDES, "cxrdes", $form, $error) ?>

            <?= $this->EndPanel() ?>



            <?= $this->StartPanel("Endoscopy") ?>
            <?= $this->CheckBox(ENDOSCOPYES, "endoscopyes", $form, $error, true) ?>
            <div id="endoscopyes-td" class="condition-form-item" <?= (($form["endoscopyes"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->CheckBox(ENDOSCOPYESWEB, "endoscopyesweb", $form, $error) ?>
                <?= $this->CheckBox(ENDOSCOPYESSTR, "endoscopyesstr", $form, $error) ?>
                <?= $this->CheckBox(ENDOSCOPYESLOC, "endoscopyesloc", $form, $error) ?>
                <?= $this->CheckBox(ENDOSCOPYESNA, "endoscopyesna", $form, $error) ?>
                <?= $this->CheckBox(ENDOSCOPYESMU, "endoscopyesmu", $form, $error) ?>
            </div>

            <?= $this->CheckBox(ENDOSCOPYST, "endoscopyst", $form, $error, true) ?>
            <div id="endoscopyst-td" class="condition-form-item" <?= (($form["endoscopyst"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->CheckBox(ENDOSCOPYSTGA, "endoscopystga", $form, $error) ?>
                <?= $this->CheckBox(ENDOSCOPYSTPR, "endoscopystpr", $form, $error) ?>
                <?= $this->CheckBox(ENDOSCOPYSTUL, "endoscopystul", $form, $error) ?>
                <?= $this->Text(ENDOSCOPYSTLO, "endoscopystlo", $form, $error) ?>
                <?= $this->Select(ENDOSCOPYSTPUT, "endoscopystput", $form, $error, "combo(pos/neg/not performed)", true, "class='form-control'") ?>
            </div>


            <?= $this->CheckBox(ENDOSCOPYDU, "endoscopydu", $form, $error, true) ?>
            <div id="endoscopydu-td" class="condition-form-item" <?= (($form["endoscopydu"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->CheckBox(ENDOSCOPYDUULCER, "endoscopyduulcer", $form, $error) ?>
                <?= $this->Select(ENDOSCOPYDURUT, "endoscopydurut", $form, $error, "combo(pos/neg/not performed)", true, "class='form-control'") ?>
            </div>

            <?= $this->CheckBox(ENDOSCOPYBIOPSY, "endoscopybiopsy", $form, $error, true) ?>
            <div id="endoscopybiopsy-td" class="condition-form-item" <?= (($form["endoscopybiopsy"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->TextArea(ENDOSCOPYBIOPSYRESDESC, "endoscopybiopsyresdesc", $form, $error) ?>
            </div>

            <?= $this->EndPanel() ?>
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