<div class="row">
    <?php $pageTitle = "Late Morbidities And Mortality" ?>
    <?= IHTML::BreadCrump("FU", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='fu_form1' id='fu_form1' action="<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&latemorbiditiesandmortality=1&func=save" ?>" method='POST'>


        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <?= $this->StartPanel("Mortality") ?>
            <?= $this->CheckBox("Mortality", "mortality", $form, $error, true) ?>
            <div id="mortality-td" class="condition-form-item" <?= (($form["mortality"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text("Age", "mortalityage", $form, $error) ?>
            </div>
            
            <?= $this->EndPanel() ?>     
            <?= $this->StartPanel("Anatomic") ?>
            <?= $this->CheckBox(ANATOMICGA, "anatomicga", $form, $error, true) ?>
            <div id="anatomicga-td" class="condition-form-item" <?= (($form["anatomicga"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(ANATOMICGAWHEN, "anatomicgawhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(ANATOMICST, "anatomicst", $form, $error, true) ?>
            <div id="anatomicst-td" class="condition-form-item" <?= (($form["anatomicst"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(ANATOMICSTWHEN, "anatomicstwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(ANATOMICOB, "anatomicob", $form, $error, true) ?>
            <div id="anatomicob-td" class="condition-form-item" <?= (($form["anatomicob"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(ANATOMICOBWHEN, "anatomicobwhen", $form, $error) ?>
            </div>
            <?= $this->CheckBox(ANATOMICBA, "anatomicba", $form, $error, true) ?>
            <div id="anatomicba-td" class="condition-form-item" <?= (($form["anatomicba"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(ANATOMICBAWHEN, "anatomicbawhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(ANATOMICDIS, "anatomicdis", $form, $error, true) ?>
            <div id="anatomicdis-td" class="condition-form-item" <?= (($form["anatomicdis"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Select(ANATOMICDISB, "anatomicdisb", $form, $error, "combo(Band slippage/gastric prolapse)") ?>
                <?= $this->Text(ANATOMICDISWHEN, "anatomicdiswhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(ANATOMILINEC, "anatomilinec", $form, $error, true) ?>
            <div id="anatomilinec-td" class="condition-form-item" <?= (($form["anatomilinec"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(ANATOMICLINEWHEN, "anatomiclinewhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(ANATOMICER, "anatomicer", $form, $error, true) ?>
            <div id="anatomicer-td" class="condition-form-item" <?= (($form["anatomicer"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(ANATOMICERWHEN, "anatomicerwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(ANATOMICVE, "anatomicve", $form, $error, true) ?>
            <div id="anatomicve-td" class="condition-form-item" <?= (($form["anatomicve"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(ANATOMICVEWHEN, "anatomicvewhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(ANATOMICHER, "anatomicher", $form, $error, true) ?>
            <div id="anatomicher-td" class="condition-form-item" <?= (($form["anatomicher"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(ANATOMICHERWHEN, "anatomicherwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(ANATOMICPOR, "anatomicpor", $form, $error, true) ?>
            <div id="anatomicpor-td" class="condition-form-item" <?= (($form["anatomicpor"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(ANATOMICPORWHEN, "anatomicporwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(ANATOMICPORT, "anatomicport", $form, $error, true) ?>
            <div id="anatomicport-td" class="condition-form-item" <?= (($form["anatomicport"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(ANATOMICPORTWHEN, "anatomicportwhen", $form, $error) ?>
            </div>
            <?= $this->EndPanel() ?>                          



            <?= $this->StartPanel("Biomechanic") ?>
            <?= $this->CheckBox(BIOMECHANICGA, "biomechanicga", $form, $error, true) ?>
            <div id="biomechanicga-td" class="condition-form-item" <?= (($form["biomechanicga"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(BIOMECHANICGAWHEN, "biomechanicgawhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(BIOMECHANICDI, "biomechanicdi", $form, $error, true) ?>
            <div id="biomechanicdi-td" class="condition-form-item" <?= (($form["biomechanicdi"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(BIOMECHANICDIWHEN, "biomechanicdiwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(BIOMECHANICDILA, "biomechanicdila", $form, $error, true) ?>
            <div id="biomechanicdila-td" class="condition-form-item" <?= (($form["biomechanicdila"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(BIOMECHANICDILAWHEN, "biomechanicdilawhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(BIOMECHANIESOC, "biomechaniesoc", $form, $error, true) ?>
            <div id="biomechaniesoc-td" class="condition-form-item" <?= (($form["biomechaniesoc"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(BIOMECHANICESOWHEN, "biomechanicesowhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(BIOMECHANICREF, "biomechanicref", $form, $error, true) ?>
            <div id="biomechanicref-td" class="condition-form-item" <?= (($form["biomechanicref"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(BIOMECHANICREFWHEN, "biomechanicrefwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(BIOMECHANICREC, "biomechanicrec", $form, $error, true) ?>
            <div id="biomechanicrec-td" class="condition-form-item" <?= (($form["biomechanicrec"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(BIOMECHANICRECWHEN, "biomechanicrecwhen", $form, $error) ?>
            </div>
            <?= $this->EndPanel() ?>


            <?= $this->StartPanel("Physiologic") ?>
            <?= $this->CheckBox(PHYSIOLOGICMA, "physiologicma", $form, $error, true) ?>
            <div id="physiologicma-td" class="condition-form-item" <?= (($form["physiologicma"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(PHYSIOLOGICMAWHEN, "physiologicmawhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(PHYSIOLOGICDU, "physiologicdu", $form, $error, true) ?>
            <div id="physiologicdu-td" class="condition-form-item" <?= (($form["physiologicdu"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(PHYSIOLOGICDUWHEN, "physiologicduwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(PHYSIOLOGICPOS, "physiologicpos", $form, $error, true) ?>
            <div id="physiologicpos-td" class="condition-form-item" <?= (($form["physiologicpos"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(PHYSIOLOGICPOSWHEN, "physiologicposwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(PHYSIOLOGICNEP, "physiologicnep", $form, $error, true) ?>
            <div id="physiologicnep-td" class="condition-form-item" <?= (($form["physiologicnep"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(PHYSIOLOGICNEPWHEN, "physiologicnepwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(PHYSIOLOGICRENAL, "physiologicrenal", $form, $error, true) ?>
            <div id="physiologicrenal-td" class="condition-form-item" <?= (($form["physiologicrenal"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(PHYSIOLOGICRENALW, "physiologicrenalw", $form, $error) ?>
            </div>

            <?= $this->CheckBox(PHYSIOLOGICCHO, "physiologiccho", $form, $error, true) ?>
            <div id="physiologiccho-td" class="condition-form-item" <?= (($form["physiologiccho"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(PHYSIOLOGICCHOWHEN, "physiologicchowhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(PHYSIOLOGICCHOL, "physiologicchol", $form, $error, true) ?>
            <div id="physiologicchol-td" class="condition-form-item" <?= (($form["physiologicchol"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(PHYSIOLOGICCHOLW, "physiologiccholw", $form, $error) ?>
            </div>

            <?= $this->CheckBox(PHYSIOLOGICC, "physiologicc", $form, $error, true) ?>
            <div id="physiologicc-td" class="condition-form-item" <?= (($form["physiologicc"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(PHYSIOLOGICCWHEN, "physiologiccwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(PHYSIOLOGICCI, "physiologicci", $form, $error, true) ?>
            <div id="physiologicci-td" class="condition-form-item" <?= (($form["physiologicci"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(PHYSIOLOGICCIWHEN, "physiologicciwhen", $form, $error) ?>
            </div>
            <?= $this->EndPanel() ?>


            <?= $this->StartPanel("Malnutrition") ?>
            <?= $this->CheckBox(MALNMI, "malnmi", $form, $error, true) ?>
            <div id="malnmi-td" class="condition-form-item" <?= (($form["malnmi"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(MALNMIWHEN, "malnmiwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(MALNVIT, "malnvit", $form, $error, true) ?>
            <div id="malnvit-td" class="condition-form-item" <?= (($form["malnvit"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(MALNVITWHEN, "malnvitwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(MALNELE, "malnele", $form, $error, true) ?>
            <div id="malnele-td" class="condition-form-item" <?= (($form["malnele"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(MALNELEWHEN, "malnelewhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(MALNSH, "malnsh", $form, $error, true) ?>
            <div id="malnsh-td" class="condition-form-item" <?= (($form["malnsh"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(MALNSHWHEN, "malnshwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(MALNCHA, "malncha", $form, $error, true) ?>
            <div id="malncha-td" class="condition-form-item" <?= (($form["malncha"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(MALNCHAWHEN, "malnchawhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(MALNHEM, "malnhem", $form, $error, true) ?>
            <div id="malnhem-td" class="condition-form-item" <?= (($form["malnhem"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(MALNHEMWHEN, "malnhemwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(MALNFIS, "malnfis", $form, $error, true) ?>
            <div id="malnfis-td" class="condition-form-item" <?= (($form["malnfis"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(MALNFISWHEN, "malnfiswhen", $form, $error) ?>
            </div>
            <?= $this->EndPanel() ?>


            <?= $this->StartPanel("Failure") ?>
            <?= $this->CheckBox(FAILUREIN, "failurein", $form, $error, true) ?>
            <div id="failurein-td" class="condition-form-item" <?= (($form["failurein"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(FAILUREINWHEN, "failureinwhen", $form, $error) ?>
            </div>

            <?= $this->CheckBox(FAILUREWE, "failurewe", $form, $error, true) ?>
            <div id="failurewe-td" class="condition-form-item" <?= (($form["failurewe"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(FAILUREWEWHEN, "failurewewhen", $form, $error) ?>
            </div>

            <?= $this->TextArea(FAILUREOTHER, "failureother", $form, $error) ?>

            <?= $this->CheckBox(FAILUREDEC, "failuredec", $form, $error, true) ?>
            <div id="failuredec-td" class="condition-form-item" <?= (($form["failuredec"] == 1) ? "style='display: block'" : "") ?> >
                <?= $this->Text(FAILUREDECDATE, "failuredecdate", $form, $error) ?>
            </div>

            <?= $this->Text(FAILUREDECCAUSE, "failuredeccause", $form, $error) ?>
            <?= $this->EndPanel() ?>
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