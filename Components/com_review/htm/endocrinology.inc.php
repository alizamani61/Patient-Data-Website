<div class="row">
    <?php $pageTitle = "Endocrinology" ?>
    <?= IHTML::BreadCrump("Review Of System", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='review_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_review=1&endocrinology=1&func=save" ?>" method='POST'>


        <input name='review_of_systemsid' type='hidden' value="<?php echo $form['review_of_systemsid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(COLDINTOLERANCE, "coldintolerance", $form, $error) ?>

                <?= $this->CheckBox(ALTEREDLIBIDO, "alteredlibido", $form, $error, true) ?>
                <div id="alteredlibido-td" class="condition-form-item" <?= (($form["alteredlibido"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label=ALTEREDLIBIDOTYPE, $name="alteredlibidotype", $form=$form, $error=$error, $items="combo(increased/decreased)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "")?>
                    <?= $this->CheckBox(IMPOTENCE, "impotence", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(POLYURIA, "polyuria", $form, $error) ?>
                <?= $this->CheckBox(POLYDIPSIA, "polydipsia", $form, $error) ?>

                <?= $this->CheckBox(MENARCHE, "menarche", $form, $error, true) ?>
                <div id="menarche-td" class="condition-form-item" <?= (($form["menarche"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(MENARCHEAGE, "menarcheage", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(MENOPAUSE, "menopause", $form, $error, true) ?>
                <div id="menopause-td" class="condition-form-item" <?= (($form["menopause"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(MENOPAUSEAGE, "menopauseage", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(AMENORRHEA, "amenorrhea", $form, $error, true) ?>
                <div id="amenorrhea-td" class="condition-form-item" <?= (($form["amenorrhea"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label=AMENORRHEATYPE, $name="amenorrheatype", $form=$form, $error=$error, $items="combo(primary/secondary)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "")?>
                </div>


                <?= $this->DateBox(LMP, "lmp", $form, $error) ?>

                <?= $this->CheckBox(REGULARCYCLE, "regularcycle", $form, $error, true) ?>
                <div id="regularcycle-td" class="condition-form-item" <?= (($form["regularcycle"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(REGULARCYCLELENGTH, "regularcyclelength", $form, $error) ?>
                    <?= $this->Text(REGULARCYCLEDURATION, "regularcycleduration", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(IRREGULARCYCLE, "irregularcycle", $form, $error, true) ?>
                <div id="irregularcycle-td" class="condition-form-item" <?= (($form["irregularcycle"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(IRREGULARCYCLEOLIGOM, "irregularcycleoligom", $form, $error) ?>
                    <?= $this->CheckBox(IRREGULARCYCLEPOLY, "irregularcyclepoly", $form, $error) ?>
                    <?= $this->CheckBox(IRREGULARCYCLEHYPER, "irregularcyclehyper", $form, $error) ?>
                    <?= $this->CheckBox(IRREGULARCYCLEHYPOM, "irregularcyclehypom", $form, $error) ?>
                    <?= $this->CheckBox(IRREGULARCYCLEMENOR, "irregularcyclemenor", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(SPOTTING, "spotting", $form, $error, true) ?>
                <div id="spotting-td" class="condition-form-item" <?= (($form["spotting"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(SPOTTINGPRE, "spottingpre", $form, $error) ?>
                    <?= $this->CheckBox(SPOTTINGPOST, "spottingpost", $form, $error) ?>
                    <?= $this->CheckBox(SPOTTINGINTER, "spottinginter", $form, $error) ?>
                </div> 

                


            </div>
            <div class="col-md-6">
                <?= $this->CheckBox("PCO", "pco", $form, $error) ?>
                <?= $this->CheckBox(DYSMENORRHEADYS, "dysmenorrheadys", $form, $error, true) ?>
                <div id="dysmenorrheadys-td" class="condition-form-item" <?= (($form["dysmenorrheadys"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(DYSMENORRHEAPRI, "dysmenorrheapri", $form, $error) ?>
                    <?= $this->CheckBox(DYSMENORRHEASEC, "dysmenorrheasec", $form, $error) ?>
                    <?= $this->CheckBox(DYSMENORRHEAPREM, "dysmenorrheaprem", $form, $error) ?>
                    <?= $this->CheckBox(DYSMENORRHEAONSET, "dysmenorrheaonset", $form, $error) ?>
                    <?= $this->CheckBox(DYSMENORRHEAAT, "dysmenorrheaat", $form, $error) ?>
                    <?= $this->CheckBox(DYSMENORRHEARELIEF, "dysmenorrhearelief", $form, $error) ?>
                </div> 


                <?= $this->CheckBox(DYSPAREUNIA, "dyspareunia", $form, $error) ?>

                <?= $this->CheckBox(DIFFICONCEIVING, "difficonceiving", $form, $error, true) ?>
                <div id="difficonceiving-td" class="condition-form-item" <?= (($form["difficonceiving"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label=DIFFICONCEIVINGP, $name="difficonceivingp", $form=$form, $error=$error, $items="combo(primary/secondary)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "")?>
                </div>


                <?= $this->CheckBox(RECMISCARRIAGE, "recmiscarriage", $form, $error) ?>

                <?= $this->CheckBox(VAGDISCHARGE, "vagdischarge", $form, $error, true) ?>
                <div id="vagdischarge-td" class="condition-form-item" <?= (($form["vagdischarge"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(VAGDISCHARGECOLOR, "vagdischargecolor", $form, $error) ?>
                    <?= $this->CheckBox(VAGDISCHARGEWHIT, "vagdischargewhit", $form, $error) ?>
                    <?= $this->CheckBox(VAGDISCHARGEYELL, "vagdischargeyell", $form, $error) ?>
                    <?= $this->CheckBox(VAGDISCHARGEBLO, "vagdischargeblo", $form, $error) ?>
                    <?= $this->CheckBox(VAGDISCHARGEGREEN, "vagdischargegreen", $form, $error) ?>
                    <?= $this->CheckBox(VAGDISCHARGEMAL, "vagdischargemal", $form, $error) ?>
                    <?= $this->CheckBox(VAGDISCHARGEITCHING, "vagdischargeitching", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(BRMASE, "brmase", $form, $error, true) ?>
                <div id="brmase-td" class="condition-form-item" <?= (($form["brmase"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(BRMASECYCLIC, "brmasecyclic", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(MASTALGIA, "mastalgia", $form, $error, true) ?>
                <div id="mastalgia-td" class="condition-form-item" <?= (($form["mastalgia"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(MASTALGIACYCLIC, "mastalgiacyclic", $form, $error) ?>
                    <?= $this->Text(MASTALGIASIDE, "mastalgiaside", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(GALACTORRHEA, "galactorrhea", $form, $error, true) ?>
                <div id="galactorrhea-td" class="condition-form-item" <?= (($form["galactorrhea"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(GALACTORRHEASIDE, "galactorrheaside", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(OTHERNIPPLE, "othernipple", $form, $error) ?>

                <?= $this->CheckBox(INCONTINENCE, "incontinence", $form, $error, true) ?>
                <div id="incontinence-td" class="condition-form-item" <?= (($form["incontinence"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label=INCONTINENCETYPE, $name="incontinencetype", $form=$form, $error=$error, $items="combo(stress/urge/mixed/overflow/total)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "")?>
                </div>

                <?= $this->TextArea(REVIEW_OF_SYSTEM_DESC, "review_of_system_desc", $form, $error) ?>

            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="col-md-12">
            <input name='com_review_save' type='hidden' value="1" />
            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
            <button class="btn btn-round btn-success" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>

            <?php if ($message != "") IHTML::GetMessage($message); ?>
        </div>
    </form>
    <?= $this->EndPanel(); ?>
</div>