<form class="form-horizontal" name='preoperative_form' id='preoperative_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_preoperative=1&func=save" ?>" method='POST'>
    <fieldset>
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <?=IHTML::ReceptionData()?>
                <li class="active"><a href="#PrimaryLaboratoryScreeningTab" data-toggle="tab">Primary Laboratory Screening</a></li>
                <li><a href="#SonographyTab" data-toggle="tab">Sonography</a></li>
                <li><a href="#OptionalTab" data-toggle="tab">Optional</a></li>
                <li><a href="#MultidisciplinaryEvaluationTab" data-toggle="tab">Multidisciplinary Evaluation</a></li>
                <li><a href="#MetabolicSXTab" data-toggle="tab">Metabolic SX</a></li>
            </ul>

            <div class="well bs-component">  
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="PrimaryLaboratoryScreeningTab">
                        <input name='preoperativeid' type='hidden' value="<?php echo $form['preoperativeid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
                        <div class="table-responsive preoperative-table-container">
                            <table  class="table table-striped table-bordered table-hover"  id="preoperative_lab_table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <?= $this->Select(BG, "bg", $form, $error, "combo(O/A/B/AB)") ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(CR, "cr", $form, $error) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?= $this->Select(RH, "rh", $form, $error, "combo(pos/neg)") ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(NA, "na", $form, $error) ?>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>
                                            <?= $this->Text(WBC, "wbc", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(K, "k", $form, $error) ?>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td>
                                            <?= $this->Text(RBC, "rbc", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(PT, "pt", $form, $error) ?>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td>
                                            <?= $this->Text(HB, "hb", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(PTT, "ptt", $form, $error) ?>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>
                                            <?= $this->Text(HCT, "hct", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(INR, "inr", $form, $error) ?>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>
                                            <?= $this->Text(MCV, "mcv", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(BLEEDINGTIME, "bleedingtime", $form, $error) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?= $this->Text(MCH, "mch", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(FBS, "fbs", $form, $error) ?>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>
                                            <?= $this->Text(PLATELET, "platelet", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(TSH, "tsh", $form, $error) ?>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>
                                            <?= $this->Text(NEUTROPHIL, "neutrophil", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(URINECOR, "urinecor", $form, $error) ?>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>
                                            <?= $this->Text(LYMPH, "lymph", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(HIV, "hiv", $form, $error) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?= $this->Text(EOSINOPHIL, "eosinophil", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(HBSAG, "hbsag", $form, $error) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?= $this->Text(BASOPHIL, "basophil", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(HCVAB, "hcvab", $form, $error) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?= $this->Text(BUN, "bun", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(TG, "tg", $form, $error) ?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <?= $this->Text(TOTALCHOLESTEROL, "totalcholestrol", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(HDL, "hdl", $form, $error) ?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <?= $this->Text(LDL, "ldl", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(ALT, "alt", $form, $error) ?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <?= $this->Text(AST, "ast", $form, $error) ?>
                                        </td>
                                        <td>
                                            <?= $this->Text(ALKP, "alkp", $form, $error) ?>
                                        </td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div><!--End Table Responsive -->
                    </div>

                    <!--tab-1 end-->
                    <div class="tab-pane fade" id="SonographyTab">

                        <?= $this->CheckBox(LIVER, "liver", $form, $error, true) ?>
                        <div id="liver-td" class="condition-form-item" <?= (($form["liver"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(LIVERSIZE, "liversize", $form, $error, "combo(small/normal/enlarged)") ?>
                        </div>

                        <?= $this->Select(LIVERECHO, "liverecho", $form, $error, "combo(normal/mild increased/moderate increase/sever increase)") ?>

                        <?= $this->CheckBox(LIVERFATTY, "liverfatty", $form, $error) ?>
                        <?= $this->CheckBox(LIVERSOL, "liversol", $form, $error) ?>

                        <?= $this->CheckBox(GB, "gb", $form, $error, true) ?>
                        <div id="gb-td" class="condition-form-item" <?= (($form["gb"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(GBWALL, "gbwall", $form, $error, "combo(NL/Thickened/emphysematous/polyp)") ?>
                            <?= $this->CheckBox(GBDISTENDED, "gbdistended", $form, $error) ?>
                            <?= $this->Select(GBSTONE, "gbstone", $form, $error, "combo(none/single/multiple)") ?>
                        </div>

                        <?= $this->CheckBox(SPLEEN, "spleen", $form, $error, true) ?>
                        <div id="spleen-td" class="condition-form-item" <?= (($form["spleen"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(SPLEENSIZE, "spleensize", $form, $error, "combo(small/normal/enlarged/massive splenomegaly)") ?>
                            <?= $this->Text(SPLEENSOL, "spleensoll", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(UTERINE, "uterine", $form, $error, true) ?>
                        <div id="uterine-td" class="condition-form-item" <?= (($form["uterine"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(SPLEENSIZE, "spleensize", $form, $error, "combo(small/normal/enlarged/massive splenomegaly)") ?>
                            <?= $this->Text(UTERINEENDOM, "uterineendom", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(MYOMA, "myoma", $form, $error, true) ?>
                        <div id="myoma-td" class="condition-form-item" <?= (($form["myoma"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(MYOMANO, "myomano", $form, $error) ?>
                            <?= $this->Text(MYOMALOCA, "myomaloca", $form, $error) ?>
                            <?= $this->Select(MYOMASITUA, "myomasitua", $form, $error, "combo(sub mucosal/intramuscular/subserosal/parasitic/mixed)") ?>
                        </div>

                        <?= $this->CheckBox(OVARIES, "ovaries", $form, $error, true) ?>
                        <div id="ovaries-td" class="condition-form-item" <?= (($form["ovaries"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(OVARIESNECK, "ovariesneck", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(CYST, "cyst", $form, $error, true) ?>
                        <div id="cyst-td" class="condition-form-item" <?= (($form["cyst"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(CYSTNO, "cystno", $form, $error) ?>
                            <?= $this->Text(CYSTSIZE, "cystsize", $form, $error) ?>
                            <?= $this->Select(CYSTSIDE, "cystside", $form, $error, "combo(right/left/Bilateral)") ?>
                            <?= $this->Select(CYSTTEXTURE, "cysttexture", $form, $error, "combo(cystic/solid/heterogeneous)") ?>
                            <?= $this->CheckBox(SCYSTSEP, "scystsep", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(RKIDNEY, "rkidney", $form, $error, true) ?>
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
                            <?= $this->Select(BLADDERWALL, "bladderwall", $form, $error, "combo(Norml/thickened/trabeculation)") ?>
                            <?= $this->CheckBox(BLADDERSTONE, "bladderstone", $form, $error) ?>
                            <?= $this->CheckBox(BLADDERMASS, "bladdermass", $form, $error) ?>

                        </div>

                        <?= $this->TextArea(SONOGRAPHDESC, "sonographdesc", $form, $error) ?>

                    </div>
                    <!--tab-2 end-->
                    <div class="tab-pane fade" id="OptionalTab">

                        <?= $this->StartPanel("ECG") ?>
                        <?= $this->Text(ECGRATE, "ecgrate", $form, $error) ?>
                        <?= $this->Select(ECGRHYTHM, "ecgrhythm", $form, $error, "combo(sinus/junction/ventricle)") ?>
                        <?= $this->Text(ECGQRS, "ecgqrs", $form, $error) ?>
                        <?= $this->Text(ECGRR, "ecgrr", $form, $error) ?>
                        <?= $this->Text(ECGQT, "ecgqt", $form, $error) ?>
                        <?= $this->TextArea(ECGDESCRIPTION, "ecgdescription", $form, $error) ?>
                        <?= $this->EndPanel() ?>


                        <?= $this->StartPanel("CXR") ?>
                        <?= $this->Text(CXRAIRWAY, "cxrairway", $form, $error) ?>
                        <?= $this->Text(CXRMEDI, "cxrmedi", $form, $error) ?>
                        <?= $this->Text(CXRLUNG, "cxrlung", $form, $error) ?>
                        <?= $this->Text(CXRHEART, "cxrheart", $form, $error) ?>
                        <?= $this->Text(CXRBONE, "cxrbone", $form, $error) ?>
                        <?= $this->Text(CXRLESION, "cxrlesion", $form, $error) ?>
                        <?= $this->Text(CXRCPA, "cxrcpa", $form, $error) ?>
                        <?= $this->Text(CXRLOBE, "cxrlobe", $form, $error) ?>
                        <?= $this->Text(CXRDES, "cxrdes", $form, $error) ?>

                        <?= $this->EndPanel() ?>



                        <?= $this->StartPanel("Endoscopy") ?>
                        <?= $this->CheckBox(ENDOSCOPYES, "endoscopyes", $form, $error, true) ?>
                        <div id="endoscopyes-td" class="condition-form-item" <?= (($form["endoscopyes"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(ENDOSCOPYESWEB, "endoscopyesweb", $form, $error) ?>
                            <?= $this->CheckBox(ENDOSCOPYESSTR, "endoscopyesstr", $form, $error) ?>
                            <?= $this->CheckBox(ENDOSCOPYESLOC, "endoscopyesloc", $form, $error) ?>
                            <?= $this->CheckBox(ENDOSCOPYESNA, "endoscopyesna", $form, $error) ?>
                            <?= $this->CheckBox(ENDOSCOPYESMU, "endoscopyesmu", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(ENDOSCOPYST, "endoscopyst", $form, $error, true) ?>
                        <div id="endoscopyst-td" class="condition-form-item" <?= (($form["endoscopyst"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(ENDOSCOPYSTGA, "endoscopystga", $form, $error) ?>
                            <?= $this->CheckBox(ENDOSCOPYSTPR, "endoscopystpr", $form, $error) ?>
                            <?= $this->CheckBox(ENDOSCOPYSTUL, "endoscopystul", $form, $error) ?>
                            <?= $this->Text(ENDOSCOPYSTLO, "endoscopystlo", $form, $error) ?>
                            <?= $this->Select(ENDOSCOPYSTPUT, "endoscopystput", $form, $error, "combo(pos/neg/not performed)") ?>
                        </div>


                        <?= $this->CheckBox(ENDOSCOPYDU, "endoscopydu", $form, $error, true) ?>
                        <div id="endoscopydu-td" class="condition-form-item" <?= (($form["endoscopydu"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(ENDOSCOPYDUULCER, "endoscopyduulcer", $form, $error) ?>
                            <?= $this->Select(ENDOSCOPYDURUT, "endoscopydurut", $form, $error, "combo(pos/neg/not performed)") ?>
                        </div>

                        <?= $this->CheckBox(ENDOSCOPYBIOPSY, "endoscopybiopsy", $form, $error, true) ?>
                        <div id="endoscopybiopsy-td" class="condition-form-item" <?= (($form["endoscopybiopsy"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->TextArea(ENDOSCOPYBIOPSYRESDESC, "endoscopybiopsyresdesc", $form, $error) ?>
                        </div>

                        <?= $this->EndPanel() ?>

                    </div>
                    <!--tab-3 end-->
                    <div class="tab-pane fade" id="MultidisciplinaryEvaluationTab">

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

                    </div>
                    <!--tab-4 end-->
                    <div class="tab-pane fade" id="MetabolicSXTab">
                        <?= $this->Text(SYSTOLICBP, "systolicbp", $form, $error) ?>
                        <?= $this->Text(DIASTOLICBP, "diastolicbp", $form, $error) ?>
                        <?= $this->Text(MSXTG, "msxtg", $form, $error) ?>
                        <?= $this->Text(MSXHDL, "msxhdl", $form, $error) ?>
                        <?= $this->Text(MSXFBS, "msxfbs", $form, $error) ?>
                        <?= $this->Text(MSXWCF, "msxwcf", $form, $error) ?> 
                    </div>
                </div>
                <div id="buttons_div" >
                    <input name='com_preoperative_save' type='hidden' value="1" />
                    <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                    <button class="btn btn-primary" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                </div>
                <?php if ($message != ""): ?>
                    <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                    <?php endif; ?>
            </div><!-- well End-->
        </div><!-- col-lg-6 End-->
    </fieldset>
</form>