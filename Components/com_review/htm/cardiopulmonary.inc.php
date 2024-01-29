<div class="row">
    <?php $pageTitle = "Cardiopulmonary" ?>
    <?= IHTML::BreadCrump("Review Of System", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='review_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_review=1&cardiopulmonary=1&func=save" ?>" method='POST'>


        <input name='review_of_systemsid' type='hidden' value="<?php echo $form['review_of_systemsid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(CHESTPAINEOEX, "chestpaineoex", $form, $error) ?>
                <?= $this->CheckBox(PALPITATION, "palpitation", $form, $error) ?>
                <?= $this->CheckBox(PAROXYSMALNODY, "paroxysmalnody", $form, $error) ?>
                <?= $this->CheckBox(ORTHOPNEA, "orthopnea", $form, $error) ?>

                <?= $this->CheckBox(EDEMA, "edema", $form, $error, true) ?>
                <div id="edema-td" class="condition-form-item" <?= (($form["edema"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(EDEMAGENERALIZED, "edemageneralized", $form, $error) ?>
                    <?= $this->CheckBox(EDEMAPEDAL, "edemapedal", $form, $error) ?>
                </div>

                <?= $this->CheckBox(DYSPNEA, "dyspnea", $form, $error, true) ?>
                <div id="dyspnea-td" class="condition-form-item" <?= (($form["dyspnea"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(DYSPNEAONEXERTION, "dyspneaonexertion", $form, $error) ?>
                    <?= $this->CheckBox(DYSPNEAEVENING, "dyspneaevening", $form, $error) ?>
                    <?= $this->CheckBox(DYSPNEASLEEP, "dyspneasleep", $form, $error) ?>
                    <?= $this->CheckBox(DYSPNEARELATEDTOPILLOW, "dyspnearelatedtopillow", $form, $error) ?>
                    <?= $this->CheckBox(DYSPNRELIEF, "dyspnrelief", $form, $error) ?>
                </div>

                <?= $this->CheckBox(SNORING, "snoring", $form, $error) ?>
                <?= $this->CheckBox(YAWING, "yawing", $form, $error) ?>
                <?= $this->CheckBox(SOMNOLENCE, "somnolence", $form, $error) ?>
                <?= $this->CheckBox(FREPUENTNOSLAR, "frepuentnoslar", $form, $error) ?>
                <?= $this->CheckBox(VOICECHANGE, "voicechange", $form, $error, true) ?>
                <div id="voicechange-td" class="condition-form-item" <?= (($form["voicechange"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(VOICECHANGENASAL, "voicechangenasal", $form, $error) ?>
                    <?= $this->CheckBox(VOICECHANGEHOARSENESS, "voicechangehoarseness", $form, $error) ?>
                </div>

            </div>
            <div class="col-md-6">


                <?= $this->CheckBox(CHRONICCOUGH, "chroniccough", $form, $error, true) ?>
                <div id="chroniccough-td" class="condition-form-item" <?= (($form["chroniccough"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(CHRONICCOUGHEXAATNIGHTS, "chroniccoughexaatnights", $form, $error) ?>
                    <?= $this->CheckBox(CHRONICCOUGHWITHSPPRO, "chroniccoughwithsppro", $form, $error) ?>
                </div>

                <?= $this->CheckBox(HARSHAURES, "harshaures", $form, $error, true) ?>
                <div id="harshaures-td" class="condition-form-item" <?= (($form["harshaures"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(HARSHAURESWITHINEXAG, "harshaureswithinexag", $form, $error) ?>
                    <?= $this->CheckBox(HARSHAURESRELIEFBYBR, "harshauresreliefbybr", $form, $error) ?>
                </div>

                <?= $this->CheckBox(CHESTCONSEN, "chestconsen", $form, $error, true) ?>
                <div id="chestconsen-td" class="condition-form-item" <?= (($form["chestconsen"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(CHESTCONSENWITHEXAATEVENING, "chestconsenwithexaatevening", $form, $error) ?>
                    <?= $this->CheckBox(CHESTCONSENRELIEFBYBR, "chestconsenreliefbybr", $form, $error) ?>
                </div>
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