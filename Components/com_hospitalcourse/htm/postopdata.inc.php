<div class="row">
    <?php $pageTitle = "Post-op Data" ?>
    <?= IHTML::BreadCrump("Hospital Course", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='hospitalcourse_form' id='hospitalcourse_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_hospitalcourse=1&postopdata=1&func=save" ?>" method='POST'>


        <input name='hospitalcourseid' type='hidden' value="<?php echo $form['hospitalcourseid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <?= $this->Select(UPGISEFI, "upgisefi", $form, $error, "combo(No significant finding/Significant abnormality)", true, "class='form-control'") ?>

            <?= $this->StartPanel("Post OP") ?>
            <?= $this->Text(POSTOPESR, "postopesr", $form, $error) ?>
            <?= $this->Text(POSTOPCRP, "postopcrp", $form, $error) ?>
            <?= $this->Text(POSTOPHB, "postophb", $form, $error) ?>
            <?= $this->Text(POSTOPHCT, "postophct", $form, $error) ?>
            <?= $this->EndPanel() ?>
            <?= $this->CheckBox(EARCOMPAN, "earcompan", $form, $error) ?>
            <?= $this->CheckBox(EARCOMPBL, "earcompbl", $form, $error) ?>

            <?= $this->CheckBox(EARCOMPST, "earcompst", $form, $error) ?>
            <?= $this->CheckBox(EARCOMPOB, "earcompob", $form, $error) ?>
            <?= $this->CheckBox(EARCOMPIN, "earcompin", $form, $error) ?>
            <?= $this->CheckBox(EARCOMPDV, "earcompdv", $form, $error) ?>
            <?= $this->CheckBox(EARCOMPDVEMB, "earcompdvemb", $form, $error) ?>

            <?= $this->CheckBox(EARCOMPCARD, "earcompcard", $form, $error, true) ?>
            <div id="earcompcard-td" class="condition-form-item" <?= (($form["earcompcard"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->CheckBox(EARCOMPCARDACS, "earcompcardacs", $form, $error) ?>
                <?= $this->CheckBox(EARCOMPCARDCHF, "earcompcardchf", $form, $error) ?>
                <?= $this->CheckBox(EARCOMPCARDARR, "earcompcardarr", $form, $error) ?>
            </div>

            <?= $this->CheckBox(EARCOMPRES, "earcompres", $form, $error) ?>

            <?= $this->CheckBox(EARCOMPOTHER, "earcompother", $form, $error, true) ?>
            <div id="earcompother-td" class="condition-form-item" <?= (($form["earcompother"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(EARCOMPOTHERR, "earcompotherr", $form, $error) ?>
            </div>

            <?= $this->TextArea(EARCOMPWWTPSASOFC, "earcompwwtpsasofc", $form, $error, true, "", "", 10, null) ?>
            <?= $this->TextArea(EARCOMPWWDONE, "earcompwwdone", $form, $error, true, "", "", 10, null) ?>


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