<form class="form-horizontal" name='pmhx_form' id='pmhx_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_pmhx=1&func=save" ?>" method='POST'>
    <fieldset>
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
            	<li class="dropdown">
            	   <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-folder-open"></span><span>&nbsp;&nbsp;Reception Data</span><span class="caret"></span></a>
            	   <ul class="dropdown-menu" role="menu">
	            	<ul class="nav nav-pills nav-stacked">
			  <li>
			    <a href="#">
			      <span class="badge pull-right"><?=$_SESSION["identical_dataid"]?></span>
			      Reception ID: 
			    </a>
			  </li>
			</ul>
		    </li>
		    <li class="divider"></li>
		    <li><ul class="nav nav-pills nav-stacked">
			  <li>
			    <a href="#">
			      <span class="badge pull-right"><?=$_SESSION["age"]?></span>
			      Age: 
			    </a>
			  </li>
			</ul>
		    </li>
	
		    <li><ul class="nav nav-pills nav-stacked">
			  <li>
			    <a href="#">
			      <span class="badge pull-right"><?= $_SESSION["name"] . " " . $_SESSION["lname"] ?></span>
			      Name: 
			    </a>
			  </li>
			</ul>
		    </li>
		    
		    
		  </ul>
	  	</li>
                <li class="active"><a href="#DiseasesTab" data-toggle="tab">Diseases</a></li>
                <li><a href="#PerinatalHxTab" data-toggle="tab">Perinatal Hx</a></li>
                <li><a href="#OBHxTab" data-toggle="tab">OBHx</a></li>
                <li><a href="#DrugHxTab" data-toggle="tab">DrugHx</a></li>
                <li><a href="#PreviousparamedicalTab" data-toggle="tab">Previous paramedical evaluations (Lab/Sono./X-ray/CT scan/Endoscopy)</a></li>
            </ul>
            <div class="well bs-component">  

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="DiseasesTab">
                        <input name='pmhxid' type='hidden' value="<?php echo $form['pmhxid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <?= $this->CheckBox(DM, "dm", $form, $error, true) ?>
                        <div id="dm-td" class="condition-form-item" <?= (($form["dm"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(DMTYPE, "dmtype", $form, $error, "combo(I/II)") ?>
                            <?= $this->Text(DMWHEN, "dmwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(HYPERLIPIDEMIA, "hyperlipidemia", $form, $error, true) ?>
                        <div id="hyperlipidemia-td" class="condition-form-item" <?= (($form["hyperlipidemia"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(HYPERLIPIDEMIAWHEN, "hyperlipidemiawhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(TYROIDDY, "tyroiddy", $form, $error, true) ?>
                        <div id="tyroiddy-td" class="condition-form-item" <?= (($form["tyroiddy"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(TYROIDDYWHEN, "tyroiddywhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(HTN, "htn", $form, $error, true) ?>
                        <div id="htn-td" class="condition-form-item" <?= (($form["htn"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(HTNWHEN, "htnwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(CAD, "cad", $form, $error, true) ?>
                        <div id="cad-td" class="condition-form-item" <?= (($form["cad"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(CADWHEN, "cadwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(CKD, "ckd", $form, $error, true) ?>
                        <div id="ckd-td" class="condition-form-item" <?= (($form["ckd"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(CKDWHEN, "ckdwhen", $form, $error) ?>
                            <?= $this->Text(CKDCAUSE, "ckdcause", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(CHF, "chf", $form, $error, true) ?>
                        <div id="chf-td" class="condition-form-item" <?= (($form["chf"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(CHFWHEN, "chfwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(CVA, "cva", $form, $error, true) ?>
                        <div id="cva-td" class="condition-form-item" <?= (($form["cva"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(CVAWHEN, "cvawhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(DVT, "dvt", $form, $error, true) ?>
                        <div id="dvt-td" class="condition-form-item" <?= (($form["dvt"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(DVTWHEN, "dvtwhen", $form, $error) ?>
                            <?= $this->CheckBox(DVTPULMONARY, "dvtpulmonary", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(ASTHMA, "asthma", $form, $error, true) ?>
                        <div id="asthma-td" class="condition-form-item" <?= (($form["asthma"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(ASTHMAWHEN, "asthmawhen", $form, $error) ?>
                        </div>


                        <?= $this->CheckBox(ATOPIA, "atopia", $form, $error, true) ?>
                        <div id="atopia-td" class="condition-form-item" <?= (($form["atopia"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(ATOPIARHINITIS, "atopiarhinitis", $form, $error) ?>
                            <?= $this->CheckBox(ATOPIACONJUNC, "atopiaconjunc", $form, $error) ?>
                            <?= $this->CheckBox(ATOPIAECZEMA, "atopiaeczema", $form, $error) ?>
                            <?= $this->CheckBox(ATOPIAANAPHYLAXIS, "atopiaanaphylaxis", $form, $error) ?>
                            <?= $this->CheckBox(ATOPIANASAL, "atopianasal", $form, $error) ?>
                            <?= $this->CheckBox(ATOPIADRUG, "atopiadrug", $form, $error) ?>
                            <?= $this->CheckBox(ATOPIAFOOD, "atopiafood", $form, $error) ?>
                            <?= $this->CheckBox(ATOPIABITE, "atopiabite", $form, $error) ?>
                            <?= $this->CheckBox(ATOPIAENVIRONMENT, "atopiaenvironment", $form, $error) ?>
                            <?= $this->Text(ATOPIAWHEN, "atopiawhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(SLEEPAPNEA, "sleepapnea", $form, $error, true) ?>
                        <div id="sleepapnea-td" class="condition-form-item" <?= (($form["sleepapnea"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(SLEEPAPNEAWHEN, "sleepapneawhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(FATTYLIVER, "fattyliver", $form, $error, true) ?>
                        <div id="fattyliver-td" class="condition-form-item" <?= (($form["fattyliver"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(FATTYLIVERWHEN, "fattyliverwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(PUD, "pud", $form, $error, true) ?>
                        <div id="pud-td" class="condition-form-item" <?= (($form["pud"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(PUDWHEN, "pudwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(GERD, "gerd", $form, $error, true) ?>
                        <div id="gerd-td" class="condition-form-item" <?= (($form["gerd"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(GERDWHEN, "gerdwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(GIBLEEDING, "gibleeding", $form, $error, true) ?>
                        <div id="gibleeding-td" class="condition-form-item" <?= (($form["gibleeding"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(GIBLEEDINGTYPE, "gibleedingtype", $form, $error, "combo(upper/lower)") ?>
                            <?= $this->Text(GIBLEEDINGWHEN, "gibleedingwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(HEPATITIS, "hepatitis", $form, $error, true) ?>
                        <div id="hepatitis-td" class="condition-form-item" <?= (($form["hepatitis"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(HEPATITISWHEN, "hepatitiswhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(GALLSTONE, "gallstone", $form, $error, true) ?>
                        <div id="gallstone-td" class="condition-form-item" <?= (($form["gallstone"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(GALLSTONEWHEN, "gallstonewhen", $form, $error) ?>
                        </div>


                        <?= $this->CheckBox(CHOLEDOLITHIASIS, "choledolithiasis", $form, $error, true) ?>
                        <div id="choledolithiasis-td" class="condition-form-item" <?= (($form["choledolithiasis"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(CHOLEDOLITHIASISWHEN, "choledolithiasiswhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(GOUT, "gout", $form, $error, true) ?>
                        <div id="gout-td" class="condition-form-item" <?= (($form["gout"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(GOUTWHEN, "goutwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(INFERTILITY, "infertility", $form, $error, true) ?>
                        <div id="infertility-td" class="condition-form-item" <?= (($form["infertility"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(INFERTILITYPRI, "infertilitypri", $form, $error, "combo(primary/secondary)") ?>
                        </div>

                        <?= $this->CheckBox(CUSHING, "cushing", $form, $error, true) ?>
                        <div id="cushing-td" class="condition-form-item" <?= (($form["cushing"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(CUSHINGWHEN, "cushingwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(DEPRESSION, "depression", $form, $error, true) ?>
                        <div id="depression-td" class="condition-form-item" <?= (($form["depression"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(DEPRESSIONWHEN, "depressionwhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(ANXIETYDIS, "anxietydis", $form, $error, true) ?>
                        <div id="anxietydis-td" class="condition-form-item" <?= (($form["anxietydis"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(ANXIETYDISWHEN, "anxietydiswhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(PERDISORDERS, "perdisorders", $form, $error, true) ?>
                        <div id="perdisorders-td" class="condition-form-item" <?= (($form["perdisorders"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(PERDISORDERSWHEN, "perdisorderswhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(PSYDISORDERS, "psydisorders", $form, $error, true) ?>
                        <div id="psydisorders-td" class="condition-form-item" <?= (($form["psydisorders"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(PSYDISORDERSWHEN, "psydisorderswhen", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(CHD, "chd", $form, $error) ?>

                        <?= $this->CheckBox(PREVIOUSSUR, "previoussur", $form, $error, true) ?>
                        <div id="previoussur-td" class="condition-form-item" <?= (($form["previoussur"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(PREVIOUSSURWHAT, "previoussurwhat", $form, $error) ?>
                            <?= $this->CheckBox(PREVIOUSSURADHESION, "previoussuradhesion", $form, $error) ?>
                        </div>

                        <?= $this->Text(DISEASEOTHER, "diseasesother", $form, $error) ?>

                    </div>


                    <div class="tab-pane fade" id="PerinatalHxTab">
                        <?= $this->CheckBox(KNOWNPRE, "knownpre", $form, $error, true) ?>
                        <div id="knownpre-td" class="condition-form-item" <?= (($form["knownpre"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(KNOWNPRELBW, "knownprelbw", $form, $error) ?>
                            <?= $this->CheckBox(KNOWNPREIUGR, "knownpreiugr", $form, $error) ?>
                            <?= $this->CheckBox(KNOWNPREGDMINMOTHER, "knownpregdminmother", $form, $error) ?>
                            <?= $this->CheckBox(KNOWNPREPOSTTERM, "knownprepostterm", $form, $error) ?>
                            <?= $this->CheckBox(KNOWNPREPRETERM, "knownprepreterm", $form, $error) ?>
                            <?= $this->Text(KNOWNPREBIRTH, "knownprebirth", $form, $error) ?>
                            <?= $this->CheckBox(KNOWNPREHYPER, "knownprehyper", $form, $error) ?>
                            <?= $this->CheckBox(KNOWNPREASPHYXIA, "knownpreasphyxia", $form, $error) ?>
                            <?= $this->Select(KNOWNPREPRODUCT, "knownpreproduct", $form, $error, "combo(cesarean section/NVD/unknown)") ?>
                            <?= $this->Select(KNOWNPREBIR, "knownprebir", $form, $error, "combo(1/2/3/4/5/6/7/8/9/10/11/12)") ?>
                        </div>

                        <?= $this->TextArea(KNOWNPREDESC, "knownpredesc", $form, $error) ?>

                    </div>

                    <div class="tab-pane fade" id="OBHxTab">
                        <br/><br/>
                        <?= $this->Text(G, "g", $form, $error) ?>
                        <?= $this->Text(A, "a", $form, $error) ?>
                        <?= $this->Text(P, "p", $form, $error) ?>
                        <?= $this->Text(L, "l", $form, $error) ?>
                        <?= $this->TextArea(GDMSEX, "gdmsex", $form, $error) ?>


                    </div>

                    <div class="tab-pane fade" id="DrugHxTab">
                    	<?= $this->CheckBox(FOROBTREATMENT, "forobtreatment", $form, $error) ?>
                    	<?= $this->CheckBox(ESTROIDES, "estroides", $form, $error) ?>
                    	<?= $this->CheckBox(PSYCHOLOGICDRUGS, "psychologicdrugs", $form, $error) ?>
                    	<?= $this->CheckBox(TREARUNDERLYINGDIS, "treatunderlyingdis", $form, $error) ?>
                        <?= $this->CheckBox(SLIMMING, "slimming", $form, $error) ?>
                        <?= $this->CheckBox(ANTIPSYCHOTICS, "antipsychotics", $form, $error) ?>
                        <?= $this->CheckBox(GLUCOCO, "glucoco", $form, $error) ?>
                        <?= $this->CheckBox(LITHIUM, "lithium", $form, $error) ?>
                        <?= $this->CheckBox(PROGESTIN, "progestin", $form, $error) ?>
                        <?= $this->CheckBox(TCA, "tca", $form, $error) ?>
                        <?= $this->CheckBox(ESTROGEN, "estrogen", $form, $error) ?>
                        <?= $this->CheckBox(SSRI, "ssri", $form, $error) ?>
                        <?= $this->CheckBox(OCP, "ocp", $form, $error) ?>
                        <?= $this->CheckBox(OTHERANTIDEPRESSANT, "otherantidepressant", $form, $error) ?>
                        <?= $this->CheckBox(NSAID, "nsaid", $form, $error) ?>
                        <?= $this->CheckBox(ANTICONVULSANT, "anticonvulsant", $form, $error) ?>
                        <?= $this->CheckBox(WARFARIN, "warfarin", $form, $error) ?>
                        <?= $this->CheckBox(ANTIDIABETIC, "antidiabetic", $form, $error) ?>
                        <?= $this->CheckBox(LMWH, "lmwh", $form, $error) ?>
                        <?= $this->CheckBox(SEROTONINHISTAMINE, "serotoninhistamine", $form, $error) ?>

                        <?= $this->CheckBox(OTHERRR, "otherrr", $form, $error, true) ?>
                        <div id="otherrr-td" class="condition-form-item" <?= (($form["otherrr"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->TextArea(OTHERDESC, "otherdesc", $form, $error) ?>
                        </div>

                        <?= $this->CheckBox(BETABLOCKERS, "betablockers", $form, $error) ?>

                        <?= $this->TextArea(DRUGDESC, "drugdesc", $form, $error) ?>

                    </div>

                    <div class="tab-pane fade" id="PreviousparamedicalTab">
                        <?= $this->TextArea(PREVPARADESC, "prevparadesc", $form, $error, true, "", "", 30, null) ?>

                    </div>
                </div>
                <div id="buttons_div" >
                    <input name='com_pmhx_save' type='hidden' value="1" />
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