<div class="row">
    <?php $pageTitle = "Anthropometric Monitoring" ?>
    <?= IHTML::BreadCrump("FU", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); ?>
    <div class="col-xs-3">
        <!-- required for floating -->
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs-left">
            <li>
                <form action="<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&anthropometricmonitoring=1" . (isset($_GET["fudate"]) ? "&fudate=" . $_GET["fudate"] : "") ?>" method='POST'>
                    <select name="fudate">
                        <option value=""></option>
                        <option value="1st Week">1st Week</option>
                        <option value="2nd Week">2nd Week</option>
                        <option value="3rd Week">3rd Week</option>
                        <option value="4th Week">4th Week</option>
                        <option value="2nd Month">2nd Month</option>
                        <option value="3rd Month">3rd Month</option>
                        <option value="4th Month">4th Month</option>
                        <option value="5th Month">5th Month</option>
                        <option value="6th Month">6th Month</option>
                        <option value="7th Month">7th Month</option>
                        <option value="8th Month">8th Month</option>
                        <option value="9th Month">9th Month</option>
                        <option value="10th Month">10th Month</option>
                        <option value="11th Month">11th Month</option>
                        <option value="12th Month">12th Month</option>
                        <option value="13th Month">13th Month</option>
                        <option value="14th Month">14th Month</option>
                        <option value="15th Month">15th Month</option>
                        <option value="16th Month">16th Month</option>
                        <option value="17th Month">17th Month</option>
                        <option value="18th Month">18th Month</option>
                        <option value="19th Month">19th Month</option>
                        <option value="20th Month">20th Month</option>
                        <option value="21th Month">21th Month</option>
                        <option value="22th Month">22th Month</option>
                        <option value="23th Month">23th Month</option>
                        <option value="24th Month">24th Month</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                        <option value="5th Year">5th Year</option>
                        <option value="6th Year">6th Year</option>
                        <option value="7th Year">7th Year</option>
                        <option value="8th Year">8th Year</option>
                        <option value="9th Year">9th Year</option>
                        <option value="10th Year">10th Year</option>
                    </select>
                    <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
                    <input type="hidden" name="pageType" value="1"/>
                    <input name='com_fu_detail_add' type='hidden' value="1" />
                    <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                    <button type="submit"><i class="fa fa-plus"></i></button>
                </form>
            </li>
            <?php if (count($dates) > 0): ?>
                <li class="active"><a href="?com_fu=1&func=select&anthropometricmonitoring=1&fudate=<?= $form["fudate"] ?>&id=<?= $form["ident_id"] ?>"><?= $form["fudate"] ?></a>
                </li>
            <?php endif; ?>
            <?php for ($i = 0; $i < count($dates); $i++): ?>
                <?php if ($dates[$i]["fudate"] != $form["fudate"]): ?>
                    <li class=""><a href="?com_fu=1&func=select&anthropometricmonitoring=1&fudate=<?= $dates[$i]["fudate"] ?>&id=<?= $form["ident_id"] ?>"><?= $dates[$i]["fudate"] ?></a>
                    </li>
                    <?php ENDIF; ?>
            <?php endfor; ?>

        </ul>
    </div>
    <div class="col-xs-9">
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="Tab1">

                <form class="form-horizontal" name='fu_form1' action="<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&anthropometricmonitoring=1" . (isset($_GET["fudate"]) ? "&fudate=" . $_GET["fudate"] : "") . "&func=save" ?>" method='POST'>
                    <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
                    <input type="hidden" name="fuid" value="<?= $form['fuid'] ?>"/>
                    <input type="hidden" name="fudate" value="<?= $form['fudate'] ?>"/>
                    <input type="hidden" name="pageType" value="1"/>
                    <div style="height:400px;overflow-y: scroll;border: 1px solid #ccc;background-color:#eee; padding: 20px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">PostOp</div>
                            <div class="panel-body"> 
                                <?= $this->Text(WT, "postopwt", $form, $error) ?>
                                <?= $this->Text("PostOp WT", "postop", $form, $error) ?>
                                <?= $this->Text("Reduced WT", "reduced", $form, $error) ?>
                                <?= $this->Text("BMI", "postopbmi", $form, $error) ?>
                                <?= $this->Text("WCP", "postopwcp", $form, $error) ?>
                                <?= $this->Text("HCP", "postophcp", $form, $error) ?>
                                <?= $this->Text("MAC", "postopmac", $form, $error) ?>
                                <?= $this->Text("BP", "postopbp", $form, $error) ?>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Complications</div> 
                            <div class="panel-body">
                                <?= $this->Text("Bing Eating", "compbingeating", $form, $error) ?>
                                <?= $this->Text("Weakness", "compweakness", $form, $error) ?>
                                <?= $this->Text("Constipation", "compconstipation", $form, $error) ?>
                                <?= $this->Text("Vomiting", "compvomiting", $form, $error) ?> 
                                
                                <?= $this->Text("Pain", "comppain", $form, $error) ?>
                                <?= $this->Text("Leak", "compleak", $form, $error) ?>
                                <?= $this->Text("Bleeding", "compbleeding", $form, $error) ?>
                                <?= $this->Text("Gerd", "compgerd", $form, $error) ?>
                                <?= $this->Text("DVT", "compdvt", $form, $error) ?>
                                <?= $this->Text("HAIR LOSS", "comphairloss", $form, $error) ?>
                                <?= $this->Text("GALLSTONE", "compgallstone", $form, $error) ?>
                                <?= $this->Text("Description", "compdesc", $form, $error) ?>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">APPTITE</div>
                            <div class="panel-body">
                                <?= $this->Text("Decrease", "apptdecrease", $form, $error) ?>
                                <?= $this->Text("Increase", "apptincrease", $form, $error) ?>
                                <?= $this->Text("Not Changed", "apptnotchange", $form, $error) ?>
                                <?= $this->Text("Description", "apptdesc", $form, $error) ?>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Taste Change</div>
                            <div class="panel-body">
                                <?= $this->Select("NA (پفك - لواشك)", "tastena", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <font face='verdana' color='red'><?php echo $error['tastena'] ?></font>
                                <?= $this->Select("K (موز - بادمجان)", "tastek", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <font face='verdana' color='red'><?php echo $error['tastek'] ?></font>
                                <?= $this->Select("CHO (نان - برنج)", "tastecho", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <font face='verdana' color='red'><?php echo $error['tastecho'] ?></font>
                                <?= $this->Select("GLUCOSE (بستني - شيريني)", "tasteglucose", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <font face='verdana' color='red'><?php echo $error['tasteglucose'] ?></font>
                                <?= $this->Text("Description", "tastedesc", $form, $error) ?>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Exercise</div>
                            <div class="panel-body">
                                <?= $this->Text("Sendentary(Daily Activity Only)", "exercisesedentary", $form, $error) ?>
                                <?= $this->Text("Hypo Active(Exercise or Walking occationally)", "exercisehypoactive", $form, $error) ?>
                                <?= $this->Text("Active(Regular Exercise at least 3 Times a Week)", "exerciseactive", $form, $error) ?>
                                <?= $this->Text("Hyper Active(Professional Exercise)", "exercisehyperactive", $form, $error) ?>
                                <?= $this->Text("Description", "exercisedesc", $form, $error) ?>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Quality Of Life</div>
                            <div class="panel-body">
                                <?= $this->Select("Sexuality", "qlifesexuality", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Self Confidence", "qlifeselfconfidence", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Sleep Time", "qlifesleeptime", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Sleep Quality", "qlifesleepquality", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Sleep Regularity", "qlifesleepregularity", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Eating Regularity", "qlifeeatingregularity", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Nightmare", "qliftnightmare", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Text("Description", "qlifedesc", $form, $error) ?>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Changes in Medication</div>
                            <div class="panel-body">
                                <?= $this->Select("Insulin", "drugcinsulin", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Diabet Pills", "drugcdiabetepills", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Blood Pressure Drugs", "drugcbloodpressure", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Thyroid Drugs", "drugcthyroiddrugs", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Antidiabetic", "antidiabetic", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("hlpdrugs", "hlpdrugs", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Antipsychotic", "antipsychotic", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Text("Description", "drugcdesc", $form, $error) ?>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Diet Observance</div>
                            <div class="panel-body">
                                <?= $this->Text("I have never observed Diet, I Eat Less", "dietonobservelit", $form, $error) ?>
                                <?= $this->Text("I Eat Less Ocassionally", "dietocassionlit", $form, $error) ?>
                                <?= $this->Text("I Eat More Ocassionally", "dietocassiongre", $form, $error) ?>
                                <?= $this->Text("I have observe Diet Completely", "dietofullobserve", $form, $error) ?>
                                <?= $this->Text("I have never observed Diet, I Eat More", "dietonobservegre", $form, $error) ?>
                                <?= $this->Text("Description", "dietodesc", $form, $error) ?>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <?= $this->Text("systolic BP", "systolicbp", $form, $error) ?>
                                <?= $this->Text("diastolic BP", "diastolicbp", $form, $error) ?>
                                <?= $this->Text("Pulse", "pulse", $form, $error) ?>
                                <?= $this->Text("Respiration", "respiration", $form, $error) ?>
                                <?= $this->Text("Temp", "temp", $form, $error) ?>
                                <?= $this->Text("MAC", "mac", $form, $error) ?>
                                <?= $this->Text("TSF", "tsf", $form, $error) ?>
                                <?= $this->Text("Pectoral SF", "pectoralsf", $form, $error) ?>
                                <?= $this->Text("Subscapula SF", "subscapulas", $form, $error) ?>
                                <?= $this->Text("Midaxilla SF", "midaxillasf", $form, $error) ?>
                                <?= $this->Text("Abdomen SF", "abdomensf", $form, $error) ?>
                                <?= $this->Text("Suprailiac SF 	", "suprailiacsf", $form, $error) ?>
                                <?= $this->Text("Quadriceps SF", "quadricepssf", $form, $error) ?>
                                <?= $this->Text("Waist circumference (Cm)", "waistcircumference", $form, $error) ?>
                                <?= $this->Text("Hip circumference (Cm)", "hipcircumference", $form, $error) ?>
                                <?= $this->Text("Body fat percentage", "bodyfatpercentage", $form, $error) ?>
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Cardiopulmonary</div>
                            <div class="panel-body">
                                <?= $this->Select("Snoring", "cardiosnoring", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Chronic Cough", "cardiochronicough", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Yawing", "cardioyawing", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Insomnia", "cardioinsomnia", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Asthma", "cardioasthma", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Palpitation", "cardiopalpitation", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Chest Pain", "cardiochestpaint", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Edema", "cardioedema", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Pedal", "cardiopedal", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>

                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">GI Tract</div>
                            <div class="panel-body">
                                <?= $this->Select("Hemorrhoid", "gihemorrhoid", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Constipation", "giconstipation", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Diarrhea", "gidiarrhea", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Nausea", "ginausea", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Vomiting", "givomiting", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Heart Burn", "giheartburn", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Musculoskeletal</div>
                            <div class="panel-body">
                                <?= $this->Select("Bone pain", "musbonepain", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Low Back Pain", "musowbackpain", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Knee Pain", "muskneepain", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Ankle Pain", "musanklepain", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Weakness", "musweakness", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Neuropsychiatry</div>
                            <div class="panel-body">
                                <?= $this->Select("Headache", "neuheadache", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Irritability", "neuirritability", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Depressed Mood", "neudepressedmood", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Skin</div>
                            <div class="panel-body">
                                <?= $this->Select("Dry skin", "skdryskin", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Hirsutism", "skhirsutism", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Hair Loss", "skhairloss", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Nail Problem", "sknailproblem", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                                <?= $this->Select("Easy Bruisability", "skeasybruisability", $form, $error, "combo(Decrease/Increase/Not Change/Stopped)", true, "class='form-control'", "", "1/2/3/4") ?>
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Diseases</div>
                            <div class="panel-body">
                                <?= $this->Select("DM", "disdm", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("Hyperlipidemia", "dishyperlipidemia", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("HTN", "dishtn", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("CVD", "discvd", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("CKD", "disckd", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("PTE", "dispte", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("Asthma", "disasthma", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("Sleep Apnea", "dissleepapnea", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("Fatty liver", "disfattyliver", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                
                                <?= $this->Select("GERD", "disgerd", $form, $error, "combo(Completely improvement/control/Not Change/Present At Before/New on set/New on set control with medicating/New on set not control)", true, "class='form-control'", "", "1/2/3/4/5/6/7") ?>
                                <?= $this->Select("Gallstone", "disgallstone", $form, $error, "combo(Completely improvement/control/Not Change/Previous cholecystectomy/Simultaneous cholecystectomy/New on set gall stone)", true, "class='form-control'", "", "1/2/3/4/5/6") ?>
                                <?= $this->Select("Infertility", "disinfertility", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("Thyroid Dysfunction", "disthyroiddysfunction", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("Psychotic Disorders", "dispsychoticdisorders", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("Migraine", "dismigraine", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("Bone Pain", "disbonepain", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                                <?= $this->Select("Redo", "disredo", $form, $error, "combo(Completely improvement/control/Not Change)", true, "class='form-control'", "", "1/2/3") ?>
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                        <?= $this->Text("Weight Gain", "weightgain", $form, $error) ?>
                        <div class="ln_solid"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Sonography Findings</div>
                            <div class="panel-body">
                                <?= $this->Select("Gall Stone", "sonogallstone", $form, $error, "combo(Yes/No)", true, "class='form-control'", "", "1/2") ?>
                                <?= $this->Select("Sludge", "sonosludge", $form, $error, "combo(Yes/No)", true, "class='form-control'", "", "1/2") ?>
                                <?= $this->Select("Fatty Live", "sonofattyliver", $form, $error, "combo(I/II/III)", true, "class='form-control'", "", "1/2/3") ?>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="ln_solid"></div>
                    <div class="col-md-12">
                        <input name='com_fu_detail_save' type='hidden' value="1" />
                        <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                        <button class="btn btn-round btn-success" title="<?= FSAVE ?>" id="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>


                    </div>
                </form>

            </div>
            <?php if ($message != "") IHTML::GetMessage($message); ?>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
    </div>

    <?= $this->EndPanel(); ?>
</div>