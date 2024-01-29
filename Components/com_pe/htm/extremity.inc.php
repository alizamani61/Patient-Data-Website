<div class="row">
    <?php $pageTitle = "Extrimity"?>
    <?=IHTML::BreadCrump("PE", $pageTitle)?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='pe_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_pe=1&extremity=1&func=save" ?>" method='POST'>


        <input name='peid' type='hidden' value="<?php echo $form['peid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->Select(EXPULSE, "expulse", $form, $error, "combo(NL/AbNL/Weak)", true, "class='form-control'") ?>

                <?= $this->CheckBox(EXEDEMA, "exedema", $form, $error, true) ?>
                <div id="exedema-td" class="condition-form-item" <?= (($form["exedema"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(EDEMATYPE, "edematype", $form, $error, "combo(pitting/nonpitting)", true, "class='form-control'") ?>
                </div>

                <?= $this->CheckBox(DEFORMITY, "deformity", $form, $error, true) ?>
                <div id="deformity-td" class="condition-form-item" <?= (($form["deformity"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(DEFORMITYWHAT, "deformitywhat", $form, $error) ?>
                </div>

                <?= $this->CheckBox(VARVEIN, "varvein", $form, $error) ?>

                <?= $this->CheckBox(JOINTABNORM, "jointabnorm", $form, $error, true) ?>
                <div id="jointabnorm-td" class="condition-form-item" <?= (($form["jointabnorm"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(JOINTABNORMW, "jointabnormw", $form, $error) ?>
                    <?= $this->CheckBox(JOINTABNORMSW, "jointabnormsw", $form, $error) ?>
                    <?= $this->CheckBox(JOINTABNORMCRE, "jointabnormcre", $form, $error) ?>
                    <?= $this->CheckBox(JOINTABNORMRED, "jointabnormred", $form, $error) ?>
                    <?= $this->CheckBox(JOINTABNORMWARM, "jointabnormwarm", $form, $error) ?>
                    <?= $this->CheckBox(JOINTABNORMPAIN, "jointabnormpain", $form, $error) ?>
                </div>

                <?= $this->CheckBox(TOPHUSFOOT, "tophusfoot", $form, $error) ?>

                <?= $this->CheckBox(NAILCHANGE, "nailchange", $form, $error, true) ?>
                <div id="nailchange-td" class="condition-form-item" <?= (($form["nailchange"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(NAILCHANGEW, "nailchangew", $form, $error) ?>
                </div>

                <?= $this->CheckBox(NAILCHANGEDISFI, "nailchangedisfi", $form, $error) ?>

            </div>
            <div class="col-md-6">

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