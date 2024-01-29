<div class="row">
    <?php $pageTitle = "Result Of Pathology" ?>
    <?= IHTML::BreadCrump("FU", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='fu_form1' id='fu_form1' action="<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&resultofpathology=1&func=save" ?>" method='POST'>
        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(GASTRITIS, "gastritis", $form, $error, true) ?>
                <div id="gastritis-td" class="condition-form-item" <?= (($form["gastritis"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label = GASTRITISS, $name = "gastritiss", $form = $form, $error = $error, $items = "combo(acute/chronic/mixed/lymphocytic/plasmacytic/eosinophilic/chemical/atrophic)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "") ?>
                    <?= $this->Select($label = GASTRITISSIDE, $name = "gastritisside", $form = $form, $error = $error, $items = "combo(surface epithelium/pits/stroma/glands/all/undetermined)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "") ?>
                    <?= $this->Select($label = GASTRITISGR, $name = "gastritisgr", $form = $form, $error = $error, $items = "combo(mild/moderate/sever/undetermined)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "") ?>
                </div>

                <?= $this->CheckBox(ULCERATION, "ulceration", $form, $error, true) ?>
                <div id="ulceration-td" class="condition-form-item" <?= (($form["ulceration"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label = ULCERATIONS, $name = "ulcerations", $form = $form, $error = $error, $items = "combo(single/multiple)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "") ?>
                    <?= $this->Select($label = ULCERATIONLOC, $name = "ulcerationloc", $form = $form, $error = $error, $items = "combo(corpus/antrum/both)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "") ?>
                </div>

                <?= $this->CheckBox(ABSTTOGLRA, "absttoglra", $form, $error, true) ?>
                <div id="absttoglra-td" class="condition-form-item" <?= (($form["absttoglra"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label = ABSTTOGLRATOO, $name = "absttoglratoo", $form = $form, $error = $error, $items = "combo(too much stroma/loss of normal mucosal component/increased cellularity/undetermined)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "") ?>
                </div>

                <?= $this->CheckBox(ABSTTOGLRA, "disofgl", $form, $error, true) ?>
                <div id="disofgl-td" class="condition-form-item" <?= (($form["disofgl"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label = DISOFGLABNORM, $name = "disofglabnorm", $form = $form, $error = $error, $items = "combo(abnormal branching/irregular glands)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "") ?>
                </div>

                <?= $this->CheckBox(METAPLASIA, "metaplasia", $form, $error, true) ?>
                <div id="metaplasia-td" class="condition-form-item" <?= (($form["metaplasia"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label = METAPLASIAINT, $name = "metaplasiaint", $form = $form, $error = $error, $items = "combo(Intestinal/pyloric/pancreatic/ciliated/mixed)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "") ?>
                    <?= $this->Select($label=METAPLASIAGRADING, $name="metaplasiagrading", $form=$form, $error=$error, $items="combo(mild/moderate/sever)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "")?>
                </div>

                <?= $this->CheckBox(ABBLOOD, "abblood", $form, $error, true) ?>
                <div id="abblood-td" class="condition-form-item" <?= (($form["abblood"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label=ABBLOODVAS, $name="abbloodvas", $form=$form, $error=$error, $items="combo(Vascular ectasia/thrombosed/thickened/atypical features/tumour emboli/mixed)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "")?>
                </div>

                <?= $this->CheckBox(MICTOOR, "mictoor", $form, $error, true) ?>
                <div id="mictoor-td" class="condition-form-item" <?= (($form["mictoor"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label=MICTOORCO, $name="mictoorco", $form=$form, $error=$error, $items="combo(H.pylori/Fungi/viral inclusions)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "")?>
                    <?= $this->Select($label=MICTOORCOL, $name="mictoorcol", $form=$form, $error=$error, $items="combo(mild/moderate/heavy)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "")?>
                </div>

                <?= $this->CheckBox(NEOPLASIA, "neoplasia", $form, $error, true) ?>
                <div id="neoplasia-td" class="condition-form-item" <?= (($form["neoplasia"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select($label=NEOPLASIADY, $name="neoplasiady", $form=$form, $error=$error, $items="combo(dysplasia/adenocarcinoma/mucinous adenocarcinoma/squamous cell carcinoa/Lymphoma/sarcoma)", $haserror = true, $attribute = "class='form-control'", $event = "", $itemValues = "")?>
                </div>


                <?= $this->CheckBox(MENETRIER, "menetrier", $form, $error) ?>
                <?= $this->CheckBox(HEMORRHAGE, "hemorrhage", $form, $error) ?>
                <?= $this->CheckBox(GRANULOMA, "granuloma", $form, $error) ?>

            </div>
            <div class="col-md-6">
                <?= $this->CheckBox(EROSIONS, "erosions", $form, $error) ?>
                <?= $this->CheckBox(EPITHELIAL, "epithelial", $form, $error) ?>

                <?= $this->TextArea(PATHOLOGYRESDESC, "pathologyresdesc", $form, $error) ?>

                Pre OP<br/>
                <?= $this->CheckBox("H.pylori", "preophpylori", $form, $error, false) ?>

                <?= $this->DateBox("Post OP", "postopdate", $form, $error) ?>
                <?= $this->CheckBox("H.pylori", "postophpylori", $form, $error, false) ?>  
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="col-md-12">
            <input name='com_fu_save' type='hidden' value="1" />
            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
            <button class="btn btn-round btn-success" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>

            <?php if ($message != "") IHTML::GetMessage($message); ?>
        </div>
    </form>
    <?= $this->EndPanel(); ?>
</div>