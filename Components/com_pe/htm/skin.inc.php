<div class="row">
    <?php $pageTitle = "Skin" ?>
    <?= IHTML::BreadCrump("PE", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='pe_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_pe=1&skin=1&func=save" ?>" method='POST'>


        <input name='peid' type='hidden' value="<?php echo $form['peid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(STRIAE, "striae", $form, $error, true) ?>
                <div id="striae-td" class="condition-form-item" <?= (($form["striae"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Select(STRIAECOLOR, "striaecolor", $form, $error, "combo(pink/silver)", true, "class='form-control'") ?>
                    <?= $this->Text(STRIAELOCAT, "striaelocat", $form, $error) ?>
                </div>

                <?= $this->CheckBox(ACNE1, "acne1", $form, $error, true) ?>
                <div id="acne1-td" class="condition-form-item" <?= (($form["acne1"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(ACNEFACE, "acneface", $form, $error) ?>
                    <?= $this->CheckBox(ACNENECK, "acneneck", $form, $error) ?>
                    <?= $this->CheckBox(ACNECHEST, "acnechest", $form, $error) ?>
                    <?= $this->CheckBox(ACNEBACK, "acneback", $form, $error) ?>
                </div>

                <?= $this->CheckBox(INTERTRIGO, "intertrigo", $form, $error, true) ?>
                <div id="intertrigo-td" class="condition-form-item" <?= (($form["intertrigo"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(INTERTRIGOAXI, "intertrigoaxi", $form, $error) ?>
                    <?= $this->CheckBox(INTERTRIGOINF, "intertrigoinf", $form, $error) ?>
                    <?= $this->CheckBox(INTERTRIGOINT, "intertrigoint", $form, $error) ?>
                    <?= $this->CheckBox(INTERTRIGOABD, "intertrigoabd", $form, $error) ?>
                </div>

                <?= $this->CheckBox(ACANNIG, "acannig", $form, $error, true) ?>
                <div id="acannig-td" class="condition-form-item" <?= (($form["acannig"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(ACANNIGAXILLAE, "acannigaxillae", $form, $error) ?>
                    <?= $this->CheckBox(ACANNIGNECK, "acannigneck", $form, $error) ?>
                    <?= $this->CheckBox(ACANNIGSIDES, "acannigsides", $form, $error) ?>
                    <?= $this->CheckBox(ACANNIGINGUINAL, "acanniginguinal", $form, $error) ?>
                    <?= $this->CheckBox(ACANNIGINFR, "acanniginfr", $form, $error) ?>
                    <?= $this->CheckBox(ACANNIGFINGERS, "acannigfingers", $form, $error) ?>
                </div>

                <?= $this->CheckBox(LEGULCER, "legulcer", $form, $error, true) ?>
                <div id="legulcer-td" class="condition-form-item" <?= (($form["legulcer"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(LEGULCERMEDIAL, "legulcermedial", $form, $error) ?>
                    <?= $this->CheckBox(LEGULCERLATERAL, "legulcerlateral", $form, $error) ?>
                    <?= $this->CheckBox(LEGULCERFINGER, "legulcerfinger", $form, $error) ?>
                    <?= $this->CheckBox(LEGULCERTIBIAL, "legulcertibial", $form, $error) ?>
                    <?= $this->CheckBox(LEGULCERSOLE, "legulcersole", $form, $error) ?>
                </div>

                <?= $this->CheckBox(SKINTAGS, "skintags", $form, $error, true) ?>
                <div id="skintags-td" class="condition-form-item" <?= (($form["skintags"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->Text(SKINTAGSLOC, "skintagsloc", $form, $error) ?>
                </div>

                <?= $this->CheckBox(XANTHOMA, "xanthoma", $form, $error, true) ?>
                <div id="xanthoma-td" class="condition-form-item" <?= (($form["xanthoma"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(XANTHOMAERU, "xanthomaeru", $form, $error) ?>
                    <?= $this->CheckBox(XANTHOMATEN, "xanthomaten", $form, $error) ?>
                    <?= $this->CheckBox(XANTHOMAEXT, "xanthomaext", $form, $error) ?>
                    <?= $this->Text(XANTHOMALOCA, "xanthomaloca", $form, $error) ?>
                </div>

                <?= $this->CheckBox(YELLOWPANDS, "yellowpands", $form, $error) ?>
                <?= $this->TextArea(SKINDESC, "skindesc", $form, $error) ?>
            </div>
            <div class="col-md-6">
                ّ
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