<div class="row">
    <?php $pageTitle = "Neuropsychiatry" ?>
    <?= IHTML::BreadCrump("Review Of System", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='review_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_review=1&neuropsychiatry=1&func=save" ?>" method='POST'>

        <input name='review_of_systemsid' type='hidden' value="<?php echo $form['review_of_systemsid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="col-md-6">
                
                <?= $this->Select("Sleep Pattern", "sleeppattern[]", $form, $error, "combo(Regular/Irregular/Hypersomnia/Insomnia)", true, " class='select2_multiple form-control' multiple='multiple'","","1/2/3/4") ?>
                <?= $this->Text("Time Of Sleep", "timeofsleep", $form, $error) ?>
                <?= $this->Text("Time Of Wakeup", "timeofwakeup", $form, $error) ?>
                <?= $this->Select("Quality Of Sleep", "qualityofsleep[]", $form, $error, "combo(Good/Bad)", true, " class='form-control'","","1/2") ?>
                <?= $this->CheckBox(BLURREDVISION, "blurredvision", $form, $error, true) ?>
                <div id="blurredvision-td" class="condition-form-item" <?= (($form["blurredvision"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(BLURREDVISIONINTER, "blurredvisioninter", $form, $error) ?>
                    <?= $this->CheckBox(BLURREDVISIONWITHHE, "blurredvisionwithhe", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(DIPLOPIA, "diplopia", $form, $error) ?>
                <?= $this->CheckBox(TUNNELVISION, "tunnelvision", $form, $error) ?>
                <?= $this->CheckBox(SCOTOMA, "scotoma", $form, $error) ?>
                <?= $this->CheckBox(TINNITUS, "tinnitus", $form, $error) ?>
                <?= $this->CheckBox(IMPAIREDHEARING, "impairedhearing", $form, $error) ?>
                <?= $this->CheckBox(PARINMEDIAN, "parinmedian", $form, $error) ?>
                <?= $this->CheckBox(PARINLAT, "parinlat", $form, $error) ?>

                <?= $this->CheckBox(HEADACHE, "headache", $form, $error, true) ?>
                <div id="headache-td" class="condition-form-item" <?= (($form["headache"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(HEADACHEMORNING, "headachemorning", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHEEVENING, "headacheevening", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHESLEEP, "headachesleep", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHEPULSATILE, "headachepulsatile", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHEAURA, "headacheaura", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHELOCATEDIN, "headachelocatedin", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHEOCCIPITAL, "headacheoccipital", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHEHEM, "headachehem", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHEGENERA, "headachegenera", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHEFACIUM, "headachefacium", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHEBITEM, "headachebitem", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHEACCOM, "headacheaccom", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHEPHOTO, "headachephoto", $form, $error) ?>
                    <?= $this->CheckBox(HEADACHERELIEVEWITH, "headacherelievewith", $form, $error) ?>
                </div> 


                <?= $this->CheckBox(INSOMNIA, "insomnia", $form, $error) ?>
                <?= $this->CheckBox(HYPERSOMNIA, "hypersomnia", $form, $error) ?>
                <?= $this->CheckBox(EARLYSTANDING, "earlystanding", $form, $error) ?>
                <?= $this->CheckBox(PSYCHOMOTOR, "psychomotor", $form, $error) ?>
                <?= $this->CheckBox(DIFFIINCON, "diffiincon", $form, $error) ?>
                
            </div>
            <div class="col-md-6">
                <?= $this->CheckBox(DIMIINALL, "dimiinall", $form, $error) ?>
                <?= $this->CheckBox(DEPRESSEDMOOD, "depressedmood", $form, $error) ?>
                <?= $this->CheckBox(FEELINGOFGUILT, "feelingofguilt", $form, $error) ?>
                <?= $this->CheckBox(SADNESS, "sadness", $form, $error) ?>
                <?= $this->CheckBox(IRRITABILITY, "irritability", $form, $error) ?>
                <?= $this->CheckBox(INDIFFERENCE, "indifference", $form, $error) ?>
                <?= $this->CheckBox(ANERGY, "anergy", $form, $error) ?>

                <?= $this->CheckBox(PANICATTAK, "panicattak", $form, $error, true) ?>
                <div id="panicattak-td" class="condition-form-item" <?= (($form["panicattak"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(PANICATTAKPOUNDING, "panicattakpounding", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKSWEAT, "panicattaksweat", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKTREMBL, "panicattaktrembl", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKSHORTNESS, "panicattakshortness", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKGLOBUS, "panicattakglobus", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKCHEST, "panicattakchest", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKABDOMINAL, "panicattakabdominal", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKDIZZY, "panicattakdizzy", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKDEREA, "panicattakderea", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKDEPER, "panicattakdeper", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKDYING, "panicattakdying", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKCRAZY, "panicattakcrazy", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKPARES, "panicattakpares", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKCHILLS, "panicattakchills", $form, $error) ?>
                    <?= $this->CheckBox(PANICATTAKHOT, "panicattakhot", $form, $error) ?>
                </div> 

                <?= $this->CheckBox(DIFFIINWORRY, "diffiinworry", $form, $error, true) ?>
                <div id="diffiinworry-td" class="condition-form-item" <?= (($form["diffiinworry"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(DIFFIINWORRYREST, "diffiinworryrest", $form, $error) ?>
                    <?= $this->CheckBox(DIFFIINWORRYBECOMING, "diffiinworrybecoming", $form, $error) ?>
                    <?= $this->CheckBox(DIFFIINWORRYSLEEP, "diffiinworrysleep", $form, $error) ?>
                    <?= $this->CheckBox(DIFFIINWORRYINFALLING, "diffiinworryinfalling", $form, $error) ?>
                    <?= $this->CheckBox(DIFFIINWORRYINSTAYING, "diffiinworryinstaying", $form, $error) ?>
                    <?= $this->CheckBox(DIFFIINWORRYUNSATISFYING, "diffiinworryunsatisfying", $form, $error) ?>
                </div> 


                <?= $this->CheckBox(AGORAPHOBIA, "agoraphobia", $form, $error) ?>
                <?= $this->CheckBox(POORSELFESTEEM, "poorselfesteem", $form, $error) ?>

                <?= $this->CheckBox(OTHERPHOBIA, "otherphobia", $form, $error, true) ?>
                <div id="otherphobia-td" class="condition-form-item" <?= (($form["otherphobia"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->TextArea("", "otherphobiaother", $form, $error) ?>
                </div> 


                <?= $this->CheckBox(OBSESSION, "obsession", $form, $error, true) ?>
                <div id="obsession-td" class="condition-form-item" <?= (($form["obsession"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(OBSESSIONCONTAMINATION, "obsessioncontamination", $form, $error) ?>
                    <?= $this->CheckBox(OBSESSIONWASHING, "obsessionwashing", $form, $error) ?>
                    <?= $this->CheckBox(OBSESSIONCOUNTING, "obsessioncounting", $form, $error) ?>
                    <?= $this->Text(OBSESSIONOTHER, "obsessionother", $form, $error) ?>
                </div> 


                <?= $this->CheckBox(IMPAIREDATTITUDE, "impairedattitude", $form, $error, true) ?>
                <div id="impairedattitude-td" class="condition-form-item" <?= (($form["impairedattitude"] == 1) ? "style='display: block'" : "") ?> >
                    <?= $this->CheckBox(IMPAIREDATTITUDEWEIGHT, "impairedattitudeweight", $form, $error) ?>
                    <?= $this->CheckBox(IMPAIREDATTITUDESHAPE, "impairedattitudeshape", $form, $error) ?>
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
<script>
    $(document).ready(function () {
        $(".select2_single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>