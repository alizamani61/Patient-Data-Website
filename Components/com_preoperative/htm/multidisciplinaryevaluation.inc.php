<div class="row">
    <?php $pageTitle = "Multidisciplinary Evaluation" ?>
    <?= IHTML::BreadCrump("Preoperative Evaluation", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='preoperative_form' id='preoperative_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_preoperative=1&multidisciplinaryevaluation=1&func=save" ?>" method='POST'>


        <input name='preoperativeid' type='hidden' value="<?php echo $form['preoperativeid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <?= $this->StartPanel("Cardiologist") ?>
            <?= $this->Text(CARDIOREASON, "cardioreason", $form, $error) ?>
            <?= $this->Text(CARDIORESULT, "cardioresult", $form, $error) ?>
            <?= $this->EndPanel() ?>

            <?= $this->StartPanel("Pulmonologist") ?>
            <?= $this->Text(PULMONOREASON, "pulmonoreason", $form, $error) ?>
            <?= $this->Text(PULMONORESULT, "pulmonoresult", $form, $error) ?>
            <?= $this->EndPanel() ?>

            <?= $this->StartPanel("Anesthesiologist") ?>
            <?= $this->Text(ANESTHESIOREASON, "anesthesioreason", $form, $error) ?>
            <?= $this->Text(ANESTHESIORESULT, "anesthesioresult", $form, $error) ?>
            <?= $this->EndPanel() ?>



            <?= $this->StartPanel("Gastroenterologist") ?>
            <?= $this->Text(GASTROENTREASON, "gastroentreason", $form, $error) ?>
            <?= $this->Text(GASTROENTRESULT, "gastroentresult", $form, $error) ?>
            <?= $this->EndPanel() ?>



            <?= $this->StartPanel("Nutritionist") ?>
            <?= $this->Text(NUTRITIONREASON, "nutritionreason", $form, $error) ?>
            <?= $this->Text(NUTRITIONRESULT, "nutritionresult", $form, $error) ?>
            <?= $this->EndPanel() ?>


            <?= $this->StartPanel("Physiatrist") ?>
            <?= $this->Text(PHYSIATREASON, "physiatreason", $form, $error) ?>
            <?= $this->Text(PHYSIATRESULT, "physiatresult", $form, $error) ?>
            <?= $this->EndPanel() ?>


            <?= $this->StartPanel("Endocrinologist") ?>
            <?= $this->Text(ENDOCRINOREASON, "endocrinoreason", $form, $error) ?>
            <?= $this->Text(ENDOCRINORESULT, "endocrinoresult", $form, $error) ?>
            <?= $this->EndPanel() ?>

            <?= $this->StartPanel("Multidisciplinary committee") ?>
            <?= $this->Text(MULTICOMMITRE, "multicommitre", $form, $error) ?>
            <?= $this->Text(MULTICOMMITPLAN, "multicommitplan", $form, $error) ?>
            <?= $this->Text(MULTICOMMITKIND, "multicommitkind", $form, $error) ?>
            <?= $this->EndPanel() ?>

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