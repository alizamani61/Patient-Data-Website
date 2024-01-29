<form class="form-horizontal" name='review_form' id='review_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_review=1&func=save" ?>" method='POST'>
    <fieldset>
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <?=IHTML::ReceptionData()?>
                <li class="active"><a href="#CardiopulmonaryTab" data-toggle="tab">Cardiopulmonary system</a></li>
                <li><a href="#GITractTab" data-toggle="tab">GI tract</a></li>
                <li><a href="#MusculoskeletalTab" data-toggle="tab">Musculoskeletal</a></li>
                <li><a href="#NeuropsychiatryTab" data-toggle="tab">Neuropsychiatry</a></li>
                <li><a href="#SkinTab" data-toggle="tab">Skin</a></li>
                <li><a href="#EndocrinologyTab" data-toggle="tab">Endocrinology</a></li>
            </ul> 
            <div class="well bs-component">  
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="CardiopulmonaryTab">

                        <input name='review_of_systemsid' type='hidden' value="<?php echo $form['review_of_systemsid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

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


                    <!--tab2-->         
                    <div class="tab-pane fade" id="GITractTab">

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

                    <!--tab3-->
                    <div class="tab-pane fade" id="MusculoskeletalTab">

                        <?= $this->CheckBox(BONEPAINE, "bonepaine", $form, $error, true) ?>
                        <div id="bonepaine-td" class="condition-form-item" <?= (($form["bonepaine"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(BONEPAINEGENE, "bonepainegene", $form, $error) ?>
                            <?= $this->CheckBox(BONEPAINEOTHER, "bonepaineother", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(LOWBACKPAIN, "lowbackpain", $form, $error, true) ?>
                        <div id="lowbackpain-td" class="condition-form-item" <?= (($form["lowbackpain"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(LOWBACKPAININSUPINE, "lowbackpaininsupine", $form, $error) ?>
                            <?= $this->CheckBox(LOWBACKPAINONST, "lowbackpainonst", $form, $error) ?>
                            <?= $this->CheckBox(LOWBACKPAINWITHWA, "lowbackpainwithwa", $form, $error) ?>
                            <?= $this->CheckBox(LOWBACKPAINRAD, "lowbackpainrad", $form, $error) ?>
                            <?= $this->CheckBox(LOWBACKPAINBUTTOCK, "lowbackpainbuttock", $form, $error) ?>
                            <?= $this->CheckBox(LOWBACKPAINTHIGH, "lowbackpainthigh", $form, $error) ?>
                            <?= $this->CheckBox(LOWBACKPAINFOOT, "lowbackpainfoot", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(HIPPAIN, "hippain", $form, $error, true) ?>
                        <div id="hippain-td" class="condition-form-item" <?= (($form["hippain"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(HIPPAINEXACERBATION, "hippainexacerbation", $form, $error) ?>
                            <?= $this->CheckBox(HIPPAINWITH, "hippainwith", $form, $error) ?>
                            <?= $this->CheckBox(HIPPAINRELIEVE, "hippainrelieve", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(KNEEPAIN, "kneepain", $form, $error, true) ?>
                        <div id="kneepain-td" class="condition-form-item" <?= (($form["kneepain"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(KNEEPAINEXAGG, "kneepainexagg", $form, $error) ?>
                            <?= $this->CheckBox(KNEEPAINRELIEVE, "kneepainrelieve", $form, $error) ?>
                            <?= $this->CheckBox(KNEEPAINCREP, "kneepaincrep", $form, $error) ?>
                            <?= $this->CheckBox(KNEEPAINSWELLING, "kneepainswelling", $form, $error) ?>
                        </div> 


                        <?= $this->CheckBox(KNEEPAINLEG, "kneepainleg", $form, $error) ?>

                        <?= $this->CheckBox(FIRSTMEPAIN, "firstmepain", $form, $error, true) ?>
                        <div id="firstmepain-td" class="condition-form-item" <?= (($form["firstmepain"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(FIRSTMEPAININT, "firstmepainint", $form, $error) ?>
                            <?= $this->CheckBox(FIRSTMEPAINNIGHT, "firstmepainnight", $form, $error) ?>
                            <?= $this->CheckBox(FIRSTMEPAINWARMNESS, "firstmepainwarmness", $form, $error) ?>
                            <?= $this->CheckBox(FIRSTMEPAINREDNESS, "firstmepainredness", $form, $error) ?>
                            <?= $this->CheckBox(FIRSTMEPAINSWELLING, "firstmepainswelling", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(ANKLEPAINE, "anklepaine", $form, $error, true) ?>
                        <div id="anklepaine-td" class="condition-form-item" <?= (($form["anklepaine"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(ANKLEPAINEINTER, "anklepaineinter", $form, $error) ?>
                            <?= $this->CheckBox(ANKLEPAINENIGHT, "anklepainenight", $form, $error) ?>
                            <?= $this->CheckBox(ANKLEPAINEWARM, "anklepainewarm", $form, $error) ?>
                            <?= $this->CheckBox(ANKLEPAINERED, "anklepainered", $form, $error) ?>
                            <?= $this->CheckBox(ANKLEPAINESWE, "anklepaineswe", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(WEAKNESS, "weakness", $form, $error, true) ?>
                        <div id="weakness-td" class="condition-form-item" <?= (($form["weakness"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(WEAKNESSGENE, "weaknessgene", $form, $error) ?>
                            <?= $this->CheckBox(WEAKNESSONCOMBING, "weaknessoncombing", $form, $error) ?>
                            <?= $this->CheckBox(WEAKNESSONSTAND, "weaknessonstand", $form, $error) ?>
                            <?= $this->CheckBox(WEAKNESSWRITING, "weaknesswriting", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(FATIGUE, "fatigue", $form, $error, true) ?>
                        <div id="fatigue-td" class="condition-form-item" <?= (($form["fatigue"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(FATIGUEALLDAY, "fatigueallday", $form, $error) ?>
                            <?= $this->CheckBox(FATIGUEEVENING, "fatigueevening", $form, $error) ?>
                            <?= $this->CheckBox(FATIGUEAFTERPH, "fatigueafterph", $form, $error) ?>
                        </div> 

                    </div>

                    <!--tab4-->
                    <div class="tab-pane fade" id="NeuropsychiatryTab">

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

                    <!--tab5-->
                    <div class="tab-pane fade" id="SkinTab">

                        <?= $this->CheckBox(ISOYELLDIS, "isoyelldis", $form, $error, true) ?>
                        <div id="isoyelldis-td" class="condition-form-item" <?= (($form["isoyelldis"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(ISOYELLDISESP, "isoyelldisesp", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(DRYSKIN, "dryskin", $form, $error) ?>
                        <?= $this->CheckBox(COARSESKIN, "coarseskin", $form, $error) ?>
                        <?= $this->CheckBox(HIRSUTISM, "hirsutism", $form, $error) ?>
                        <?= $this->CheckBox(HIRSUTISMFACE, "hirsutismface", $form, $error) ?>
                        <?= $this->CheckBox(HIRSUTISMCHEST, "hirsutismchest", $form, $error) ?>
                        <?= $this->CheckBox(HIRSUTISMABDOMEN, "hirsutismabdomen", $form, $error) ?>
                        <?= $this->CheckBox(HIRSUTISMBACK, "hirsutismback", $form, $error) ?>
                        <?= $this->CheckBox(HIRSUTISMEXTREMITY, "hirsutismextremity", $form, $error) ?>
                        <?= $this->CheckBox(HAIRLOSS, "hairloss", $form, $error) ?>
                        <?= $this->CheckBox(HAIRLOSSDIFFUSE, "hairlossdiffuse", $form, $error) ?>
                        <?= $this->CheckBox(HAIRLOSSSCALP, "hairlossscalp", $form, $error) ?>
                        <?= $this->CheckBox(HAIRLOSSEYEBROW, "hairlosseyebrow", $form, $error) ?>
                        <?= $this->CheckBox(HAIRLOSSOTHERAREA, "hairlossotherarea", $form, $error) ?>
                        <?= $this->CheckBox(DARKOFSKINFOLDS, "darkofskinfolds", $form, $error) ?>
                        <?= $this->CheckBox(NAILPROBLEM, "nailproblem", $form, $error) ?>
                        <?= $this->CheckBox(BRUISABILITY, "bruisability", $form, $error) ?>
                        <?= $this->CheckBox(PROBLEEDING, "probleeding", $form, $error) ?>
                        <?= $this->CheckBox(DEWOUNDHEALING, "dewoundhealing", $form, $error) ?>
                        <?= $this->CheckBox(MACANDREDNESS, "macandredness", $form, $error) ?>
                        <?= $this->CheckBox(ACNE, "acne", $form, $error) ?>


                    </div>
                    <!--tab6-->
                    <div class="tab-pane fade" id="EndocrinologyTab">

                        <?= $this->CheckBox(COLDINTOLERANCE, "coldintolerance", $form, $error) ?>

                        <?= $this->CheckBox(ALTEREDLIBIDO, "alteredlibido", $form, $error, true) ?>
                        <div id="alteredlibido-td" class="condition-form-item" <?= (($form["alteredlibido"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(ALTEREDLIBIDOTYPE, "alteredlibidotype", $form, $error, "combo(increased/decreased)") ?>
                            <?= $this->CheckBox(IMPOTENCE, "impotence", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(POLYURIA, "polyuria", $form, $error) ?>
                        <?= $this->CheckBox(POLYDIPSIA, "polydipsia", $form, $error) ?>

                        <?= $this->CheckBox(MENARCHE, "menarche", $form, $error, true) ?>
                        <div id="menarche-td" class="condition-form-item" <?= (($form["menarche"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(MENARCHEAGE, "menarcheage", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(MENOPAUSE, "menopause", $form, $error, true) ?>
                        <div id="menopause-td" class="condition-form-item" <?= (($form["menopause"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(MENOPAUSEAGE, "menopauseage", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(AMENORRHEA, "amenorrhea", $form, $error, true) ?>
                        <div id="amenorrhea-td" class="condition-form-item" <?= (($form["amenorrhea"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(AMENORRHEATYPE, "amenorrheatype", $form, $error, "combo(primary/secondary)") ?>
                        </div>


                        <?= $this->DateBox(LMP, "lmp", $form, $error) ?>

                        <?= $this->CheckBox(REGULARCYCLE, "regularcycle", $form, $error, true) ?>
                        <div id="regularcycle-td" class="condition-form-item" <?= (($form["regularcycle"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(REGULARCYCLELENGTH, "regularcyclelength", $form, $error) ?>
                            <?= $this->Text(REGULARCYCLEDURATION, "regularcycleduration", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(IRREGULARCYCLE, "irregularcycle", $form, $error, true) ?>
                        <div id="irregularcycle-td" class="condition-form-item" <?= (($form["irregularcycle"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(IRREGULARCYCLEOLIGOM, "irregularcycleoligom", $form, $error) ?>
                            <?= $this->CheckBox(IRREGULARCYCLEPOLY, "irregularcyclepoly", $form, $error) ?>
                            <?= $this->CheckBox(IRREGULARCYCLEHYPER, "irregularcyclehyper", $form, $error) ?>
                            <?= $this->CheckBox(IRREGULARCYCLEHYPOM, "irregularcyclehypom", $form, $error) ?>
                            <?= $this->CheckBox(IRREGULARCYCLEMENOR, "irregularcyclemenor", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(SPOTTING, "spotting", $form, $error, true) ?>
                        <div id="spotting-td" class="condition-form-item" <?= (($form["spotting"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(SPOTTINGPRE, "spottingpre", $form, $error) ?>
                            <?= $this->CheckBox(SPOTTINGPOST, "spottingpost", $form, $error) ?>
                            <?= $this->CheckBox(SPOTTINGINTER, "spottinginter", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(DYSMENORRHEADYS, "dysmenorrheadys", $form, $error, true) ?>
                        <div id="dysmenorrheadys-td" class="condition-form-item" <?= (($form["dysmenorrheadys"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(DYSMENORRHEAPRI, "dysmenorrheapri", $form, $error) ?>
                            <?= $this->CheckBox(DYSMENORRHEASEC, "dysmenorrheasec", $form, $error) ?>
                            <?= $this->CheckBox(DYSMENORRHEAPREM, "dysmenorrheaprem", $form, $error) ?>
                            <?= $this->CheckBox(DYSMENORRHEAONSET, "dysmenorrheaonset", $form, $error) ?>
                            <?= $this->CheckBox(DYSMENORRHEAAT, "dysmenorrheaat", $form, $error) ?>
                            <?= $this->CheckBox(DYSMENORRHEARELIEF, "dysmenorrhearelief", $form, $error) ?>
                        </div> 


                        <?= $this->CheckBox(DYSPAREUNIA, "dyspareunia", $form, $error) ?>

                        <?= $this->CheckBox(DIFFICONCEIVING, "difficonceiving", $form, $error, true) ?>
                        <div id="difficonceiving-td" class="condition-form-item" <?= (($form["difficonceiving"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(DIFFICONCEIVINGP, "difficonceivingp", $form, $error, "combo(primary/secondary)") ?>
                        </div>

                        <?= $this->CheckBox(RECMISCARRIAGE, "recmiscarriage", $form, $error) ?>

                        <?= $this->CheckBox(VAGDISCHARGE, "vagdischarge", $form, $error, true) ?>
                        <div id="vagdischarge-td" class="condition-form-item" <?= (($form["vagdischarge"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(VAGDISCHARGECOLOR, "vagdischargecolor", $form, $error) ?>
                            <?= $this->CheckBox(VAGDISCHARGEWHIT, "vagdischargewhit", $form, $error) ?>
                            <?= $this->CheckBox(VAGDISCHARGEYELL, "vagdischargeyell", $form, $error) ?>
                            <?= $this->CheckBox(VAGDISCHARGEBLO, "vagdischargeblo", $form, $error) ?>
                            <?= $this->CheckBox(VAGDISCHARGEGREEN, "vagdischargegreen", $form, $error) ?>
                            <?= $this->CheckBox(VAGDISCHARGEMAL, "vagdischargemal", $form, $error) ?>
                            <?= $this->CheckBox(VAGDISCHARGEITCHING, "vagdischargeitching", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(BRMASE, "brmase", $form, $error, true) ?>
                        <div id="brmase-td" class="condition-form-item" <?= (($form["brmase"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(BRMASECYCLIC, "brmasecyclic", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(MASTALGIA, "mastalgia", $form, $error, true) ?>
                        <div id="mastalgia-td" class="condition-form-item" <?= (($form["mastalgia"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(MASTALGIACYCLIC, "mastalgiacyclic", $form, $error) ?>
                            <?= $this->Text(MASTALGIASIDE, "mastalgiaside", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(GALACTORRHEA, "galactorrhea", $form, $error, true) ?>
                        <div id="galactorrhea-td" class="condition-form-item" <?= (($form["galactorrhea"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(GALACTORRHEASIDE, "galactorrheaside", $form, $error) ?>
                        </div> 

                        <?= $this->CheckBox(OTHERNIPPLE, "othernipple", $form, $error) ?>

                        <?= $this->CheckBox(INCONTINENCE, "incontinence", $form, $error, true) ?>
                        <div id="incontinence-td" class="condition-form-item" <?= (($form["incontinence"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(INCONTINENCETYPE, "incontinencetype", $form, $error, "combo(stress/urge/mixed/overflow/total)") ?>
                        </div>

                        <?= $this->TextArea(REVIEW_OF_SYSTEM_DESC, "review_of_system_desc", $form, $error) ?>

                    </div>

                </div> <!-- end tab --> 


                <div id="buttons_div" >
                    <input name='com_review_save' type='hidden' value="1" />
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