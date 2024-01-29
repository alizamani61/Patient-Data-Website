<div class="row">
    <?php $pageTitle = "Primary Laboratory Screening" ?>
    <?= IHTML::BreadCrump("Preoperative Evaluation", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <form class="form-horizontal" name='preoperative_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_preoperative=1&primarylaboratoryscreening=1&func=save" ?>" method='POST'>


        <input name='preoperativeid' type='hidden' value="<?php echo $form['preoperativeid'] ?>" />
        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
        <div class="row">
            <div class="table-responsive preoperative-table-container">
                <table  class="table table-striped table-bordered table-hover"  id="preoperative_lab_table">
                    <tbody>
                        <tr>
                            <td>
                                <?= $this->Text("CBC", "cbc", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("DIFF", "diff", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Text("ELECTROLITE", "electrolite", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("Serum Iron", "serumiron", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Text("VITD", "vitd", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("CA", "ca", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Text("FERRITIN", "ferritin", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("TIBC", "tibc", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Text("PTH", "pth", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("LFT", "lft", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Text("VitA", "vita", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("Teransferrin", "teransferrin", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Text("Alb", "alb", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("ZINC", "zinc", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Text("T3", "t3", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("T4", "t4", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Text("HCV", "hcv", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("U/A", "ua", $form, $error) ?>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <?= $this->Text("U/C", "uc", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("Total Billi", "totalbilli", $form, $error) ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <?= $this->Text("Copper", "copper", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("Mg", "mg", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Select(BG, "bg", $form, $error, "combo(O/A/B/AB)", true, "class='form-control'") ?>
                            </td>
                            <td>
                                <?= $this->Text(CR, "cr", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Select(RH, "rh", $form, $error, "combo(pos/neg)", true, "class='form-control'") ?>
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
                        <tr>
                            <td>
                                <?= $this->Text("Direct Billi", "directbilli", $form, $error) ?>
                            </td>
                            <td>
                                <?= $this->Text("leptin", "leptin", $form, $error) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Text("Ghrelin", "ghrelin", $form, $error) ?>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!--End Table Responsive -->
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