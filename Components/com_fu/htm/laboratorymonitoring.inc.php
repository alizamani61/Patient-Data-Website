<div class="row">
    <?php $pageTitle = "Laboratory Monitoring" ?>
    <?= IHTML::BreadCrump("FU", $pageTitle) ?>
    <?= $this->StartPanel($pageTitle); // laboratorymonitoring=1?>

    <div class="col-xs-3">
        <!-- required for floating -->
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs-left">
            <li>
                <form action="<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&laboratorymonitoring=1" . (isset($_GET["fudate"]) ? "&fudate=" . $_GET["fudate"] : "") ?>" method='POST'>
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
                    <input type="hidden" name="pageType" value="2"/>
                    <input name='com_fu_detail_add' type='hidden' value="1" />
                    <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                    <button type="submit"><i class="fa fa-plus"></i></button>
                </form>
            </li>
            <?php if (count($dates) > 0): ?>
                <li class="active"><a href="?com_fu=1&func=select&laboratorymonitoring=1&fudate=<?= $form["fudate"] ?>&id=<?= $form["ident_id"] ?>"><?= $form["fudate"] ?></a>
                </li>
            <?php endif; ?>
            <?php for ($i = 0; $i < count($dates); $i++): ?>
                <?php if ($dates[$i]["fudate"] != $form["fudate"]): ?>
                    <li class=""><a href="?com_fu=1&func=select&laboratorymonitoring=1&fudate=<?= $dates[$i]["fudate"] ?>&id=<?= $form["ident_id"] ?>"><?= $dates[$i]["fudate"] ?></a>
                    </li>
                    <?php ENDIF; ?>
            <?php endfor; ?>

        </ul>
    </div>
    <div class="col-xs-9">
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="Tab1">
                <form class="form-horizontal" name='fu_form1' action="<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&laboratorymonitoring=1" . (isset($_GET["fudate"]) ? "&fudate=" . $_GET["fudate"] : "") . "&func=save" ?>" method='POST'>
                    <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
                    <input type="hidden" name="fuid" value="<?= $form['fuid'] ?>"/>
                    <input type="hidden" name="fudate" value="<?= $form['fudate'] ?>"/>
                    <input type="hidden" name="pageType" value="2"/>
                    <div style="height:400px;overflow-y: scroll;border: 1px solid #ccc;background-color:#eee; padding: 20px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">PostOp</div>
                            <div class="panel-body"> 
                                <?= $this->Text("CBC", "cbc", $form, $error) ?>
                                <?= $this->Text("DIFF", "diff", $form, $error) ?>
                                <?= $this->Text("BUN", "bun", $form, $error) ?>
                                <?= $this->Text("CR", "cr", $form, $error) ?>
                                <?= $this->Text("ELECTROLITE", "electrolite", $form, $error) ?>
                                <?= $this->Text("IRON", "iron", $form, $error) ?>
                                <?= $this->Text("VITD", "vitd", $form, $error) ?>
                                <?= $this->Text("LFT", "lft", $form, $error) ?>
                                <?= $this->Text("FBS", "fbs", $form, $error) ?>
                                <?= $this->Text("ZINC", "zinc", $form, $error) ?>
                                <?= $this->Text("CU", "cu", $form, $error) ?>
                                <?= $this->Text("Leptin", "leptin", $form, $error) ?>
                                <?= $this->Text("Ghrelin", "ghrelin", $form, $error) ?>


                                <?= $this->Text("HbA1c", "hbalc", $form, $error) ?>
                                <?= $this->Text("B.S.(2hpp)", "bs", $form, $error) ?>
                                <?= $this->Text("TG", "tg", $form, $error) ?>
                                <?= $this->Text("Total Cholesterol", "totalcholesterol", $form, $error) ?>
                                <?= $this->Text("HDL", "hdl", $form, $error) ?>
                                <?= $this->Text("LDL", "ldl", $form, $error) ?>
                                <?= $this->Text("TBG", "tbg", $form, $error) ?>
                                <?= $this->Text("Urine RBC", "urinerbc", $form, $error) ?>

                                <?= $this->Text("Urine Protein", "urinerotein", $form, $error) ?>
                                <?= $this->Text("Urine SG", "urinesg", $form, $error) ?>
                                <?= $this->Text("Urine PH", "urineph", $form, $error) ?>
                                <?= $this->Text("Urine crystal", "urinecrystal", $form, $error) ?>
                                <?= $this->Text("Urine cast", "urinecast", $form, $error) ?>
                                <?= $this->Text("CRP", "crp", $form, $error) ?>
                                <?= $this->Text("ESR", "esr", $form, $error) ?>
                                <?= $this->Text("Albumin", "albumin", $form, $error) ?>
                                <?= $this->Text("Prealbumin", "prealbumin", $form, $error) ?>
                                <?= $this->Text("Total protein", "totalprotein", $form, $error) ?>
                                <?= $this->Text("D. Bili", "dbili", $form, $error) ?>
                                <?= $this->Text("T. Bili", "tbili", $form, $error) ?>
                                <?= $this->Text("ALT", "alt", $form, $error) ?>
                                <?= $this->Text("AST", "ast", $form, $error) ?>
                                <?= $this->Text("ALKP", "alkp", $form, $error) ?>
                                <?= $this->Text("TSH", "tsh", $form, $error) ?>
                                <?= $this->Text("Free T4", "free", $form, $error) ?>
                                <?= $this->Text("Serum Iron", "serumiron", $form, $error) ?>
                                <?= $this->Text("TIBC", "tibc", $form, $error) ?>
                                <?= $this->Text("Ferritin", "ferritin", $form, $error) ?>
                                <?= $this->Text("PTH", "pth", $form, $error) ?>
                                <?= $this->Text("Ca", "ca", $form, $error) ?>
                                <?= $this->Text("P", "p", $form, $error) ?>
                                <?= $this->Text("Mg", "mg", $form, $error) ?>
                                <?= $this->Text("Zn", "zn", $form, $error) ?>
                                <?= $this->Text("Selenium", "selenium", $form, $error) ?>
                                <?= $this->Text("Copper", "copper", $form, $error) ?>
                                <?= $this->Text("Uric acid", "uricacid", $form, $error) ?>
                                <?= $this->Text("Vitamin A", "vitamina", $form, $error) ?>
                                <?= $this->Text("Vitamin B1", "vitaminb", $form, $error) ?>
                                <?= $this->Text("Vitamin B12", "vitab", $form, $error) ?>
                                <?= $this->Text("Vitamin C", "vitac", $form, $error) ?>
                                <?= $this->Text("Vitamin D25", "vitamd", $form, $error) ?>
                                <?= $this->Text("Folic acid", "folicacid", $form, $error) ?>
                                <?= $this->Text("Anti H.pylori Ab", "antih", $form, $error) ?>
                                <?= $this->Text("Protein C", "proteinc", $form, $error) ?>
                                <?= $this->Text("Protein S", "proteins", $form, $error) ?>
                                <?= $this->Text("Antithrombin III", "antith", $form, $error) ?>
                                <?= $this->Text("LH", "lh", $form, $error) ?>
                                <?= $this->Text("FSH", "fsh", $form, $error) ?>
                                <?= $this->Text("HB", "hb", $form, $error) ?>
                                <?= $this->Text("HCT", "hct", $form, $error) ?>
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