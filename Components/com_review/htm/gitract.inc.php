<div class="row">
    <?php $pageTitle = "GI Tract" ?>
    <?= IHTML::BreadCrump("Review Of System", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='review_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_review=1&gitract=1&func=save" ?>" method='POST'>


        <input name='review_of_systemsid' type='hidden' value="<?php echo $form['review_of_systemsid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                <?= $this->CheckBox(RECHESTPAIN, "rechestpain", $form, $error, true) ?>
                <div id="rechestpain-td" class="condition-form-item" <?= (($form["rechestpain"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(RECHESTPAINPOSTPRANDIAL, "rechestpainpostprandial", $form, $error) ?>
                    <?= $this->CheckBox(RECHESTPAINSUPPOS, "rechestpainsuppos", $form, $error) ?>
                    <?= $this->CheckBox(RECHESTPAINNOCTURNAL, "rechestpainnocturnal", $form, $error) ?>
                    <?= $this->CheckBox(RECHESTPAINSOON, "rechestpainsoon", $form, $error) ?>
                    <?= $this->CheckBox(RECHESTPAINHOUR, "rechestpainhour", $form, $error) ?>
                </div>

                <?= $this->CheckBox(SOURMATERIALRE, "sourmaterialre", $form, $error, true) ?>
                <div id="sourmaterialre-td" class="condition-form-item" <?= (($form["sourmaterialre"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(SOURMATERIALREPOST, "sourmaterialrepost", $form, $error) ?>
                    <?= $this->CheckBox(SOURMATERIALRESUPPOS, "sourmaterialresuppos", $form, $error) ?>
                    <?= $this->CheckBox(SOURMATERIALRENOC, "sourmaterialrenoc", $form, $error) ?>
                </div>

                <?= $this->CheckBox(HEARTBURN, "heartburn", $form, $error, true) ?>
                <div id="heartburn-td" class="condition-form-item" <?= (($form["heartburn"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(HEARTBURNPOST, "heartburnpost", $form, $error) ?>
                    <?= $this->CheckBox(HEARTBURNSUPPOS, "heartburnsuppos", $form, $error) ?>
                    <?= $this->CheckBox(HEARTBURNNOC, "heartburnnoc", $form, $error) ?>
                </div>

                <?= $this->CheckBox(POSTEQIPAIN, "posteqipain", $form, $error) ?>


                <?= $this->CheckBox(REOFDIWITHAN, "reofdiwithan", $form, $error) ?>

                <?= $this->CheckBox(RUQDISCOMFORT, "ruqdiscomfort", $form, $error, true) ?>
                <div id="ruqdiscomfort-td" class="condition-form-item" <?= (($form["ruqdiscomfort"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(RUQDISCOMFORTRETOME, "ruqdiscomfortretome", $form, $error) ?>
                </div>

                <?= $this->CheckBox(POSTRISHPAIN, "postrishpain", $form, $error) ?>
                <?= $this->CheckBox(CONSTIPATION, "constipation", $form, $error) ?>
                <?= $this->CheckBox(DIARRHEA, "diarrhea", $form, $error) ?>
                <?= $this->CheckBox(INTBETDIACON, "intbetdiacon", $form, $error) ?>
                <?= $this->CheckBox(POSTEQIPAIN, "icterus", $form, $error, true) ?>
                <div id="icterus-td" class="condition-form-item" <?= (($form["icterus"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(ICTERUSSHORTEP, "icterusshortep", $form, $error) ?>
                    <?= $this->CheckBox(ICTERUSPROLONGED, "icterusprolonged", $form, $error) ?>
                    <?= $this->CheckBox(ICTERUSACCOWITH, "icterusaccowith", $form, $error) ?>
                </div>


            </div>
            <div class="col-md-6">


                <?= $this->CheckBox(NAUSEA, "nausea", $form, $error) ?>
                <?= $this->CheckBox(VOMITING, "vomiting", $form, $error) ?>
                <?= $this->CheckBox(DYSCHEZIA, "dyschezia", $form, $error) ?>
                <?= $this->CheckBox(HEMATOCHEZIA, "hematochezia", $form, $error) ?>
                <?= $this->CheckBox(BLOODYSTONST, "bloodystonst", $form, $error) ?>


                <?= $this->CheckBox(LUMPSENONPER, "lumpsenonper", $form, $error, true) ?>
                <div id="lumpsenonper-td" class="condition-form-item" <?= (($form["lumpsenonper"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(LUMPSENONPERAFTER, "lumpsenonperafter", $form, $error) ?>
                    <?= $this->CheckBox(LUMPSENONPERSPONT, "lumpsenonperspont", $form, $error) ?>
                </div>

                <?= $this->CheckBox(DIFFICULTY, "difficulty", $form, $error) ?>
                <?= $this->CheckBox(SENSEOFREFUL, "senseofreful", $form, $error) ?>

                <?= $this->CheckBox(LUNPORMASS, "lunpormass", $form, $error, true) ?>
                <div id="lunpormass-td" class="condition-form-item" <?= (($form["lunpormass"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(LUNPORMASSING, "lunpormassing", $form, $error) ?>
                    <?= $this->CheckBox(LUNPORMASSFEMORAL, "lunpormassfemoral", $form, $error) ?>
                    <?= $this->CheckBox(LUNPORMASSUM, "lunpormassum", $form, $error) ?>
                    <?= $this->CheckBox(LUNPORMASSAN, "lunpormassan", $form, $error) ?>
                    <?= $this->CheckBox(LUNPORMASSREWITHSLIGHT, "lunpormassrewithslight", $form, $error) ?>
                    <?= $this->CheckBox(LUNPORMASSREWITHSUPINE, "lunpormassrewithsupine", $form, $error) ?>
                    <?= $this->CheckBox(LUNPORMASSEXAC, "lunpormassexac", $form, $error) ?>
                </div>

                <?= $this->CheckBox(DISWITHACT, "diswithact", $form, $error, true) ?>
                <div id="diswithact-td" class="condition-form-item" <?= (($form["diswithact"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(DISWITHACTINGUINAL, "diswithactinguinal", $form, $error) ?>
                    <?= $this->CheckBox(DISWITHACTUMBILICAL, "diswithactumbilical", $form, $error) ?>
                    <?= $this->CheckBox(DISWITHACTANTERIOR, "diswithactanterior", $form, $error) ?>
                    <?= $this->CheckBox(DISWITHACTSCROTUM, "diswithactscrotum", $form, $error) ?>
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