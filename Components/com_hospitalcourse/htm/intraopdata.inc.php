<div class="row">
    <?php $pageTitle = "Intra-op Data" ?>
    <?= IHTML::BreadCrump("Hospital Course", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='hospitalcourse_form' id='hospitalcourse_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_hospitalcourse=1&intraopdata=1&func=save" ?>" method='POST'>


        <input name='hospitalcourseid' type='hidden' value="<?php echo $form['hospitalcourseid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <?= $this->StartPanel("&nbsp;") ?>
            <?= $this->DateBox(OPERDATE, "operdate", $form, $error) ?>
            <?= $this->Text(OPERSTARTTIME, "operstarttime", $form, $error) ?>
            <?= $this->Text(OPERENDTIME, "operendtime", $form, $error) ?>
            <?= $this->Text(OPERTYPE, "opertype", $form, $error) ?>
            <?= $this->Select(HOSMETHOD, "method", $form, $error, "combo(Laparoscopy/Laparotomy)") ?>

            <?= $this->CheckBox(CONTOLAP, "contolap", $form, $error, true) ?>
            <div id="contolap-td" class="condition-form-item" <?= (($form["contolap"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(CONTOLAPPEASON, "contolappeason", $form, $error) ?>
            </div>

            <?= $this->CheckBox(LEALAGEBLUE, "lealageblue", $form, $error, true) ?>
            <div id="lealageblue-td" class="condition-form-item" <?= (($form["lealageblue"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Select(LEALAGEBLUEC, "lealagebluec", $form, $error, "combo(+/-)") ?>
            </div>
            <?= $this->EndPanel() ?>

            <?= $this->StartPanel(OPERTYPE) ?>
            <?= $this->CheckBox(SLEEVEGAS, "sleevegas", $form, $error) ?>
            <?= $this->CheckBox(SASIBYPASS, "sasibypass", $form, $error) ?>
            <?= $this->CheckBox(SADIBYPASS, "sadibypass", $form, $error) ?>
            <?= $this->CheckBox(MINIBYPASS, "minibypass", $form, $error) ?>
            
            <?= $this->CheckBox(REDO, "redo", $form, $error) ?>
            <?= $this->CheckBox(REDOBYPASS, "redobypass", $form, $error) ?>
            <?= $this->CheckBox(SLEEVEGAS, "sleevegas", $form, $error) ?>
            <?= $this->CheckBox(REGABY, "regaby", $form, $error) ?>
            <?= $this->CheckBox(GABAND, "gaband", $form, $error) ?>
            <?= $this->CheckBox(DUSWITCH, "duswitch", $form, $error) ?>
            <?= $this->CheckBox(VERBANDGA, "verbandga", $form, $error) ?>
            <?= $this->CheckBox(JEJBY, "jejby", $form, $error) ?>
            <?= $this->CheckBox(CHOLECYST, "cholecyst", $form, $error) ?>
            <?= $this->CheckBox(REPAIRHERNIA, "repairhernia", $form, $error) ?>

            <?= $this->CheckBox(HOSOTHER, "other", $form, $error, true) ?>
            <div id="other-td" class="condition-form-item" <?= (($form["other"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(OTHERG, "otherg", $form, $error) ?>
            </div>
            <?= $this->EndPanel() ?>

            <?= $this->StartPanel("&nbsp;") ?>
            <?= $this->CheckBox(TROCAR, "trocar", $form, $error) ?>
            <?= $this->CheckBox(SPLENIC, "splenic", $form, $error) ?>
            <?= $this->CheckBox(VASCULAR, "vascular", $form, $error) ?>
            <?= $this->CheckBox(BOWEL, "bowel", $form, $error) ?>
            <?= $this->CheckBox(ISCHEMIA, "ischemia", $form, $error) ?>
            <?= $this->CheckBox(MISCONSTRUCTION, "misconstruction", $form, $error) ?>
            <?= $this->CheckBox(MELEAKAGE, "meleakage", $form, $error) ?>

            <?= $this->CheckBox(OTHERKIND, "otherkind", $form, $error, true) ?>
            <div id="otherkind-td" class="condition-form-item" <?= (($form["otherkind"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(OTHERKINDD, "otherkindd", $form, $error) ?>
            </div>

            <?= $this->TextArea(REACOMP, "reacomp", $form, $error) ?>
            <?= $this->TextArea(WHATWASD, "whatwasd", $form, $error) ?>
            <?= $this->EndPanel() ?>


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