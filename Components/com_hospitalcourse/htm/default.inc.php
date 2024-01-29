<form class="form-horizontal" name='hospitalcourse_form' id='hospitalcourse_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_hospitalcourse=1&func=save" ?>" method='POST'>
    <fieldset>
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <?=IHTML::ReceptionData()?>
                <li class="active"><a href="#Pre-opDataTab" data-toggle="tab">Pre-op Data</a></li>
                <li><a href="#Intra-opDataTab" data-toggle="tab">Intra-op Data</a></li>
                <li><a href="#Post-opDataTab" data-toggle="tab">Post-op Data</a></li>
                <li><a href="#DischargeTab" data-toggle="tab">Discharge</a></li>
            </ul>

            <div class="well bs-component">  
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="Pre-opDataTab">

                        <input name='hospitalcourseid' type='hidden' value="<?php echo $form['hospitalcourseid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <?= $this->Text(HOSNAME, "hosname", $form, $error) ?>
                        <?= $this->Text(HOSFILE, "hosfile", $form, $error) ?>
                        <?= $this->DateBox(ADMISSIONADTE, "admissionadte", $form, $error) ?>
                        
                        <?= $this->Text(SURGEONNAME , "surgeonname", $form, $error) ?>
                        
                        <?= $this->CheckBox(PREWEIGHTREDUC, "preweightreduc", $form, $error,true) ?>
                        <div id="preweightreduc-td" class="condition-form-item" <?= (($form["preweightreduc"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(PREWEIGHTREDUCMUCH, "preweightreducmuch", $form, $error) ?>
                        </div>
                        

                    </div>
                    <!--tab-1 end-->
                    <div class="tab-pane fade" id="Intra-opDataTab">
                        <?= $this->StartPanel("&nbsp;")?>
                        <?= $this->DateBox(OPERDATE , "operdate", $form, $error) ?>
                        <?= $this->Text(OPERSTARTTIME , "operstarttime", $form, $error) ?>
                        <?= $this->Text(OPERENDTIME , "operendtime", $form, $error) ?>
                        <?= $this->Text(OPERTYPE , "opertype", $form, $error) ?>
                        <?= $this->Select(HOSMETHOD , "method", $form, $error,"combo(Laparoscopy/Laparotomy)") ?>
                        
                        <?= $this->CheckBox(CONTOLAP, "contolap", $form, $error,true) ?>
                        <div id="contolap-td" class="condition-form-item" <?= (($form["contolap"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(CONTOLAPPEASON, "contolappeason", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(LEALAGEBLUE, "lealageblue", $form, $error,true) ?>
                        <div id="lealageblue-td" class="condition-form-item" <?= (($form["lealageblue"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Select(LEALAGEBLUEC, "lealagebluec", $form, $error,"combo(+/-)") ?>
                        </div>
                        <?= $this->EndPanel()?>
                        
                        <?= $this->StartPanel(OPERTYPE)?>
                        <?= $this->CheckBox(SLEEVEGAS, "sleevegas", $form, $error) ?>
                        <?= $this->CheckBox(REDO, "redo", $form, $error) ?>
                        <?= $this->CheckBox(REGABY, "regaby", $form, $error) ?>
                        <?= $this->CheckBox(GABAND, "gaband", $form, $error) ?>
                        <?= $this->CheckBox(DUSWITCH, "duswitch", $form, $error) ?>
                        <?= $this->CheckBox(VERBANDGA, "verbandga", $form, $error) ?>
                        <?= $this->CheckBox(JEJBY, "jejby", $form, $error) ?>
                        <?= $this->CheckBox(CHOLECYST, "cholecyst", $form, $error) ?>
                        <?= $this->CheckBox(REPAIRHERNIA, "repairhernia", $form, $error) ?>
                        
                        <?= $this->CheckBox(HOSOTHER, "other", $form, $error,true) ?>
                        <div id="other-td" class="condition-form-item" <?= (($form["other"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(OTHERG, "otherg", $form, $error) ?>
                        </div>
                        <?= $this->EndPanel()?>
                        
                        <?= $this->StartPanel("&nbsp;")?>
                        <?= $this->CheckBox(TROCAR , "trocar", $form, $error) ?>
                        <?= $this->CheckBox(SPLENIC , "splenic", $form, $error) ?>
                        <?= $this->CheckBox(VASCULAR , "vascular", $form, $error) ?>
                        <?= $this->CheckBox(BOWEL , "bowel", $form, $error) ?>
                        <?= $this->CheckBox(ISCHEMIA , "ischemia", $form, $error) ?>
                        <?= $this->CheckBox(MISCONSTRUCTION , "misconstruction", $form, $error) ?>
                        <?= $this->CheckBox(MELEAKAGE , "meleakage", $form, $error) ?>
                        
                        <?= $this->CheckBox(OTHERKIND, "otherkind", $form, $error,true) ?>
                        <div id="otherkind-td" class="condition-form-item" <?= (($form["otherkind"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(OTHERKINDD, "otherkindd", $form, $error) ?>
                        </div>
                        
                        <?= $this->TextArea(REACOMP, "reacomp", $form, $error) ?>
                        <?= $this->TextArea(WHATWASD, "whatwasd", $form, $error) ?>
			<?= $this->EndPanel()?>
                    </div>
                    <!--tab-2 end-->
                    <div class="tab-pane fade" id="Post-opDataTab">
                        <?= $this->Select(UPGISEFI , "upgisefi", $form, $error,"combo(No significant finding/Significant abnormality)") ?>
                        
                        <?= $this->StartPanel("Post OP")?>
                            <?= $this->Text(POSTOPESR, "postopesr", $form, $error) ?>
                            <?= $this->Text(POSTOPCRP, "postopcrp", $form, $error) ?>
                            <?= $this->Text(POSTOPHB, "postophb", $form, $error) ?>
                            <?= $this->Text(POSTOPHCT, "postophct", $form, $error) ?>
                        <?= $this->EndPanel()?>
                        <?= $this->CheckBox(EARCOMPAN , "earcompan", $form, $error) ?>
                        <?= $this->CheckBox(EARCOMPBL , "earcompbl", $form, $error) ?>
                        
                        <?= $this->CheckBox(EARCOMPST , "earcompst", $form, $error) ?>
                        <?= $this->CheckBox(EARCOMPOB , "earcompob", $form, $error) ?>
                        <?= $this->CheckBox(EARCOMPIN , "earcompin", $form, $error) ?>
                        <?= $this->CheckBox(EARCOMPDV , "earcompdv", $form, $error) ?>
                        <?= $this->CheckBox(EARCOMPDVEMB , "earcompdvemb", $form, $error) ?>
                        
                        <?= $this->CheckBox(EARCOMPCARD, "earcompcard", $form, $error,true) ?>
                        <div id="earcompcard-td" class="condition-form-item" <?= (($form["earcompcard"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->CheckBox(EARCOMPCARDACS, "earcompcardacs", $form, $error) ?>
                            <?= $this->CheckBox(EARCOMPCARDCHF, "earcompcardchf", $form, $error) ?>
                            <?= $this->CheckBox(EARCOMPCARDARR, "earcompcardarr", $form, $error) ?>
                        </div>
                        
                        <?= $this->CheckBox(EARCOMPRES , "earcompres", $form, $error) ?>
                        
                        <?= $this->CheckBox(EARCOMPOTHER, "earcompother", $form, $error,true) ?>
                        <div id="earcompother-td" class="condition-form-item" <?= (($form["earcompother"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(EARCOMPOTHERR, "earcompotherr", $form, $error) ?>
                        </div>
                        
                        <?= $this->TextArea(EARCOMPWWTPSASOFC, "earcompwwtpsasofc", $form, $error,true,"","",10,null) ?>
                        <?= $this->TextArea(EARCOMPWWDONE, "earcompwwdone", $form, $error,true,"","",10,null) ?>
                        
                    </div>
                    <!--tab-3 end-->
                    <div class="tab-pane fade" id="DischargeTab">
                        <?= $this->CheckBox(NUTEDU, "nutedu", $form, $error,true) ?>
                        <div id="nutedu-td" class="condition-form-item" <?= (($form["nutedu"] == 1) ? "style='display: block'" : "") ?> >
                            <?= $this->Text(NUTEDUVER, "nuteduver", $form, $error) ?>
                        </div>
                        
                        <?= $this->StartPanel(MEDIINHOS)?>
                            <?= $this->CheckBox(MEDCEFTRIAXONE, "medceftriaxone", $form, $error) ?>
                            <?= $this->CheckBox(MEDMETRONIDAZOLE, "medmetronidazole", $form, $error) ?>
                            <?= $this->CheckBox(MEDPETHIDINE, "medpethidine", $form, $error) ?>
                            <?= $this->CheckBox(MEDDICLOPHENAC, "meddiclophenac", $form, $error) ?>
                            <?= $this->CheckBox(MEDRANITIDINE, "medranitidine", $form, $error) ?>
                            <?= $this->CheckBox(MEDGLUCOSAN, "medglucosan", $form, $error) ?>
                        <?= $this->EndPanel()?>
                        
                        <?= $this->DateBox(DISCHARGEDATE, "dischargedate", $form, $error) ?>
                        
                        <?= $this->StartPanel(PREMED)?>
                            <?= $this->CheckBox(PREMEDCEPHALEXIN, "premedcephalexin", $form, $error) ?>
                            <?= $this->CheckBox(PREMEDRANITIDINE, "premedranitidine", $form, $error) ?>
                            <?= $this->CheckBox(PREMEDDICLOFENAC, "premeddiclofenac", $form, $error) ?>
                            <?= $this->CheckBox(PREMEDCELEXAN40MG, "premedcelexan40mg", $form, $error) ?>
                        <?= $this->EndPanel()?>
                        
                        <?= $this->Select(TRANSFERTO, "transferto", $form, $error, "combo(Home/ICU/CCU/Other)") ?>
                        
                    </div>
                    <div id="buttons_div" >
                        <input name='com_hospitalcourse_save' type='hidden' value="1" />
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