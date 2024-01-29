<?= IHTML::BeginForm("family_form",$_SERVER["PHP_SELF"] . "?com_family=1&func=save")?>
        <div class="col-lg-12">
            <?= IHTML::StartTabs(array("FamilyHistoryTab"=>"Family History","SocialHxTab"=>"Social Hx"))?>
            
                    <?= IHTML::StartTab("FamilyHistoryTab",true)?>
                        <input name='family_and_social_hxid' type='hidden' value="<?php echo $form['family_and_social_hxid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <?= $this->CheckBox(OBESITY, "obesity", $form, $error, true) ?>
                        <div id="obesity-td" class="condition-form-item" <?= (($form["obesity"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(OBESITYWHO, "obesitywho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>
                        
                        <?= $this->CheckBox(PROSTATECANCER, "prostatecancer", $form, $error, true) ?>
                        <div id="prostatecancer-td" class="condition-form-item" <?= (($form["prostatecancer"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(PROSTATECANCERWHO, "prostatecancerwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>
                        
                        <?= $this->CheckBox(FDM, "dm", $form, $error, true) ?>
                        <div id="dm-td" class="condition-form-item" <?= (($form["dm"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(DMWHO, "dmwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>
                        
                        <?= $this->CheckBox(OTHERMALIGNANCY, "othermalignancy", $form, $error, true) ?>
                        <div id="othermalignancy-td" class="condition-form-item" <?= (($form["othermalignancy"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(OTHERMALIGNANCYWHO, "othermalignancywho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>
                        
                        <?= $this->CheckBox(FHTN, "htn", $form, $error, true) ?>
                        <div id="htn-td" class="condition-form-item" <?= (($form["htn"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(HTNWHO, "htnwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>
                        
                        <?= $this->CheckBox(RENTALSTONE, "rentalstone", $form, $error, true) ?>
                        <div id="rentalstone-td" class="condition-form-item" <?= (($form["rentalstone"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(RENTALSTONEWHO, "rentalstonewho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>
                        
                        <?= $this->CheckBox(HYPOTHYROIDISM, "hypothyroidism", $form, $error, true) ?>
                        <div id="hypothyroidism-td" class="condition-form-item" <?= (($form["hypothyroidism"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(HYPOTHYROIDISMWHO, "hypothyroidismwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>

                        <?= $this->CheckBox(FGALLSTONE, "gallstone", $form, $error, true) ?>
                        <div id="gallstone-td" class="condition-form-item" <?= (($form["gallstone"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(GALLSTONEWHO, "gallstonewho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>
                        
                        <?= $this->CheckBox(BREASTCANCER, "breastcancer", $form, $error, true) ?>
                        <div id="breastcancer-td" class="condition-form-item" <?= (($form["breastcancer"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(BREASTCANCERWHO, "breastcancerwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>

                        <?= $this->CheckBox(FGOUT, "gout", $form, $error, true) ?>
                        <div id="gout-td" class="condition-form-item" <?= (($form["gout"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(GOUTWHO, "goutwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>

                        <?= $this->CheckBox(COLONCANCER, "coloncancer", $form, $error, true) ?>
                        <div id="coloncancer-td" class="condition-form-item" <?= (($form["coloncancer"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(COLONCANCERWHO, "coloncancerwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>

                        <?= $this->CheckBox(MULTIPLEGESTATION, "multiplegestation", $form, $error, true) ?>
                        <div id="multiplegestation-td" class="condition-form-item" <?= (($form["multiplegestation"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(MULTIPLEGESTATIONWHO, "multiplegestationwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>

                        <?= $this->CheckBox(ENDOMETRIALCANCER, "endometrialcancer", $form, $error, true) ?>
                        <div id="endometrialcancer-td" class="condition-form-item" <?= (($form["endometrialcancer"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(ENDOMETRIALCANCERWHO, "endometrialcancerwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>

                        <?= $this->CheckBox(OVARIANCANCER, "ovariancancer", $form, $error, true) ?>
                        <div id="ovariancancer-td" class="condition-form-item" <?= (($form["ovariancancer"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(OVARIANCANCERWHO, "ovariancancerwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>
                        
                        <?= $this->CheckBox(HYPERLIPIDEMIA, "hyperlipidemia", $form, $error, true) ?>
                        <div id="hyperlipidemia-td" class="condition-form-item" <?= (($form["hyperlipidemia"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(HYPERLIPIDEMIAWHO, "hyperlipidemiawho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>
                        <?= $this->CheckBox(MI, "mi", $form, $error, true) ?>
                        <div id="mi-td" class="condition-form-item" <?= (($form["mi"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(MIWHO, "miwho", $form, $error, "combo(Father/Mother/Sister/Brother)") ?>
                        </div>
                        <?= $this->CheckBox(OTHER, "other", $form, $error, true) ?>
                        <div id="other-td" class="condition-form-item" <?= (($form["other"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(OTHERWHO, "otherwho", $form, $error) ?>
                        </div>



                    <?= IHTML::EndTab()?>
                    <?= IHTML::StartTab("SocialHxTab")?>
                        <?= $this->Text(CHILDSNO, "childsno", $form, $error) ?>
                        <?= $this->Text(PATTERN, "pattern", $form, $error) ?>
                        <?= $this->Text(AGEOFMARRIAGE, "ageofmarriage", $form, $error) ?>
                        <?= $this->Text(PARTNERAGEATMARRIAGETIME, "partnerageatmarriagetime", $form, $error) ?>
                        <?= $this->Text(PARTNERAGEATMARRIAGETIME, "partnerageatmarriagetime", $form, $error) ?>
 
                        <?= $this->CheckBox(SMOKING, "smoking", $form, $error, true) ?>
                        <div id="smoking-td" class="condition-form-item" <?= (($form["smoking"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(SMOKINGCIGA, "smokingciga",  $form, $error) ?>
                            <?=$this->CheckBox(SMOKINGCIGAR, "smokingcigar",  $form, $error) ?>
                            <?=$this->CheckBox(SMOKINGWATERPIPE, "smokingwaterpipe",  $form, $error) ?>
                            <?=$this->CheckBox(SMOKINGOPIUM, "smokingopium",  $form, $error) ?>
                            <?=$this->CheckBox(SMOKINGCANNABIS, "smokingcannabis",  $form, $error) ?>
                            <?=$this->Text(SMOKINGHOWMUCH, "smokinghowmuch",  $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(OTHERSUBAGENT, "othersubagent", $form, $error) ?>
                        <?= $this->CheckBox(PERSONALINCOME, "personalincome", $form, $error) ?>
                        <?= $this->CheckBox(FAMILYINCOME , "familyincome", $form, $error) ?>

                        <?= $this->CheckBox(LIFESTRESSOR, "lifestressor", $form, $error, true) ?>
                        <div id="lifestressor-td" class="condition-form-item" <?= (($form["lifestressor"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->Text(LIFESTRESSORWHAT, "lifestressorwhat",  $form, $error) ?>
                            <?=$this->Text(LIFESTRESSORTIME, "lifestressortime",  $form, $error) ?>
                        </div>

                    <?= IHTML::EndTab()?>
                
		<?=IHTML::OperationButton("com_family_save",$this->getToken())?>
                
                <?=IHTML::Message($message)?>
        <?=IHTML::EndTabs()?>
<?= IHTML::EndForm?>