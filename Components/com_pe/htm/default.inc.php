<form class="form-horizontal" name='pe_form' id='pe_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_pe=1&func=save" ?>" method='POST'>
    <fieldset>
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <?=IHTML::ReceptionData()?>
                <li class="active"><a href="#GeneralAppearanceTab" data-toggle="tab">General Appearance</a></li>
                <li><a href="#VSAnthropometryTab" data-toggle="tab">V/S & Anthropometry</a></li>
                <li><a href="#HEENTTab" data-toggle="tab">HEENT</a></li>
                <li><a href="#ChestAbdomenTab" data-toggle="tab">Chest & Abdomen</a></li>
                <li><a href="#ExtremityTab" data-toggle="tab">Extremity</a></li>
                <li><a href="#SkinTab" data-toggle="tab">Skin</a></li>
            </ul>

            <div class="well bs-component">  
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="GeneralAppearanceTab">
                        <input name='peid' type='hidden' value="<?php echo $form['peid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <?= $this->Select(GROSSBODY , "grossbody", $form, $error, "combo(Central obesity/peripheral obesity)") ?>
                        <?= $this->Select(OBESITYTYPE , "obesitytype", $form, $error, "combo(Apple shape obesity/Pear shape obesity)") ?>
                        
                        <?= $this->CheckBox(RESDISTRESS, "resdistress", $form, $error) ?>
                        <?= $this->CheckBox(CYANOSIS, "cyanosis", $form, $error) ?>
                        <?= $this->CheckBox(PALLOR, "pallor", $form, $error) ?>
                        
                        <?= $this->CheckBox(CRIPPLE, "cripple", $form, $error, true) ?>
                        <div id="cripple-td" class="condition-form-item" <?= (($form["cripple"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(CRIPPLECANE, "cripplecane", $form, $error) ?>
                            <?= $this->CheckBox(CRIPPLEWALKER, "cripplewalker", $form, $error) ?>
                            <?= $this->CheckBox(CRIPPLEWHEEL, "cripplewheel", $form, $error) ?>
                            <?= $this->CheckBox(CRIPPLEBEDRIDDEN, "cripplebedridden", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(WELLBEING, "wellbeing", $form, $error, true) ?>
                        <div id="wellbeing-td" class="condition-form-item" <?= (($form["wellbeing"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(WELLBEINGHEALTH, "wellbeinghealth", $form, $error) ?>
                            <?= $this->CheckBox(WELLBEINGMILDLY, "wellbeingmildly", $form, $error) ?>
                            <?= $this->CheckBox(WELLBEINGILL, "wellbeingill", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(PICKAPPEAR , "pickappear", $form, $error) ?>
                        <?= $this->CheckBox(MOONFACED , "moonfaced", $form, $error) ?>
                        <?= $this->CheckBox(ACROMEGALIC , "acromegalic", $form, $error) ?>
                        <?= $this->CheckBox(MYXEDEMATOUS , "myxedematous", $form, $error) ?>
                        <?= $this->CheckBox(SUPTAFAT , "suptafat", $form, $error) ?>
                        <?= $this->CheckBox(RETROCERVICAL , "retrocervical", $form, $error) ?>
                    </div>
                    <!--tab-1 end-->
                    <div class="tab-pane fade" id="VSAnthropometryTab">
                        <?= $this->Text(SYSTOLIC, "systolic", $form, $error) ?>
                        <?= $this->Text(DIASTOLIC, "diastolic", $form, $error) ?>
                        <?= $this->Text(PULSE, "pulse", $form, $error) ?>
                        <?= $this->Text(RESPIRATION, "respiration", $form, $error) ?>
                        <?= $this->Text(TEMP, "temp", $form, $error) ?>
                        <?= $this->Text(WEIGHT, "weight", $form, $error) ?>
                        <?= $this->Text(MIDAXILLA, "midaxilla", $form, $error) ?>
                        <?= $this->Text(HEIGHT, "height", $form, $error) ?>
                        <?= $this->Text(ABDOMENSF, "abdomensf", $form, $error) ?>
                        <?= $this->Text(BMI, "bmi", $form, $error) ?>
                        <?= $this->Text(SUPRAILIAC, "suprailiac", $form, $error) ?>
                        <?= $this->Text(MAC, "mac", $form, $error) ?>
                        <?= $this->Text(QUADRICEPS, "quadriceps", $form, $error) ?>
                        <?= $this->Text(TSF, "tsf", $form, $error) ?>
                        <?= $this->Text(WAISTCIR, "waistcir", $form, $error) ?>
                        <?= $this->Text(PECTORAL, "pectoral", $form, $error) ?>
                        <?= $this->Text(HIPCIR, "hipcir", $form, $error) ?>
                        <?= $this->Text(SUBSCAPULA, "subscapula", $form, $error) ?>
                        <?= $this->Text(FATPERCENT, "fatpercent", $form, $error) ?>
                        <?= $this->Select(METHOD , "method", $form, $error,"combo(bioimpedance/commercial bioimpedance/DEXA/water displacement/airdisplacement)") ?>
                        
                    </div>
                    <!--tab-2 end-->
                    <div class="tab-pane fade" id="HEENTTab">
                        <?= $this->CheckBox(PALECONJUNC , "paleconjunc", $form, $error) ?>
                        <?= $this->CheckBox(ICTERICSCLERA , "ictericsclera", $form, $error) ?>
                        <?= $this->CheckBox(EXOPHTHA , "exophtha", $form, $error) ?>
                        
                        
                        <?= $this->CheckBox(CORNEAL, "corneal", $form, $error, true) ?>
                        <div id="corneal-td" class="condition-form-item" <?= (($form["corneal"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(CORNEALRATIO, "cornealratio", $form, $error) ?>
                            <?= $this->Text(CORNEALTHICK, "cornealthick", $form, $error) ?>
                        </div>
                        

                        <?= $this->CheckBox(XANTHEL, "xanthel", $form, $error, true) ?>
                        <div id="xanthel-td" class="condition-form-item" <?= (($form["xanthel"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(XANTHELMILI, "xanthelmili", $form, $error) ?>
                            <?= $this->CheckBox(XANTHELPATCHY, "xanthelpatchy", $form, $error) ?>
                            <?= $this->CheckBox(XANTHELUPPER, "xanthelupper", $form, $error) ?>
                            <?= $this->CheckBox(XANTHELLOWER, "xanthellower", $form, $error) ?>
                            <?= $this->CheckBox(XANTHELMED, "xanthelmed", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(LOBEAR , "lobear", $form, $error) ?>
                        <?= $this->CheckBox(LOBEARDAR , "lobeardar", $form, $error) ?>
                        <?= $this->CheckBox(LOBEARCREASE , "lobearcrease", $form, $error) ?>
                        <?= $this->CheckBox(LOBEARTAG , "lobeartag", $form, $error) ?>
                        <?= $this->CheckBox(ANGULAR , "angular", $form, $error) ?>
                        
                        
                        <?= $this->CheckBox(GLOSSITIS, "glossitis", $form, $error, true) ?>
                        <div id="glossitis-td" class="condition-form-item" <?= (($form["glossitis"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(GLOSSITISATR, "glossitisatr", $form, $error) ?>
                            <?= $this->CheckBox(GLOSSITISFIS, "glossitisfis", $form, $error) ?>
                            <?= $this->CheckBox(GLOSSITISGEO, "glossitisgeo", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(GLOSS, "gloss", $form, $error, true) ?>
                        <div id="gloss-td" class="condition-form-item" <?= (($form["gloss"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(GLOSSPRO, "glosspro", $form, $error) ?>
                            <?= $this->CheckBox(GLOSSEN, "glossen", $form, $error) ?>
                            <?= $this->CheckBox(GLOSSONLY, "glossonly", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(MICROGNATHIA , "micrognathia", $form, $error) ?>

                        <?= $this->CheckBox(THYROMEGALY, "thyromegaly", $form, $error, true) ?>
                        <div id="thyromegaly-td" class="condition-form-item" <?= (($form["thyromegaly"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(THYROMEGALYGRADE, "thyromegalygrade", $form, $error,"combo(I/II/III/IV)") ?>
                            
                        </div>
                        
                        <?= $this->CheckBox(SHORTNECK , "shortneck", $form, $error) ?>
                        
                    </div>
                    <!--tab-3 end-->
                    <div class="tab-pane fade" id="ChestAbdomenTab">
                        
                        <?= $this->CheckBox(HEARTSE, "heartse", $form, $error, true) ?>
                        <div id="heartse-td" class="condition-form-item" <?= (($form["heartse"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(HEARTSENORM, "heartsenorm", $form, $error) ?>
                            <?= $this->CheckBox(HEARTSEMUFF, "heartsemuff", $form, $error) ?>
                            <?= $this->CheckBox(HEARTSEMURMUR, "heartsemurmur", $form, $error) ?>
                            <?= $this->CheckBox(HEARTSESS, "heartsess", $form, $error) ?>
                            <?= $this->CheckBox(HEARTSESSS, "heartsesss", $form, $error) ?>
                            <?= $this->CheckBox(HEARTSEFRIC, "heartsefric", $form, $error) ?>
                        </div>
                       
                        <?= $this->CheckBox(LUNGAU, "lungau", $form, $error, true) ?>
                        <div id="lungau-td" class="condition-form-item" <?= (($form["lungau"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(LUNGAURESP, "lungauresp", $form, $error,"combo(bronchioalveolar/alveolar/bronchial)") ?>
                            <?= $this->CheckBox(LUNGAURALES, "lungaurales", $form, $error) ?>
                            <?= $this->CheckBox(LUNGAUWHEEZ, "lungauwheez", $form, $error) ?>
                            <?= $this->CheckBox(LUNGAUEGOP, "lungauegop", $form, $error) ?>
                            <?= $this->CheckBox(LUNGAUTACTILE, "lungautactile", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(CHESTIN, "chestin", $form, $error, true) ?>
                        <div id="chestin-td" class="condition-form-item" <?= (($form["chestin"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(CHESTINASY, "chestinasy", $form, $error) ?>
                            <?= $this->CheckBox(CHESTINSCO, "chestinsco", $form, $error) ?>
                            <?= $this->CheckBox(CHESTINKYP, "chestinkyp", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(BREXAM, "brexam", $form, $error, true) ?>
                        <div id="brexam-td" class="condition-form-item" <?= (($form["brexam"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(BREXAMMASS, "brexammass",$form, $error) ?>
                            <?=$this->Text(BREXAMLOCAT, "brexamlocat", $form, $error) ?>
                            <?=$this->Text(BREXAMSIZE, "brexamsize", $form, $error) ?>
                            <?=$this->CheckBox(BREXAMTEND, "brexamtend", $form, $error) ?>
                            <?=$this->Select(BREXAMCONSIST, "brexamconsist", $form, $error,"combo(cystic/firm/solid/hard)")?>
                            <?=$this->Select(BREXAMMOBI, "brexammobi",  $form, $error,"combo(mobile/fix)")?>
                            <?=$this->CheckBox(BREXAMPEAU, "brexampeau",  $form, $error) ?>
                            <?=$this->CheckBox(BREXAMSKIN, "brexamskin",  $form, $error) ?>
                            <?=$this->CheckBox(BREXAMAXI, "brexamaxi",  $form, $error) ?>
                        </div>
                        
                        <?=$this->Select(ABDOMSHAP, "abdomshap", $form, $error,"combo(pedunculated/barrel)")?>
                        
                        <?= $this->CheckBox(SCAROF, "scarof", $form, $error, true) ?>
                        <div id="scarof-td" class="condition-form-item" <?= (($form["scarof"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(SCAROFWHAT, "scarofwhat", $form, $error) ?>
                        </div>
                        

                        <?= $this->CheckBox(CAPUTME, "caputme", $form, $error) ?>
                        
                        <?= $this->CheckBox(PALPMASS, "palpmass", $form, $error, true) ?>
                        <div id="palpmass-td" class="condition-form-item" <?= (($form["palpmass"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(PALPMASSEPIG, "palpmassepig", $form, $error) ?>
                            <?=$this->CheckBox(PALPMASSUMB, "palpmassumb", $form, $error) ?>
                            <?=$this->CheckBox(PALPMASSING, "palpmassing", $form, $error) ?>
                            <?=$this->CheckBox(PALPMASSFEM, "palpmassfem", $form, $error) ?>
                            <?=$this->CheckBox(PALPMASSSCR, "palpmassscr", $form, $error) ?>
                            <?=$this->CheckBox(PALPMASSFLANK, "palpmassflank", $form, $error) ?>
                            <?=$this->CheckBox(PALPMASSREDU, "palpmassredu", $form, $error) ?>
                            <?=$this->CheckBox(PALPMASSTENDER, "palpmasstender", $form, $error) ?>
                            <?=$this->Select(PALPMASSSITU, "palpmasssitu", $form, $error,"combo(superficial/deep)") ?>
                        </div>
                        

                        <?= $this->CheckBox(TENDERNESSTEN, "tendernessten", $form, $error, true) ?>
                        <div id="tendernessten-td" class="condition-form-item" <?= (($form["tendernessten"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(TENDERNESSLOC, "tendernessloc", $form, $error) ?>
                        </div>
                        
                        <?=$this->CheckBox(TENDERNESSMUR, "tendernessmur", $form, $error) ?>
                        
                        <?= $this->CheckBox(LIVERSPAN, "liverspan", $form, $error, true) ?>
                        <div id="liverspan-td" class="condition-form-item" <?= (($form["liverspan"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(LIVERSPANTEX, "liverspantex", $form, $error) ?>
                        </div>
                        
                        <?=$this->CheckBox(SPLENOMEGALY, "splenomegaly", $form, $error) ?>
                        <?=$this->CheckBox(DULLNESS, "dullness", $form, $error) ?>

                        <?= $this->CheckBox(RECTALEXAM, "rectalexam", $form, $error, true) ?>
                        <div id="rectalexam-td" class="condition-form-item" <?= (($form["rectalexam"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(RECTALEXAMHEM, "rectalexamhem", $form, $error) ?>
                            <?= $this->CheckBox(RECTALEXAMFISS, "rectalexamfiss", $form, $error) ?>
                            <?= $this->Text(RECTALEXAMCLOCK, "rectalexamclock", $form, $error) ?>
                        </div>
                        
                    </div>
                    <!--tab-4 end-->
                    <div class="tab-pane fade" id="ExtremityTab">
                        
                        <?=$this->Select(EXPULSE, "expulse", $form, $error,"combo(NL/AbNL/Weak)") ?>
                        
                        <?= $this->CheckBox(EXEDEMA, "exedema", $form, $error, true) ?>
                        <div id="exedema-td" class="condition-form-item" <?= (($form["exedema"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->Select(EDEMATYPE, "edematype", $form, $error,"combo(pitting/nonpitting)") ?>
                        </div>
                        
                        <?= $this->CheckBox(DEFORMITY, "deformity", $form, $error, true) ?>
                        <div id="deformity-td" class="condition-form-item" <?= (($form["deformity"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(DEFORMITYWHAT, "deformitywhat", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(VARVEIN, "varvein", $form, $error) ?>
                        
                        <?= $this->CheckBox(JOINTABNORM, "jointabnorm", $form, $error, true) ?>
                        <div id="jointabnorm-td" class="condition-form-item" <?= (($form["jointabnorm"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->Text(JOINTABNORMW, "jointabnormw", $form, $error) ?>
                            <?=$this->CheckBox(JOINTABNORMSW, "jointabnormsw", $form, $error) ?>
                            <?=$this->CheckBox(JOINTABNORMCRE, "jointabnormcre", $form, $error) ?>
                            <?=$this->CheckBox(JOINTABNORMRED, "jointabnormred", $form, $error) ?>
                            <?=$this->CheckBox(JOINTABNORMWARM, "jointabnormwarm", $form, $error) ?>
                            <?=$this->CheckBox(JOINTABNORMPAIN, "jointabnormpain", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(TOPHUSFOOT, "tophusfoot", $form, $error) ?>
                        
                        <?= $this->CheckBox(NAILCHANGE, "nailchange", $form, $error, true) ?>
                        <div id="nailchange-td" class="condition-form-item" <?= (($form["nailchange"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(NAILCHANGEW, "nailchangew", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(NAILCHANGEDISFI, "nailchangedisfi", $form, $error) ?>
                        
                    </div>
                    <!--tab-5 end-->
                    <div class="tab-pane fade" id="SkinTab">
                        <?= $this->CheckBox(STRIAE, "striae", $form, $error, true) ?>
                        <div id="striae-td" class="condition-form-item" <?= (($form["striae"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->Select(STRIAECOLOR, "striaecolor", $form, $error,"combo(pink/silver)") ?>
                            <?=$this->Text(STRIAELOCAT, "striaelocat", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(ACNE1, "acne1", $form, $error, true) ?>
                        <div id="acne1-td" class="condition-form-item" <?= (($form["acne1"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(ACNEFACE, "acneface", $form, $error) ?>
                            <?=$this->CheckBox(ACNENECK, "acneneck", $form, $error) ?>
                            <?=$this->CheckBox(ACNECHEST, "acnechest", $form, $error) ?>
                            <?=$this->CheckBox(ACNEBACK, "acneback", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(INTERTRIGO, "intertrigo", $form, $error, true) ?>
                        <div id="intertrigo-td" class="condition-form-item" <?= (($form["intertrigo"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(INTERTRIGOAXI, "intertrigoaxi", $form, $error) ?>
                            <?=$this->CheckBox(INTERTRIGOINF, "intertrigoinf", $form, $error) ?>
                            <?=$this->CheckBox(INTERTRIGOINT, "intertrigoint", $form, $error) ?>
                            <?=$this->CheckBox(INTERTRIGOABD, "intertrigoabd", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(ACANNIG, "acannig", $form, $error, true) ?>
                        <div id="acannig-td" class="condition-form-item" <?= (($form["acannig"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(ACANNIGAXILLAE, "acannigaxillae", $form, $error) ?>
                            <?=$this->CheckBox(ACANNIGNECK, "acannigneck", $form, $error) ?>
                            <?=$this->CheckBox(ACANNIGSIDES, "acannigsides", $form, $error) ?>
                            <?=$this->CheckBox(ACANNIGINGUINAL, "acanniginguinal", $form, $error) ?>
                            <?=$this->CheckBox(ACANNIGINFR, "acanniginfr", $form, $error) ?>
                            <?=$this->CheckBox(ACANNIGFINGERS, "acannigfingers", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(LEGULCER, "legulcer", $form, $error, true) ?>
                        <div id="legulcer-td" class="condition-form-item" <?= (($form["legulcer"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(LEGULCERMEDIAL, "legulcermedial", $form, $error) ?>
                            <?=$this->CheckBox(LEGULCERLATERAL, "legulcerlateral", $form, $error) ?>
                            <?=$this->CheckBox(LEGULCERFINGER, "legulcerfinger", $form, $error) ?>
                            <?=$this->CheckBox(LEGULCERTIBIAL, "legulcertibial", $form, $error) ?>
                            <?=$this->CheckBox(LEGULCERSOLE, "legulcersole", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(SKINTAGS, "skintags", $form, $error, true) ?>
                        <div id="skintags-td" class="condition-form-item" <?= (($form["skintags"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->Text(SKINTAGSLOC, "skintagsloc", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(XANTHOMA, "xanthoma", $form, $error, true) ?>
                        <div id="xanthoma-td" class="condition-form-item" <?= (($form["xanthoma"] == 1) ? "style='display: block'" : "") ?> >
                            <?=$this->CheckBox(XANTHOMAERU, "xanthomaeru", $form, $error) ?>
                            <?=$this->CheckBox(XANTHOMATEN, "xanthomaten", $form, $error) ?>
                            <?=$this->CheckBox(XANTHOMAEXT, "xanthomaext", $form, $error) ?>
                            <?=$this->Text(XANTHOMALOCA, "xanthomaloca", $form, $error) ?>
                        </div>
                        
                        <?=$this->CheckBox(YELLOWPANDS, "yellowpands", $form, $error) ?>
                        <?=$this->TextArea(SKINDESC, "skindesc", $form, $error) ?>
                        
                    </div>
                    <div id="buttons_div" >
                        <input name='com_pe_save' type='hidden' value="1" />
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