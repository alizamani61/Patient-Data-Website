<div class="row">
    <?php $pageTitle = "HEENT"?>
    <?=IHTML::BreadCrump("PE", $pageTitle)?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='pe_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_pe=1&heent=1&func=save" ?>" method='POST'>


        <input name='peid' type='hidden' value="<?php echo $form['peid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(PALECONJUNC, "paleconjunc", $form, $error) ?>
                <?= $this->CheckBox(ICTERICSCLERA, "ictericsclera", $form, $error) ?>
                <?= $this->CheckBox(EXOPHTHA, "exophtha", $form, $error) ?>


                <?= $this->CheckBox(CORNEAL, "corneal", $form, $error, true) ?>
                <div id="corneal-td" class="condition-form-item" <?= (($form["corneal"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(CORNEALRATIO, "cornealratio", $form, $error) ?>
                    <?= $this->Text(CORNEALTHICK, "cornealthick", $form, $error) ?>
                </div>


                <?= $this->CheckBox(XANTHEL, "xanthel", $form, $error, true) ?>
                <div id="xanthel-td" class="condition-form-item" <?= (($form["xanthel"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(XANTHELMILI, "xanthelmili", $form, $error) ?>
                    <?= $this->CheckBox(XANTHELPATCHY, "xanthelpatchy", $form, $error) ?>
                    <?= $this->CheckBox(XANTHELUPPER, "xanthelupper", $form, $error) ?>
                    <?= $this->CheckBox(XANTHELLOWER, "xanthellower", $form, $error) ?>
                    <?= $this->CheckBox(XANTHELMED, "xanthelmed", $form, $error) ?>
                </div>

                <?= $this->CheckBox(LOBEAR, "lobear", $form, $error) ?>
                <?= $this->CheckBox(LOBEARDAR, "lobeardar", $form, $error) ?>
                <?= $this->CheckBox(LOBEARCREASE, "lobearcrease", $form, $error) ?>
                

            </div>
            <div class="col-md-6">
                <?= $this->CheckBox(LOBEARTAG, "lobeartag", $form, $error) ?>
                <?= $this->CheckBox(ANGULAR, "angular", $form, $error) ?>


                <?= $this->CheckBox(GLOSSITIS, "glossitis", $form, $error, true) ?>
                <div id="glossitis-td" class="condition-form-item" <?= (($form["glossitis"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(GLOSSITISATR, "glossitisatr", $form, $error) ?>
                    <?= $this->CheckBox(GLOSSITISFIS, "glossitisfis", $form, $error) ?>
                    <?= $this->CheckBox(GLOSSITISGEO, "glossitisgeo", $form, $error) ?>
                </div>

                <?= $this->CheckBox(GLOSS, "gloss", $form, $error, true) ?>
                <div id="gloss-td" class="condition-form-item" <?= (($form["gloss"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(GLOSSPRO, "glosspro", $form, $error) ?>
                    <?= $this->CheckBox(GLOSSEN, "glossen", $form, $error) ?>
                    <?= $this->CheckBox(GLOSSONLY, "glossonly", $form, $error) ?>
                </div>

                <?= $this->CheckBox(MICROGNATHIA, "micrognathia", $form, $error) ?>

                <?= $this->CheckBox(THYROMEGALY, "thyromegaly", $form, $error, true) ?>
                <div id="thyromegaly-td" class="condition-form-item" <?= (($form["thyromegaly"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(THYROMEGALYGRADE, "thyromegalygrade", $form, $error, "combo(I/II/III/IV)",true,"class='form-control'") ?>

                </div>

                <?= $this->CheckBox(SHORTNECK, "shortneck", $form, $error) ?>
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