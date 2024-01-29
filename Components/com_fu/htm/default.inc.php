
<div class="col-lg-12">
    <ul class="nav nav-tabs">
        <?= IHTML::ReceptionData() ?>           

        <li class="active"><a href="#ObesityClinicVisitationTab" data-toggle="tab">Obesity Clinic Visitation</a></li>
        <li><a href="#AnthropometricMonitoringTab" data-toggle="tab">Anthropometric Monitoring</a></li>
        <li><a href="#LaboratoryMonitoringTab" data-toggle="tab">Laboratory Monitoring</a></li>
        <li><a href="#ResultOfPathologyTab" data-toggle="tab">Result Of Pathology</a></li>
        <li><a href="#LateMorbiditiesAndMortalityTab" data-toggle="tab">Late Morbidities And Mortality</a></li>
        <li><a href="#MetabolicSXTab" data-toggle="tab">Metabolic SX</a></li>
    </ul>
    <div class="well bs-component">  
        <div class="tab-content">
            <div class="tab-pane fade in active" id="ObesityClinicVisitationTab">
                <form class="form-horizontal" name="fu_form1" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                    <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                    <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                    <?= $this->TextArea(OBESITYCLIVISIT, "obesityclivisit", $form, $error, true, "", "", 40, null) ?>
                    <div class="buttons_div1" >
                        <input name='com_fu_save' type='hidden' value="1" />
                        <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                        <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                    </div>
                    <?php if ($message != ""): ?>
                        <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                    <?php endif; ?>
                </form>
            </div>

            <!--tab-1 end-->
            <div class="tab-pane fade" id="AnthropometricMonitoringTab">
                <div class="table-responsive fu-table-container">
                    <form class="form-horizontal" style='margin-top: 5px;' name="fu_form2" action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />
                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <tr>
                                <th>Postop</th> 
                                <th>1<sup>st</sup> week</th> 
                                <th>2<sup>nd</sup> week</th> 
                                <th>3<sup>rd</sup> week</th> 
                                <th>4<sup>th</sup> week</th> 
                                <th>2<sup>nd</sup> month</th> 
                                <th>3<sup>rd</sup> month</th> 
                                <th>4<sup>th</sup> month</th> 
                                <th>5<sup>th</sup> month</th> 
                                <th>6<sup>th</sup> month</th> 
                                <th>7<sup>th</sup> month</th> 
                                <th>8<sup>th</sup> month</th> 
                                <th>9<sup>th</sup> month</th> 
                                <th>10<sup>th</sup> month</th> 
                                <th>11<sup>th</sup> month</th> 
                                <th>12<sup>th</sup> month</th> 
                                <th>13<sup>th</sup> month</th> 
                                <th>14<sup>th</sup> month</th> 
                                <th>15<sup>th</sup> month</th> 
                                <th>16<sup>th</sup> month</th> 
                                <th>17<sup>th</sup> month</th> 
                                <th>18<sup>th</sup> month</th> 
                                <th>19<sup>th</sup> month</th> 
                                <th>20<sup>th</sup> month</th> 
                                <th>21<sup>th</sup> month</th> 
                                <th>22<sup>th</sup> month</th> 
                                <th>23<sup>th</sup> month</th> 
                                <th>24<sup>th</sup> month</th> 
                            </tr>
                            <tr>
                                <th>WT</th>
                                <td><input size ='8' name='postopwt1stweek' type='text' value='<?php echo $form['postopwt1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt1stweek'] ?></font></td>
                                <td><input size ='8' name='postopwt2ndweek' type='text' value='<?php echo $form['postopwt2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt2ndweek'] ?></font></td>
                                <td><input size ='8' name='postopwt3rdweek' type='text' value='<?php echo $form['postopwt3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt3rdweek'] ?></font></td>
                                <td><input size ='8' name='postopwt4thweek' type='text' value='<?php echo $form['postopwt4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt4thweek'] ?></font></td>
                                <td><input size ='8' name='postopwt2ndmonth' type='text' value='<?php echo $form['postopwt2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt2ndmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt3rdmonth' type='text' value='<?php echo $form['postopwt3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt3rdmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt4thmonth' type='text' value='<?php echo $form['postopwt4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt4thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt5thmonth' type='text' value='<?php echo $form['postopwt5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt5thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt6thmonth' type='text' value='<?php echo $form['postopwt6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt6thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt7thmonth' type='text' value='<?php echo $form['postopwt7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt7thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt8thmonth' type='text' value='<?php echo $form['postopwt8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt8thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt9thmonth' type='text' value='<?php echo $form['postopwt9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt9thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt10thmonth' type='text' value='<?php echo $form['postopwt10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt10thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt11thmonth' type='text' value='<?php echo $form['postopwt11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt11thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt12thmonth' type='text' value='<?php echo $form['postopwt12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt12thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt13thmonth' type='text' value='<?php echo $form['postopwt13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt13thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt14thmonth' type='text' value='<?php echo $form['postopwt14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt14thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt15thmonth' type='text' value='<?php echo $form['postopwt15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt15thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt16thmonth' type='text' value='<?php echo $form['postopwt16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt16thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt17thmonth' type='text' value='<?php echo $form['postopwt17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt17thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt18thmonth' type='text' value='<?php echo $form['postopwt18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt18thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt19thmonth' type='text' value='<?php echo $form['postopwt19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt19thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt20thmonth' type='text' value='<?php echo $form['postopwt20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt20thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt21thmonth' type='text' value='<?php echo $form['postopwt21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt21thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt22thmonth' type='text' value='<?php echo $form['postopwt22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt22thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt23thmonth' type='text' value='<?php echo $form['postopwt23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt23thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwt24thmonth' type='text' value='<?php echo $form['postopwt24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwt24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>PostOp wt</th>
                                <td><input size ="8" name='postop1w' type='text' value='<?php echo $form['postop1w'] ?>' /><font face='verdana' color='red'><?php echo $error['postop1w'] ?></font></td>
                                <td><input size ="8" name='postop2w' type='text' value='<?php echo $form['postop2w'] ?>' /><font face='verdana' color='red'><?php echo $error['postop2w'] ?></font></td>
                                <td><input size ="8" name='postop3w' type='text' value='<?php echo $form['postop3w'] ?>' /><font face='verdana' color='red'><?php echo $error['postop3w'] ?></font></td>
                                <td><input size ="8" name='postop4w' type='text' value='<?php echo $form['postop4w'] ?>' /><font face='verdana' color='red'><?php echo $error['postop4w'] ?></font></td>
                                <td><input size ="8" name='postop2m' type='text' value='<?php echo $form['postop2m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop2m'] ?></font></td>
                                <td><input size ="8" name='postop3m' type='text' value='<?php echo $form['postop3m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop3m'] ?></font></td>
                                <td><input size ="8" name='postop4m' type='text' value='<?php echo $form['postop4m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop4m'] ?></font></td>
                                <td><input size ="8" name='postop5m' type='text' value='<?php echo $form['postop5m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop5m'] ?></font></td>
                                <td><input size ="8" name='postop6m' type='text' value='<?php echo $form['postop6m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop6m'] ?></font></td>
                                <td><input size ="8" name='postop7m' type='text' value='<?php echo $form['postop7m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop7m'] ?></font></td>
                                <td><input size ="8" name='postop8m' type='text' value='<?php echo $form['postop8m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop8m'] ?></font></td>
                                <td><input size ="8" name='postop9m' type='text' value='<?php echo $form['postop9m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop9m'] ?></font></td>
                                <td><input size ="8" name='postop10m' type='text' value='<?php echo $form['postop10m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop10m'] ?></font></td>
                                <td><input size ="8" name='postop11m' type='text' value='<?php echo $form['postop11m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop11m'] ?></font></td>
                                <td><input size ="8" name='postop12m' type='text' value='<?php echo $form['postop12m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop12m'] ?></font></td>
                                <td><input size ="8" name='postop13m' type='text' value='<?php echo $form['postop13m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop13m'] ?></font></td>
                                <td><input size ="8" name='postop14m' type='text' value='<?php echo $form['postop14m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop14m'] ?></font></td>
                                <td><input size ="8" name='postop15m' type='text' value='<?php echo $form['postop15m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop15m'] ?></font></td>
                                <td><input size ="8" name='postop16m' type='text' value='<?php echo $form['postop16m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop16m'] ?></font></td>
                                <td><input size ="8" name='postop17m' type='text' value='<?php echo $form['postop17m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop17m'] ?></font></td>
                                <td><input size ="8" name='postop18m' type='text' value='<?php echo $form['postop18m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop18m'] ?></font></td>
                                <td><input size ="8" name='postop19m' type='text' value='<?php echo $form['postop19m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop19m'] ?></font></td>
                                <td><input size ="8" name='postop20m' type='text' value='<?php echo $form['postop20m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop20m'] ?></font></td>
                                <td><input size ="8" name='postop21m' type='text' value='<?php echo $form['postop21m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop21m'] ?></font></td>
                                <td><input size ="8" name='postop22m' type='text' value='<?php echo $form['postop22m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop22m'] ?></font></td>
                                <td><input size ="8" name='postop23m' type='text' value='<?php echo $form['postop23m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop23m'] ?></font></td>
                                <td><input size ="8" name='postop24m' type='text' value='<?php echo $form['postop24m'] ?>' /><font face='verdana' color='red'><?php echo $error['postop24m'] ?></font></td>

                            </tr>
                            <tr>
                                <th>Reduced wt</th>
                                <td><input size ="8" name='reduced1w' type='text' value='<?php echo $form['reduced1w'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced1w'] ?></font></td>
                                <td><input size ="8" name='reduced2w' type='text' value='<?php echo $form['reduced2w'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced2w'] ?></font></td>
                                <td><input size ="8" name='reduced3w' type='text' value='<?php echo $form['reduced3w'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced3w'] ?></font></td>
                                <td><input size ="8" name='reduced4w' type='text' value='<?php echo $form['reduced4w'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced4w'] ?></font></td>
                                <td><input size ="8" name='reduced2m' type='text' value='<?php echo $form['reduced2m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced2m'] ?></font></td>
                                <td><input size ="8" name='reduced3m' type='text' value='<?php echo $form['reduced3m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced3m'] ?></font></td>
                                <td><input size ="8" name='reduced4m' type='text' value='<?php echo $form['reduced4m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced4m'] ?></font></td>
                                <td><input size ="8" name='reduced5m' type='text' value='<?php echo $form['reduced5m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced5m'] ?></font></td>
                                <td><input size ="8" name='reduced6w' type='text' value='<?php echo $form['reduced6w'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced6w'] ?></font></td>
                                <td><input size ="8" name='reduced7m' type='text' value='<?php echo $form['reduced7m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced7m'] ?></font></td>
                                <td><input size ="8" name='reduced8m' type='text' value='<?php echo $form['reduced8m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced8m'] ?></font></td>
                                <td><input size ="8" name='reduced9m' type='text' value='<?php echo $form['reduced9m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced9m'] ?></font></td>
                                <td><input size ="8" name='reduced10m' type='text' value='<?php echo $form['reduced10m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced10m'] ?></font></td>
                                <td><input size ="8" name='reduced11m' type='text' value='<?php echo $form['reduced11m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced11m'] ?></font></td>
                                <td><input size ="8" name='reduced12m' type='text' value='<?php echo $form['reduced12m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced12m'] ?></font></td>
                                <td><input size ="8" name='reduced13m' type='text' value='<?php echo $form['reduced13m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced13m'] ?></font></td>
                                <td><input size ="8" name='reduced14m' type='text' value='<?php echo $form['reduced14m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced14m'] ?></font></td>
                                <td><input size ="8" name='reduced15w' type='text' value='<?php echo $form['reduced15w'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced15w'] ?></font></td>
                                <td><input size ="8" name='reduced16m' type='text' value='<?php echo $form['reduced16m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced16m'] ?></font></td>
                                <td><input size ="8" name='reduced17m' type='text' value='<?php echo $form['reduced17m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced17m'] ?></font></td>
                                <td><input size ="8" name='reduced18m' type='text' value='<?php echo $form['reduced18m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced18m'] ?></font></td>
                                <td><input size ="8" name='reduced19m' type='text' value='<?php echo $form['reduced19m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced19m'] ?></font></td>
                                <td><input size ="8" name='reduced20m' type='text' value='<?php echo $form['reduced20m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced20m'] ?></font></td>
                                <td><input size ="8" name='reduced21m' type='text' value='<?php echo $form['reduced21m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced21m'] ?></font></td>
                                <td><input size ="8" name='reduced22m' type='text' value='<?php echo $form['reduced22m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced22m'] ?></font></td>
                                <td><input size ="8" name='reduced23m' type='text' value='<?php echo $form['reduced23m'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced23m'] ?></font></td>
                                <td><input size ="8" name='reduced24w' type='text' value='<?php echo $form['reduced24w'] ?>' /><font face='verdana' color='red'><?php echo $error['reduced24w'] ?></font></td>

                            </tr>

                            <tr>
                                <th>BMI</th>
                                <td><input size ='8' name='postopbmi1stweek' type='text' value='<?php echo $form['postopbmi1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi1stweek'] ?></font></td>
                                <td><input size ='8' name='postopbmi2ndweek' type='text' value='<?php echo $form['postopbmi2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi2ndweek'] ?></font></td>
                                <td><input size ='8' name='postopbmi3rdweek' type='text' value='<?php echo $form['postopbmi3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi3rdweek'] ?></font></td>
                                <td><input size ='8' name='postopbmi4thweek' type='text' value='<?php echo $form['postopbmi4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi4thweek'] ?></font></td>
                                <td><input size ='8' name='postopbmi2ndmonth' type='text' value='<?php echo $form['postopbmi2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi2ndmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi3rdmonth' type='text' value='<?php echo $form['postopbmi3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi3rdmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi4thmonth' type='text' value='<?php echo $form['postopbmi4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi4thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi5thmonth' type='text' value='<?php echo $form['postopbmi5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi5thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi6thmonth' type='text' value='<?php echo $form['postopbmi6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi6thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi7thmonth' type='text' value='<?php echo $form['postopbmi7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi7thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi8thmonth' type='text' value='<?php echo $form['postopbmi8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi8thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi9thmonth' type='text' value='<?php echo $form['postopbmi9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi9thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi10thmonth' type='text' value='<?php echo $form['postopbmi10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi10thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi11thmonth' type='text' value='<?php echo $form['postopbmi11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi11thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi12thmonth' type='text' value='<?php echo $form['postopbmi12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi12thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi13thmonth' type='text' value='<?php echo $form['postopbmi13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi13thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi14thmonth' type='text' value='<?php echo $form['postopbmi14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi14thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi15thmonth' type='text' value='<?php echo $form['postopbmi15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi15thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi16thmonth' type='text' value='<?php echo $form['postopbmi16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi16thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi17thmonth' type='text' value='<?php echo $form['postopbmi17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi17thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi18thmonth' type='text' value='<?php echo $form['postopbmi18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi18thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi19thmonth' type='text' value='<?php echo $form['postopbmi19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi19thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi20thmonth' type='text' value='<?php echo $form['postopbmi20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi20thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi21thmonth' type='text' value='<?php echo $form['postopbmi21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi21thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi22thmonth' type='text' value='<?php echo $form['postopbmi22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi22thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi23thmonth' type='text' value='<?php echo $form['postopbmi23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi23thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbmi24thmonth' type='text' value='<?php echo $form['postopbmi24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbmi24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>WCP</th>
                                <td><input size ='8' name='postopwcp1stweek' type='text' value='<?php echo $form['postopwcp1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp1stweek'] ?></font></td>
                                <td><input size ='8' name='postopwcp2ndweek' type='text' value='<?php echo $form['postopwcp2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp2ndweek'] ?></font></td>
                                <td><input size ='8' name='postopwcp3rdweek' type='text' value='<?php echo $form['postopwcp3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp3rdweek'] ?></font></td>
                                <td><input size ='8' name='postopwcp4thweek' type='text' value='<?php echo $form['postopwcp4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp4thweek'] ?></font></td>
                                <td><input size ='8' name='postopwcp2ndmonth' type='text' value='<?php echo $form['postopwcp2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp2ndmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp3rdmonth' type='text' value='<?php echo $form['postopwcp3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp3rdmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp4thmonth' type='text' value='<?php echo $form['postopwcp4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp4thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp5thmonth' type='text' value='<?php echo $form['postopwcp5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp5thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp6thmonth' type='text' value='<?php echo $form['postopwcp6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp6thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp7thmonth' type='text' value='<?php echo $form['postopwcp7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp7thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp8thmonth' type='text' value='<?php echo $form['postopwcp8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp8thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp9thmonth' type='text' value='<?php echo $form['postopwcp9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp9thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp10thmonth' type='text' value='<?php echo $form['postopwcp10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp10thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp11thmonth' type='text' value='<?php echo $form['postopwcp11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp11thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp12thmonth' type='text' value='<?php echo $form['postopwcp12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp12thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp13thmonth' type='text' value='<?php echo $form['postopwcp13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp13thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp14thmonth' type='text' value='<?php echo $form['postopwcp14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp14thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp15thmonth' type='text' value='<?php echo $form['postopwcp15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp15thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp16thmonth' type='text' value='<?php echo $form['postopwcp16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp16thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp17thmonth' type='text' value='<?php echo $form['postopwcp17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp17thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp18thmonth' type='text' value='<?php echo $form['postopwcp18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp18thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp19thmonth' type='text' value='<?php echo $form['postopwcp19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp19thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp20thmonth' type='text' value='<?php echo $form['postopwcp20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp20thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp21thmonth' type='text' value='<?php echo $form['postopwcp21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp21thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp22thmonth' type='text' value='<?php echo $form['postopwcp22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp22thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp23thmonth' type='text' value='<?php echo $form['postopwcp23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp23thmonth'] ?></font></td>
                                <td><input size ='8' name='postopwcp24thmonth' type='text' value='<?php echo $form['postopwcp24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopwcp24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>HCP</th>
                                <td><input size ='8' name='postophcp1stweek' type='text' value='<?php echo $form['postophcp1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp1stweek'] ?></font></td>
                                <td><input size ='8' name='postophcp2ndweek' type='text' value='<?php echo $form['postophcp2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp2ndweek'] ?></font></td>
                                <td><input size ='8' name='postophcp3rdweek' type='text' value='<?php echo $form['postophcp3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp3rdweek'] ?></font></td>
                                <td><input size ='8' name='postophcp4thweek' type='text' value='<?php echo $form['postophcp4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp4thweek'] ?></font></td>
                                <td><input size ='8' name='postophcp2ndmonth' type='text' value='<?php echo $form['postophcp2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp2ndmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp3rdmonth' type='text' value='<?php echo $form['postophcp3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp3rdmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp4thmonth' type='text' value='<?php echo $form['postophcp4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp4thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp5thmonth' type='text' value='<?php echo $form['postophcp5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp5thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp6thmonth' type='text' value='<?php echo $form['postophcp6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp6thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp7thmonth' type='text' value='<?php echo $form['postophcp7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp7thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp8thmonth' type='text' value='<?php echo $form['postophcp8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp8thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp9thmonth' type='text' value='<?php echo $form['postophcp9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp9thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp10thmonth' type='text' value='<?php echo $form['postophcp10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp10thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp11thmonth' type='text' value='<?php echo $form['postophcp11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp11thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp12thmonth' type='text' value='<?php echo $form['postophcp12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp12thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp13thmonth' type='text' value='<?php echo $form['postophcp13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp13thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp14thmonth' type='text' value='<?php echo $form['postophcp14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp14thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp15thmonth' type='text' value='<?php echo $form['postophcp15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp15thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp16thmonth' type='text' value='<?php echo $form['postophcp16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp16thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp17thmonth' type='text' value='<?php echo $form['postophcp17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp17thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp18thmonth' type='text' value='<?php echo $form['postophcp18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp18thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp19thmonth' type='text' value='<?php echo $form['postophcp19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp19thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp20thmonth' type='text' value='<?php echo $form['postophcp20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp20thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp21thmonth' type='text' value='<?php echo $form['postophcp21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp21thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp22thmonth' type='text' value='<?php echo $form['postophcp22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp22thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp23thmonth' type='text' value='<?php echo $form['postophcp23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp23thmonth'] ?></font></td>
                                <td><input size ='8' name='postophcp24thmonth' type='text' value='<?php echo $form['postophcp24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postophcp24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>MAC</th>
                                <td><input size ='8' name='postopmac1stweek' type='text' value='<?php echo $form['postopmac1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac1stweek'] ?></font></td>
                                <td><input size ='8' name='postopmac2ndweek' type='text' value='<?php echo $form['postopmac2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac2ndweek'] ?></font></td>
                                <td><input size ='8' name='postopmac3rdweek' type='text' value='<?php echo $form['postopmac3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac3rdweek'] ?></font></td>
                                <td><input size ='8' name='postopmac4thweek' type='text' value='<?php echo $form['postopmac4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac4thweek'] ?></font></td>
                                <td><input size ='8' name='postopmac2ndmonth' type='text' value='<?php echo $form['postopmac2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac2ndmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac3rdmonth' type='text' value='<?php echo $form['postopmac3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac3rdmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac4thmonth' type='text' value='<?php echo $form['postopmac4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac4thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac5thmonth' type='text' value='<?php echo $form['postopmac5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac5thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac6thmonth' type='text' value='<?php echo $form['postopmac6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac6thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac7thmonth' type='text' value='<?php echo $form['postopmac7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac7thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac8thmonth' type='text' value='<?php echo $form['postopmac8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac8thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac9thmonth' type='text' value='<?php echo $form['postopmac9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac9thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac10thmonth' type='text' value='<?php echo $form['postopmac10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac10thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac11thmonth' type='text' value='<?php echo $form['postopmac11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac11thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac12thmonth' type='text' value='<?php echo $form['postopmac12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac12thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac13thmonth' type='text' value='<?php echo $form['postopmac13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac13thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac14thmonth' type='text' value='<?php echo $form['postopmac14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac14thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac15thmonth' type='text' value='<?php echo $form['postopmac15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac15thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac16thmonth' type='text' value='<?php echo $form['postopmac16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac16thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac17thmonth' type='text' value='<?php echo $form['postopmac17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac17thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac18thmonth' type='text' value='<?php echo $form['postopmac18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac18thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac19thmonth' type='text' value='<?php echo $form['postopmac19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac19thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac20thmonth' type='text' value='<?php echo $form['postopmac20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac20thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac21thmonth' type='text' value='<?php echo $form['postopmac21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac21thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac22thmonth' type='text' value='<?php echo $form['postopmac22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac22thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac23thmonth' type='text' value='<?php echo $form['postopmac23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac23thmonth'] ?></font></td>
                                <td><input size ='8' name='postopmac24thmonth' type='text' value='<?php echo $form['postopmac24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopmac24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>BP</th>
                                <td><input size ='8' name='postopbp1stweek' type='text' value='<?php echo $form['postopbp1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp1stweek'] ?></font></td>
                                <td><input size ='8' name='postopbp2ndweek' type='text' value='<?php echo $form['postopbp2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp2ndweek'] ?></font></td>
                                <td><input size ='8' name='postopbp3rdweek' type='text' value='<?php echo $form['postopbp3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp3rdweek'] ?></font></td>
                                <td><input size ='8' name='postopbp4thweek' type='text' value='<?php echo $form['postopbp4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp4thweek'] ?></font></td>
                                <td><input size ='8' name='postopbp2ndmonth' type='text' value='<?php echo $form['postopbp2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp2ndmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp3rdmonth' type='text' value='<?php echo $form['postopbp3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp3rdmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp4thmonth' type='text' value='<?php echo $form['postopbp4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp4thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp5thmonth' type='text' value='<?php echo $form['postopbp5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp5thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp6thmonth' type='text' value='<?php echo $form['postopbp6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp6thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp7thmonth' type='text' value='<?php echo $form['postopbp7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp7thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp8thmonth' type='text' value='<?php echo $form['postopbp8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp8thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp9thmonth' type='text' value='<?php echo $form['postopbp9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp9thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp10thmonth' type='text' value='<?php echo $form['postopbp10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp10thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp11thmonth' type='text' value='<?php echo $form['postopbp11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp11thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp12thmonth' type='text' value='<?php echo $form['postopbp12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp12thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp13thmonth' type='text' value='<?php echo $form['postopbp13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp13thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp14thmonth' type='text' value='<?php echo $form['postopbp14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp14thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp15thmonth' type='text' value='<?php echo $form['postopbp15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp15thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp16thmonth' type='text' value='<?php echo $form['postopbp16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp16thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp17thmonth' type='text' value='<?php echo $form['postopbp17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp17thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp18thmonth' type='text' value='<?php echo $form['postopbp18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp18thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp19thmonth' type='text' value='<?php echo $form['postopbp19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp19thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp20thmonth' type='text' value='<?php echo $form['postopbp20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp20thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp21thmonth' type='text' value='<?php echo $form['postopbp21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp21thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp22thmonth' type='text' value='<?php echo $form['postopbp22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp22thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp23thmonth' type='text' value='<?php echo $form['postopbp23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp23thmonth'] ?></font></td>
                                <td><input size ='8' name='postopbp24thmonth' type='text' value='<?php echo $form['postopbp24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['postopbp24thmonth'] ?></font></td>
                            </tr>

                        </table>
                        <div class="buttons_div1" >
                            <input name='com_fu_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                            <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                        </div>
                        <?php if ($message != ""): ?>
                            <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                    </form>
                </div>
                <div class="table-responsive fu-table-container">
                    <form class="form-horizontal" name="fu_form3" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <tr>
                                <th>Complications</th> 
                                <th>1<sup>st</sup> week</th> 
                                <th>2<sup>nd</sup> week</th> 
                                <th>3<sup>rd</sup> week</th> 
                                <th>4<sup>th</sup> week</th> 
                                <th>2<sup>nd</sup> month</th> 
                                <th>3<sup>rd</sup> month</th> 
                                <th>4<sup>th</sup> month</th> 
                                <th>5<sup>th</sup> month</th> 
                                <th>6<sup>th</sup> month</th> 
                                <th>7<sup>th</sup> month</th> 
                                <th>8<sup>th</sup> month</th> 
                                <th>9<sup>th</sup> month</th> 
                                <th>10<sup>th</sup> month</th> 
                                <th>11<sup>th</sup> month</th> 
                                <th>12<sup>th</sup> month</th> 
                                <th>13<sup>th</sup> month</th> 
                                <th>14<sup>th</sup> month</th> 
                                <th>15<sup>th</sup> month</th> 
                                <th>16<sup>th</sup> month</th> 
                                <th>17<sup>th</sup> month</th> 
                                <th>18<sup>th</sup> month</th> 
                                <th>19<sup>th</sup> month</th> 
                                <th>20<sup>th</sup> month</th> 
                                <th>21<sup>th</sup> month</th> 
                                <th>22<sup>th</sup> month</th> 
                                <th>23<sup>th</sup> month</th> 
                                <th>24<sup>th</sup> month</th> 
                            </tr>
                            <tr>
                                <th>PAIN</th>
                                <td><input size ='8' name='comppain1stweek' type='text' value='<?php echo $form['comppain1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain1stweek'] ?></font></td>
                                <td><input size ='8' name='comppain2ndweek' type='text' value='<?php echo $form['comppain2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain2ndweek'] ?></font></td>
                                <td><input size ='8' name='comppain3rdweek' type='text' value='<?php echo $form['comppain3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain3rdweek'] ?></font></td>
                                <td><input size ='8' name='comppain4thweek' type='text' value='<?php echo $form['comppain4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain4thweek'] ?></font></td>
                                <td><input size ='8' name='comppain2ndmonth' type='text' value='<?php echo $form['comppain2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain2ndmonth'] ?></font></td>
                                <td><input size ='8' name='comppain3rdmonth' type='text' value='<?php echo $form['comppain3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain3rdmonth'] ?></font></td>
                                <td><input size ='8' name='comppain4thmonth' type='text' value='<?php echo $form['comppain4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain4thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain5thmonth' type='text' value='<?php echo $form['comppain5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain5thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain6thmonth' type='text' value='<?php echo $form['comppain6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain6thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain7thmonth' type='text' value='<?php echo $form['comppain7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain7thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain8thmonth' type='text' value='<?php echo $form['comppain8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain8thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain9thmonth' type='text' value='<?php echo $form['comppain9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain9thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain10thmonth' type='text' value='<?php echo $form['comppain10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain10thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain11thmonth' type='text' value='<?php echo $form['comppain11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain11thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain12thmonth' type='text' value='<?php echo $form['comppain12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain12thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain13thmonth' type='text' value='<?php echo $form['comppain13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain13thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain14thmonth' type='text' value='<?php echo $form['comppain14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain14thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain15thmonth' type='text' value='<?php echo $form['comppain15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain15thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain16thmonth' type='text' value='<?php echo $form['comppain16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain16thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain17thmonth' type='text' value='<?php echo $form['comppain17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain17thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain18thmonth' type='text' value='<?php echo $form['comppain18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain18thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain19thmonth' type='text' value='<?php echo $form['comppain19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain19thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain20thmonth' type='text' value='<?php echo $form['comppain20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain20thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain21thmonth' type='text' value='<?php echo $form['comppain21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain21thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain22thmonth' type='text' value='<?php echo $form['comppain22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain22thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain23thmonth' type='text' value='<?php echo $form['comppain23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain23thmonth'] ?></font></td>
                                <td><input size ='8' name='comppain24thmonth' type='text' value='<?php echo $form['comppain24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comppain24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>LEAK</th>
                                <td><input size ='8' name='compleak1stweek' type='text' value='<?php echo $form['compleak1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak1stweek'] ?></font></td>
                                <td><input size ='8' name='compleak2ndweek' type='text' value='<?php echo $form['compleak2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak2ndweek'] ?></font></td>
                                <td><input size ='8' name='compleak3rdweek' type='text' value='<?php echo $form['compleak3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak3rdweek'] ?></font></td>
                                <td><input size ='8' name='compleak4thweek' type='text' value='<?php echo $form['compleak4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak4thweek'] ?></font></td>
                                <td><input size ='8' name='compleak2ndmonth' type='text' value='<?php echo $form['compleak2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak2ndmonth'] ?></font></td>
                                <td><input size ='8' name='compleak3rdmonth' type='text' value='<?php echo $form['compleak3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak3rdmonth'] ?></font></td>
                                <td><input size ='8' name='compleak4thmonth' type='text' value='<?php echo $form['compleak4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak4thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak5thmonth' type='text' value='<?php echo $form['compleak5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak5thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak6thmonth' type='text' value='<?php echo $form['compleak6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak6thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak7thmonth' type='text' value='<?php echo $form['compleak7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak7thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak8thmonth' type='text' value='<?php echo $form['compleak8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak8thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak9thmonth' type='text' value='<?php echo $form['compleak9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak9thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak10thmonth' type='text' value='<?php echo $form['compleak10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak10thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak11thmonth' type='text' value='<?php echo $form['compleak11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak11thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak12thmonth' type='text' value='<?php echo $form['compleak12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak12thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak13thmonth' type='text' value='<?php echo $form['compleak13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak13thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak14thmonth' type='text' value='<?php echo $form['compleak14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak14thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak15thmonth' type='text' value='<?php echo $form['compleak15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak15thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak16thmonth' type='text' value='<?php echo $form['compleak16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak16thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak17thmonth' type='text' value='<?php echo $form['compleak17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak17thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak18thmonth' type='text' value='<?php echo $form['compleak18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak18thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak19thmonth' type='text' value='<?php echo $form['compleak19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak19thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak20thmonth' type='text' value='<?php echo $form['compleak20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak20thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak21thmonth' type='text' value='<?php echo $form['compleak21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak21thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak22thmonth' type='text' value='<?php echo $form['compleak22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak22thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak23thmonth' type='text' value='<?php echo $form['compleak23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak23thmonth'] ?></font></td>
                                <td><input size ='8' name='compleak24thmonth' type='text' value='<?php echo $form['compleak24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compleak24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>BLEEDING</th>
                                <td><input size ='8' name='compbleeding1stweek' type='text' value='<?php echo $form['compbleeding1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding1stweek'] ?></font></td>
                                <td><input size ='8' name='compbleeding2ndweek' type='text' value='<?php echo $form['compbleeding2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding2ndweek'] ?></font></td>
                                <td><input size ='8' name='compbleeding3rdweek' type='text' value='<?php echo $form['compbleeding3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding3rdweek'] ?></font></td>
                                <td><input size ='8' name='compbleeding4thweek' type='text' value='<?php echo $form['compbleeding4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding4thweek'] ?></font></td>
                                <td><input size ='8' name='compbleeding2ndmonth' type='text' value='<?php echo $form['compbleeding2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding2ndmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding3rdmonth' type='text' value='<?php echo $form['compbleeding3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding3rdmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding4thmonth' type='text' value='<?php echo $form['compbleeding4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding4thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding5thmonth' type='text' value='<?php echo $form['compbleeding5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding5thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding6thmonth' type='text' value='<?php echo $form['compbleeding6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding6thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding7thmonth' type='text' value='<?php echo $form['compbleeding7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding7thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding8thmonth' type='text' value='<?php echo $form['compbleeding8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding8thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding9thmonth' type='text' value='<?php echo $form['compbleeding9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding9thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding10thmonth' type='text' value='<?php echo $form['compbleeding10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding10thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding11thmonth' type='text' value='<?php echo $form['compbleeding11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding11thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding12thmonth' type='text' value='<?php echo $form['compbleeding12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding12thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding13thmonth' type='text' value='<?php echo $form['compbleeding13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding13thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding14thmonth' type='text' value='<?php echo $form['compbleeding14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding14thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding15thmonth' type='text' value='<?php echo $form['compbleeding15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding15thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding16thmonth' type='text' value='<?php echo $form['compbleeding16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding16thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding17thmonth' type='text' value='<?php echo $form['compbleeding17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding17thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding18thmonth' type='text' value='<?php echo $form['compbleeding18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding18thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding19thmonth' type='text' value='<?php echo $form['compbleeding19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding19thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding20thmonth' type='text' value='<?php echo $form['compbleeding20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding20thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding21thmonth' type='text' value='<?php echo $form['compbleeding21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding21thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding22thmonth' type='text' value='<?php echo $form['compbleeding22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding22thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding23thmonth' type='text' value='<?php echo $form['compbleeding23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding23thmonth'] ?></font></td>
                                <td><input size ='8' name='compbleeding24thmonth' type='text' value='<?php echo $form['compbleeding24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compbleeding24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>GERD</th>
                                <td><input size ='8' name='compgerd1stweek' type='text' value='<?php echo $form['compgerd1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd1stweek'] ?></font></td>
                                <td><input size ='8' name='compgerd2ndweek' type='text' value='<?php echo $form['compgerd2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd2ndweek'] ?></font></td>
                                <td><input size ='8' name='compgerd3rdweek' type='text' value='<?php echo $form['compgerd3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd3rdweek'] ?></font></td>
                                <td><input size ='8' name='compgerd4thweek' type='text' value='<?php echo $form['compgerd4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd4thweek'] ?></font></td>
                                <td><input size ='8' name='compgerd2ndmonth' type='text' value='<?php echo $form['compgerd2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd2ndmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd3rdmonth' type='text' value='<?php echo $form['compgerd3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd3rdmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd4thmonth' type='text' value='<?php echo $form['compgerd4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd4thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd5thmonth' type='text' value='<?php echo $form['compgerd5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd5thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd6thmonth' type='text' value='<?php echo $form['compgerd6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd6thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd7thmonth' type='text' value='<?php echo $form['compgerd7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd7thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd8thmonth' type='text' value='<?php echo $form['compgerd8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd8thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd9thmonth' type='text' value='<?php echo $form['compgerd9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd9thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd10thmonth' type='text' value='<?php echo $form['compgerd10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd10thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd11thmonth' type='text' value='<?php echo $form['compgerd11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd11thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd12thmonth' type='text' value='<?php echo $form['compgerd12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd12thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd13thmonth' type='text' value='<?php echo $form['compgerd13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd13thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd14thmonth' type='text' value='<?php echo $form['compgerd14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd14thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd15thmonth' type='text' value='<?php echo $form['compgerd15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd15thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd16thmonth' type='text' value='<?php echo $form['compgerd16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd16thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd17thmonth' type='text' value='<?php echo $form['compgerd17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd17thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd18thmonth' type='text' value='<?php echo $form['compgerd18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd18thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd19thmonth' type='text' value='<?php echo $form['compgerd19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd19thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd20thmonth' type='text' value='<?php echo $form['compgerd20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd20thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd21thmonth' type='text' value='<?php echo $form['compgerd21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd21thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd22thmonth' type='text' value='<?php echo $form['compgerd22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd22thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd23thmonth' type='text' value='<?php echo $form['compgerd23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd23thmonth'] ?></font></td>
                                <td><input size ='8' name='compgerd24thmonth' type='text' value='<?php echo $form['compgerd24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgerd24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>DVT</th>
                                <td><input size ='8' name='compdvt1stweek' type='text' value='<?php echo $form['compdvt1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt1stweek'] ?></font></td>
                                <td><input size ='8' name='compdvt2ndweek' type='text' value='<?php echo $form['compdvt2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt2ndweek'] ?></font></td>
                                <td><input size ='8' name='compdvt3rdweek' type='text' value='<?php echo $form['compdvt3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt3rdweek'] ?></font></td>
                                <td><input size ='8' name='compdvt4thweek' type='text' value='<?php echo $form['compdvt4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt4thweek'] ?></font></td>
                                <td><input size ='8' name='compdvt2ndmonth' type='text' value='<?php echo $form['compdvt2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt2ndmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt3rdmonth' type='text' value='<?php echo $form['compdvt3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt3rdmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt4thmonth' type='text' value='<?php echo $form['compdvt4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt4thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt5thmonth' type='text' value='<?php echo $form['compdvt5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt5thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt6thmonth' type='text' value='<?php echo $form['compdvt6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt6thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt7thmonth' type='text' value='<?php echo $form['compdvt7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt7thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt8thmonth' type='text' value='<?php echo $form['compdvt8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt8thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt9thmonth' type='text' value='<?php echo $form['compdvt9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt9thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt10thmonth' type='text' value='<?php echo $form['compdvt10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt10thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt11thmonth' type='text' value='<?php echo $form['compdvt11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt11thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt12thmonth' type='text' value='<?php echo $form['compdvt12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt12thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt13thmonth' type='text' value='<?php echo $form['compdvt13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt13thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt14thmonth' type='text' value='<?php echo $form['compdvt14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt14thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt15thmonth' type='text' value='<?php echo $form['compdvt15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt15thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt16thmonth' type='text' value='<?php echo $form['compdvt16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt16thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt17thmonth' type='text' value='<?php echo $form['compdvt17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt17thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt18thmonth' type='text' value='<?php echo $form['compdvt18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt18thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt19thmonth' type='text' value='<?php echo $form['compdvt19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt19thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt20thmonth' type='text' value='<?php echo $form['compdvt20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt20thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt21thmonth' type='text' value='<?php echo $form['compdvt21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt21thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt22thmonth' type='text' value='<?php echo $form['compdvt22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt22thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt23thmonth' type='text' value='<?php echo $form['compdvt23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt23thmonth'] ?></font></td>
                                <td><input size ='8' name='compdvt24thmonth' type='text' value='<?php echo $form['compdvt24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compdvt24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>HAIR LOSS</th>
                                <td><input size ='8' name='comphairloss1stweek' type='text' value='<?php echo $form['comphairloss1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss1stweek'] ?></font></td>
                                <td><input size ='8' name='comphairloss2ndweek' type='text' value='<?php echo $form['comphairloss2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss2ndweek'] ?></font></td>
                                <td><input size ='8' name='comphairloss3rdweek' type='text' value='<?php echo $form['comphairloss3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss3rdweek'] ?></font></td>
                                <td><input size ='8' name='comphairloss4thweek' type='text' value='<?php echo $form['comphairloss4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss4thweek'] ?></font></td>
                                <td><input size ='8' name='comphairloss2ndmonth' type='text' value='<?php echo $form['comphairloss2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss2ndmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss3rdmonth' type='text' value='<?php echo $form['comphairloss3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss3rdmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss4thmonth' type='text' value='<?php echo $form['comphairloss4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss4thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss5thmonth' type='text' value='<?php echo $form['comphairloss5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss5thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss6thmonth' type='text' value='<?php echo $form['comphairloss6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss6thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss7thmonth' type='text' value='<?php echo $form['comphairloss7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss7thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss8thmonth' type='text' value='<?php echo $form['comphairloss8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss8thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss9thmonth' type='text' value='<?php echo $form['comphairloss9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss9thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss10thmonth' type='text' value='<?php echo $form['comphairloss10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss10thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss11thmonth' type='text' value='<?php echo $form['comphairloss11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss11thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss12thmonth' type='text' value='<?php echo $form['comphairloss12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss12thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss13thmonth' type='text' value='<?php echo $form['comphairloss13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss13thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss14thmonth' type='text' value='<?php echo $form['comphairloss14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss14thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss15thmonth' type='text' value='<?php echo $form['comphairloss15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss15thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss16thmonth' type='text' value='<?php echo $form['comphairloss16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss16thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss17thmonth' type='text' value='<?php echo $form['comphairloss17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss17thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss18thmonth' type='text' value='<?php echo $form['comphairloss18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss18thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss19thmonth' type='text' value='<?php echo $form['comphairloss19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss19thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss20thmonth' type='text' value='<?php echo $form['comphairloss20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss20thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss21thmonth' type='text' value='<?php echo $form['comphairloss21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss21thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss22thmonth' type='text' value='<?php echo $form['comphairloss22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss22thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss23thmonth' type='text' value='<?php echo $form['comphairloss23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss23thmonth'] ?></font></td>
                                <td><input size ='8' name='comphairloss24thmonth' type='text' value='<?php echo $form['comphairloss24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['comphairloss24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>GALLSTONE</th>
                                <td><input size ='8' name='compgallstone1stweek' type='text' value='<?php echo $form['compgallstone1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone1stweek'] ?></font></td>
                                <td><input size ='8' name='compgallstone2ndweek' type='text' value='<?php echo $form['compgallstone2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone2ndweek'] ?></font></td>
                                <td><input size ='8' name='compgallstone3rdweek' type='text' value='<?php echo $form['compgallstone3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone3rdweek'] ?></font></td>
                                <td><input size ='8' name='compgallstone4thweek' type='text' value='<?php echo $form['compgallstone4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone4thweek'] ?></font></td>
                                <td><input size ='8' name='compgallstone2ndmonth' type='text' value='<?php echo $form['compgallstone2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone2ndmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone3rdmonth' type='text' value='<?php echo $form['compgallstone3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone3rdmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone4thmonth' type='text' value='<?php echo $form['compgallstone4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone4thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone5thmonth' type='text' value='<?php echo $form['compgallstone5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone5thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone6thmonth' type='text' value='<?php echo $form['compgallstone6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone6thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone7thmonth' type='text' value='<?php echo $form['compgallstone7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone7thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone8thmonth' type='text' value='<?php echo $form['compgallstone8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone8thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone9thmonth' type='text' value='<?php echo $form['compgallstone9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone9thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone10thmonth' type='text' value='<?php echo $form['compgallstone10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone10thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone11thmonth' type='text' value='<?php echo $form['compgallstone11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone11thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone12thmonth' type='text' value='<?php echo $form['compgallstone12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone12thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone13thmonth' type='text' value='<?php echo $form['compgallstone13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone13thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone14thmonth' type='text' value='<?php echo $form['compgallstone14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone14thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone15thmonth' type='text' value='<?php echo $form['compgallstone15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone15thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone16thmonth' type='text' value='<?php echo $form['compgallstone16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone16thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone17thmonth' type='text' value='<?php echo $form['compgallstone17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone17thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone18thmonth' type='text' value='<?php echo $form['compgallstone18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone18thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone19thmonth' type='text' value='<?php echo $form['compgallstone19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone19thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone20thmonth' type='text' value='<?php echo $form['compgallstone20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone20thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone21thmonth' type='text' value='<?php echo $form['compgallstone21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone21thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone22thmonth' type='text' value='<?php echo $form['compgallstone22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone22thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone23thmonth' type='text' value='<?php echo $form['compgallstone23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone23thmonth'] ?></font></td>
                                <td><input size ='8' name='compgallstone24thmonth' type='text' value='<?php echo $form['compgallstone24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['compgallstone24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td colspan="27"><input style="width: 700px;" name='compdesc' type='text' value='<?php echo $form['compdesc'] ?>' /><font face='verdana' color='red'><?php echo $error['compdesc'] ?></font></td>
                            </tr>


                        </table>
                        <div class="buttons_div1" >
                            <input name='com_fu_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                            <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                        </div>
                        <?php if ($message != ""): ?>
                            <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                    </form>
                </div>

                <div class="table-responsive fu-table-container">
                    <form class="form-horizontal" name="fu_form4" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <tr>
                                <th>APPTITE</th> 
                                <th>1<sup>st</sup> week</th> 
                                <th>2<sup>nd</sup> week</th> 
                                <th>3<sup>rd</sup> week</th> 
                                <th>4<sup>th</sup> week</th> 
                                <th>2<sup>nd</sup> month</th> 
                                <th>3<sup>rd</sup> month</th> 
                                <th>4<sup>th</sup> month</th> 
                                <th>5<sup>th</sup> month</th> 
                                <th>6<sup>th</sup> month</th> 
                                <th>7<sup>th</sup> month</th> 
                                <th>8<sup>th</sup> month</th> 
                                <th>9<sup>th</sup> month</th> 
                                <th>10<sup>th</sup> month</th> 
                                <th>11<sup>th</sup> month</th> 
                                <th>12<sup>th</sup> month</th> 
                                <th>13<sup>th</sup> month</th> 
                                <th>14<sup>th</sup> month</th> 
                                <th>15<sup>th</sup> month</th> 
                                <th>16<sup>th</sup> month</th> 
                                <th>17<sup>th</sup> month</th> 
                                <th>18<sup>th</sup> month</th> 
                                <th>19<sup>th</sup> month</th> 
                                <th>20<sup>th</sup> month</th> 
                                <th>21<sup>th</sup> month</th> 
                                <th>22<sup>th</sup> month</th> 
                                <th>23<sup>th</sup> month</th> 
                                <th>24<sup>th</sup> month</th> 
                            </tr>
                            <tr>
                                <th>Decrease</th>
                                <td><input size ='8' name='apptdecrease1stweek' type='text' value='<?php echo $form['apptdecrease1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease1stweek'] ?></font></td>
                                <td><input size ='8' name='apptdecrease2ndweek' type='text' value='<?php echo $form['apptdecrease2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease2ndweek'] ?></font></td>
                                <td><input size ='8' name='apptdecrease3rdweek' type='text' value='<?php echo $form['apptdecrease3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease3rdweek'] ?></font></td>
                                <td><input size ='8' name='apptdecrease4thweek' type='text' value='<?php echo $form['apptdecrease4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease4thweek'] ?></font></td>
                                <td><input size ='8' name='apptdecrease2ndmonth' type='text' value='<?php echo $form['apptdecrease2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease2ndmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease3rdmonth' type='text' value='<?php echo $form['apptdecrease3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease3rdmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease4thmonth' type='text' value='<?php echo $form['apptdecrease4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease4thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease5thmonth' type='text' value='<?php echo $form['apptdecrease5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease5thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease6thmonth' type='text' value='<?php echo $form['apptdecrease6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease6thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease7thmonth' type='text' value='<?php echo $form['apptdecrease7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease7thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease8thmonth' type='text' value='<?php echo $form['apptdecrease8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease8thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease9thmonth' type='text' value='<?php echo $form['apptdecrease9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease9thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease10thmonth' type='text' value='<?php echo $form['apptdecrease10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease10thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease11thmonth' type='text' value='<?php echo $form['apptdecrease11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease11thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease12thmonth' type='text' value='<?php echo $form['apptdecrease12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease12thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease13thmonth' type='text' value='<?php echo $form['apptdecrease13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease13thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease14thmonth' type='text' value='<?php echo $form['apptdecrease14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease14thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease15thmonth' type='text' value='<?php echo $form['apptdecrease15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease15thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease16thmonth' type='text' value='<?php echo $form['apptdecrease16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease16thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease17thmonth' type='text' value='<?php echo $form['apptdecrease17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease17thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease18thmonth' type='text' value='<?php echo $form['apptdecrease18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease18thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease19thmonth' type='text' value='<?php echo $form['apptdecrease19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease19thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease20thmonth' type='text' value='<?php echo $form['apptdecrease20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease20thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease21thmonth' type='text' value='<?php echo $form['apptdecrease21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease21thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease22thmonth' type='text' value='<?php echo $form['apptdecrease22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease22thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease23thmonth' type='text' value='<?php echo $form['apptdecrease23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease23thmonth'] ?></font></td>
                                <td><input size ='8' name='apptdecrease24thmonth' type='text' value='<?php echo $form['apptdecrease24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdecrease24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Increase</th>
                                <td><input size ='8' name='apptincrease1stweek' type='text' value='<?php echo $form['apptincrease1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease1stweek'] ?></font></td>
                                <td><input size ='8' name='apptincrease2ndweek' type='text' value='<?php echo $form['apptincrease2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease2ndweek'] ?></font></td>
                                <td><input size ='8' name='apptincrease3rdweek' type='text' value='<?php echo $form['apptincrease3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease3rdweek'] ?></font></td>
                                <td><input size ='8' name='apptincrease4thweek' type='text' value='<?php echo $form['apptincrease4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease4thweek'] ?></font></td>
                                <td><input size ='8' name='apptincrease2ndmonth' type='text' value='<?php echo $form['apptincrease2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease2ndmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease3rdmonth' type='text' value='<?php echo $form['apptincrease3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease3rdmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease4thmonth' type='text' value='<?php echo $form['apptincrease4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease4thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease5thmonth' type='text' value='<?php echo $form['apptincrease5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease5thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease6thmonth' type='text' value='<?php echo $form['apptincrease6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease6thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease7thmonth' type='text' value='<?php echo $form['apptincrease7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease7thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease8thmonth' type='text' value='<?php echo $form['apptincrease8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease8thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease9thmonth' type='text' value='<?php echo $form['apptincrease9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease9thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease10thmonth' type='text' value='<?php echo $form['apptincrease10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease10thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease11thmonth' type='text' value='<?php echo $form['apptincrease11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease11thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease12thmonth' type='text' value='<?php echo $form['apptincrease12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease12thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease13thmonth' type='text' value='<?php echo $form['apptincrease13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease13thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease14thmonth' type='text' value='<?php echo $form['apptincrease14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease14thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease15thmonth' type='text' value='<?php echo $form['apptincrease15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease15thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease16thmonth' type='text' value='<?php echo $form['apptincrease16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease16thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease17thmonth' type='text' value='<?php echo $form['apptincrease17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease17thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease18thmonth' type='text' value='<?php echo $form['apptincrease18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease18thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease19thmonth' type='text' value='<?php echo $form['apptincrease19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease19thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease20thmonth' type='text' value='<?php echo $form['apptincrease20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease20thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease21thmonth' type='text' value='<?php echo $form['apptincrease21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease21thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease22thmonth' type='text' value='<?php echo $form['apptincrease22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease22thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease23thmonth' type='text' value='<?php echo $form['apptincrease23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease23thmonth'] ?></font></td>
                                <td><input size ='8' name='apptincrease24thmonth' type='text' value='<?php echo $form['apptincrease24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptincrease24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Not Changed</th>
                                <td><input size ='8' name='apptnotchange1stweek' type='text' value='<?php echo $form['apptnotchange1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange1stweek'] ?></font></td>
                                <td><input size ='8' name='apptnotchange2ndweek' type='text' value='<?php echo $form['apptnotchange2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange2ndweek'] ?></font></td>
                                <td><input size ='8' name='apptnotchange3rdweek' type='text' value='<?php echo $form['apptnotchange3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange3rdweek'] ?></font></td>
                                <td><input size ='8' name='apptnotchange4thweek' type='text' value='<?php echo $form['apptnotchange4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange4thweek'] ?></font></td>
                                <td><input size ='8' name='apptnotchange2ndmonth' type='text' value='<?php echo $form['apptnotchange2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange2ndmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange3rdmonth' type='text' value='<?php echo $form['apptnotchange3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange3rdmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange4thmonth' type='text' value='<?php echo $form['apptnotchange4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange4thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange5thmonth' type='text' value='<?php echo $form['apptnotchange5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange5thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange6thmonth' type='text' value='<?php echo $form['apptnotchange6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange6thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange7thmonth' type='text' value='<?php echo $form['apptnotchange7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange7thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange8thmonth' type='text' value='<?php echo $form['apptnotchange8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange8thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange9thmonth' type='text' value='<?php echo $form['apptnotchange9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange9thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange10thmonth' type='text' value='<?php echo $form['apptnotchange10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange10thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange11thmonth' type='text' value='<?php echo $form['apptnotchange11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange11thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange12thmonth' type='text' value='<?php echo $form['apptnotchange12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange12thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange13thmonth' type='text' value='<?php echo $form['apptnotchange13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange13thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange14thmonth' type='text' value='<?php echo $form['apptnotchange14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange14thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange15thmonth' type='text' value='<?php echo $form['apptnotchange15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange15thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange16thmonth' type='text' value='<?php echo $form['apptnotchange16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange16thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange17thmonth' type='text' value='<?php echo $form['apptnotchange17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange17thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange18thmonth' type='text' value='<?php echo $form['apptnotchange18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange18thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange19thmonth' type='text' value='<?php echo $form['apptnotchange19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange19thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange20thmonth' type='text' value='<?php echo $form['apptnotchange20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange20thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange21thmonth' type='text' value='<?php echo $form['apptnotchange21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange21thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange22thmonth' type='text' value='<?php echo $form['apptnotchange22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange22thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange23thmonth' type='text' value='<?php echo $form['apptnotchange23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange23thmonth'] ?></font></td>
                                <td><input size ='8' name='apptnotchange24thmonth' type='text' value='<?php echo $form['apptnotchange24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['apptnotchange24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td colspan="27"><input style="width: 700px;" name='apptdesc' type='text' value='<?php echo $form['apptdesc'] ?>' /><font face='verdana' color='red'><?php echo $error['apptdesc'] ?></font></td>
                            </tr>
                        </table>
                        <div class="buttons_div1" >
                            <input name='com_fu_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                            <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                        </div>
                        <?php if ($message != ""): ?>
                            <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                    </form>
                </div>

                <div class="table-responsive fu-table-container">
                    <form class="form-horizontal" name="fu_form5" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <tr>
                                <th>Taste Change</th> 
                                <th>1<sup>st</sup> week</th> 
                                <th>2<sup>nd</sup> week</th> 
                                <th>3<sup>rd</sup> week</th> 
                                <th>4<sup>th</sup> week</th> 
                                <th>2<sup>nd</sup> month</th> 
                                <th>3<sup>rd</sup> month</th> 
                                <th>4<sup>th</sup> month</th> 
                                <th>5<sup>th</sup> month</th> 
                                <th>6<sup>th</sup> month</th> 
                                <th>7<sup>th</sup> month</th> 
                                <th>8<sup>th</sup> month</th> 
                                <th>9<sup>th</sup> month</th> 
                                <th>10<sup>th</sup> month</th> 
                                <th>11<sup>th</sup> month</th> 
                                <th>12<sup>th</sup> month</th> 
                                <th>13<sup>th</sup> month</th> 
                                <th>14<sup>th</sup> month</th> 
                                <th>15<sup>th</sup> month</th> 
                                <th>16<sup>th</sup> month</th> 
                                <th>17<sup>th</sup> month</th> 
                                <th>18<sup>th</sup> month</th> 
                                <th>19<sup>th</sup> month</th> 
                                <th>20<sup>th</sup> month</th> 
                                <th>21<sup>th</sup> month</th> 
                                <th>22<sup>th</sup> month</th> 
                                <th>23<sup>th</sup> month</th> 
                                <th>24<sup>th</sup> month</th> 
                            </tr>
                            <tr>
                                <th>NA (پفك - لواشك)</th>
                                <td>
                                    <?= $this->Select("", "tastena1stweek", $form, $error, "combo(Decrease/Increase/Not Change)", true, "", "", "1/2/3") ?>
                                </td>
                                <td>
                                    <?= $this->Select("", "tastena2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)", true, "", "", "1/2/3") ?>
                                </td>
                                <td>
                                    <?= $this->Select("", "tastena3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)", true, "", "", "1/2/3") ?>
                                </td>
                                <td><?= $this->Select("", "tastena4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena4thweek'] ?></font></td>
                                <td><?= $this->Select("", "tastena2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastena24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastena24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>K (موز - بادمجان)</th>
                                <td><?= $this->Select("", "tastek1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek1stweek'] ?></font></td>
                                <td><?= $this->Select("", "tastek2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "tastek3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "tastek4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek4thweek'] ?></font></td>
                                <td><?= $this->Select("", "tastek2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastek24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastek24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>CHO (نان - برنج)</th>
                                <td><?= $this->Select("", "tastecho1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho1stweek'] ?></font></td>
                                <td><?= $this->Select("", "tastecho2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "tastecho3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "tastecho4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho4thweek'] ?></font></td>
                                <td><?= $this->Select("", "tastecho2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tastecho24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tastecho24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>GLUCOSE (بستني - شيريني)</th>
                                <td><?= $this->Select("", "tasteglucose1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose1stweek'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose4thweek'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "tasteglucose24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['tasteglucose24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td colspan="27"><input style="width: 700px;" name='tastedesc' type='text' value='<?php echo $form['tastedesc'] ?>' /><font face='verdana' color='red'><?php echo $error['tastedesc'] ?></font></td>
                            </tr>
                        </table>
                        <div class="buttons_div1" >
                            <input name='com_fu_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                            <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                        </div>
                        <?php if ($message != ""): ?>
                            <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                    </form>
                </div>

                <div class="table-responsive fu-table-container">
                    <form class="form-horizontal" name="fu_form6" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <tr>
                                <th>Exercise</th> 
                                <th>1<sup>st</sup> week</th> 
                                <th>2<sup>nd</sup> week</th> 
                                <th>3<sup>rd</sup> week</th> 
                                <th>4<sup>th</sup> week</th> 
                                <th>2<sup>nd</sup> month</th> 
                                <th>3<sup>rd</sup> month</th> 
                                <th>4<sup>th</sup> month</th> 
                                <th>5<sup>th</sup> month</th> 
                                <th>6<sup>th</sup> month</th> 
                                <th>7<sup>th</sup> month</th> 
                                <th>8<sup>th</sup> month</th> 
                                <th>9<sup>th</sup> month</th> 
                                <th>10<sup>th</sup> month</th> 
                                <th>11<sup>th</sup> month</th> 
                                <th>12<sup>th</sup> month</th> 
                                <th>13<sup>th</sup> month</th> 
                                <th>14<sup>th</sup> month</th> 
                                <th>15<sup>th</sup> month</th> 
                                <th>16<sup>th</sup> month</th> 
                                <th>17<sup>th</sup> month</th> 
                                <th>18<sup>th</sup> month</th> 
                                <th>19<sup>th</sup> month</th> 
                                <th>20<sup>th</sup> month</th> 
                                <th>21<sup>th</sup> month</th> 
                                <th>22<sup>th</sup> month</th> 
                                <th>23<sup>th</sup> month</th> 
                                <th>24<sup>th</sup> month</th> 
                            </tr>
                            <tr>
                                <th>Sendentary(فقط انجام فعاليت هاي روزانه)</th>
                                <td><input size ='8' name='exercisesedentary1stweek' type='text' value='<?php echo $form['exercisesedentary1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary1stweek'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary2ndweek' type='text' value='<?php echo $form['exercisesedentary2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary2ndweek'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary3rdweek' type='text' value='<?php echo $form['exercisesedentary3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary3rdweek'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary4thweek' type='text' value='<?php echo $form['exercisesedentary4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary4thweek'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary2ndmonth' type='text' value='<?php echo $form['exercisesedentary2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary2ndmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary3rdmonth' type='text' value='<?php echo $form['exercisesedentary3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary3rdmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary4thmonth' type='text' value='<?php echo $form['exercisesedentary4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary4thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary5thmonth' type='text' value='<?php echo $form['exercisesedentary5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary5thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary6thmonth' type='text' value='<?php echo $form['exercisesedentary6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary6thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary7thmonth' type='text' value='<?php echo $form['exercisesedentary7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary7thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary8thmonth' type='text' value='<?php echo $form['exercisesedentary8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary8thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary9thmonth' type='text' value='<?php echo $form['exercisesedentary9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary9thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary10thmonth' type='text' value='<?php echo $form['exercisesedentary10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary10thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary11thmonth' type='text' value='<?php echo $form['exercisesedentary11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary11thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary12thmonth' type='text' value='<?php echo $form['exercisesedentary12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary12thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary13thmonth' type='text' value='<?php echo $form['exercisesedentary13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary13thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary14thmonth' type='text' value='<?php echo $form['exercisesedentary14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary14thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary15thmonth' type='text' value='<?php echo $form['exercisesedentary15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary15thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary16thmonth' type='text' value='<?php echo $form['exercisesedentary16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary16thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary17thmonth' type='text' value='<?php echo $form['exercisesedentary17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary17thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary18thmonth' type='text' value='<?php echo $form['exercisesedentary18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary18thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary19thmonth' type='text' value='<?php echo $form['exercisesedentary19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary19thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary20thmonth' type='text' value='<?php echo $form['exercisesedentary20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary20thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary21thmonth' type='text' value='<?php echo $form['exercisesedentary21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary21thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary22thmonth' type='text' value='<?php echo $form['exercisesedentary22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary22thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary23thmonth' type='text' value='<?php echo $form['exercisesedentary23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary23thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisesedentary24thmonth' type='text' value='<?php echo $form['exercisesedentary24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisesedentary24thmonth'] ?></font></td>

                            </tr>
                            <tr>
                                <th>Hypo Active(ورزش يا پياده روي گاهگاهي)</th>
                                <td><input size ='8' name='exercisehypoactive1stweek' type='text' value='<?php echo $form['exercisehypoactive1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive1stweek'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive2ndweek' type='text' value='<?php echo $form['exercisehypoactive2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive2ndweek'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive3rdweek' type='text' value='<?php echo $form['exercisehypoactive3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive3rdweek'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive4thweek' type='text' value='<?php echo $form['exercisehypoactive4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive4thweek'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive2ndmonth' type='text' value='<?php echo $form['exercisehypoactive2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive2ndmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive3rdmonth' type='text' value='<?php echo $form['exercisehypoactive3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive3rdmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive4thmonth' type='text' value='<?php echo $form['exercisehypoactive4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive4thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive5thmonth' type='text' value='<?php echo $form['exercisehypoactive5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive5thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive6thmonth' type='text' value='<?php echo $form['exercisehypoactive6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive6thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive7thmonth' type='text' value='<?php echo $form['exercisehypoactive7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive7thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive8thmonth' type='text' value='<?php echo $form['exercisehypoactive8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive8thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive9thmonth' type='text' value='<?php echo $form['exercisehypoactive9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive9thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive10thmonth' type='text' value='<?php echo $form['exercisehypoactive10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive10thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive11thmonth' type='text' value='<?php echo $form['exercisehypoactive11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive11thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive12thmonth' type='text' value='<?php echo $form['exercisehypoactive12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive12thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive13thmonth' type='text' value='<?php echo $form['exercisehypoactive13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive13thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive14thmonth' type='text' value='<?php echo $form['exercisehypoactive14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive14thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive15thmonth' type='text' value='<?php echo $form['exercisehypoactive15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive15thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive16thmonth' type='text' value='<?php echo $form['exercisehypoactive16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive16thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive17thmonth' type='text' value='<?php echo $form['exercisehypoactive17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive17thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive18thmonth' type='text' value='<?php echo $form['exercisehypoactive18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive18thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive19thmonth' type='text' value='<?php echo $form['exercisehypoactive19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive19thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive20thmonth' type='text' value='<?php echo $form['exercisehypoactive20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive20thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive21thmonth' type='text' value='<?php echo $form['exercisehypoactive21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive21thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive22thmonth' type='text' value='<?php echo $form['exercisehypoactive22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive22thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive23thmonth' type='text' value='<?php echo $form['exercisehypoactive23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive23thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehypoactive24thmonth' type='text' value='<?php echo $form['exercisehypoactive24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehypoactive24thmonth'] ?></font></td>
                            </tr>

                            <tr>
                                <th>Active(ورزش منظم حداقل3بار در هفته)</th>
                                <td><input size ='8' name='exerciseactive1stweek' type='text' value='<?php echo $form['exerciseactive1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive1stweek'] ?></font></td>
                                <td><input size ='8' name='exerciseactive2ndweek' type='text' value='<?php echo $form['exerciseactive2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive2ndweek'] ?></font></td>
                                <td><input size ='8' name='exerciseactive3rdweek' type='text' value='<?php echo $form['exerciseactive3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive3rdweek'] ?></font></td>
                                <td><input size ='8' name='exerciseactive4thweek' type='text' value='<?php echo $form['exerciseactive4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive4thweek'] ?></font></td>
                                <td><input size ='8' name='exerciseactive2ndmonth' type='text' value='<?php echo $form['exerciseactive2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive2ndmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive3rdmonth' type='text' value='<?php echo $form['exerciseactive3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive3rdmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive4thmonth' type='text' value='<?php echo $form['exerciseactive4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive4thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive5thmonth' type='text' value='<?php echo $form['exerciseactive5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive5thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive6thmonth' type='text' value='<?php echo $form['exerciseactive6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive6thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive7thmonth' type='text' value='<?php echo $form['exerciseactive7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive7thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive8thmonth' type='text' value='<?php echo $form['exerciseactive8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive8thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive9thmonth' type='text' value='<?php echo $form['exerciseactive9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive9thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive10thmonth' type='text' value='<?php echo $form['exerciseactive10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive10thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive11thmonth' type='text' value='<?php echo $form['exerciseactive11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive11thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive12thmonth' type='text' value='<?php echo $form['exerciseactive12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive12thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive13thmonth' type='text' value='<?php echo $form['exerciseactive13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive13thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive14thmonth' type='text' value='<?php echo $form['exerciseactive14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive14thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive15thmonth' type='text' value='<?php echo $form['exerciseactive15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive15thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive16thmonth' type='text' value='<?php echo $form['exerciseactive16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive16thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive17thmonth' type='text' value='<?php echo $form['exerciseactive17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive17thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive18thmonth' type='text' value='<?php echo $form['exerciseactive18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive18thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive19thmonth' type='text' value='<?php echo $form['exerciseactive19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive19thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive20thmonth' type='text' value='<?php echo $form['exerciseactive20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive20thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive21thmonth' type='text' value='<?php echo $form['exerciseactive21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive21thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive22thmonth' type='text' value='<?php echo $form['exerciseactive22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive22thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive23thmonth' type='text' value='<?php echo $form['exerciseactive23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive23thmonth'] ?></font></td>
                                <td><input size ='8' name='exerciseactive24thmonth' type='text' value='<?php echo $form['exerciseactive24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exerciseactive24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Hyper Active(ورزش حرفه اي)</th>
                                <td><input size ='8' name='exercisehyperactive1stweek' type='text' value='<?php echo $form['exercisehyperactive1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive1stweek'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive2ndweek' type='text' value='<?php echo $form['exercisehyperactive2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive2ndweek'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive3rdweek' type='text' value='<?php echo $form['exercisehyperactive3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive3rdweek'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive4thweek' type='text' value='<?php echo $form['exercisehyperactive4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive4thweek'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive2ndmonth' type='text' value='<?php echo $form['exercisehyperactive2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive2ndmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive3rdmonth' type='text' value='<?php echo $form['exercisehyperactive3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive3rdmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive4thmonth' type='text' value='<?php echo $form['exercisehyperactive4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive4thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive5thmonth' type='text' value='<?php echo $form['exercisehyperactive5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive5thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive6thmonth' type='text' value='<?php echo $form['exercisehyperactive6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive6thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive7thmonth' type='text' value='<?php echo $form['exercisehyperactive7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive7thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive8thmonth' type='text' value='<?php echo $form['exercisehyperactive8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive8thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive9thmonth' type='text' value='<?php echo $form['exercisehyperactive9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive9thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive10thmonth' type='text' value='<?php echo $form['exercisehyperactive10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive10thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive11thmonth' type='text' value='<?php echo $form['exercisehyperactive11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive11thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive12thmonth' type='text' value='<?php echo $form['exercisehyperactive12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive12thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive13thmonth' type='text' value='<?php echo $form['exercisehyperactive13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive13thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive14thmonth' type='text' value='<?php echo $form['exercisehyperactive14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive14thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive15thmonth' type='text' value='<?php echo $form['exercisehyperactive15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive15thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive16thmonth' type='text' value='<?php echo $form['exercisehyperactive16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive16thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive17thmonth' type='text' value='<?php echo $form['exercisehyperactive17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive17thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive18thmonth' type='text' value='<?php echo $form['exercisehyperactive18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive18thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive19thmonth' type='text' value='<?php echo $form['exercisehyperactive19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive19thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive20thmonth' type='text' value='<?php echo $form['exercisehyperactive20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive20thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive21thmonth' type='text' value='<?php echo $form['exercisehyperactive21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive21thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive22thmonth' type='text' value='<?php echo $form['exercisehyperactive22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive22thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive23thmonth' type='text' value='<?php echo $form['exercisehyperactive23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive23thmonth'] ?></font></td>
                                <td><input size ='8' name='exercisehyperactive24thmonth' type='text' value='<?php echo $form['exercisehyperactive24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisehyperactive24thmonth'] ?></font></td>
                            </tr>

                            <tr>
                                <th>Description</th>
                                <td colspan="27"><input style="width: 700px;" name='exercisedesc' type='text' value='<?php echo $form['exercisedesc'] ?>' /><font face='verdana' color='red'><?php echo $error['exercisedesc'] ?></font></td>
                            </tr>
                        </table>
                        <div class="buttons_div1" >
                            <input name='com_fu_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                            <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                        </div>
                        <?php if ($message != ""): ?>
                            <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                    </form>
                </div>


                <div class="table-responsive fu-table-container">
                    <form class="form-horizontal" name="fu_form6" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <tr>
                                <th>Quality Of Life</th> 
                                <th>1<sup>st</sup> week</th> 
                                <th>2<sup>nd</sup> week</th> 
                                <th>3<sup>rd</sup> week</th> 
                                <th>4<sup>th</sup> week</th> 
                                <th>2<sup>nd</sup> month</th> 
                                <th>3<sup>rd</sup> month</th> 
                                <th>4<sup>th</sup> month</th> 
                                <th>5<sup>th</sup> month</th> 
                                <th>6<sup>th</sup> month</th> 
                                <th>7<sup>th</sup> month</th> 
                                <th>8<sup>th</sup> month</th> 
                                <th>9<sup>th</sup> month</th> 
                                <th>10<sup>th</sup> month</th> 
                                <th>11<sup>th</sup> month</th> 
                                <th>12<sup>th</sup> month</th> 
                                <th>13<sup>th</sup> month</th> 
                                <th>14<sup>th</sup> month</th> 
                                <th>15<sup>th</sup> month</th> 
                                <th>16<sup>th</sup> month</th> 
                                <th>17<sup>th</sup> month</th> 
                                <th>18<sup>th</sup> month</th> 
                                <th>19<sup>th</sup> month</th> 
                                <th>20<sup>th</sup> month</th> 
                                <th>21<sup>th</sup> month</th> 
                                <th>22<sup>th</sup> month</th> 
                                <th>23<sup>th</sup> month</th> 
                                <th>24<sup>th</sup> month</th> 
                            </tr>
                            <tr>
                                <th>Sexuality</th>
                                <td><?= $this->Select("", "qlifesexuality1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality1stweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality4thweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesexuality24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesexuality24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Self Confidence</th>
                                <td><?= $this->Select("", "qlifeselfconfidence1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence1stweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence4thweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeselfconfidence24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeselfconfidence24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Sleep Time</th>
                                <td><?= $this->Select("", "qlifesleeptime1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime1stweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime4thweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleeptime24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleeptime24thmonth'] ?></font></td>
                            </tr>

                            <tr>
                                <th>Sleep Quality</th>
                                <td><?= $this->Select("", "qlifesleepquality1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality1stweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality4thweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepquality24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepquality24thmonth'] ?></font></td>
                            </tr>

                            <tr>
                                <th>Sleep Regularity</th>
                                <td><?= $this->Select("", "qlifesleepregularity1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity1stweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity4thweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifesleepregularity24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifesleepregularity24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Eating Regularity</th>
                                <td><?= $this->Select("", "qlifeeatingregularity1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity1stweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity4thweek'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "qlifeeatingregularity24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['qlifeeatingregularity24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td colspan="27"><input style="width: 700px;" name='qlifedesc' type='text' value='<?php echo $form['qlifedesc'] ?>' /><font face='verdana' color='red'><?php echo $error['qlifedesc'] ?></font></td>
                            </tr>
                        </table>
                        <div class="buttons_div1" >
                            <input name='com_fu_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                            <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                        </div>
                        <?php if ($message != ""): ?>
                            <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                    </form>
                </div>



                <div class="table-responsive fu-table-container">
                    <form class="form-horizontal" name="fu_form7" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <tr>
                                <th>Changes in Medication</th> 
                                <th>1<sup>st</sup> week</th> 
                                <th>2<sup>nd</sup> week</th> 
                                <th>3<sup>rd</sup> week</th> 
                                <th>4<sup>th</sup> week</th> 
                                <th>2<sup>nd</sup> month</th> 
                                <th>3<sup>rd</sup> month</th> 
                                <th>4<sup>th</sup> month</th> 
                                <th>5<sup>th</sup> month</th> 
                                <th>6<sup>th</sup> month</th> 
                                <th>7<sup>th</sup> month</th> 
                                <th>8<sup>th</sup> month</th> 
                                <th>9<sup>th</sup> month</th> 
                                <th>10<sup>th</sup> month</th> 
                                <th>11<sup>th</sup> month</th> 
                                <th>12<sup>th</sup> month</th> 
                                <th>13<sup>th</sup> month</th> 
                                <th>14<sup>th</sup> month</th> 
                                <th>15<sup>th</sup> month</th> 
                                <th>16<sup>th</sup> month</th> 
                                <th>17<sup>th</sup> month</th> 
                                <th>18<sup>th</sup> month</th> 
                                <th>19<sup>th</sup> month</th> 
                                <th>20<sup>th</sup> month</th> 
                                <th>21<sup>th</sup> month</th> 
                                <th>22<sup>th</sup> month</th> 
                                <th>23<sup>th</sup> month</th> 
                                <th>24<sup>th</sup> month</th> 
                            </tr>
                            <tr>
                                <th>Insulin</th>
                                <td><?= $this->Select("", "drugcinsulin1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin1stweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin4thweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcinsulin24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcinsulin24thmonth'] ?></font></td>
                            </tr>

                            <tr>
                                <th>Diabet Pills</th>
                                <td><?= $this->Select("", "drugcdiabetepills1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills1stweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills4thweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcdiabetepills24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcdiabetepills24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Blood Pressure Drugs</th>
                                <td><?= $this->Select("", "drugcbloodpressure1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure1stweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure4thweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcbloodpressure24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcbloodpressure24thmonth'] ?></font></td>
                            </tr>

                            <tr>
                                <th>Thyroid Drugs</th>
                                <td><?= $this->Select("", "drugcthyroiddrugs1stweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs1stweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs2ndweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs2ndweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs3rdweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs3rdweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs4thweek", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs4thweek'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs2ndmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs2ndmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs3rdmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs3rdmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs4thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs4thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs5thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs5thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs6thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs6thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs7thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs7thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs8thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs8thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs9thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs9thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs10thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs10thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs11thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs11thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs12thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs12thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs13thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs13thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs14thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs14thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs15thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs15thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs16thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs16thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs17thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs17thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs18thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs18thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs19thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs19thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs20thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs20thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs21thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs21thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs22thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs22thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs23thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs23thmonth'] ?></font></td>
                                <td><?= $this->Select("", "drugcthyroiddrugs24thmonth", $form, $error, "combo(Decrease/Increase/Not Change)",true,"","","1/2/3") ?><font face='verdana' color='red'><?php echo $error['drugcthyroiddrugs24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td colspan="27"><input style="width: 700px;" name='drugcdesc' type='text' value='<?php echo $form['drugcdesc'] ?>' /><font face='verdana' color='red'><?php echo $error['drugcdesc'] ?></font></td>
                            </tr>
                        </table>
                        <div class="buttons_div1" >
                            <input name='com_fu_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                            <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                        </div>
                        <?php if ($message != ""): ?>
                            <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                    </form>
                </div>


                <div class="table-responsive fu-table-container">
                    <form class="form-horizontal" name="fu_form8" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <tr>
                                <th>ميزان رعايت دستور غذايي</th> 
                                <th>1<sup>st</sup> week</th> 
                                <th>2<sup>nd</sup> week</th> 
                                <th>3<sup>rd</sup> week</th> 
                                <th>4<sup>th</sup> week</th> 
                                <th>2<sup>nd</sup> month</th> 
                                <th>3<sup>rd</sup> month</th> 
                                <th>4<sup>th</sup> month</th> 
                                <th>5<sup>th</sup> month</th> 
                                <th>6<sup>th</sup> month</th> 
                                <th>7<sup>th</sup> month</th> 
                                <th>8<sup>th</sup> month</th> 
                                <th>9<sup>th</sup> month</th> 
                                <th>10<sup>th</sup> month</th> 
                                <th>11<sup>th</sup> month</th> 
                                <th>12<sup>th</sup> month</th> 
                                <th>13<sup>th</sup> month</th> 
                                <th>14<sup>th</sup> month</th> 
                                <th>15<sup>th</sup> month</th> 
                                <th>16<sup>th</sup> month</th> 
                                <th>17<sup>th</sup> month</th> 
                                <th>18<sup>th</sup> month</th> 
                                <th>19<sup>th</sup> month</th> 
                                <th>20<sup>th</sup> month</th> 
                                <th>21<sup>th</sup> month</th> 
                                <th>22<sup>th</sup> month</th> 
                                <th>23<sup>th</sup> month</th> 
                                <th>24<sup>th</sup> month</th> 
                            </tr>
                            <tr>
                                <th>اصلا قادر به رعایت کردن نیستم و کمتر می خورم</th>
                                <td><input size ='8' name='dietonobservelit1stweek' type='text' value='<?php echo $form['dietonobservelit1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit1stweek'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit2ndweek' type='text' value='<?php echo $form['dietonobservelit2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit2ndweek'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit3rdweek' type='text' value='<?php echo $form['dietonobservelit3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit3rdweek'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit4thweek' type='text' value='<?php echo $form['dietonobservelit4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit4thweek'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit2ndmonth' type='text' value='<?php echo $form['dietonobservelit2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit2ndmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit3rdmonth' type='text' value='<?php echo $form['dietonobservelit3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit3rdmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit4thmonth' type='text' value='<?php echo $form['dietonobservelit4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit4thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit5thmonth' type='text' value='<?php echo $form['dietonobservelit5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit5thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit6thmonth' type='text' value='<?php echo $form['dietonobservelit6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit6thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit7thmonth' type='text' value='<?php echo $form['dietonobservelit7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit7thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit8thmonth' type='text' value='<?php echo $form['dietonobservelit8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit8thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit9thmonth' type='text' value='<?php echo $form['dietonobservelit9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit9thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit10thmonth' type='text' value='<?php echo $form['dietonobservelit10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit10thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit11thmonth' type='text' value='<?php echo $form['dietonobservelit11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit11thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit12thmonth' type='text' value='<?php echo $form['dietonobservelit12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit12thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit13thmonth' type='text' value='<?php echo $form['dietonobservelit13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit13thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit14thmonth' type='text' value='<?php echo $form['dietonobservelit14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit14thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit15thmonth' type='text' value='<?php echo $form['dietonobservelit15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit15thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit16thmonth' type='text' value='<?php echo $form['dietonobservelit16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit16thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit17thmonth' type='text' value='<?php echo $form['dietonobservelit17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit17thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit18thmonth' type='text' value='<?php echo $form['dietonobservelit18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit18thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit19thmonth' type='text' value='<?php echo $form['dietonobservelit19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit19thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit20thmonth' type='text' value='<?php echo $form['dietonobservelit20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit20thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit21thmonth' type='text' value='<?php echo $form['dietonobservelit21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit21thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit22thmonth' type='text' value='<?php echo $form['dietonobservelit22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit22thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit23thmonth' type='text' value='<?php echo $form['dietonobservelit23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit23thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservelit24thmonth' type='text' value='<?php echo $form['dietonobservelit24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservelit24thmonth'] ?></font></td>
                            </tr>

                            <tr>
                                <th>گاه گاهی کمتر مصرف می کنم</th>
                                <td><input size ='8' name='dietocassionlit1stweek' type='text' value='<?php echo $form['dietocassionlit1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit1stweek'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit2ndweek' type='text' value='<?php echo $form['dietocassionlit2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit2ndweek'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit3rdweek' type='text' value='<?php echo $form['dietocassionlit3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit3rdweek'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit4thweek' type='text' value='<?php echo $form['dietocassionlit4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit4thweek'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit2ndmonth' type='text' value='<?php echo $form['dietocassionlit2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit2ndmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit3rdmonth' type='text' value='<?php echo $form['dietocassionlit3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit3rdmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit4thmonth' type='text' value='<?php echo $form['dietocassionlit4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit4thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit5thmonth' type='text' value='<?php echo $form['dietocassionlit5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit5thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit6thmonth' type='text' value='<?php echo $form['dietocassionlit6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit6thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit7thmonth' type='text' value='<?php echo $form['dietocassionlit7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit7thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit8thmonth' type='text' value='<?php echo $form['dietocassionlit8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit8thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit9thmonth' type='text' value='<?php echo $form['dietocassionlit9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit9thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit10thmonth' type='text' value='<?php echo $form['dietocassionlit10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit10thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit11thmonth' type='text' value='<?php echo $form['dietocassionlit11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit11thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit12thmonth' type='text' value='<?php echo $form['dietocassionlit12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit12thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit13thmonth' type='text' value='<?php echo $form['dietocassionlit13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit13thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit14thmonth' type='text' value='<?php echo $form['dietocassionlit14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit14thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit15thmonth' type='text' value='<?php echo $form['dietocassionlit15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit15thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit16thmonth' type='text' value='<?php echo $form['dietocassionlit16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit16thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit17thmonth' type='text' value='<?php echo $form['dietocassionlit17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit17thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit18thmonth' type='text' value='<?php echo $form['dietocassionlit18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit18thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit19thmonth' type='text' value='<?php echo $form['dietocassionlit19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit19thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit20thmonth' type='text' value='<?php echo $form['dietocassionlit20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit20thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit21thmonth' type='text' value='<?php echo $form['dietocassionlit21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit21thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit22thmonth' type='text' value='<?php echo $form['dietocassionlit22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit22thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit23thmonth' type='text' value='<?php echo $form['dietocassionlit23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit23thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassionlit24thmonth' type='text' value='<?php echo $form['dietocassionlit24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassionlit24thmonth'] ?></font></td>
                            </tr>

                            <tr>
                                <th>گاه گاهی بیشتر مصرف می کنم</th>
                                <td><input size ='8' name='dietocassiongre1stweek' type='text' value='<?php echo $form['dietocassiongre1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre1stweek'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre2ndweek' type='text' value='<?php echo $form['dietocassiongre2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre2ndweek'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre3rdweek' type='text' value='<?php echo $form['dietocassiongre3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre3rdweek'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre4thweek' type='text' value='<?php echo $form['dietocassiongre4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre4thweek'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre2ndmonth' type='text' value='<?php echo $form['dietocassiongre2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre2ndmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre3rdmonth' type='text' value='<?php echo $form['dietocassiongre3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre3rdmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre4thmonth' type='text' value='<?php echo $form['dietocassiongre4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre4thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre5thmonth' type='text' value='<?php echo $form['dietocassiongre5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre5thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre6thmonth' type='text' value='<?php echo $form['dietocassiongre6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre6thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre7thmonth' type='text' value='<?php echo $form['dietocassiongre7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre7thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre8thmonth' type='text' value='<?php echo $form['dietocassiongre8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre8thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre9thmonth' type='text' value='<?php echo $form['dietocassiongre9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre9thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre10thmonth' type='text' value='<?php echo $form['dietocassiongre10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre10thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre11thmonth' type='text' value='<?php echo $form['dietocassiongre11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre11thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre12thmonth' type='text' value='<?php echo $form['dietocassiongre12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre12thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre13thmonth' type='text' value='<?php echo $form['dietocassiongre13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre13thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre14thmonth' type='text' value='<?php echo $form['dietocassiongre14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre14thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre15thmonth' type='text' value='<?php echo $form['dietocassiongre15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre15thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre16thmonth' type='text' value='<?php echo $form['dietocassiongre16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre16thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre17thmonth' type='text' value='<?php echo $form['dietocassiongre17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre17thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre18thmonth' type='text' value='<?php echo $form['dietocassiongre18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre18thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre19thmonth' type='text' value='<?php echo $form['dietocassiongre19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre19thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre20thmonth' type='text' value='<?php echo $form['dietocassiongre20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre20thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre21thmonth' type='text' value='<?php echo $form['dietocassiongre21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre21thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre22thmonth' type='text' value='<?php echo $form['dietocassiongre22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre22thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre23thmonth' type='text' value='<?php echo $form['dietocassiongre23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre23thmonth'] ?></font></td>
                                <td><input size ='8' name='dietocassiongre24thmonth' type='text' value='<?php echo $form['dietocassiongre24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietocassiongre24thmonth'] ?></font></td>
                            </tr>

                            <tr>
                                <th>کاملا رعایت می کنم</th>
                                <td><input size ='8' name='dietofullobserve1stweek' type='text' value='<?php echo $form['dietofullobserve1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve1stweek'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve2ndweek' type='text' value='<?php echo $form['dietofullobserve2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve2ndweek'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve3rdweek' type='text' value='<?php echo $form['dietofullobserve3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve3rdweek'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve4thweek' type='text' value='<?php echo $form['dietofullobserve4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve4thweek'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve2ndmonth' type='text' value='<?php echo $form['dietofullobserve2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve2ndmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve3rdmonth' type='text' value='<?php echo $form['dietofullobserve3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve3rdmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve4thmonth' type='text' value='<?php echo $form['dietofullobserve4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve4thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve5thmonth' type='text' value='<?php echo $form['dietofullobserve5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve5thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve6thmonth' type='text' value='<?php echo $form['dietofullobserve6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve6thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve7thmonth' type='text' value='<?php echo $form['dietofullobserve7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve7thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve8thmonth' type='text' value='<?php echo $form['dietofullobserve8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve8thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve9thmonth' type='text' value='<?php echo $form['dietofullobserve9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve9thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve10thmonth' type='text' value='<?php echo $form['dietofullobserve10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve10thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve11thmonth' type='text' value='<?php echo $form['dietofullobserve11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve11thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve12thmonth' type='text' value='<?php echo $form['dietofullobserve12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve12thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve13thmonth' type='text' value='<?php echo $form['dietofullobserve13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve13thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve14thmonth' type='text' value='<?php echo $form['dietofullobserve14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve14thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve15thmonth' type='text' value='<?php echo $form['dietofullobserve15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve15thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve16thmonth' type='text' value='<?php echo $form['dietofullobserve16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve16thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve17thmonth' type='text' value='<?php echo $form['dietofullobserve17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve17thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve18thmonth' type='text' value='<?php echo $form['dietofullobserve18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve18thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve19thmonth' type='text' value='<?php echo $form['dietofullobserve19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve19thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve20thmonth' type='text' value='<?php echo $form['dietofullobserve20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve20thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve21thmonth' type='text' value='<?php echo $form['dietofullobserve21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve21thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve22thmonth' type='text' value='<?php echo $form['dietofullobserve22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve22thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve23thmonth' type='text' value='<?php echo $form['dietofullobserve23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve23thmonth'] ?></font></td>
                                <td><input size ='8' name='dietofullobserve24thmonth' type='text' value='<?php echo $form['dietofullobserve24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietofullobserve24thmonth'] ?></font></td>
                            </tr>
                            <tr>
                                <th>اصلا قادر به رعایت کردن نیستم و بیشتر می خورم</th>
                                <td><input size ='8' name='dietonobservegre1stweek' type='text' value='<?php echo $form['dietonobservegre1stweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre1stweek'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre2ndweek' type='text' value='<?php echo $form['dietonobservegre2ndweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre2ndweek'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre3rdweek' type='text' value='<?php echo $form['dietonobservegre3rdweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre3rdweek'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre4thweek' type='text' value='<?php echo $form['dietonobservegre4thweek'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre4thweek'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre2ndmonth' type='text' value='<?php echo $form['dietonobservegre2ndmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre2ndmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre3rdmonth' type='text' value='<?php echo $form['dietonobservegre3rdmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre3rdmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre4thmonth' type='text' value='<?php echo $form['dietonobservegre4thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre4thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre5thmonth' type='text' value='<?php echo $form['dietonobservegre5thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre5thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre6thmonth' type='text' value='<?php echo $form['dietonobservegre6thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre6thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre7thmonth' type='text' value='<?php echo $form['dietonobservegre7thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre7thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre8thmonth' type='text' value='<?php echo $form['dietonobservegre8thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre8thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre9thmonth' type='text' value='<?php echo $form['dietonobservegre9thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre9thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre10thmonth' type='text' value='<?php echo $form['dietonobservegre10thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre10thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre11thmonth' type='text' value='<?php echo $form['dietonobservegre11thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre11thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre12thmonth' type='text' value='<?php echo $form['dietonobservegre12thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre12thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre13thmonth' type='text' value='<?php echo $form['dietonobservegre13thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre13thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre14thmonth' type='text' value='<?php echo $form['dietonobservegre14thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre14thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre15thmonth' type='text' value='<?php echo $form['dietonobservegre15thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre15thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre16thmonth' type='text' value='<?php echo $form['dietonobservegre16thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre16thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre17thmonth' type='text' value='<?php echo $form['dietonobservegre17thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre17thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre18thmonth' type='text' value='<?php echo $form['dietonobservegre18thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre18thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre19thmonth' type='text' value='<?php echo $form['dietonobservegre19thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre19thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre20thmonth' type='text' value='<?php echo $form['dietonobservegre20thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre20thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre21thmonth' type='text' value='<?php echo $form['dietonobservegre21thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre21thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre22thmonth' type='text' value='<?php echo $form['dietonobservegre22thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre22thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre23thmonth' type='text' value='<?php echo $form['dietonobservegre23thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre23thmonth'] ?></font></td>
                                <td><input size ='8' name='dietonobservegre24thmonth' type='text' value='<?php echo $form['dietonobservegre24thmonth'] ?>' /><font face='verdana' color='red'><?php echo $error['dietonobservegre24thmonth'] ?></font></td>
                            </tr>

                            <tr>
                                <th>توضيحات</th>
                                <td colspan="27"><input style="width: 700px;" name='dietodesc' type='text' value='<?php echo $form['dietodesc'] ?>' /><font face='verdana' color='red'><?php echo $error['dietodesc'] ?></font></td>
                            </tr>
                        </table>
                        <div class="buttons_div1" >
                            <input name='com_fu_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                            <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                        </div>
                        <?php if ($message != ""): ?>
                            <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                    </form>
                </div>

                <div class="table-responsive fu-table-container2">
                    <form class="form-horizontal" name="fu_form9" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <tr>
                                <th>&nbsp;</th> 
                                <th>3<sup>rd</sup> month</th> 
                                <th>9<sup>th</sup> month</th> 
                                <th>1<sup>st</sup> year</th> 
                                <th>2<sup>nd</sup> year</th> 
                                <th>3<sup>rd</sup> year</th> 
                                <th>4<sup>th</sup> year</th> 
                                <th>5<sup>th</sup> year</th> 
                            </tr>
                            <tr>
                                <th>systolic BP</th>   
                                <td><input size ="12" name='systolicbp3m' type='text' value='<?php echo $form['systolicbp3m'] ?>' /><font face='verdana' color='red'><?php echo $error['systolicbp3m'] ?></font></td>
                                <td><input size ="12" name='systolicbp9m' type='text' value='<?php echo $form['systolicbp9m'] ?>' /><font face='verdana' color='red'><?php echo $error['systolicbp9m'] ?></font></td>
                                <td><input size ="12" name='systolicbp1y' type='text' value='<?php echo $form['systolicbp1y'] ?>' /><font face='verdana' color='red'><?php echo $error['systolicbp1y'] ?></font></td>
                                <td><input size ="12" name='systolicbp2y' type='text' value='<?php echo $form['systolicbp2y'] ?>' /><font face='verdana' color='red'><?php echo $error['systolicbp2y'] ?></font></td>
                                <td><input size ="12" name='systolicbp3y' type='text' value='<?php echo $form['systolicbp3y'] ?>' /><font face='verdana' color='red'><?php echo $error['systolicbp3y'] ?></font></td>
                                <td><input size ="12" name='systolicbp4y' type='text' value='<?php echo $form['systolicbp4y'] ?>' /><font face='verdana' color='red'><?php echo $error['systolicbp4y'] ?></font></td>
                                <td><input size ="12" name='systolicbp5y' type='text' value='<?php echo $form['systolicbp5y'] ?>' /><font face='verdana' color='red'><?php echo $error['systolicbp5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>diastolic BP</th>   
                                <td><input size ="12" name='diastolicbp3m' type='text' value='<?php echo $form['diastolicbp3m'] ?>' /><font face='verdana' color='red'><?php echo $error['diastolicbp3m'] ?></font></td>
                                <td><input size ="12" name='diastolicbp9m' type='text' value='<?php echo $form['diastolicbp9m'] ?>' /><font face='verdana' color='red'><?php echo $error['diastolicbp9m'] ?></font></td>
                                <td><input size ="12" name='diastolicbp1y' type='text' value='<?php echo $form['diastolicbp1y'] ?>' /><font face='verdana' color='red'><?php echo $error['diastolicbp1y'] ?></font></td>
                                <td><input size ="12" name='diastolicbp2y' type='text' value='<?php echo $form['diastolicbp2y'] ?>' /><font face='verdana' color='red'><?php echo $error['diastolicbp2y'] ?></font></td>
                                <td><input size ="12" name='diastolicbp3y' type='text' value='<?php echo $form['diastolicbp3y'] ?>' /><font face='verdana' color='red'><?php echo $error['diastolicbp3y'] ?></font></td>
                                <td><input size ="12" name='diastolicbp4y' type='text' value='<?php echo $form['diastolicbp4y'] ?>' /><font face='verdana' color='red'><?php echo $error['diastolicbp4y'] ?></font></td>
                                <td><input size ="12" name='diastolicbp5y' type='text' value='<?php echo $form['diastolicbp5y'] ?>' /><font face='verdana' color='red'><?php echo $error['diastolicbp5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Pulse</th> 
                                <td><input size ="12" name='pulse3m' type='text' value='<?php echo $form['pulse3m'] ?>' /><font face='verdana' color='red'><?php echo $error['pulse3m'] ?></font></td>
                                <td><input size ="12" name='pulse9m' type='text' value='<?php echo $form['pulse9m'] ?>' /><font face='verdana' color='red'><?php echo $error['pulse9m'] ?></font></td>
                                <td><input size ="12" name='pulse1y' type='text' value='<?php echo $form['pulse1y'] ?>' /><font face='verdana' color='red'><?php echo $error['pulse1y'] ?></font></td>
                                <td><input size ="12" name='pulse2y' type='text' value='<?php echo $form['pulse2y'] ?>' /><font face='verdana' color='red'><?php echo $error['pulse2y'] ?></font></td>
                                <td><input size ="12" name='pulse3y' type='text' value='<?php echo $form['pulse3y'] ?>' /><font face='verdana' color='red'><?php echo $error['pulse3y'] ?></font></td>
                                <td><input size ="12" name='pulse4y' type='text' value='<?php echo $form['pulse4y'] ?>' /><font face='verdana' color='red'><?php echo $error['pulse4y'] ?></font></td>
                                <td><input size ="12" name='pulse5y' type='text' value='<?php echo $form['pulse5y'] ?>' /><font face='verdana' color='red'><?php echo $error['pulse5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Respiration</th> 
                                <td><input size ="12" name='respiration3m' type='text' value='<?php echo $form['respiration3m'] ?>' /><font face='verdana' color='red'><?php echo $error['respiration3m'] ?></font></td>
                                <td><input size ="12" name='respiration9m' type='text' value='<?php echo $form['respiration9m'] ?>' /><font face='verdana' color='red'><?php echo $error['respiration9m'] ?></font></td>
                                <td><input size ="12" name='respiration1y' type='text' value='<?php echo $form['respiration1y'] ?>' /><font face='verdana' color='red'><?php echo $error['respiration1y'] ?></font></td>
                                <td><input size ="12" name='respiration2y' type='text' value='<?php echo $form['respiration2y'] ?>' /><font face='verdana' color='red'><?php echo $error['respiration2y'] ?></font></td>
                                <td><input size ="12" name='respiration3y' type='text' value='<?php echo $form['respiration3y'] ?>' /><font face='verdana' color='red'><?php echo $error['respiration3y'] ?></font></td>
                                <td><input size ="12" name='respiration4y' type='text' value='<?php echo $form['respiration4y'] ?>' /><font face='verdana' color='red'><?php echo $error['respiration4y'] ?></font></td>
                                <td><input size ="12" name='respiration5y' type='text' value='<?php echo $form['respiration5y'] ?>' /><font face='verdana' color='red'><?php echo $error['respiration5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Temp</th> 
                                <td><input size ="12" name='temp3m' type='text' value='<?php echo $form['temp3m'] ?>' /><font face='verdana' color='red'><?php echo $error['temp3m'] ?></font></td>
                                <td><input size ="12" name='temp9m' type='text' value='<?php echo $form['temp9m'] ?>' /><font face='verdana' color='red'><?php echo $error['temp9m'] ?></font></td>
                                <td><input size ="12" name='temp1y' type='text' value='<?php echo $form['temp1y'] ?>' /><font face='verdana' color='red'><?php echo $error['temp1y'] ?></font></td>
                                <td><input size ="12" name='temp2y' type='text' value='<?php echo $form['temp2y'] ?>' /><font face='verdana' color='red'><?php echo $error['temp2y'] ?></font></td>
                                <td><input size ="12" name='temp3y' type='text' value='<?php echo $form['temp3y'] ?>' /><font face='verdana' color='red'><?php echo $error['temp3y'] ?></font></td>
                                <td><input size ="12" name='temp4y' type='text' value='<?php echo $form['temp4y'] ?>' /><font face='verdana' color='red'><?php echo $error['temp4y'] ?></font></td>
                                <td><input size ="12" name='temp5y' type='text' value='<?php echo $form['temp5y'] ?>' /><font face='verdana' color='red'><?php echo $error['temp5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>MAC</th> 
                                <td><input size ="12" name='mac3m' type='text' value='<?php echo $form['mac3m'] ?>' /><font face='verdana' color='red'><?php echo $error['mac3m'] ?></font></td>
                                <td><input size ="12" name='mac9m' type='text' value='<?php echo $form['mac9m'] ?>' /><font face='verdana' color='red'><?php echo $error['mac9m'] ?></font></td>
                                <td><input size ="12" name='mac1y' type='text' value='<?php echo $form['mac1y'] ?>' /><font face='verdana' color='red'><?php echo $error['mac1y'] ?></font></td>
                                <td><input size ="12" name='mac2y' type='text' value='<?php echo $form['mac2y'] ?>' /><font face='verdana' color='red'><?php echo $error['mac2y'] ?></font></td>
                                <td><input size ="12" name='mac3y' type='text' value='<?php echo $form['mac3y'] ?>' /><font face='verdana' color='red'><?php echo $error['mac3y'] ?></font></td>
                                <td><input size ="12" name='mac4y' type='text' value='<?php echo $form['mac4y'] ?>' /><font face='verdana' color='red'><?php echo $error['mac4y'] ?></font></td>
                                <td><input size ="12" name='mac5y' type='text' value='<?php echo $form['mac5y'] ?>' /><font face='verdana' color='red'><?php echo $error['mac5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>TSF</th>  
                                <td><input size ="12" name='tsf3m' type='text' value='<?php echo $form['tsf3m'] ?>' /><font face='verdana' color='red'><?php echo $error['tsf3m'] ?></font></td>
                                <td><input size ="12" name='tsf9m' type='text' value='<?php echo $form['tsf9m'] ?>' /><font face='verdana' color='red'><?php echo $error['tsf9m'] ?></font></td>
                                <td><input size ="12" name='tsf1y' type='text' value='<?php echo $form['tsf1y'] ?>' /><font face='verdana' color='red'><?php echo $error['tsf1y'] ?></font></td>
                                <td><input size ="12" name='tsf2y' type='text' value='<?php echo $form['tsf2y'] ?>' /><font face='verdana' color='red'><?php echo $error['tsf2y'] ?></font></td>
                                <td><input size ="12" name='tsf3y' type='text' value='<?php echo $form['tsf3y'] ?>' /><font face='verdana' color='red'><?php echo $error['tsf3y'] ?></font></td>
                                <td><input size ="12" name='tsf4y' type='text' value='<?php echo $form['tsf4y'] ?>' /><font face='verdana' color='red'><?php echo $error['tsf4y'] ?></font></td>
                                <td><input size ="12" name='tsf5y' type='text' value='<?php echo $form['tsf5y'] ?>' /><font face='verdana' color='red'><?php echo $error['tsf5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Pectoral SF</th>
                                <td><input size ="12" name='pectoralsf3m' type='text' value='<?php echo $form['pectoralsf3m'] ?>' /><font face='verdana' color='red'><?php echo $error['pectoralsf3m'] ?></font></td>
                                <td><input size ="12" name='pectoralsf9m' type='text' value='<?php echo $form['pectoralsf9m'] ?>' /><font face='verdana' color='red'><?php echo $error['pectoralsf9m'] ?></font></td>
                                <td><input size ="12" name='pectoralsf1y' type='text' value='<?php echo $form['pectoralsf1y'] ?>' /><font face='verdana' color='red'><?php echo $error['pectoralsf1y'] ?></font></td>
                                <td><input size ="12" name='pectoralsf2y' type='text' value='<?php echo $form['pectoralsf2y'] ?>' /><font face='verdana' color='red'><?php echo $error['pectoralsf2y'] ?></font></td>
                                <td><input size ="12" name='pectoralsf3y' type='text' value='<?php echo $form['pectoralsf3y'] ?>' /><font face='verdana' color='red'><?php echo $error['pectoralsf3y'] ?></font></td>
                                <td><input size ="12" name='pectoralsf4y' type='text' value='<?php echo $form['pectoralsf4y'] ?>' /><font face='verdana' color='red'><?php echo $error['pectoralsf4y'] ?></font></td>
                                <td><input size ="12" name='pectoralsf5y' type='text' value='<?php echo $form['pectoralsf5y'] ?>' /><font face='verdana' color='red'><?php echo $error['pectoralsf5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Subscapula SF</th>
                                <td><input size ="12" name='subscapulasf3m' type='text' value='<?php echo $form['subscapulasf3m'] ?>' /><font face='verdana' color='red'><?php echo $error['subscapulasf3m'] ?></font></td>
                                <td><input size ="12" name='subscapulasf9m' type='text' value='<?php echo $form['subscapulasf9m'] ?>' /><font face='verdana' color='red'><?php echo $error['subscapulasf9m'] ?></font></td>
                                <td><input size ="12" name='subscapulasf1y' type='text' value='<?php echo $form['subscapulasf1y'] ?>' /><font face='verdana' color='red'><?php echo $error['subscapulasf1y'] ?></font></td>
                                <td><input size ="12" name='subscapulasf2y' type='text' value='<?php echo $form['subscapulasf2y'] ?>' /><font face='verdana' color='red'><?php echo $error['subscapulasf2y'] ?></font></td>
                                <td><input size ="12" name='subscapulasf3y' type='text' value='<?php echo $form['subscapulasf3y'] ?>' /><font face='verdana' color='red'><?php echo $error['subscapulasf3y'] ?></font></td>
                                <td><input size ="12" name='subscapulasf4y' type='text' value='<?php echo $form['subscapulasf4y'] ?>' /><font face='verdana' color='red'><?php echo $error['subscapulasf4y'] ?></font></td>
                                <td><input size ="12" name='subscapulasf5y' type='text' value='<?php echo $form['subscapulasf5y'] ?>' /><font face='verdana' color='red'><?php echo $error['subscapulasf5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Midaxilla SF</th>
                                <td><input size ="12" name='midaxillasf3m' type='text' value='<?php echo $form['midaxillasf3m'] ?>' /><font face='verdana' color='red'><?php echo $error['midaxillasf3m'] ?></font></td>
                                <td><input size ="12" name='midaxillasf9m' type='text' value='<?php echo $form['midaxillasf9m'] ?>' /><font face='verdana' color='red'><?php echo $error['midaxillasf9m'] ?></font></td>
                                <td><input size ="12" name='midaxillasf1y' type='text' value='<?php echo $form['midaxillasf1y'] ?>' /><font face='verdana' color='red'><?php echo $error['midaxillasf1y'] ?></font></td>
                                <td><input size ="12" name='midaxillasf2y' type='text' value='<?php echo $form['midaxillasf2y'] ?>' /><font face='verdana' color='red'><?php echo $error['midaxillasf2y'] ?></font></td>
                                <td><input size ="12" name='midaxillasf3y' type='text' value='<?php echo $form['midaxillasf3y'] ?>' /><font face='verdana' color='red'><?php echo $error['midaxillasf3y'] ?></font></td>
                                <td><input size ="12" name='midaxillasf4y' type='text' value='<?php echo $form['midaxillasf4y'] ?>' /><font face='verdana' color='red'><?php echo $error['midaxillasf4y'] ?></font></td>
                                <td><input size ="12" name='midaxillasf5y' type='text' value='<?php echo $form['midaxillasf5y'] ?>' /><font face='verdana' color='red'><?php echo $error['midaxillasf5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Abdomen SF</th>
                                <td><input size ="12" name='abdomensf3m' type='text' value='<?php echo $form['abdomensf3m'] ?>' /><font face='verdana' color='red'><?php echo $error['abdomensf3m'] ?></font></td>
                                <td><input size ="12" name='abdomensf9m' type='text' value='<?php echo $form['abdomensf9m'] ?>' /><font face='verdana' color='red'><?php echo $error['abdomensf9m'] ?></font></td>
                                <td><input size ="12" name='abdomensf1y' type='text' value='<?php echo $form['abdomensf1y'] ?>' /><font face='verdana' color='red'><?php echo $error['abdomensf1y'] ?></font></td>
                                <td><input size ="12" name='abdomensf2y' type='text' value='<?php echo $form['abdomensf2y'] ?>' /><font face='verdana' color='red'><?php echo $error['abdomensf2y'] ?></font></td>
                                <td><input size ="12" name='abdomensf3y' type='text' value='<?php echo $form['abdomensf3y'] ?>' /><font face='verdana' color='red'><?php echo $error['abdomensf3y'] ?></font></td>
                                <td><input size ="12" name='abdomensf4y' type='text' value='<?php echo $form['abdomensf4y'] ?>' /><font face='verdana' color='red'><?php echo $error['abdomensf4y'] ?></font></td>
                                <td><input size ="12" name='abdomensf5y' type='text' value='<?php echo $form['abdomensf5y'] ?>' /><font face='verdana' color='red'><?php echo $error['abdomensf5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Suprailiac SF</th>
                                <td><input size ="12" name='suprailiacsf3m' type='text' value='<?php echo $form['suprailiacsf3m'] ?>' /><font face='verdana' color='red'><?php echo $error['suprailiacsf3m'] ?></font></td>
                                <td><input size ="12" name='suprailiacsf9m' type='text' value='<?php echo $form['suprailiacsf9m'] ?>' /><font face='verdana' color='red'><?php echo $error['suprailiacsf9m'] ?></font></td>
                                <td><input size ="12" name='suprailiacsf1y' type='text' value='<?php echo $form['suprailiacsf1y'] ?>' /><font face='verdana' color='red'><?php echo $error['suprailiacsf1y'] ?></font></td>
                                <td><input size ="12" name='suprailiacsf2y' type='text' value='<?php echo $form['suprailiacsf2y'] ?>' /><font face='verdana' color='red'><?php echo $error['suprailiacsf2y'] ?></font></td>
                                <td><input size ="12" name='suprailiacsf3y' type='text' value='<?php echo $form['suprailiacsf3y'] ?>' /><font face='verdana' color='red'><?php echo $error['suprailiacsf3y'] ?></font></td>
                                <td><input size ="12" name='suprailiacsf4y' type='text' value='<?php echo $form['suprailiacsf4y'] ?>' /><font face='verdana' color='red'><?php echo $error['suprailiacsf4y'] ?></font></td>
                                <td><input size ="12" name='suprailiacsf5y' type='text' value='<?php echo $form['suprailiacsf5y'] ?>' /><font face='verdana' color='red'><?php echo $error['suprailiacsf5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Quadriceps SF</th>
                                <td><input size ="12" name='quadricepssf3m' type='text' value='<?php echo $form['quadricepssf3m'] ?>' /><font face='verdana' color='red'><?php echo $error['quadricepssf3m'] ?></font></td>
                                <td><input size ="12" name='quadricepssf9m' type='text' value='<?php echo $form['quadricepssf9m'] ?>' /><font face='verdana' color='red'><?php echo $error['quadricepssf9m'] ?></font></td>
                                <td><input size ="12" name='quadricepssf1y' type='text' value='<?php echo $form['quadricepssf1y'] ?>' /><font face='verdana' color='red'><?php echo $error['quadricepssf1y'] ?></font></td>
                                <td><input size ="12" name='quadricepssf2y' type='text' value='<?php echo $form['quadricepssf2y'] ?>' /><font face='verdana' color='red'><?php echo $error['quadricepssf2y'] ?></font></td>
                                <td><input size ="12" name='quadricepssf3y' type='text' value='<?php echo $form['quadricepssf3y'] ?>' /><font face='verdana' color='red'><?php echo $error['quadricepssf3y'] ?></font></td>
                                <td><input size ="12" name='quadricepssf4y' type='text' value='<?php echo $form['quadricepssf4y'] ?>' /><font face='verdana' color='red'><?php echo $error['quadricepssf4y'] ?></font></td>
                                <td><input size ="12" name='quadricepssf5y' type='text' value='<?php echo $form['quadricepssf5y'] ?>' /><font face='verdana' color='red'><?php echo $error['quadricepssf5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Waist circumference (Cm)</th>
                                <td><input size ="12" name='waistcircumference3m' type='text' value='<?php echo $form['waistcircumference3m'] ?>' /><font face='verdana' color='red'><?php echo $error['waistcircumference3m'] ?></font></td>
                                <td><input size ="12" name='waistcircumference9m' type='text' value='<?php echo $form['waistcircumference9m'] ?>' /><font face='verdana' color='red'><?php echo $error['waistcircumference9m'] ?></font></td>
                                <td><input size ="12" name='waistcircumference1y' type='text' value='<?php echo $form['waistcircumference1y'] ?>' /><font face='verdana' color='red'><?php echo $error['waistcircumference1y'] ?></font></td>
                                <td><input size ="12" name='waistcircumference2y' type='text' value='<?php echo $form['waistcircumference2y'] ?>' /><font face='verdana' color='red'><?php echo $error['waistcircumference2y'] ?></font></td>
                                <td><input size ="12" name='waistcircumference3y' type='text' value='<?php echo $form['waistcircumference3y'] ?>' /><font face='verdana' color='red'><?php echo $error['waistcircumference3y'] ?></font></td>
                                <td><input size ="12" name='waistcircumference4y' type='text' value='<?php echo $form['waistcircumference4y'] ?>' /><font face='verdana' color='red'><?php echo $error['waistcircumference4y'] ?></font></td>
                                <td><input size ="12" name='waistcircumference5y' type='text' value='<?php echo $form['waistcircumference5y'] ?>' /><font face='verdana' color='red'><?php echo $error['waistcircumference5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Hip circumference (Cm)</th>
                                <td><input size ="12" name='hipcircumference3m' type='text' value='<?php echo $form['hipcircumference3m'] ?>' /><font face='verdana' color='red'><?php echo $error['hipcircumference3m'] ?></font></td>
                                <td><input size ="12" name='hipcircumference9m' type='text' value='<?php echo $form['hipcircumference9m'] ?>' /><font face='verdana' color='red'><?php echo $error['hipcircumference9m'] ?></font></td>
                                <td><input size ="12" name='hipcircumference1y' type='text' value='<?php echo $form['hipcircumference1y'] ?>' /><font face='verdana' color='red'><?php echo $error['hipcircumference1y'] ?></font></td>
                                <td><input size ="12" name='hipcircumference2y' type='text' value='<?php echo $form['hipcircumference2y'] ?>' /><font face='verdana' color='red'><?php echo $error['hipcircumference2y'] ?></font></td>
                                <td><input size ="12" name='hipcircumference3y' type='text' value='<?php echo $form['hipcircumference3y'] ?>' /><font face='verdana' color='red'><?php echo $error['hipcircumference3y'] ?></font></td>
                                <td><input size ="12" name='hipcircumference4y' type='text' value='<?php echo $form['hipcircumference4y'] ?>' /><font face='verdana' color='red'><?php echo $error['hipcircumference4y'] ?></font></td>
                                <td><input size ="12" name='hipcircumference5y' type='text' value='<?php echo $form['hipcircumference5y'] ?>' /><font face='verdana' color='red'><?php echo $error['hipcircumference5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Body fat percentage</th>   
                                <td><input size ="12" name='bodyfatpercentage3m' type='text' value='<?php echo $form['bodyfatpercentage3m'] ?>' /><font face='verdana' color='red'><?php echo $error['bodyfatpercentage3m'] ?></font></td>
                                <td><input size ="12" name='bodyfatpercentage9m' type='text' value='<?php echo $form['bodyfatpercentage9m'] ?>' /><font face='verdana' color='red'><?php echo $error['bodyfatpercentage9m'] ?></font></td>
                                <td><input size ="12" name='bodyfatpercentage1y' type='text' value='<?php echo $form['bodyfatpercentage1y'] ?>' /><font face='verdana' color='red'><?php echo $error['bodyfatpercentage1y'] ?></font></td>
                                <td><input size ="12" name='bodyfatpercentage2y' type='text' value='<?php echo $form['bodyfatpercentage2y'] ?>' /><font face='verdana' color='red'><?php echo $error['bodyfatpercentage2y'] ?></font></td>
                                <td><input size ="12" name='bodyfatpercentage3y' type='text' value='<?php echo $form['bodyfatpercentage3y'] ?>' /><font face='verdana' color='red'><?php echo $error['bodyfatpercentage3y'] ?></font></td>
                                <td><input size ="12" name='bodyfatpercentage4y' type='text' value='<?php echo $form['bodyfatpercentage4y'] ?>' /><font face='verdana' color='red'><?php echo $error['bodyfatpercentage4y'] ?></font></td>
                                <td><input size ="12" name='bodyfatpercentage5y' type='text' value='<?php echo $form['bodyfatpercentage5y'] ?>' /><font face='verdana' color='red'><?php echo $error['bodyfatpercentage5y'] ?></font></td>
                            </tr>
                        </table>
                        <div class="buttons_div1" >
                            <input name='com_fu_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                            <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                        </div>
                        <?php if ($message != ""): ?>
                            <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                    </form>
                </div>

            </div> <!--End AnthropometricMonitoringTab -->

            <!--tab-2 end-->
            <div class="tab-pane fade" id="LaboratoryMonitoringTab">
                <div class="table-responsive fu-table-container">
                    <form class="form-horizontal" name="fu_form10" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                        <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                        <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <tr>
                                <th>&nbsp;</th> 
                                <th>3<sup>rd</sup> month</th> 
                                <th>9<sup>th</sup> month</th> 
                                <th>1<sup>st</sup> year</th> 
                                <th>2<sup>nd</sup> year</th> 
                                <th>3<sup>rd</sup> year</th> 
                                <th>4<sup>th</sup> year</th> 
                                <th>5<sup>th</sup> year</th> 
                            </tr>
                            <tr>
                                <th>HbA1c</th>  
                                <td><input size ="12" name='hbalc3m' type='text' value='<?php echo $form['hbalc3m'] ?>' /><font face='verdana' color='red'><?php echo $error['hbalc3m'] ?></font></td>
                                <td><input size ="12" name='hbalc9m' type='text' value='<?php echo $form['hbalc9m'] ?>' /><font face='verdana' color='red'><?php echo $error['hbalc9m'] ?></font></td>
                                <td><input size ="12" name='hbalc1y' type='text' value='<?php echo $form['hbalc1y'] ?>' /><font face='verdana' color='red'><?php echo $error['hbalc1y'] ?></font></td>
                                <td><input size ="12" name='hbalc2y' type='text' value='<?php echo $form['hbalc2y'] ?>' /><font face='verdana' color='red'><?php echo $error['hbalc2y'] ?></font></td>
                                <td><input size ="12" name='hbalc3y' type='text' value='<?php echo $form['hbalc3y'] ?>' /><font face='verdana' color='red'><?php echo $error['hbalc3y'] ?></font></td>
                                <td><input size ="12" name='hbalc4y' type='text' value='<?php echo $form['hbalc4y'] ?>' /><font face='verdana' color='red'><?php echo $error['hbalc4y'] ?></font></td>
                                <td><input size ="12" name='hbalc5y' type='text' value='<?php echo $form['hbalc5y'] ?>' /><font face='verdana' color='red'><?php echo $error['hbalc5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>B.S.(2hpp)</th> 
                                <td><input size ="12" name='bs3m' type='text' value='<?php echo $form['bs3m'] ?>' /><font face='verdana' color='red'><?php echo $error['bs3m'] ?></font></td>
                                <td><input size ="12" name='bs9m' type='text' value='<?php echo $form['bs9m'] ?>' /><font face='verdana' color='red'><?php echo $error['bs9m'] ?></font></td>
                                <td><input size ="12" name='bs1y' type='text' value='<?php echo $form['bs1y'] ?>' /><font face='verdana' color='red'><?php echo $error['bs1y'] ?></font></td>
                                <td><input size ="12" name='bs2y' type='text' value='<?php echo $form['bs2y'] ?>' /><font face='verdana' color='red'><?php echo $error['bs2y'] ?></font></td>
                                <td><input size ="12" name='bs3y' type='text' value='<?php echo $form['bs3y'] ?>' /><font face='verdana' color='red'><?php echo $error['bs3y'] ?></font></td>
                                <td><input size ="12" name='bs4y' type='text' value='<?php echo $form['bs4y'] ?>' /><font face='verdana' color='red'><?php echo $error['bs4y'] ?></font></td>
                                <td><input size ="12" name='bs5y' type='text' value='<?php echo $form['bs5y'] ?>' /><font face='verdana' color='red'><?php echo $error['bs5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>TG</th> 
                                <td><input size ="12" name='tg3m' type='text' value='<?php echo $form['tg3m'] ?>' /><font face='verdana' color='red'><?php echo $error['tg3m'] ?></font></td>
                                <td><input size ="12" name='tg9m' type='text' value='<?php echo $form['tg9m'] ?>' /><font face='verdana' color='red'><?php echo $error['tg9m'] ?></font></td>
                                <td><input size ="12" name='tg1y' type='text' value='<?php echo $form['tg1y'] ?>' /><font face='verdana' color='red'><?php echo $error['tg1y'] ?></font></td>
                                <td><input size ="12" name='tg2y' type='text' value='<?php echo $form['tg2y'] ?>' /><font face='verdana' color='red'><?php echo $error['tg2y'] ?></font></td>
                                <td><input size ="12" name='tg3y' type='text' value='<?php echo $form['tg3y'] ?>' /><font face='verdana' color='red'><?php echo $error['tg3y'] ?></font></td>
                                <td><input size ="12" name='tg4y' type='text' value='<?php echo $form['tg4y'] ?>' /><font face='verdana' color='red'><?php echo $error['tg4y'] ?></font></td>
                                <td><input size ="12" name='tg5y' type='text' value='<?php echo $form['tg5y'] ?>' /><font face='verdana' color='red'><?php echo $error['tg5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Total Cholesterol</th> 
                                <td><input size ="12" name='totalcholesterol3m' type='text' value='<?php echo $form['totalcholesterol3m'] ?>' /><font face='verdana' color='red'><?php echo $error['totalcholesterol3m'] ?></font></td>
                                <td><input size ="12" name='totalcholesterol9m' type='text' value='<?php echo $form['totalcholesterol9m'] ?>' /><font face='verdana' color='red'><?php echo $error['totalcholesterol9m'] ?></font></td>
                                <td><input size ="12" name='totalcholesterol1y' type='text' value='<?php echo $form['totalcholesterol1y'] ?>' /><font face='verdana' color='red'><?php echo $error['totalcholesterol1y'] ?></font></td>
                                <td><input size ="12" name='totalcholesterol2y' type='text' value='<?php echo $form['totalcholesterol2y'] ?>' /><font face='verdana' color='red'><?php echo $error['totalcholesterol2y'] ?></font></td>
                                <td><input size ="12" name='totalcholesterol3y' type='text' value='<?php echo $form['totalcholesterol3y'] ?>' /><font face='verdana' color='red'><?php echo $error['totalcholesterol3y'] ?></font></td>
                                <td><input size ="12" name='totalcholesterol4y' type='text' value='<?php echo $form['totalcholesterol4y'] ?>' /><font face='verdana' color='red'><?php echo $error['totalcholesterol4y'] ?></font></td>
                                <td><input size ="12" name='totalcholesterol5y' type='text' value='<?php echo $form['totalcholesterol5y'] ?>' /><font face='verdana' color='red'><?php echo $error['totalcholesterol5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>HDL</th>
                                <td><input size ="12" name='hdl3m' type='text' value='<?php echo $form['hdl3m'] ?>' /><font face='verdana' color='red'><?php echo $error['hdl3m'] ?></font></td>
                                <td><input size ="12" name='hdl9m' type='text' value='<?php echo $form['hdl9m'] ?>' /><font face='verdana' color='red'><?php echo $error['hdl9m'] ?></font></td>
                                <td><input size ="12" name='hdl1y' type='text' value='<?php echo $form['hdl1y'] ?>' /><font face='verdana' color='red'><?php echo $error['hdl1y'] ?></font></td>
                                <td><input size ="12" name='hdl2y' type='text' value='<?php echo $form['hdl2y'] ?>' /><font face='verdana' color='red'><?php echo $error['hdl2y'] ?></font></td>
                                <td><input size ="12" name='hdl3y' type='text' value='<?php echo $form['hdl3y'] ?>' /><font face='verdana' color='red'><?php echo $error['hdl3y'] ?></font></td>
                                <td><input size ="12" name='hdl4y' type='text' value='<?php echo $form['hdl4y'] ?>' /><font face='verdana' color='red'><?php echo $error['hdl4y'] ?></font></td>
                                <td><input size ="12" name='hdl5y' type='text' value='<?php echo $form['hdl5y'] ?>' /><font face='verdana' color='red'><?php echo $error['hdl5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>LDL</th>
                                <td><input size ="12" name='ldl3m' type='text' value='<?php echo $form['ldl3m'] ?>' /><font face='verdana' color='red'><?php echo $error['ldl3m'] ?></font></td>
                                <td><input size ="12" name='ldl9m' type='text' value='<?php echo $form['ldl9m'] ?>' /><font face='verdana' color='red'><?php echo $error['ldl9m'] ?></font></td>
                                <td><input size ="12" name='ldl1y' type='text' value='<?php echo $form['ldl1y'] ?>' /><font face='verdana' color='red'><?php echo $error['ldl1y'] ?></font></td>
                                <td><input size ="12" name='ldl2y' type='text' value='<?php echo $form['ldl2y'] ?>' /><font face='verdana' color='red'><?php echo $error['ldl2y'] ?></font></td>
                                <td><input size ="12" name='ldl3y' type='text' value='<?php echo $form['ldl3y'] ?>' /><font face='verdana' color='red'><?php echo $error['ldl3y'] ?></font></td>
                                <td><input size ="12" name='ldl4y' type='text' value='<?php echo $form['ldl4y'] ?>' /><font face='verdana' color='red'><?php echo $error['ldl4y'] ?></font></td>
                                <td><input size ="12" name='ldl5y' type='text' value='<?php echo $form['ldl5y'] ?>' /><font face='verdana' color='red'><?php echo $error['ldl5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>TBG</th>
                                <td><input size ="12" name='tbg3m' type='text' value='<?php echo $form['tbg3m'] ?>' /><font face='verdana' color='red'><?php echo $error['tbg3m'] ?></font></td>
                                <td><input size ="12" name='tbg9m' type='text' value='<?php echo $form['tbg9m'] ?>' /><font face='verdana' color='red'><?php echo $error['tbg9m'] ?></font></td>
                                <td><input size ="12" name='tbg1y' type='text' value='<?php echo $form['tbg1y'] ?>' /><font face='verdana' color='red'><?php echo $error['tbg1y'] ?></font></td>
                                <td><input size ="12" name='tbg2y' type='text' value='<?php echo $form['tbg2y'] ?>' /><font face='verdana' color='red'><?php echo $error['tbg2y'] ?></font></td>
                                <td><input size ="12" name='tbg3y' type='text' value='<?php echo $form['tbg3y'] ?>' /><font face='verdana' color='red'><?php echo $error['tbg3y'] ?></font></td>
                                <td><input size ="12" name='tbg4y' type='text' value='<?php echo $form['tbg4y'] ?>' /><font face='verdana' color='red'><?php echo $error['tbg4y'] ?></font></td>
                                <td><input size ="12" name='tbg5y' type='text' value='<?php echo $form['tbg5y'] ?>' /><font face='verdana' color='red'><?php echo $error['tbg5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Urine RBC</th>
                                <td><input size ="12" name='urinerbc3m' type='text' value='<?php echo $form['urinerbc3m'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerbc3m'] ?></font></td>
                                <td><input size ="12" name='urinerbc9m' type='text' value='<?php echo $form['urinerbc9m'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerbc9m'] ?></font></td>
                                <td><input size ="12" name='urinerbc1y' type='text' value='<?php echo $form['urinerbc1y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerbc1y'] ?></font></td>
                                <td><input size ="12" name='urinerbc2y' type='text' value='<?php echo $form['urinerbc2y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerbc2y'] ?></font></td>
                                <td><input size ="12" name='urinerbc3y' type='text' value='<?php echo $form['urinerbc3y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerbc3y'] ?></font></td>
                                <td><input size ="12" name='urinerbc4y' type='text' value='<?php echo $form['urinerbc4y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerbc4y'] ?></font></td>
                                <td><input size ="12" name='urinerbc5y' type='text' value='<?php echo $form['urinerbc5y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerbc5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Urine Protein</th>
                                <td><input size ="12" name='urinerotein3m' type='text' value='<?php echo $form['urinerotein3m'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerotein3m'] ?></font></td>
                                <td><input size ="12" name='urinerotein9m' type='text' value='<?php echo $form['urinerotein9m'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerotein9m'] ?></font></td>
                                <td><input size ="12" name='urinerotein1y' type='text' value='<?php echo $form['urinerotein1y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerotein1y'] ?></font></td>
                                <td><input size ="12" name='urinerotein2y' type='text' value='<?php echo $form['urinerotein2y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerotein2y'] ?></font></td>
                                <td><input size ="12" name='urinerotein3y' type='text' value='<?php echo $form['urinerotein3y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerotein3y'] ?></font></td>
                                <td><input size ="12" name='urinerotein4y' type='text' value='<?php echo $form['urinerotein4y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerotein4y'] ?></font></td>
                                <td><input size ="12" name='urinerotein5y' type='text' value='<?php echo $form['urinerotein5y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinerotein5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Urine SG</th>
                                <td><input size ="12" name='urinesg3m' type='text' value='<?php echo $form['urinesg3m'] ?>' /><font face='verdana' color='red'><?php echo $error['urinesg3m'] ?></font></td>
                                <td><input size ="12" name='urinesg9m' type='text' value='<?php echo $form['urinesg9m'] ?>' /><font face='verdana' color='red'><?php echo $error['urinesg9m'] ?></font></td>
                                <td><input size ="12" name='urinesg1y' type='text' value='<?php echo $form['urinesg1y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinesg1y'] ?></font></td>
                                <td><input size ="12" name='urinesg2y' type='text' value='<?php echo $form['urinesg2y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinesg2y'] ?></font></td>
                                <td><input size ="12" name='urinesg3y' type='text' value='<?php echo $form['urinesg3y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinesg3y'] ?></font></td>
                                <td><input size ="12" name='urinesg4y' type='text' value='<?php echo $form['urinesg4y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinesg4y'] ?></font></td>
                                <td><input size ="12" name='urinesg5y' type='text' value='<?php echo $form['urinesg5y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinesg5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Urine PH</th>
                                <td><input size ="12" name='urineph3m' type='text' value='<?php echo $form['urineph3m'] ?>' /><font face='verdana' color='red'><?php echo $error['urineph3m'] ?></font></td>
                                <td><input size ="12" name='urineph9m' type='text' value='<?php echo $form['urineph9m'] ?>' /><font face='verdana' color='red'><?php echo $error['urineph9m'] ?></font></td>
                                <td><input size ="12" name='urineph1y' type='text' value='<?php echo $form['urineph1y'] ?>' /><font face='verdana' color='red'><?php echo $error['urineph1y'] ?></font></td>
                                <td><input size ="12" name='urineph2y' type='text' value='<?php echo $form['urineph2y'] ?>' /><font face='verdana' color='red'><?php echo $error['urineph2y'] ?></font></td>
                                <td><input size ="12" name='urineph3y' type='text' value='<?php echo $form['urineph3y'] ?>' /><font face='verdana' color='red'><?php echo $error['urineph3y'] ?></font></td>
                                <td><input size ="12" name='urineph4y' type='text' value='<?php echo $form['urineph4y'] ?>' /><font face='verdana' color='red'><?php echo $error['urineph4y'] ?></font></td>
                                <td><input size ="12" name='urineph5y' type='text' value='<?php echo $form['urineph5y'] ?>' /><font face='verdana' color='red'><?php echo $error['urineph5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Urine crystal</th>
                                <td><input size ="12" name='urinecrystal3m' type='text' value='<?php echo $form['urinecrystal3m'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecrystal3m'] ?></font></td>
                                <td><input size ="12" name='urinecrystal9m' type='text' value='<?php echo $form['urinecrystal9m'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecrystal9m'] ?></font></td>
                                <td><input size ="12" name='urinecrystal1y' type='text' value='<?php echo $form['urinecrystal1y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecrystal1y'] ?></font></td>
                                <td><input size ="12" name='urinecrystal2y' type='text' value='<?php echo $form['urinecrystal2y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecrystal2y'] ?></font></td>
                                <td><input size ="12" name='urinecrystal3y' type='text' value='<?php echo $form['urinecrystal3y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecrystal3y'] ?></font></td>
                                <td><input size ="12" name='urinecrystal4y' type='text' value='<?php echo $form['urinecrystal4y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecrystal4y'] ?></font></td>
                                <td><input size ="12" name='urinecrystal5y' type='text' value='<?php echo $form['urinecrystal5y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecrystal5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Urine cast</th>
                                <td><input size ="12" name='urinecast3m' type='text' value='<?php echo $form['urinecast3m'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecast3m'] ?></font></td>
                                <td><input size ="12" name='urinecast9m' type='text' value='<?php echo $form['urinecast9m'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecast9m'] ?></font></td>
                                <td><input size ="12" name='urinecast1y' type='text' value='<?php echo $form['urinecast1y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecast1y'] ?></font></td>
                                <td><input size ="12" name='urinecast2y' type='text' value='<?php echo $form['urinecast2y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecast2y'] ?></font></td>
                                <td><input size ="12" name='urinecast3y' type='text' value='<?php echo $form['urinecast3y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecast3y'] ?></font></td>
                                <td><input size ="12" name='urinecast4y' type='text' value='<?php echo $form['urinecast4y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecast4y'] ?></font></td>
                                <td><input size ="12" name='urinecast5y' type='text' value='<?php echo $form['urinecast5y'] ?>' /><font face='verdana' color='red'><?php echo $error['urinecast5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>CRP</th>
                                <td><input size ="12" name='crp3m' type='text' value='<?php echo $form['crp3m'] ?>' /><font face='verdana' color='red'><?php echo $error['crp3m'] ?></font></td>
                                <td><input size ="12" name='crp9m' type='text' value='<?php echo $form['crp9m'] ?>' /><font face='verdana' color='red'><?php echo $error['crp9m'] ?></font></td>
                                <td><input size ="12" name='crp1y' type='text' value='<?php echo $form['crp1y'] ?>' /><font face='verdana' color='red'><?php echo $error['crp1y'] ?></font></td>
                                <td><input size ="12" name='crp2y' type='text' value='<?php echo $form['crp2y'] ?>' /><font face='verdana' color='red'><?php echo $error['crp2y'] ?></font></td>
                                <td><input size ="12" name='crp3y' type='text' value='<?php echo $form['crp3y'] ?>' /><font face='verdana' color='red'><?php echo $error['crp3y'] ?></font></td>
                                <td><input size ="12" name='crp4y' type='text' value='<?php echo $form['crp4y'] ?>' /><font face='verdana' color='red'><?php echo $error['crp4y'] ?></font></td>
                                <td><input size ="12" name='crp5y' type='text' value='<?php echo $form['crp5y'] ?>' /><font face='verdana' color='red'><?php echo $error['crp5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>ESR</th>
                                <td><input size ="12" name='esr3m' type='text' value='<?php echo $form['esr3m'] ?>' /><font face='verdana' color='red'><?php echo $error['esr3m'] ?></font></td>
                                <td><input size ="12" name='esr9m' type='text' value='<?php echo $form['esr9m'] ?>' /><font face='verdana' color='red'><?php echo $error['esr9m'] ?></font></td>
                                <td><input size ="12" name='esr1y' type='text' value='<?php echo $form['esr1y'] ?>' /><font face='verdana' color='red'><?php echo $error['esr1y'] ?></font></td>
                                <td><input size ="12" name='esr2y' type='text' value='<?php echo $form['esr2y'] ?>' /><font face='verdana' color='red'><?php echo $error['esr2y'] ?></font></td>
                                <td><input size ="12" name='esr3y' type='text' value='<?php echo $form['esr3y'] ?>' /><font face='verdana' color='red'><?php echo $error['esr3y'] ?></font></td>
                                <td><input size ="12" name='esr4y' type='text' value='<?php echo $form['esr4y'] ?>' /><font face='verdana' color='red'><?php echo $error['esr4y'] ?></font></td>
                                <td><input size ="12" name='esr5y' type='text' value='<?php echo $form['esr5y'] ?>' /><font face='verdana' color='red'><?php echo $error['esr5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Albumin</th>
                                <td><input size ="12" name='albumin3m' type='text' value='<?php echo $form['albumin3m'] ?>' /><font face='verdana' color='red'><?php echo $error['albumin3m'] ?></font></td>
                                <td><input size ="12" name='albumin9m' type='text' value='<?php echo $form['albumin9m'] ?>' /><font face='verdana' color='red'><?php echo $error['albumin9m'] ?></font></td>
                                <td><input size ="12" name='albumin1y' type='text' value='<?php echo $form['albumin1y'] ?>' /><font face='verdana' color='red'><?php echo $error['albumin1y'] ?></font></td>
                                <td><input size ="12" name='albumin2y' type='text' value='<?php echo $form['albumin2y'] ?>' /><font face='verdana' color='red'><?php echo $error['albumin2y'] ?></font></td>
                                <td><input size ="12" name='albumin3y' type='text' value='<?php echo $form['albumin3y'] ?>' /><font face='verdana' color='red'><?php echo $error['albumin3y'] ?></font></td>
                                <td><input size ="12" name='albumin4y' type='text' value='<?php echo $form['albumin4y'] ?>' /><font face='verdana' color='red'><?php echo $error['albumin4y'] ?></font></td>
                                <td><input size ="12" name='albumin5y' type='text' value='<?php echo $form['albumin5y'] ?>' /><font face='verdana' color='red'><?php echo $error['albumin5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Prealbumin</th>
                                <td><input size ="12" name='prealbumin3m' type='text' value='<?php echo $form['prealbumin3m'] ?>' /><font face='verdana' color='red'><?php echo $error['prealbumin3m'] ?></font></td>
                                <td><input size ="12" name='prealbumin9m' type='text' value='<?php echo $form['prealbumin9m'] ?>' /><font face='verdana' color='red'><?php echo $error['prealbumin9m'] ?></font></td>
                                <td><input size ="12" name='prealbumin1y' type='text' value='<?php echo $form['prealbumin1y'] ?>' /><font face='verdana' color='red'><?php echo $error['prealbumin1y'] ?></font></td>
                                <td><input size ="12" name='prealbumin2y' type='text' value='<?php echo $form['prealbumin2y'] ?>' /><font face='verdana' color='red'><?php echo $error['prealbumin2y'] ?></font></td>
                                <td><input size ="12" name='prealbumin3y' type='text' value='<?php echo $form['prealbumin3y'] ?>' /><font face='verdana' color='red'><?php echo $error['prealbumin3y'] ?></font></td>
                                <td><input size ="12" name='prealbumin4y' type='text' value='<?php echo $form['prealbumin4y'] ?>' /><font face='verdana' color='red'><?php echo $error['prealbumin4y'] ?></font></td>
                                <td><input size ="12" name='prealbumin5y' type='text' value='<?php echo $form['prealbumin5y'] ?>' /><font face='verdana' color='red'><?php echo $error['prealbumin5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Total protein</th>
                                <td><input size ="12" name='totalprotein3m' type='text' value='<?php echo $form['totalprotein3m'] ?>' /><font face='verdana' color='red'><?php echo $error['totalprotein3m'] ?></font></td>
                                <td><input size ="12" name='totalprotein9m' type='text' value='<?php echo $form['totalprotein9m'] ?>' /><font face='verdana' color='red'><?php echo $error['totalprotein9m'] ?></font></td>
                                <td><input size ="12" name='totalprotein1y' type='text' value='<?php echo $form['totalprotein1y'] ?>' /><font face='verdana' color='red'><?php echo $error['totalprotein1y'] ?></font></td>
                                <td><input size ="12" name='totalprotein2y' type='text' value='<?php echo $form['totalprotein2y'] ?>' /><font face='verdana' color='red'><?php echo $error['totalprotein2y'] ?></font></td>
                                <td><input size ="12" name='totalprotein3y' type='text' value='<?php echo $form['totalprotein3y'] ?>' /><font face='verdana' color='red'><?php echo $error['totalprotein3y'] ?></font></td>
                                <td><input size ="12" name='totalprotein4y' type='text' value='<?php echo $form['totalprotein4y'] ?>' /><font face='verdana' color='red'><?php echo $error['totalprotein4y'] ?></font></td>
                                <td><input size ="12" name='totalprotein5y' type='text' value='<?php echo $form['totalprotein5y'] ?>' /><font face='verdana' color='red'><?php echo $error['totalprotein5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>D. Bili</th>
                                <td><input size ="12" name='dbili3m' type='text' value='<?php echo $form['dbili3m'] ?>' /><font face='verdana' color='red'><?php echo $error['dbili3m'] ?></font></td>
                                <td><input size ="12" name='dbili9m' type='text' value='<?php echo $form['dbili9m'] ?>' /><font face='verdana' color='red'><?php echo $error['dbili9m'] ?></font></td>
                                <td><input size ="12" name='dbili1y' type='text' value='<?php echo $form['dbili1y'] ?>' /><font face='verdana' color='red'><?php echo $error['dbili1y'] ?></font></td>
                                <td><input size ="12" name='dbili2y' type='text' value='<?php echo $form['dbili2y'] ?>' /><font face='verdana' color='red'><?php echo $error['dbili2y'] ?></font></td>
                                <td><input size ="12" name='dbili3y' type='text' value='<?php echo $form['dbili3y'] ?>' /><font face='verdana' color='red'><?php echo $error['dbili3y'] ?></font></td>
                                <td><input size ="12" name='dbili4y' type='text' value='<?php echo $form['dbili4y'] ?>' /><font face='verdana' color='red'><?php echo $error['dbili4y'] ?></font></td>
                                <td><input size ="12" name='dbili5y' type='text' value='<?php echo $form['dbili5y'] ?>' /><font face='verdana' color='red'><?php echo $error['dbili5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>T. Bili</th>
                                <td><input size ="12" name='tbili3m' type='text' value='<?php echo $form['tbili3m'] ?>' /><font face='verdana' color='red'><?php echo $error['tbili3m'] ?></font></td>
                                <td><input size ="12" name='tbili9m' type='text' value='<?php echo $form['tbili9m'] ?>' /><font face='verdana' color='red'><?php echo $error['tbili9m'] ?></font></td>
                                <td><input size ="12" name='tbili1y' type='text' value='<?php echo $form['tbili1y'] ?>' /><font face='verdana' color='red'><?php echo $error['tbili1y'] ?></font></td>
                                <td><input size ="12" name='tbili2y' type='text' value='<?php echo $form['tbili2y'] ?>' /><font face='verdana' color='red'><?php echo $error['tbili2y'] ?></font></td>
                                <td><input size ="12" name='tbili3y' type='text' value='<?php echo $form['tbili3y'] ?>' /><font face='verdana' color='red'><?php echo $error['tbili3y'] ?></font></td>
                                <td><input size ="12" name='tbili4y' type='text' value='<?php echo $form['tbili4y'] ?>' /><font face='verdana' color='red'><?php echo $error['tbili4y'] ?></font></td>
                                <td><input size ="12" name='tbili5y' type='text' value='<?php echo $form['tbili5y'] ?>' /><font face='verdana' color='red'><?php echo $error['tbili5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>ALT</th>
                                <td><input size ="12" name='alt3m' type='text' value='<?php echo $form['alt3m'] ?>' /><font face='verdana' color='red'><?php echo $error['alt3m'] ?></font></td>
                                <td><input size ="12" name='alt9m' type='text' value='<?php echo $form['alt9m'] ?>' /><font face='verdana' color='red'><?php echo $error['alt9m'] ?></font></td>
                                <td><input size ="12" name='alt1y' type='text' value='<?php echo $form['alt1y'] ?>' /><font face='verdana' color='red'><?php echo $error['alt1y'] ?></font></td>
                                <td><input size ="12" name='alt2y' type='text' value='<?php echo $form['alt2y'] ?>' /><font face='verdana' color='red'><?php echo $error['alt2y'] ?></font></td>
                                <td><input size ="12" name='alt3y' type='text' value='<?php echo $form['alt3y'] ?>' /><font face='verdana' color='red'><?php echo $error['alt3y'] ?></font></td>
                                <td><input size ="12" name='alt4y' type='text' value='<?php echo $form['alt4y'] ?>' /><font face='verdana' color='red'><?php echo $error['alt4y'] ?></font></td>
                                <td><input size ="12" name='alt5y' type='text' value='<?php echo $form['alt5y'] ?>' /><font face='verdana' color='red'><?php echo $error['alt5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>AST</th>
                                <td><input size ="12" name='ast3m' type='text' value='<?php echo $form['ast3m'] ?>' /><font face='verdana' color='red'><?php echo $error['ast3m'] ?></font></td>
                                <td><input size ="12" name='ast9m' type='text' value='<?php echo $form['ast9m'] ?>' /><font face='verdana' color='red'><?php echo $error['ast9m'] ?></font></td>
                                <td><input size ="12" name='ast1y' type='text' value='<?php echo $form['ast1y'] ?>' /><font face='verdana' color='red'><?php echo $error['ast1y'] ?></font></td>
                                <td><input size ="12" name='ast2y' type='text' value='<?php echo $form['ast2y'] ?>' /><font face='verdana' color='red'><?php echo $error['ast2y'] ?></font></td>
                                <td><input size ="12" name='ast3y' type='text' value='<?php echo $form['ast3y'] ?>' /><font face='verdana' color='red'><?php echo $error['ast3y'] ?></font></td>
                                <td><input size ="12" name='ast4y' type='text' value='<?php echo $form['ast4y'] ?>' /><font face='verdana' color='red'><?php echo $error['ast4y'] ?></font></td>
                                <td><input size ="12" name='ast5y' type='text' value='<?php echo $form['ast5y'] ?>' /><font face='verdana' color='red'><?php echo $error['ast5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>ALKP</th>
                                <td><input size ="12" name='alkp3m' type='text' value='<?php echo $form['alkp3m'] ?>' /><font face='verdana' color='red'><?php echo $error['alkp3m'] ?></font></td>
                                <td><input size ="12" name='alkp9m' type='text' value='<?php echo $form['alkp9m'] ?>' /><font face='verdana' color='red'><?php echo $error['alkp9m'] ?></font></td>
                                <td><input size ="12" name='alkp1y' type='text' value='<?php echo $form['alkp1y'] ?>' /><font face='verdana' color='red'><?php echo $error['alkp1y'] ?></font></td>
                                <td><input size ="12" name='alkp2y' type='text' value='<?php echo $form['alkp2y'] ?>' /><font face='verdana' color='red'><?php echo $error['alkp2y'] ?></font></td>
                                <td><input size ="12" name='alkp3y' type='text' value='<?php echo $form['alkp3y'] ?>' /><font face='verdana' color='red'><?php echo $error['alkp3y'] ?></font></td>
                                <td><input size ="12" name='alkp4y' type='text' value='<?php echo $form['alkp4y'] ?>' /><font face='verdana' color='red'><?php echo $error['alkp4y'] ?></font></td>
                                <td><input size ="12" name='alkp5y' type='text' value='<?php echo $form['alkp5y'] ?>' /><font face='verdana' color='red'><?php echo $error['alkp5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>TSH</th>
                                <td><input size ="12" name='tsh3m' type='text' value='<?php echo $form['tsh3m'] ?>' /><font face='verdana' color='red'><?php echo $error['tsh3m'] ?></font></td>
                                <td><input size ="12" name='tsh9m' type='text' value='<?php echo $form['tsh9m'] ?>' /><font face='verdana' color='red'><?php echo $error['tsh9m'] ?></font></td>
                                <td><input size ="12" name='tsh1y' type='text' value='<?php echo $form['tsh1y'] ?>' /><font face='verdana' color='red'><?php echo $error['tsh1y'] ?></font></td>
                                <td><input size ="12" name='tsh2y' type='text' value='<?php echo $form['tsh2y'] ?>' /><font face='verdana' color='red'><?php echo $error['tsh2y'] ?></font></td>
                                <td><input size ="12" name='tsh3y' type='text' value='<?php echo $form['tsh3y'] ?>' /><font face='verdana' color='red'><?php echo $error['tsh3y'] ?></font></td>
                                <td><input size ="12" name='tsh4y' type='text' value='<?php echo $form['tsh4y'] ?>' /><font face='verdana' color='red'><?php echo $error['tsh4y'] ?></font></td>
                                <td><input size ="12" name='tsh5y' type='text' value='<?php echo $form['tsh5y'] ?>' /><font face='verdana' color='red'><?php echo $error['tsh5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Free T4</th>
                                <td><input size ="12" name='free3m' type='text' value='<?php echo $form['free3m'] ?>' /><font face='verdana' color='red'><?php echo $error['free3m'] ?></font></td>
                                <td><input size ="12" name='free9m' type='text' value='<?php echo $form['free9m'] ?>' /><font face='verdana' color='red'><?php echo $error['free9m'] ?></font></td>
                                <td><input size ="12" name='free1y' type='text' value='<?php echo $form['free1y'] ?>' /><font face='verdana' color='red'><?php echo $error['free1y'] ?></font></td>
                                <td><input size ="12" name='free2y' type='text' value='<?php echo $form['free2y'] ?>' /><font face='verdana' color='red'><?php echo $error['free2y'] ?></font></td>
                                <td><input size ="12" name='free3y' type='text' value='<?php echo $form['free3y'] ?>' /><font face='verdana' color='red'><?php echo $error['free3y'] ?></font></td>
                                <td><input size ="12" name='free4y' type='text' value='<?php echo $form['free4y'] ?>' /><font face='verdana' color='red'><?php echo $error['free4y'] ?></font></td>
                                <td><input size ="12" name='free5y' type='text' value='<?php echo $form['free5y'] ?>' /><font face='verdana' color='red'><?php echo $error['free5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Serum Iron</th>
                                <td><input size ="12" name='serumiron3m' type='text' value='<?php echo $form['serumiron3m'] ?>' /><font face='verdana' color='red'><?php echo $error['serumiron3m'] ?></font></td>
                                <td><input size ="12" name='serumiron9m' type='text' value='<?php echo $form['serumiron9m'] ?>' /><font face='verdana' color='red'><?php echo $error['serumiron9m'] ?></font></td>
                                <td><input size ="12" name='serumiron1y' type='text' value='<?php echo $form['serumiron1y'] ?>' /><font face='verdana' color='red'><?php echo $error['serumiron1y'] ?></font></td>
                                <td><input size ="12" name='serumiron2y' type='text' value='<?php echo $form['serumiron2y'] ?>' /><font face='verdana' color='red'><?php echo $error['serumiron2y'] ?></font></td>
                                <td><input size ="12" name='serumiron3y' type='text' value='<?php echo $form['serumiron3y'] ?>' /><font face='verdana' color='red'><?php echo $error['serumiron3y'] ?></font></td>
                                <td><input size ="12" name='serumiron4y' type='text' value='<?php echo $form['serumiron4y'] ?>' /><font face='verdana' color='red'><?php echo $error['serumiron4y'] ?></font></td>
                                <td><input size ="12" name='serumiron5y' type='text' value='<?php echo $form['serumiron5y'] ?>' /><font face='verdana' color='red'><?php echo $error['serumiron5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>TIBC</th>
                                <td><input size ="12" name='tibc3m' type='text' value='<?php echo $form['tibc3m'] ?>' /><font face='verdana' color='red'><?php echo $error['tibc3m'] ?></font></td>
                                <td><input size ="12" name='tibc9m' type='text' value='<?php echo $form['tibc9m'] ?>' /><font face='verdana' color='red'><?php echo $error['tibc9m'] ?></font></td>
                                <td><input size ="12" name='tibc1y' type='text' value='<?php echo $form['tibc1y'] ?>' /><font face='verdana' color='red'><?php echo $error['tibc1y'] ?></font></td>
                                <td><input size ="12" name='tibc2y' type='text' value='<?php echo $form['tibc2y'] ?>' /><font face='verdana' color='red'><?php echo $error['tibc2y'] ?></font></td>
                                <td><input size ="12" name='tibc3y' type='text' value='<?php echo $form['tibc3y'] ?>' /><font face='verdana' color='red'><?php echo $error['tibc3y'] ?></font></td>
                                <td><input size ="12" name='tibc4y' type='text' value='<?php echo $form['tibc4y'] ?>' /><font face='verdana' color='red'><?php echo $error['tibc4y'] ?></font></td>
                                <td><input size ="12" name='tibc5y' type='text' value='<?php echo $form['tibc5y'] ?>' /><font face='verdana' color='red'><?php echo $error['tibc5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Ferritin</th>
                                <td><input size ="12" name='ferritin3m' type='text' value='<?php echo $form['ferritin3m'] ?>' /><font face='verdana' color='red'><?php echo $error['ferritin3m'] ?></font></td>
                                <td><input size ="12" name='ferritin9m' type='text' value='<?php echo $form['ferritin9m'] ?>' /><font face='verdana' color='red'><?php echo $error['ferritin9m'] ?></font></td>
                                <td><input size ="12" name='ferritin1y' type='text' value='<?php echo $form['ferritin1y'] ?>' /><font face='verdana' color='red'><?php echo $error['ferritin1y'] ?></font></td>
                                <td><input size ="12" name='ferritin2y' type='text' value='<?php echo $form['ferritin2y'] ?>' /><font face='verdana' color='red'><?php echo $error['ferritin2y'] ?></font></td>
                                <td><input size ="12" name='ferritin3y' type='text' value='<?php echo $form['ferritin3y'] ?>' /><font face='verdana' color='red'><?php echo $error['ferritin3y'] ?></font></td>
                                <td><input size ="12" name='ferritin4y' type='text' value='<?php echo $form['ferritin4y'] ?>' /><font face='verdana' color='red'><?php echo $error['ferritin4y'] ?></font></td>
                                <td><input size ="12" name='ferritin5y' type='text' value='<?php echo $form['ferritin5y'] ?>' /><font face='verdana' color='red'><?php echo $error['ferritin5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>PTH</th>
                                <td><input size ="12" name='pth3m' type='text' value='<?php echo $form['pth3m'] ?>' /><font face='verdana' color='red'><?php echo $error['pth3m'] ?></font></td>
                                <td><input size ="12" name='pth9m' type='text' value='<?php echo $form['pth9m'] ?>' /><font face='verdana' color='red'><?php echo $error['pth9m'] ?></font></td>
                                <td><input size ="12" name='pth1y' type='text' value='<?php echo $form['pth1y'] ?>' /><font face='verdana' color='red'><?php echo $error['pth1y'] ?></font></td>
                                <td><input size ="12" name='pth2y' type='text' value='<?php echo $form['pth2y'] ?>' /><font face='verdana' color='red'><?php echo $error['pth2y'] ?></font></td>
                                <td><input size ="12" name='pth3y' type='text' value='<?php echo $form['pth3y'] ?>' /><font face='verdana' color='red'><?php echo $error['pth3y'] ?></font></td>
                                <td><input size ="12" name='pth4y' type='text' value='<?php echo $form['pth4y'] ?>' /><font face='verdana' color='red'><?php echo $error['pth4y'] ?></font></td>
                                <td><input size ="12" name='pth5y' type='text' value='<?php echo $form['pth5y'] ?>' /><font face='verdana' color='red'><?php echo $error['pth5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Ca</th>
                                <td><input size ="12" name='ca3m' type='text' value='<?php echo $form['ca3m'] ?>' /><font face='verdana' color='red'><?php echo $error['ca3m'] ?></font></td>
                                <td><input size ="12" name='ca9m' type='text' value='<?php echo $form['ca9m'] ?>' /><font face='verdana' color='red'><?php echo $error['ca9m'] ?></font></td>
                                <td><input size ="12" name='ca1y' type='text' value='<?php echo $form['ca1y'] ?>' /><font face='verdana' color='red'><?php echo $error['ca1y'] ?></font></td>
                                <td><input size ="12" name='ca2y' type='text' value='<?php echo $form['ca2y'] ?>' /><font face='verdana' color='red'><?php echo $error['ca2y'] ?></font></td>
                                <td><input size ="12" name='ca3y' type='text' value='<?php echo $form['ca3y'] ?>' /><font face='verdana' color='red'><?php echo $error['ca3y'] ?></font></td>
                                <td><input size ="12" name='ca4y' type='text' value='<?php echo $form['ca4y'] ?>' /><font face='verdana' color='red'><?php echo $error['ca4y'] ?></font></td>
                                <td><input size ="12" name='ca5y' type='text' value='<?php echo $form['ca5y'] ?>' /><font face='verdana' color='red'><?php echo $error['ca5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>P</th>
                                <td><input size ="12" name='p3m' type='text' value='<?php echo $form['p3m'] ?>' /><font face='verdana' color='red'><?php echo $error['p3m'] ?></font></td>
                                <td><input size ="12" name='p9m' type='text' value='<?php echo $form['p9m'] ?>' /><font face='verdana' color='red'><?php echo $error['p9m'] ?></font></td>
                                <td><input size ="12" name='p1y' type='text' value='<?php echo $form['p1y'] ?>' /><font face='verdana' color='red'><?php echo $error['p1y'] ?></font></td>
                                <td><input size ="12" name='p2y' type='text' value='<?php echo $form['p2y'] ?>' /><font face='verdana' color='red'><?php echo $error['p2y'] ?></font></td>
                                <td><input size ="12" name='p3y' type='text' value='<?php echo $form['p3y'] ?>' /><font face='verdana' color='red'><?php echo $error['p3y'] ?></font></td>
                                <td><input size ="12" name='p4y' type='text' value='<?php echo $form['p4y'] ?>' /><font face='verdana' color='red'><?php echo $error['p4y'] ?></font></td>
                                <td><input size ="12" name='p5y' type='text' value='<?php echo $form['p5y'] ?>' /><font face='verdana' color='red'><?php echo $error['p5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Mg</th>
                                <td><input size ="12" name='mg3m' type='text' value='<?php echo $form['mg3m'] ?>' /><font face='verdana' color='red'><?php echo $error['mg3m'] ?></font></td>
                                <td><input size ="12" name='mg9m' type='text' value='<?php echo $form['mg9m'] ?>' /><font face='verdana' color='red'><?php echo $error['mg9m'] ?></font></td>
                                <td><input size ="12" name='mg1y' type='text' value='<?php echo $form['mg1y'] ?>' /><font face='verdana' color='red'><?php echo $error['mg1y'] ?></font></td>
                                <td><input size ="12" name='mg2y' type='text' value='<?php echo $form['mg2y'] ?>' /><font face='verdana' color='red'><?php echo $error['mg2y'] ?></font></td>
                                <td><input size ="12" name='mg3y' type='text' value='<?php echo $form['mg3y'] ?>' /><font face='verdana' color='red'><?php echo $error['mg3y'] ?></font></td>
                                <td><input size ="12" name='mg4y' type='text' value='<?php echo $form['mg4y'] ?>' /><font face='verdana' color='red'><?php echo $error['mg4y'] ?></font></td>
                                <td><input size ="12" name='mg5y' type='text' value='<?php echo $form['mg5y'] ?>' /><font face='verdana' color='red'><?php echo $error['mg5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Zn</th>
                                <td><input size ="12" name='zn3m' type='text' value='<?php echo $form['zn3m'] ?>' /><font face='verdana' color='red'><?php echo $error['zn3m'] ?></font></td>
                                <td><input size ="12" name='zn9m' type='text' value='<?php echo $form['zn9m'] ?>' /><font face='verdana' color='red'><?php echo $error['zn9m'] ?></font></td>
                                <td><input size ="12" name='zn1y' type='text' value='<?php echo $form['zn1y'] ?>' /><font face='verdana' color='red'><?php echo $error['zn1y'] ?></font></td>
                                <td><input size ="12" name='zn2y' type='text' value='<?php echo $form['zn2y'] ?>' /><font face='verdana' color='red'><?php echo $error['zn2y'] ?></font></td>
                                <td><input size ="12" name='zn3y' type='text' value='<?php echo $form['zn3y'] ?>' /><font face='verdana' color='red'><?php echo $error['zn3y'] ?></font></td>
                                <td><input size ="12" name='zn4y' type='text' value='<?php echo $form['zn4y'] ?>' /><font face='verdana' color='red'><?php echo $error['zn4y'] ?></font></td>
                                <td><input size ="12" name='zn5y' type='text' value='<?php echo $form['zn5y'] ?>' /><font face='verdana' color='red'><?php echo $error['zn5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Selenium</th>
                                <td><input size ="12" name='selenium3m' type='text' value='<?php echo $form['selenium3m'] ?>' /><font face='verdana' color='red'><?php echo $error['selenium3m'] ?></font></td>
                                <td><input size ="12" name='selenium9m' type='text' value='<?php echo $form['selenium9m'] ?>' /><font face='verdana' color='red'><?php echo $error['selenium9m'] ?></font></td>
                                <td><input size ="12" name='selenium1y' type='text' value='<?php echo $form['selenium1y'] ?>' /><font face='verdana' color='red'><?php echo $error['selenium1y'] ?></font></td>
                                <td><input size ="12" name='selenium2y' type='text' value='<?php echo $form['selenium2y'] ?>' /><font face='verdana' color='red'><?php echo $error['selenium2y'] ?></font></td>
                                <td><input size ="12" name='selenium3y' type='text' value='<?php echo $form['selenium3y'] ?>' /><font face='verdana' color='red'><?php echo $error['selenium3y'] ?></font></td>
                                <td><input size ="12" name='selenium4y' type='text' value='<?php echo $form['selenium4y'] ?>' /><font face='verdana' color='red'><?php echo $error['selenium4y'] ?></font></td>
                                <td><input size ="12" name='selenium5y' type='text' value='<?php echo $form['selenium5y'] ?>' /><font face='verdana' color='red'><?php echo $error['selenium5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Copper</th>
                                <td><input size ="12" name='copper3m' type='text' value='<?php echo $form['copper3m'] ?>' /><font face='verdana' color='red'><?php echo $error['copper3m'] ?></font></td>
                                <td><input size ="12" name='copper9m' type='text' value='<?php echo $form['copper9m'] ?>' /><font face='verdana' color='red'><?php echo $error['copper9m'] ?></font></td>
                                <td><input size ="12" name='copper1y' type='text' value='<?php echo $form['copper1y'] ?>' /><font face='verdana' color='red'><?php echo $error['copper1y'] ?></font></td>
                                <td><input size ="12" name='copper2y' type='text' value='<?php echo $form['copper2y'] ?>' /><font face='verdana' color='red'><?php echo $error['copper2y'] ?></font></td>
                                <td><input size ="12" name='copper3y' type='text' value='<?php echo $form['copper3y'] ?>' /><font face='verdana' color='red'><?php echo $error['copper3y'] ?></font></td>
                                <td><input size ="12" name='copper4y' type='text' value='<?php echo $form['copper4y'] ?>' /><font face='verdana' color='red'><?php echo $error['copper4y'] ?></font></td>
                                <td><input size ="12" name='copper5y' type='text' value='<?php echo $form['copper5y'] ?>' /><font face='verdana' color='red'><?php echo $error['copper5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Uric acid</th>
                                <td><input size ="12" name='uricacid3m' type='text' value='<?php echo $form['uricacid3m'] ?>' /><font face='verdana' color='red'><?php echo $error['uricacid3m'] ?></font></td>
                                <td><input size ="12" name='uricacid9m' type='text' value='<?php echo $form['uricacid9m'] ?>' /><font face='verdana' color='red'><?php echo $error['uricacid9m'] ?></font></td>
                                <td><input size ="12" name='uricacid1y' type='text' value='<?php echo $form['uricacid1y'] ?>' /><font face='verdana' color='red'><?php echo $error['uricacid1y'] ?></font></td>
                                <td><input size ="12" name='uricacid2y' type='text' value='<?php echo $form['uricacid2y'] ?>' /><font face='verdana' color='red'><?php echo $error['uricacid2y'] ?></font></td>
                                <td><input size ="12" name='uricacid3y' type='text' value='<?php echo $form['uricacid3y'] ?>' /><font face='verdana' color='red'><?php echo $error['uricacid3y'] ?></font></td>
                                <td><input size ="12" name='uricacid4y' type='text' value='<?php echo $form['uricacid4y'] ?>' /><font face='verdana' color='red'><?php echo $error['uricacid4y'] ?></font></td>
                                <td><input size ="12" name='uricacid5y' type='text' value='<?php echo $form['uricacid5y'] ?>' /><font face='verdana' color='red'><?php echo $error['uricacid5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Vitamin A</th>
                                <td><input size ="12" name='vitamina3m' type='text' value='<?php echo $form['vitamina3m'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamina3m'] ?></font></td>
                                <td><input size ="12" name='vitamina9m' type='text' value='<?php echo $form['vitamina9m'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamina9m'] ?></font></td>
                                <td><input size ="12" name='vitamina1y' type='text' value='<?php echo $form['vitamina1y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamina1y'] ?></font></td>
                                <td><input size ="12" name='vitamina2y' type='text' value='<?php echo $form['vitamina2y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamina2y'] ?></font></td>
                                <td><input size ="12" name='vitamina3y' type='text' value='<?php echo $form['vitamina3y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamina3y'] ?></font></td>
                                <td><input size ="12" name='vitamina4y' type='text' value='<?php echo $form['vitamina4y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamina4y'] ?></font></td>
                                <td><input size ="12" name='vitamina5y' type='text' value='<?php echo $form['vitamina5y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamina5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Vitamin B1</th>
                                <td><input size ="12" name='vitaminb3m' type='text' value='<?php echo $form['vitaminb3m'] ?>' /><font face='verdana' color='red'><?php echo $error['vitaminb3m'] ?></font></td>
                                <td><input size ="12" name='vitaminb9m' type='text' value='<?php echo $form['vitaminb9m'] ?>' /><font face='verdana' color='red'><?php echo $error['vitaminb9m'] ?></font></td>
                                <td><input size ="12" name='vitaminb1y' type='text' value='<?php echo $form['vitaminb1y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitaminb1y'] ?></font></td>
                                <td><input size ="12" name='vitaminb2y' type='text' value='<?php echo $form['vitaminb2y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitaminb2y'] ?></font></td>
                                <td><input size ="12" name='vitaminb3y' type='text' value='<?php echo $form['vitaminb3y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitaminb3y'] ?></font></td>
                                <td><input size ="12" name='vitaminb4y' type='text' value='<?php echo $form['vitaminb4y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitaminb4y'] ?></font></td>
                                <td><input size ="12" name='vitaminb5y' type='text' value='<?php echo $form['vitaminb5y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitaminb5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Vitamin B12</th>
                                <td><input size ="12" name='vitab3m' type='text' value='<?php echo $form['vitab3m'] ?>' /><font face='verdana' color='red'><?php echo $error['vitab3m'] ?></font></td>
                                <td><input size ="12" name='vitab9m' type='text' value='<?php echo $form['vitab9m'] ?>' /><font face='verdana' color='red'><?php echo $error['vitab9m'] ?></font></td>
                                <td><input size ="12" name='vitab1y' type='text' value='<?php echo $form['vitab1y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitab1y'] ?></font></td>
                                <td><input size ="12" name='vitab2y' type='text' value='<?php echo $form['vitab2y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitab2y'] ?></font></td>
                                <td><input size ="12" name='vitab3y' type='text' value='<?php echo $form['vitab3y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitab3y'] ?></font></td>
                                <td><input size ="12" name='vitab4y' type='text' value='<?php echo $form['vitab4y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitab4y'] ?></font></td>
                                <td><input size ="12" name='vitab5y' type='text' value='<?php echo $form['vitab5y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitab5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Vitamin C</th>
                                <td><input size ="12" name='vitac3m' type='text' value='<?php echo $form['vitac3m'] ?>' /><font face='verdana' color='red'><?php echo $error['vitac3m'] ?></font></td>
                                <td><input size ="12" name='vitac9m' type='text' value='<?php echo $form['vitac9m'] ?>' /><font face='verdana' color='red'><?php echo $error['vitac9m'] ?></font></td>
                                <td><input size ="12" name='vitac1y' type='text' value='<?php echo $form['vitac1y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitac1y'] ?></font></td>
                                <td><input size ="12" name='vitac2y' type='text' value='<?php echo $form['vitac2y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitac2y'] ?></font></td>
                                <td><input size ="12" name='vitac3y' type='text' value='<?php echo $form['vitac3y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitac3y'] ?></font></td>
                                <td><input size ="12" name='vitac4y' type='text' value='<?php echo $form['vitac4y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitac4y'] ?></font></td>
                                <td><input size ="12" name='vitac5y' type='text' value='<?php echo $form['vitac5y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitac5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Vitamin D25</th>
                                <td><input size ="12" name='vitamd3m' type='text' value='<?php echo $form['vitamd3m'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamd3m'] ?></font></td>
                                <td><input size ="12" name='vitamd9m' type='text' value='<?php echo $form['vitamd9m'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamd9m'] ?></font></td>
                                <td><input size ="12" name='vitamd1y' type='text' value='<?php echo $form['vitamd1y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamd1y'] ?></font></td>
                                <td><input size ="12" name='vitamd2y' type='text' value='<?php echo $form['vitamd2y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamd2y'] ?></font></td>
                                <td><input size ="12" name='vitamd3y' type='text' value='<?php echo $form['vitamd3y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamd3y'] ?></font></td>
                                <td><input size ="12" name='vitamd4y' type='text' value='<?php echo $form['vitamd4y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamd4y'] ?></font></td>
                                <td><input size ="12" name='vitamd5y' type='text' value='<?php echo $form['vitamd5y'] ?>' /><font face='verdana' color='red'><?php echo $error['vitamd5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Folic acid</th>
                                <td><input size ="12" name='folicacid3m' type='text' value='<?php echo $form['folicacid3m'] ?>' /><font face='verdana' color='red'><?php echo $error['folicacid3m'] ?></font></td>
                                <td><input size ="12" name='folicacid9m' type='text' value='<?php echo $form['folicacid9m'] ?>' /><font face='verdana' color='red'><?php echo $error['folicacid9m'] ?></font></td>
                                <td><input size ="12" name='folicacid1y' type='text' value='<?php echo $form['folicacid1y'] ?>' /><font face='verdana' color='red'><?php echo $error['folicacid1y'] ?></font></td>
                                <td><input size ="12" name='folicacid2y' type='text' value='<?php echo $form['folicacid2y'] ?>' /><font face='verdana' color='red'><?php echo $error['folicacid2y'] ?></font></td>
                                <td><input size ="12" name='folicacid3y' type='text' value='<?php echo $form['folicacid3y'] ?>' /><font face='verdana' color='red'><?php echo $error['folicacid3y'] ?></font></td>
                                <td><input size ="12" name='folicacid4y' type='text' value='<?php echo $form['folicacid4y'] ?>' /><font face='verdana' color='red'><?php echo $error['folicacid4y'] ?></font></td>
                                <td><input size ="12" name='folicacid5y' type='text' value='<?php echo $form['folicacid5y'] ?>' /><font face='verdana' color='red'><?php echo $error['folicacid5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Anti H.pylori Ab</th>
                                <td><input size ="12" name='antih3m' type='text' value='<?php echo $form['antih3m'] ?>' /><font face='verdana' color='red'><?php echo $error['antih3m'] ?></font></td>
                                <td><input size ="12" name='antih9m' type='text' value='<?php echo $form['antih9m'] ?>' /><font face='verdana' color='red'><?php echo $error['antih9m'] ?></font></td>
                                <td><input size ="12" name='antih1y' type='text' value='<?php echo $form['antih1y'] ?>' /><font face='verdana' color='red'><?php echo $error['antih1y'] ?></font></td>
                                <td><input size ="12" name='antih2y' type='text' value='<?php echo $form['antih2y'] ?>' /><font face='verdana' color='red'><?php echo $error['antih2y'] ?></font></td>
                                <td><input size ="12" name='antih3y' type='text' value='<?php echo $form['antih3y'] ?>' /><font face='verdana' color='red'><?php echo $error['antih3y'] ?></font></td>
                                <td><input size ="12" name='antih4y' type='text' value='<?php echo $form['antih4y'] ?>' /><font face='verdana' color='red'><?php echo $error['antih4y'] ?></font></td>
                                <td><input size ="12" name='antih5y' type='text' value='<?php echo $form['antih5y'] ?>' /><font face='verdana' color='red'><?php echo $error['antih5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Protein C</th>
                                <td><input size ="12" name='proteinc3m' type='text' value='<?php echo $form['proteinc3m'] ?>' /><font face='verdana' color='red'><?php echo $error['proteinc3m'] ?></font></td>
                                <td><input size ="12" name='proteinc9m' type='text' value='<?php echo $form['proteinc9m'] ?>' /><font face='verdana' color='red'><?php echo $error['proteinc9m'] ?></font></td>
                                <td><input size ="12" name='proteinc1y' type='text' value='<?php echo $form['proteinc1y'] ?>' /><font face='verdana' color='red'><?php echo $error['proteinc1y'] ?></font></td>
                                <td><input size ="12" name='proteinc2y' type='text' value='<?php echo $form['proteinc2y'] ?>' /><font face='verdana' color='red'><?php echo $error['proteinc2y'] ?></font></td>
                                <td><input size ="12" name='proteinc3y' type='text' value='<?php echo $form['proteinc3y'] ?>' /><font face='verdana' color='red'><?php echo $error['proteinc3y'] ?></font></td>
                                <td><input size ="12" name='proteinc4y' type='text' value='<?php echo $form['proteinc4y'] ?>' /><font face='verdana' color='red'><?php echo $error['proteinc4y'] ?></font></td>
                                <td><input size ="12" name='proteinc5y' type='text' value='<?php echo $form['proteinc5y'] ?>' /><font face='verdana' color='red'><?php echo $error['proteinc5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Protein S</th>
                                <td><input size ="12" name='proteins3m' type='text' value='<?php echo $form['proteins3m'] ?>' /><font face='verdana' color='red'><?php echo $error['proteins3m'] ?></font></td>
                                <td><input size ="12" name='proteins9m' type='text' value='<?php echo $form['proteins9m'] ?>' /><font face='verdana' color='red'><?php echo $error['proteins9m'] ?></font></td>
                                <td><input size ="12" name='proteins1y' type='text' value='<?php echo $form['proteins1y'] ?>' /><font face='verdana' color='red'><?php echo $error['proteins1y'] ?></font></td>
                                <td><input size ="12" name='proteins2y' type='text' value='<?php echo $form['proteins2y'] ?>' /><font face='verdana' color='red'><?php echo $error['proteins2y'] ?></font></td>
                                <td><input size ="12" name='proteins3y' type='text' value='<?php echo $form['proteins3y'] ?>' /><font face='verdana' color='red'><?php echo $error['proteins3y'] ?></font></td>
                                <td><input size ="12" name='proteins4y' type='text' value='<?php echo $form['proteins4y'] ?>' /><font face='verdana' color='red'><?php echo $error['proteins4y'] ?></font></td>
                                <td><input size ="12" name='proteins5y' type='text' value='<?php echo $form['proteins5y'] ?>' /><font face='verdana' color='red'><?php echo $error['proteins5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>Antithrombin III</th>
                                <td><input size ="12" name='antith3m' type='text' value='<?php echo $form['antith3m'] ?>' /><font face='verdana' color='red'><?php echo $error['antith3m'] ?></font></td>
                                <td><input size ="12" name='antith9m' type='text' value='<?php echo $form['antith9m'] ?>' /><font face='verdana' color='red'><?php echo $error['antith9m'] ?></font></td>
                                <td><input size ="12" name='antith1y' type='text' value='<?php echo $form['antith1y'] ?>' /><font face='verdana' color='red'><?php echo $error['antith1y'] ?></font></td>
                                <td><input size ="12" name='antith2y' type='text' value='<?php echo $form['antith2y'] ?>' /><font face='verdana' color='red'><?php echo $error['antith2y'] ?></font></td>
                                <td><input size ="12" name='antith3y' type='text' value='<?php echo $form['antith3y'] ?>' /><font face='verdana' color='red'><?php echo $error['antith3y'] ?></font></td>
                                <td><input size ="12" name='antith4y' type='text' value='<?php echo $form['antith4y'] ?>' /><font face='verdana' color='red'><?php echo $error['antith4y'] ?></font></td>
                                <td><input size ="12" name='antith5y' type='text' value='<?php echo $form['antith5y'] ?>' /><font face='verdana' color='red'><?php echo $error['antith5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>LH</th>
                                <td><input size ="12" name='lh3m' type='text' value='<?php echo $form['lh3m'] ?>' /><font face='verdana' color='red'><?php echo $error['lh3m'] ?></font></td>
                                <td><input size ="12" name='lh9m' type='text' value='<?php echo $form['lh9m'] ?>' /><font face='verdana' color='red'><?php echo $error['lh9m'] ?></font></td>
                                <td><input size ="12" name='lh1y' type='text' value='<?php echo $form['lh1y'] ?>' /><font face='verdana' color='red'><?php echo $error['lh1y'] ?></font></td>
                                <td><input size ="12" name='lh2y' type='text' value='<?php echo $form['lh2y'] ?>' /><font face='verdana' color='red'><?php echo $error['lh2y'] ?></font></td>
                                <td><input size ="12" name='lh3y' type='text' value='<?php echo $form['lh3y'] ?>' /><font face='verdana' color='red'><?php echo $error['lh3y'] ?></font></td>
                                <td><input size ="12" name='lh4y' type='text' value='<?php echo $form['lh4y'] ?>' /><font face='verdana' color='red'><?php echo $error['lh4y'] ?></font></td>
                                <td><input size ="12" name='lh5y' type='text' value='<?php echo $form['lh5y'] ?>' /><font face='verdana' color='red'><?php echo $error['lh5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>FSH</th>
                                <td><input size ="12" name='fsh3m' type='text' value='<?php echo $form['fsh3m'] ?>' /><font face='verdana' color='red'><?php echo $error['fsh3m'] ?></font></td>
                                <td><input size ="12" name='fsh9m' type='text' value='<?php echo $form['fsh9m'] ?>' /><font face='verdana' color='red'><?php echo $error['fsh9m'] ?></font></td>
                                <td><input size ="12" name='fsh1y' type='text' value='<?php echo $form['fsh1y'] ?>' /><font face='verdana' color='red'><?php echo $error['fsh1y'] ?></font></td>
                                <td><input size ="12" name='fsh2y' type='text' value='<?php echo $form['fsh2y'] ?>' /><font face='verdana' color='red'><?php echo $error['fsh2y'] ?></font></td>
                                <td><input size ="12" name='fsh3y' type='text' value='<?php echo $form['fsh3y'] ?>' /><font face='verdana' color='red'><?php echo $error['fsh3y'] ?></font></td>
                                <td><input size ="12" name='fsh4y' type='text' value='<?php echo $form['fsh4y'] ?>' /><font face='verdana' color='red'><?php echo $error['fsh4y'] ?></font></td>
                                <td><input size ="12" name='fsh5y' type='text' value='<?php echo $form['fsh5y'] ?>' /><font face='verdana' color='red'><?php echo $error['fsh5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>HB</th>
                                <td><input size ="12" name='hb3m' type='text' value='<?php echo $form['hb3m'] ?>' /><font face='verdana' color='red'><?php echo $error['hb3m'] ?></font></td>
                                <td><input size ="12" name='hb9m' type='text' value='<?php echo $form['hb9m'] ?>' /><font face='verdana' color='red'><?php echo $error['hb9m'] ?></font></td>
                                <td><input size ="12" name='hb1y' type='text' value='<?php echo $form['hb1y'] ?>' /><font face='verdana' color='red'><?php echo $error['hb1y'] ?></font></td>
                                <td><input size ="12" name='hb2y' type='text' value='<?php echo $form['hb2y'] ?>' /><font face='verdana' color='red'><?php echo $error['hb2y'] ?></font></td>
                                <td><input size ="12" name='hb3y' type='text' value='<?php echo $form['hb3y'] ?>' /><font face='verdana' color='red'><?php echo $error['hb3y'] ?></font></td>
                                <td><input size ="12" name='hb4y' type='text' value='<?php echo $form['hb4y'] ?>' /><font face='verdana' color='red'><?php echo $error['hb4y'] ?></font></td>
                                <td><input size ="12" name='hb5y' type='text' value='<?php echo $form['hb5y'] ?>' /><font face='verdana' color='red'><?php echo $error['hb5y'] ?></font></td>
                            </tr>
                            <tr>
                                <th>HCT</th>
                                <td><input size ="12" name='hct3m' type='text' value='<?php echo $form['hct3m'] ?>' /><font face='verdana' color='red'><?php echo $error['hct3m'] ?></font></td>
                                <td><input size ="12" name='hct9m' type='text' value='<?php echo $form['hct9m'] ?>' /><font face='verdana' color='red'><?php echo $error['hct9m'] ?></font></td>
                                <td><input size ="12" name='hct1y' type='text' value='<?php echo $form['hct1y'] ?>' /><font face='verdana' color='red'><?php echo $error['hct1y'] ?></font></td>
                                <td><input size ="12" name='hct2y' type='text' value='<?php echo $form['hct2y'] ?>' /><font face='verdana' color='red'><?php echo $error['hct2y'] ?></font></td>
                                <td><input size ="12" name='hct3y' type='text' value='<?php echo $form['hct3y'] ?>' /><font face='verdana' color='red'><?php echo $error['hct3y'] ?></font></td>
                                <td><input size ="12" name='hct4y' type='text' value='<?php echo $form['hct4y'] ?>' /><font face='verdana' color='red'><?php echo $error['hct4y'] ?></font></td>
                                <td><input size ="12" name='hct5y' type='text' value='<?php echo $form['hct5y'] ?>' /><font face='verdana' color='red'><?php echo $error['hct5y'] ?></font></td>
                            </tr>
                        </table>
                        <div class="buttons_div1" >
                            <input name='com_fu_save' type='hidden' value="1" />
                            <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                            <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                        </div>
                        <?php if ($message != ""): ?>
                            <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
            <!--tab-3 end-->
            <div class="tab-pane fade" id="ResultOfPathologyTab">
                <form class="form-horizontal" name="fu_form11" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                    <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                    <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                    <?= $this->CheckBox(GASTRITIS, "gastritis", $form, $error, true) ?>
                    <div id="gastritis-td" class="condition-form-item" <?= (($form["gastritis"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Select(GASTRITISS, "gastritiss", $form, $error, "combo(acute/chronic/mixed/lymphocytic/plasmacytic/eosinophilic/chemical/atrophic)") ?>
                        <?= $this->Select(GASTRITISSIDE, "gastritisside", $form, $error, "combo(surface epithelium/pits/stroma/glands/all/undetermined)") ?>
                        <?= $this->Select(GASTRITISGR, "gastritisgr", $form, $error, "combo(mild/moderate/sever/undetermined)") ?>
                    </div>

                    <?= $this->CheckBox(ULCERATION, "ulceration", $form, $error, true) ?>
                    <div id="ulceration-td" class="condition-form-item" <?= (($form["ulceration"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Select(ULCERATIONS, "ulcerations", $form, $error, "combo(single/multiple)") ?>
                        <?= $this->Select(ULCERATIONLOC, "ulcerationloc", $form, $error, "combo(corpus/antrum/both)") ?>
                    </div>

                    <?= $this->CheckBox(ABSTTOGLRA, "absttoglra", $form, $error, true) ?>
                    <div id="absttoglra-td" class="condition-form-item" <?= (($form["absttoglra"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Select(ABSTTOGLRATOO, "absttoglratoo", $form, $error, "combo(too much stroma/loss of normal mucosal component/increased cellularity/undetermined)") ?>
                    </div>

                    <?= $this->CheckBox(ABSTTOGLRA, "disofgl", $form, $error, true) ?>
                    <div id="disofgl-td" class="condition-form-item" <?= (($form["disofgl"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Select(DISOFGLABNORM, "disofglabnorm", $form, $error, "combo(abnormal branching/irregular glands)") ?>
                    </div>

                    <?= $this->CheckBox(METAPLASIA, "metaplasia", $form, $error, true) ?>
                    <div id="metaplasia-td" class="condition-form-item" <?= (($form["metaplasia"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Select(METAPLASIAINT, "metaplasiaint", $form, $error, "combo(Intestinal/pyloric/pancreatic/ciliated/mixed)") ?>
                        <?= $this->Select(METAPLASIAGRADING, "metaplasiagrading", $form, $error, "combo(mild/moderate/sever)") ?>
                    </div>

                    <?= $this->CheckBox(ABBLOOD, "abblood", $form, $error, true) ?>
                    <div id="abblood-td" class="condition-form-item" <?= (($form["abblood"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Select(ABBLOODVAS, "abbloodvas", $form, $error, "combo(Vascular ectasia/thrombosed/thickened/atypical features/tumour emboli/mixed)") ?>
                    </div>

                    <?= $this->CheckBox(MICTOOR, "mictoor", $form, $error, true) ?>
                    <div id="mictoor-td" class="condition-form-item" <?= (($form["mictoor"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Select(MICTOORCO, "mictoorco", $form, $error, "combo(H.pylori/Fungi/viral inclusions)") ?>
                        <?= $this->Select(MICTOORCOL, "mictoorcol", $form, $error, "combo(mild/moderate/heavy)") ?>
                    </div>

                    <?= $this->CheckBox(NEOPLASIA, "neoplasia", $form, $error, true) ?>
                    <div id="neoplasia-td" class="condition-form-item" <?= (($form["neoplasia"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Select(NEOPLASIADY, "neoplasiady", $form, $error, "combo(dysplasia/adenocarcinoma/mucinous adenocarcinoma/squamous cell carcinoa/Lymphoma/sarcoma)") ?>
                    </div>


                    <?= $this->CheckBox(MENETRIER, "menetrier", $form, $error) ?>
                    <?= $this->CheckBox(HEMORRHAGE, "hemorrhage", $form, $error) ?>
                    <?= $this->CheckBox(GRANULOMA, "granuloma", $form, $error) ?>
                    <?= $this->CheckBox(EROSIONS, "erosions", $form, $error) ?>
                    <?= $this->CheckBox(EPITHELIAL, "epithelial", $form, $error) ?>

                    <?= $this->TextArea(PATHOLOGYRESDESC, "pathologyresdesc", $form, $error) ?>

                    Pre OP<br/>
                    <?= $this->CheckBox("H.pylori", "preophpylori", $form, $error, false) ?>

                    <?= $this->DateBox("Post OP", "postopdate", $form, $error) ?>
                    <?= $this->CheckBox("H.pylori", "postophpylori", $form, $error, false) ?>
                    <div class="buttons_div1" >
                        <input name='com_fu_save' type='hidden' value="1" />
                        <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                        <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                    </div>
                    <?php if ($message != ""): ?>
                        <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                    <?php endif; ?>
                </form>
            </div>
            <!--tab-4 end-->
            <div class="tab-pane fade" id="LateMorbiditiesAndMortalityTab">
                <form class="form-horizontal" name="fu_form13" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                    <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                    <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                    <?= $this->StartPanel("Anatomic") ?>
                    <?= $this->CheckBox(ANATOMICGA, "anatomicga", $form, $error, true) ?>
                    <div id="anatomicga-td" class="condition-form-item" <?= (($form["anatomicga"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(ANATOMICGAWHEN, "anatomicgawhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(ANATOMICST, "anatomicst", $form, $error, true) ?>
                    <div id="anatomicst-td" class="condition-form-item" <?= (($form["anatomicst"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(ANATOMICSTWHEN, "anatomicstwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(ANATOMICOB, "anatomicob", $form, $error, true) ?>
                    <div id="anatomicob-td" class="condition-form-item" <?= (($form["anatomicob"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(ANATOMICOBWHEN, "anatomicobwhen", $form, $error) ?>
                    </div>
                    <?= $this->CheckBox(ANATOMICBA, "anatomicba", $form, $error, true) ?>
                    <div id="anatomicba-td" class="condition-form-item" <?= (($form["anatomicba"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(ANATOMICBAWHEN, "anatomicbawhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(ANATOMICDIS, "anatomicdis", $form, $error, true) ?>
                    <div id="anatomicdis-td" class="condition-form-item" <?= (($form["anatomicdis"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Select(ANATOMICDISB, "anatomicdisb", $form, $error, "combo(Band slippage/gastric prolapse)") ?>
                        <?= $this->Text(ANATOMICDISWHEN, "anatomicdiswhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(ANATOMILINEC, "anatomilinec", $form, $error, true) ?>
                    <div id="anatomilinec-td" class="condition-form-item" <?= (($form["anatomilinec"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(ANATOMICLINEWHEN, "anatomiclinewhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(ANATOMICER, "anatomicer", $form, $error, true) ?>
                    <div id="anatomicer-td" class="condition-form-item" <?= (($form["anatomicer"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(ANATOMICERWHEN, "anatomicerwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(ANATOMICVE, "anatomicve", $form, $error, true) ?>
                    <div id="anatomicve-td" class="condition-form-item" <?= (($form["anatomicve"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(ANATOMICVEWHEN, "anatomicvewhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(ANATOMICHER, "anatomicher", $form, $error, true) ?>
                    <div id="anatomicher-td" class="condition-form-item" <?= (($form["anatomicher"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(ANATOMICHERWHEN, "anatomicherwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(ANATOMICPOR, "anatomicpor", $form, $error, true) ?>
                    <div id="anatomicpor-td" class="condition-form-item" <?= (($form["anatomicpor"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(ANATOMICPORWHEN, "anatomicporwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(ANATOMICPORT, "anatomicport", $form, $error, true) ?>
                    <div id="anatomicport-td" class="condition-form-item" <?= (($form["anatomicport"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(ANATOMICPORTWHEN, "anatomicportwhen", $form, $error) ?>
                    </div>
                    <?= $this->EndPanel() ?>                          



                    <?= $this->StartPanel("Biomechanic") ?>
                    <?= $this->CheckBox(BIOMECHANICGA, "biomechanicga", $form, $error, true) ?>
                    <div id="biomechanicga-td" class="condition-form-item" <?= (($form["biomechanicga"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(BIOMECHANICGAWHEN, "biomechanicgawhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(BIOMECHANICDI, "biomechanicdi", $form, $error, true) ?>
                    <div id="biomechanicdi-td" class="condition-form-item" <?= (($form["biomechanicdi"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(BIOMECHANICDIWHEN, "biomechanicdiwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(BIOMECHANICDILA, "biomechanicdila", $form, $error, true) ?>
                    <div id="biomechanicdila-td" class="condition-form-item" <?= (($form["biomechanicdila"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(BIOMECHANICDILAWHEN, "biomechanicdilawhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(BIOMECHANIESOC, "biomechaniesoc", $form, $error, true) ?>
                    <div id="biomechaniesoc-td" class="condition-form-item" <?= (($form["biomechaniesoc"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(BIOMECHANICESOWHEN, "biomechanicesowhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(BIOMECHANICREF, "biomechanicref", $form, $error, true) ?>
                    <div id="biomechanicref-td" class="condition-form-item" <?= (($form["biomechanicref"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(BIOMECHANICREFWHEN, "biomechanicrefwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(BIOMECHANICREC, "biomechanicrec", $form, $error, true) ?>
                    <div id="biomechanicrec-td" class="condition-form-item" <?= (($form["biomechanicrec"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(BIOMECHANICRECWHEN, "biomechanicrecwhen", $form, $error) ?>
                    </div>
                    <?= $this->EndPanel() ?>


                    <?= $this->StartPanel("Physiologic") ?>
                    <?= $this->CheckBox(PHYSIOLOGICMA, "physiologicma", $form, $error, true) ?>
                    <div id="physiologicma-td" class="condition-form-item" <?= (($form["physiologicma"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(PHYSIOLOGICMAWHEN, "physiologicmawhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(PHYSIOLOGICDU, "physiologicdu", $form, $error, true) ?>
                    <div id="physiologicdu-td" class="condition-form-item" <?= (($form["physiologicdu"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(PHYSIOLOGICDUWHEN, "physiologicduwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(PHYSIOLOGICPOS, "physiologicpos", $form, $error, true) ?>
                    <div id="physiologicpos-td" class="condition-form-item" <?= (($form["physiologicpos"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(PHYSIOLOGICPOSWHEN, "physiologicposwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(PHYSIOLOGICNEP, "physiologicnep", $form, $error, true) ?>
                    <div id="physiologicnep-td" class="condition-form-item" <?= (($form["physiologicnep"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(PHYSIOLOGICNEPWHEN, "physiologicnepwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(PHYSIOLOGICRENAL, "physiologicrenal", $form, $error, true) ?>
                    <div id="physiologicrenal-td" class="condition-form-item" <?= (($form["physiologicrenal"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(PHYSIOLOGICRENALW, "physiologicrenalw", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(PHYSIOLOGICCHO, "physiologiccho", $form, $error, true) ?>
                    <div id="physiologiccho-td" class="condition-form-item" <?= (($form["physiologiccho"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(PHYSIOLOGICCHOWHEN, "physiologicchowhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(PHYSIOLOGICCHOL, "physiologicchol", $form, $error, true) ?>
                    <div id="physiologicchol-td" class="condition-form-item" <?= (($form["physiologicchol"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(PHYSIOLOGICCHOLW, "physiologiccholw", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(PHYSIOLOGICC, "physiologicc", $form, $error, true) ?>
                    <div id="physiologicc-td" class="condition-form-item" <?= (($form["physiologicc"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(PHYSIOLOGICCWHEN, "physiologiccwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(PHYSIOLOGICCI, "physiologicci", $form, $error, true) ?>
                    <div id="physiologicci-td" class="condition-form-item" <?= (($form["physiologicci"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(PHYSIOLOGICCIWHEN, "physiologicciwhen", $form, $error) ?>
                    </div>
                    <?= $this->EndPanel() ?>


                    <?= $this->StartPanel("Malnutrition") ?>
                    <?= $this->CheckBox(MALNMI, "malnmi", $form, $error, true) ?>
                    <div id="malnmi-td" class="condition-form-item" <?= (($form["malnmi"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(MALNMIWHEN, "malnmiwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(MALNVIT, "malnvit", $form, $error, true) ?>
                    <div id="malnvit-td" class="condition-form-item" <?= (($form["malnvit"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(MALNVITWHEN, "malnvitwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(MALNELE, "malnele", $form, $error, true) ?>
                    <div id="malnele-td" class="condition-form-item" <?= (($form["malnele"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(MALNELEWHEN, "malnelewhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(MALNSH, "malnsh", $form, $error, true) ?>
                    <div id="malnsh-td" class="condition-form-item" <?= (($form["malnsh"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(MALNSHWHEN, "malnshwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(MALNCHA, "malncha", $form, $error, true) ?>
                    <div id="malncha-td" class="condition-form-item" <?= (($form["malncha"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(MALNCHAWHEN, "malnchawhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(MALNHEM, "malnhem", $form, $error, true) ?>
                    <div id="malnhem-td" class="condition-form-item" <?= (($form["malnhem"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(MALNHEMWHEN, "malnhemwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(MALNFIS, "malnfis", $form, $error, true) ?>
                    <div id="malnfis-td" class="condition-form-item" <?= (($form["malnfis"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(MALNFISWHEN, "malnfiswhen", $form, $error) ?>
                    </div>
                    <?= $this->EndPanel() ?>


                    <?= $this->StartPanel("Failure") ?>
                    <?= $this->CheckBox(FAILUREIN, "failurein", $form, $error, true) ?>
                    <div id="failurein-td" class="condition-form-item" <?= (($form["failurein"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(FAILUREINWHEN, "failureinwhen", $form, $error) ?>
                    </div>

                    <?= $this->CheckBox(FAILUREWE, "failurewe", $form, $error, true) ?>
                    <div id="failurewe-td" class="condition-form-item" <?= (($form["failurewe"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(FAILUREWEWHEN, "failurewewhen", $form, $error) ?>
                    </div>

                    <?= $this->TextArea(FAILUREOTHER, "failureother", $form, $error) ?>

                    <?= $this->CheckBox(FAILUREDEC, "failuredec", $form, $error, true) ?>
                    <div id="failuredec-td" class="condition-form-item" <?= (($form["failuredec"] == 1) ? "style='display: block'" : "") ?> >
                        <?= $this->Text(FAILUREDECDATE, "failuredecdate", $form, $error) ?>
                    </div>

                    <?= $this->Text(FAILUREDECCAUSE, "failuredeccause", $form, $error) ?>
                    <?= $this->EndPanel() ?>
                    <div class="buttons_div1" >
                        <input name='com_fu_save' type='hidden' value="1" />
                        <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                        <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                    </div>
                    <?php if ($message != ""): ?>
                        <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                    <?php endif; ?>
                </form>
            </div>
            <!--tab-5 end-->
            <div class="tab-pane fade" id="MetabolicSXTab">
                <form class="form-horizontal" name="fu_form14" style='margin-top: 5px;' action='<?php echo $_SERVER["PHP_SELF"] . "?com_fu=1&func=save" ?>' method="POST" >

                    <input name='fuid' type='hidden' value="<?php echo $form['fuid'] ?>" />
                    <input name='ident_id' type='hidden' value="<?php echo $_SESSION["identical_dataid"] ?>" />

                    <?= $this->Text(SYSTOLICBP, "systolicbp", $form, $error) ?>
                    <?= $this->Text(DIASTOLICBP, "diastolicbp", $form, $error) ?>
                    <?= $this->Text(TG, "tg", $form, $error) ?>
                    <?= $this->Text(HDL, "hdl", $form, $error) ?>
                    <?= $this->Text(FBS, "fbs", $form, $error) ?>
                    <?= $this->Text(WCF, "wcf", $form, $error) ?> 
                    <div class="buttons_div1" >
                        <input name='com_fu_save' type='hidden' value="1" />
                        <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                        <button class="btn btn-primary" title="<?= FSAVE ?>" class="save_link" name='submit' type='submit'><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= FSAVE ?></button>
                    </div>
                    <?php if ($message != ""): ?>
                        <div class="alert alert-success" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
                        <?php endif; ?>
                </form>
            </div>



        </div><!-- well End-->
    </div><!-- col-lg-6 End-->
