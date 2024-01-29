<div class="row">
    <?php $pageTitle = "Chest & Abdomen"?>
    <?=IHTML::BreadCrump("PE", $pageTitle)?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='pe_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_pe=1&chestabdomen=1&func=save" ?>" method='POST'>


        <input name='peid' type='hidden' value="<?php echo $form['peid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(HEARTSE, "heartse", $form, $error, true) ?>
                <div id="heartse-td" class="condition-form-item" <?= (($form["heartse"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(HEARTSENORM, "heartsenorm", $form, $error) ?>
                    <?= $this->CheckBox(HEARTSEMUFF, "heartsemuff", $form, $error) ?>
                    <?= $this->CheckBox(HEARTSEMURMUR, "heartsemurmur", $form, $error) ?>
                    <?= $this->CheckBox(HEARTSESS, "heartsess", $form, $error) ?>
                    <?= $this->CheckBox(HEARTSESSS, "heartsesss", $form, $error) ?>
                    <?= $this->CheckBox(HEARTSEFRIC, "heartsefric", $form, $error) ?>
                </div>

                <?= $this->CheckBox(LUNGAU, "lungau", $form, $error, true) ?>
                <div id="lungau-td" class="condition-form-item" <?= (($form["lungau"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(LUNGAURESP, "lungauresp", $form, $error, "combo(bronchioalveolar/alveolar/bronchial)",true,"class='form-control'") ?>
                    <?= $this->CheckBox(LUNGAURALES, "lungaurales", $form, $error) ?>
                    <?= $this->CheckBox(LUNGAUWHEEZ, "lungauwheez", $form, $error) ?>
                    <?= $this->CheckBox(LUNGAUEGOP, "lungauegop", $form, $error) ?>
                    <?= $this->CheckBox(LUNGAUTACTILE, "lungautactile", $form, $error) ?>
                </div>

                <?= $this->CheckBox(CHESTIN, "chestin", $form, $error, true) ?>
                <div id="chestin-td" class="condition-form-item" <?= (($form["chestin"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(CHESTINASY, "chestinasy", $form, $error) ?>
                    <?= $this->CheckBox(CHESTINSCO, "chestinsco", $form, $error) ?>
                    <?= $this->CheckBox(CHESTINKYP, "chestinkyp", $form, $error) ?>
                </div>

                <?= $this->CheckBox(BREXAM, "brexam", $form, $error, true) ?>
                <div id="brexam-td" class="condition-form-item" <?= (($form["brexam"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(BREXAMMASS, "brexammass", $form, $error) ?>
                    <?= $this->Text(BREXAMLOCAT, "brexamlocat", $form, $error) ?>
                    <?= $this->Text(BREXAMSIZE, "brexamsize", $form, $error) ?>
                    <?= $this->CheckBox(BREXAMTEND, "brexamtend", $form, $error) ?>
                    <?= $this->Select(BREXAMCONSIST, "brexamconsist", $form, $error, "combo(cystic/firm/solid/hard)",true,"class='form-control'") ?>
                    <?= $this->Select(BREXAMMOBI, "brexammobi", $form, $error, "combo(mobile/fix)",true,"class='form-control'") ?>
                    <?= $this->CheckBox(BREXAMPEAU, "brexampeau", $form, $error) ?>
                    <?= $this->CheckBox(BREXAMSKIN, "brexamskin", $form, $error) ?>
                    <?= $this->CheckBox(BREXAMAXI, "brexamaxi", $form, $error) ?>
                </div>

                <?= $this->Select(ABDOMSHAP, "abdomshap", $form, $error, "combo(pedunculated/barrel)",true,"class='form-control'") ?>

                <?= $this->CheckBox(SCAROF, "scarof", $form, $error, true) ?>
                <div id="scarof-td" class="condition-form-item" <?= (($form["scarof"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(SCAROFWHAT, "scarofwhat", $form, $error) ?>
                </div>


                <?= $this->CheckBox(CAPUTME, "caputme", $form, $error) ?>

                <?= $this->CheckBox(PALPMASS, "palpmass", $form, $error, true) ?>
                <div id="palpmass-td" class="condition-form-item" <?= (($form["palpmass"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(PALPMASSEPIG, "palpmassepig", $form, $error) ?>
                    <?= $this->CheckBox(PALPMASSUMB, "palpmassumb", $form, $error) ?>
                    <?= $this->CheckBox(PALPMASSING, "palpmassing", $form, $error) ?>
                    <?= $this->CheckBox(PALPMASSFEM, "palpmassfem", $form, $error) ?>
                    <?= $this->CheckBox(PALPMASSSCR, "palpmassscr", $form, $error) ?>
                    <?= $this->CheckBox(PALPMASSFLANK, "palpmassflank", $form, $error) ?>
                    <?= $this->CheckBox(PALPMASSREDU, "palpmassredu", $form, $error) ?>
                    <?= $this->CheckBox(PALPMASSTENDER, "palpmasstender", $form, $error) ?>
                    <?= $this->Select(PALPMASSSITU, "palpmasssitu", $form, $error, "combo(superficial/deep)",true,"class='form-control'") ?>
                </div>


                
            </div>
            <div class="col-md-6">
                <?= $this->CheckBox(TENDERNESSTEN, "tendernessten", $form, $error, true) ?>
                <div id="tendernessten-td" class="condition-form-item" <?= (($form["tendernessten"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(TENDERNESSLOC, "tendernessloc", $form, $error) ?>
                </div>

                <?= $this->CheckBox(TENDERNESSMUR, "tendernessmur", $form, $error) ?>

                <?= $this->CheckBox(LIVERSPAN, "liverspan", $form, $error, true) ?>
                <div id="liverspan-td" class="condition-form-item" <?= (($form["liverspan"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(LIVERSPANTEX, "liverspantex", $form, $error) ?>
                </div>

                <?= $this->CheckBox(SPLENOMEGALY, "splenomegaly", $form, $error) ?>
                <?= $this->CheckBox(DULLNESS, "dullness", $form, $error) ?>

                <?= $this->CheckBox(RECTALEXAM, "rectalexam", $form, $error, true) ?>
                <div id="rectalexam-td" class="condition-form-item" <?= (($form["rectalexam"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(RECTALEXAMHEM, "rectalexamhem", $form, $error) ?>
                    <?= $this->CheckBox(RECTALEXAMFISS, "rectalexamfiss", $form, $error) ?>
                    <?= $this->Text(RECTALEXAMCLOCK, "rectalexamclock", $form, $error) ?>
                </div>
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