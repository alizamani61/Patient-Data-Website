<div class="row">
    <?php $pageTitle = "Sonography" ?>
    <?= IHTML::BreadCrump("Preoperative Evaluation", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='preoperative_form' id='preoperative_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_preoperative=1&sonography=1&func=save" ?>" method='POST'>


        <input name='preoperativeid' type='hidden' value="<?php echo $form['preoperativeid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(LIVER, "liver", $form, $error, true) ?>
                <div id="liver-td" class="condition-form-item" <?= (($form["liver"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(LIVERSIZE, "liversize", $form, $error, "combo(small/normal/enlarged)",true,"class='form-control'") ?>
                </div>

                <?= $this->Select(LIVERECHO, "liverecho", $form, $error, "combo(normal/mild increased/moderate increase/sever increase)",true,"class='form-control'") ?>

                <?= $this->CheckBox(LIVERFATTY, "liverfatty", $form, $error) ?>
                <?= $this->CheckBox(LIVERSOL, "liversol", $form, $error) ?>

                <?= $this->CheckBox(GB, "gb", $form, $error, true) ?>
                <div id="gb-td" class="condition-form-item" <?= (($form["gb"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(GBWALL, "gbwall", $form, $error, "combo(NL/Thickened/emphysematous/polyp)",true,"class='form-control'") ?>
                    <?= $this->CheckBox(GBDISTENDED, "gbdistended", $form, $error) ?>
                    <?= $this->Select(GBSTONE, "gbstone", $form, $error, "combo(none/single/multiple)",true,"class='form-control'") ?>
                </div>

                <?= $this->CheckBox(SPLEEN, "spleen", $form, $error, true) ?>
                <div id="spleen-td" class="condition-form-item" <?= (($form["spleen"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(SPLEENSIZE, "spleensize", $form, $error, "combo(small/normal/enlarged/massive splenomegaly)",true,"class='form-control'") ?>
                    <?= $this->Text(SPLEENSOL, "spleensoll", $form, $error) ?>
                </div>

                <?= $this->CheckBox(UTERINE, "uterine", $form, $error, true) ?>
                <div id="uterine-td" class="condition-form-item" <?= (($form["uterine"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(SPLEENSIZE, "spleensize", $form, $error, "combo(small/normal/enlarged/massive splenomegaly)",true,"class='form-control'") ?>
                    <?= $this->Text(UTERINEENDOM, "uterineendom", $form, $error) ?>
                </div>

                <?= $this->CheckBox(MYOMA, "myoma", $form, $error, true) ?>
                <div id="myoma-td" class="condition-form-item" <?= (($form["myoma"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(MYOMANO, "myomano", $form, $error) ?>
                    <?= $this->Text(MYOMALOCA, "myomaloca", $form, $error) ?>
                    <?= $this->Select(MYOMASITUA, "myomasitua", $form, $error, "combo(sub mucosal/intramuscular/subserosal/parasitic/mixed)",true,"class='form-control'") ?>
                </div>

                <?= $this->CheckBox(OVARIES, "ovaries", $form, $error, true) ?>
                <div id="ovaries-td" class="condition-form-item" <?= (($form["ovaries"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(OVARIESNECK, "ovariesneck", $form, $error) ?>
                </div>

                <?= $this->CheckBox(CYST, "cyst", $form, $error, true) ?>
                <div id="cyst-td" class="condition-form-item" <?= (($form["cyst"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(CYSTNO, "cystno", $form, $error) ?>
                    <?= $this->Text(CYSTSIZE, "cystsize", $form, $error) ?>
                    <?= $this->Select(CYSTSIDE, "cystside", $form, $error, "combo(right/left/Bilateral)",true,"class='form-control'") ?>
                    <?= $this->Select(CYSTTEXTURE, "cysttexture", $form, $error, "combo(cystic/solid/heterogeneous)",true,"class='form-control'") ?>
                    <?= $this->CheckBox(SCYSTSEP, "scystsep", $form, $error) ?>
                </div>

            </div>
            <div class="col-md-6">
                ّ<?= $this->CheckBox(RKIDNEY, "rkidney", $form, $error, true) ?>
                <div id="rkidney-td" class="condition-form-item" <?= (($form["rkidney"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(RKIDNEYSIZE, "rkidneysize", $form, $error) ?>
                    <?= $this->CheckBox(RKIDNEYSTONE, "rkidneystone", $form, $error) ?>
                    <?= $this->CheckBox(RKIDNEYSLUDGE, "rkidneysludge", $form, $error) ?>
                    <?= $this->CheckBox(RKIDNEYCYST, "rkidneycyst", $form, $error) ?>
                </div>

                <?= $this->CheckBox(LKIDNEY, "lkidney", $form, $error, true) ?>
                <div id="lkidney-td" class="condition-form-item" <?= (($form["lkidney"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(LKIDNEYSIZE, "lkidneysize", $form, $error) ?>
                    <?= $this->CheckBox(LKIDNEYSTONE, "lkidneystone", $form, $error) ?>
                    <?= $this->CheckBox(LKIDNEYSLUDGE, "lkidneysludge", $form, $error) ?>
                    <?= $this->CheckBox(LKIDNEYCYST, "lkidneycyst", $form, $error) ?>
                </div>

                <?= $this->CheckBox(BLADDER, "bladder", $form, $error, true) ?>
                <div id="bladder-td" class="condition-form-item" <?= (($form["bladder"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label=BLADDERWALL, $name="bladderwall", $form=$form, $error=$error, $items="combo(Norml/thickened/trabeculation)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "")?>
                    <?= $this->CheckBox(BLADDERSTONE, "bladderstone", $form, $error) ?>
                    <?= $this->CheckBox(BLADDERMASS, "bladdermass", $form, $error) ?>

                </div>

                <?= $this->TextArea(SONOGRAPHDESC, "sonographdesc", $form, $error) ?>
            </div>
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