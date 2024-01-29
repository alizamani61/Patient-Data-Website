<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-user"></i>&nbsp;Patient Identification &nbsp;</h2>
                
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="btn-group pull-right">
                    <a href="?com_identical=1&func=identicaldel&id=<?= $_SESSION["identical_dataid"] ?>" class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-close"></i></a>
                    <a href="?search=1&sfunc=identical" class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Search"><i class="fa fa-search"></i></a>
                    <a href="?com_identical=1&func=identicalnew" class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="New"><i class="fa fa-plus"></i></a>
                </div> 
                <form class="form-horizontal form-label-left" name='identical_form' id='identical_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_identical=1&func=save" ?>" method='POST'>
                    <div id="wizard_verticle" class="form_wizard wizard_verticle">
                        <ul class="list-unstyled wizard_steps">
                            <li>
                                <a href="#step-11">
                                    <span class="step_no" data-toggle="tooltip" data-placement="top" title="Personal Info">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-22">
                                    <span class="step_no" data-toggle="tooltip" data-placement="top" title="Select Physician">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-33">
                                    <span class="step_no" data-toggle="tooltip" data-placement="top" title="Phone, Education ...">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-44">
                                    <span class="step_no" data-toggle="tooltip" data-placement="top" title="Location, Cooperation">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-45">
                                    <span class="step_no" data-toggle="tooltip" data-placement="top" title="Cause Of Referral">5</span>
                                </a>
                            </li>
                        </ul>


                        <div id="step-11">
                            <h2 class="StepTitle">Step 1 Personal Info</h2>


                            <input name='identical_dataid' type='hidden' value="<?php echo $form['identical_dataid'] ?>" />
                            <font face='verdana' color='red'><?php echo $error['identical_dataid'] ?></font>
                            <input name='com_identical_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?= $this->getToken() ?>" />


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3"><?php echo DATE ?></label>
                                <div class="col-sm-6">

                                    <div class="input-group">
                                        <input  class="form-control" id="date" name='date' type='text' readonly="readonly" value="<?php echo $form['date'] ?>" />
                                        <span class="input-group-btn">
                                            <button type="button" id="date_btn" class="btn btn-primary"><span class="glyphicon glyphicon-calendar"></span></button>
                                        </span>
                                        <script type="text/javascript">
                                            Calendar.setup({
                                                inputField: "date", // id of the input field
                                                button: "date_btn", // trigger for the calendar (button ID)
                                                ifFormat: "%Y/%m/%d", // format of the input field
                                                dateType: 'jalali',
                                                //langNumbers    :     true,
                                                weekNumbers: false
                                            });
                                        </script>
                                        <font face='verdana' color='red'><?php echo $error['date'] ?></font>
                                    </div>
                                </div>


                            </div>

                            <?= IHTML::TextBoxFormGroup($value = $form['name'], $error = $error['name'], $label = NAME, $labelRequired = 1, 'name', $id = null, $readonly = null, $required = 1) ?>
                            <?= IHTML::TextBoxFormGroup($value = $form['lname'], $error = $error['lname'], $label = LNAME, $labelRequired = 1, 'lname', $id = null, $readonly = null, $required = 1) ?>
                            <?= IHTML::TextBoxFormGroup($value = $form['engname'], $error = $error['engname'], $label = ENGNAME, $labelRequired = null, 'engname', $id = null, $readonly = null, $required = null) ?>
                            <?= IHTML::TextBoxFormGroup($value = $form['father'], $error = $error['father'], $label = FATHER, $labelRequired = 1, 'father', $id = null, $readonly = null, $required = 1) ?>



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo SEX ?></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                        <?php
                                        $mactive = "";
                                        $mchecked = "";
                                        $factive = "";
                                        $fchecked = "";
                                        if ($form['sex'] == 'M') {
                                            $mactive = "active";
                                            $mchecked = "checked=\"cheched\"";
                                        }
                                        if ($form['sex'] == 'F') {
                                            $factive = "active";
                                            $fchecked = "checked=\"cheched\"";
                                        }
                                        ?>
                                        <label class="btn btn-default <?= $mactive ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="sex" value="M" <?= $mchecked ?>> &nbsp; Male &nbsp;
                                        </label>
                                        <label class="btn btn-primary <?= $factive ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="sex" value="F" <?= $fchecked ?>> Female
                                        </label>
                                        <font face='verdana' color='red'><?php echo $error['sex'] ?></font>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div id="step-22">
                            <h2 class="StepTitle">Step 2 Select Physician</h2>
                            <?= IHTML::TextBoxFormGroup($value = $form['comfileno'], $error = $error['comfileno'], $label = COMFILENO, $labelRequired = null, $name = 'comfileno', $id = null, $readonly = null, $required = null) ?>
                            <?= IHTML::TextBoxFormGroup($value = $form['nationalid'], $error = $error['nationalid'], $label = NATIONALID, $labelRequired = 1, $name = 'nationalid', $id = null, $readonly = null, $required = 1) ?>
                            <?= IHTML::TextBoxFormGroup($value = $form['age'], $error = $error['age'], $label = AGE, $labelRequired = 1, $name = 'age', $id = null, $readonly = null, $required = 1) ?>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3"><?php echo MARITALSTATUS ?></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" name='maritalstatus' >
                                        <option value="<?php echo $form['maritalstatus'] ?>"><?php echo $form['maritalstatus'] ?></option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="D">D</option>
                                        <option value="MDMD">MDMD</option>
                                        <option value="O">O</option>
                                    </select>
                                    <font face='verdana' color='red'><?php echo $error['maritalstatus'] ?></font>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3"><?php echo RESPHYSICIAN ?></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" name='resphysician' >
                                        <option value="<?php echo $form['resphysician'] ?>"><?php echo $form['resphysician'] ?></option>
                                        <option value="Dr amini">Dr amini</option>
                                        <option value="Dr hoseini">Dr hoseini</option>
                                        <option value="Drbananzadeh">Drbananzadeh</option>
                                        <option value="Other">Other</option>
                                        <option value="Undetermined">Undetermined</option>
                                    </select>
                                    <font face='verdana' color='red'><?php echo $error['resphysician'] ?></font>
                                </div>
                            </div>

                            <?= $this->CheckBox(ISOPERATED, "isoperated", $form, $error) ?>

                        </div>
                        <div id="step-33">
                            <h2 class="StepTitle">Step 3 Phone, Education ...</h2>
                            <?= IHTML::TextBoxFormGroup($value = $form['hometel'], $error = $error['hometel'], $label = HOMETEL, $labelRequired = null, $name = 'hometel', $id = null, $readonly = null, $required = null) ?>
                            <?= IHTML::TextBoxFormGroup($value = $form['mobileno'], $error = $error['mobileno'], $label = MOBILENO, $labelRequired = null, $name = 'mobileno', $id = null, $readonly = null, $required = null) ?>
                            <?= IHTML::TextBoxFormGroup($value = $form['closereltelno'], $error = $error['closereltelno'], $label = CLOSERELTELNO, $labelRequired = null, $name = 'closereltelno', $id = null, $readonly = null, $required = null) ?>

                            <?= $this->Select(EDUCATION, "education", $form, $error, "combo(Uneducated/Less than a diploma/diploma/BA/MA/Ph.D)", true," class='form-control'", "", "1/2/3/4/5/6") ?>
                            <?= $this->Select(OCCUPATION, "occupation", $form, $error, "combo(House wife/Student/Clerk/Self-employed/Military/Other)", true, " class='form-control'", "", "1/2/3/4/5/6") ?>
                            <?= $this->Select(NATIONALITY, "nationality", $form, $error, "combo(Iranian/Foreign/Iranian living abroad)", true, " class='form-control'", "", "1/2/3") ?>

                        </div>
                        <div id="step-44">
                            <h2 class="StepTitle">Step 4 Location, Cooperation</h2>
                            <?= IHTML::TextBoxFormGroup($value = $form['birthplace'], $error = $error['birthplace'], $label = BIRTHPLACE, $labelRequired = null, $name = 'birthplace', $id = null, $readonly = null, $required = null) ?>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea class="form-control" name='address' rows="5" ><?php echo $form['address'] ?></textarea>
                                    <font face='verdana' color='red'><?php echo $error['address'] ?></font>
                                </div>
                            </div>

                            <?= IHTML::TextBoxFormGroup($value = $form['postalcode'], $error = $error['postalcode'], $label = 'Postal Code', $labelRequired = null, $name = 'postalcode', $id = null, $readonly = null, $required = null) ?>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Cooperation Tendency</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea class="form-control" name='cooperation' rows="5"><?php echo $form['cooperation'] ?></textarea>
                                    <font face='verdana' color='red'><?php echo $error['cooperation'] ?></font>
                                </div>
                            </div>

                        </div>
                        <div id="step-45">
                            <h2 class="StepTitle">Step 5 Cause Of Referral</h2>
                            <?= $this->CheckBox(PREVUNDIETS, "prevundiets", $form, $error) ?>
                            <?= $this->CheckBox(INABILITYEXER, "inabilityexer", $form, $error) ?>
                            <?= $this->CheckBox(ARTHRITIS, "arthritis", $form, $error) ?>
                            <?= $this->CheckBox(ASTHMA, "asthma", $form, $error) ?>
                            <?= $this->CheckBox(HEARTPALP, "heartpalp", $form, $error) ?>
                            <?= $this->CheckBox(INFERTILITY, "infertility", $form, $error) ?>
                            <?= $this->CheckBox(INTERNALDIS, "internaldis", $form, $error) ?>
                            <?= $this->CheckBox(BEAUTYPERSONAL, "beautypersonal", $form, $error) ?>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<script src="vendors/validator/validator.js"></script>

<!-- Custom Theme Scripts -->

<!-- jQuery Smart Wizard -->
<script>
                                            $(document).ready(function () {
                                                $('#wizard').smartWizard();

                                                $('#wizard_verticle').smartWizard({
                                                    transitionEffect: 'slide'
                                                });

                                                $('.buttonNext').addClass('btn btn-success');
                                                $('.buttonPrevious').addClass('btn btn-primary');
                                                $('.buttonFinish').addClass('btn btn-default');

                                                // initialize the validator function
                                                validator.message.date = 'not a real date';

                                                // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
                                                $('form')
                                                        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                                                        .on('change', 'select.required', validator.checkField)
                                                        .on('keypress', 'input[required][pattern]', validator.keypress);

                                                $('.multi.required').on('keyup blur', 'input', function () {
                                                    validator.checkField.apply($(this).siblings().last()[0]);
                                                });

                                                $('form').submit(function (e) {
                                                    e.preventDefault();
                                                    var submit = true;

                                                    // evaluate the form using generic validaing
                                                    if (!validator.checkAll($(this))) {
                                                        submit = false;
                                                    }

                                                    if (submit)
                                                        this.submit();

                                                    return false;
                                                });
                                            });
</script>






















