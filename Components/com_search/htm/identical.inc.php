<script type="text/javascript">
    $(document).ready(function () {

        ajax_Send("com_search_identical=1", "result1");
    });
</script>
<div id="search_div"></div>

<div class="modal fade bs-advance-search" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Advance Search</h4>
            </div>
            <div class="modal-body">

                <?php if ($loginprocess->isAdministrator()): ?>
                    <form id="search_form" action="<?php echo $_SERVER["PHP_SELF"] ?>" method='POST'>

                        <div class="table-responsive search-table-container">
                            <table class="table table-striped table-bordered table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th align="center"></th>
                                        <th align="center">Field</th>
                                        <th align="center">Condition</th>
                                        <th align="center">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td><?= $this->Text("", "sname", $form, $error) ?></td>
                                        <td><?= $this->Select("", "scond", $form, $error, "combo(Equals/Contains/Less Than/Greater Than/Not Equals)") ?></td>
                                        <td><?= $this->Text("", "svalue", $form, $error) ?></td>
                                    </tr>

                                    <tr>
                                        <td><?= $this->Select("", "sand1", $form, $error, "combo(And/OR)") ?></td>
                                        <td><?= $this->Text("", "sname1", $form, $error) ?></td>
                                        <td><?= $this->Select("", "scond1", $form, $error, "combo(Equals/Contains/Less Than/Greater Than/Not Equals)") ?></td>
                                        <td><?= $this->Text("", "svalue1", $form, $error) ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $this->Select("", "sand2", $form, $error, "combo(And/OR)") ?></td>
                                        <td><?= $this->Text("", "sname2", $form, $error) ?></td>
                                        <td><?= $this->Select("", "scond2", $form, $error, "combo(Equals/Contains/Less Than/Greater Than/Not Equals)") ?></td>
                                        <td><?= $this->Text("", "svalue2", $form, $error) ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $this->Select("", "sand3", $form, $error, "combo(And/OR)") ?></td>
                                        <td><?= $this->Text("", "sname3", $form, $error) ?></td>
                                        <td><?= $this->Select("", "scond3", $form, $error, "combo(Equals/Contains/Less Than/Greater Than/Not Equals)") ?></td>
                                        <td><?= $this->Text("", "svalue3", $form, $error) ?></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <input class="btn btn-primary" type="button" value="Search" onclick="search();" data-dismiss="modal"/>
                        <input class="btn btn-primary" type="reset" value="Reset" />
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Export
                        </button>

                        <input name='com_search_identical' type='hidden' value="1" />
                    </form>

                    <form class="form-fields" action="export.php" method="post" target="_blank">


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Select Fields</h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php for ($i = 0; $i < count($fields); $i++): ?>
                                            <?php if ($i == 0): ?>
                                                <div class="fields-container"><h4><input type="checkbox"/><?= $fields[$i][1] ?></h4>
                                                <?php endif; ?> 
                                                <?php if ($fields[$i][2] == null && $fields[$i][1] != null): ?>
                                                </div><div class="fields-container"><h4><input type="checkbox"/><?= $fields[$i + 1][1] ?></h4>
                                                <?php endif; ?>
                                                <?php if ($fields[$i][2] != null): ?>
                                                    <input name="fields[]" type="checkbox" id="<?= $fields[$i][2] ?>" value="<?= $fields[$i][2] ?>::<?= $fields[$i][3] ?>"/>
                                                    <label for="<?= $fields[$i][2] ?>"><?= $fields[$i][3] ?></label><br/>
                                                <?php endif; ?>
                                            <?php endfor; ?>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Export</button>
                                    </div>
                                </div>
                            </div>
                    </form>

                <?php endif; ?>


            </div>  
        </div><!-- END First Modal-->
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

    </div>
</div>
</div>



<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-search"></i> &nbsp;Search Result&nbsp;<span class='label label-success search-result-panel-label'>Operated</span></h2>

                <ul class="nav navbar-right panel_toolbox">

                    <li>
                        <a data-toggle="modal" data-target=".bs-advance-search" data-placement="top" data-toggle="tooltip" data-original-title="Advance Search"><i class="fa fa-search"></i></a>
                    </li>

                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div id="result" class='col-md-12'></div>
                <div id="result1" class='col-md-12'></div>
            </div>
        </div>

    </div>



    <script type="text/javascript">
        $(document).ready(function () {

            $.ajax({
                url: "process.php?getfields=1",
                dataType: "json",
                type: "GET",
                success: function (result) {
                    $("#search_form .form-control").autocomplete({
                        source: result,
                        minLength: 2,
                        select: function (event, ui) {
                            $(this).val(ui.item.value);
                            $(this).data({"key": ui.item.key});
                            return false;
                        }
                    }).data("ui-autocomplete")._renderItem = function (ul, item) {
                        return $("<li></li>")
                                .data("item.autocomplete", item)
                                .append("<a>" + item.label + "</a>")
                                .appendTo(ul);
                    };
                }
            });


            $(".fields-container").children("div").css({"height": "0px"});

            $(".fields-container h4").click(function (ev) {
                if (ev.target.tagName == "INPUT")
                {
                    if (ev.target.checked)
                        $(this).parent().children("input").prop("checked", true);
                    else
                        $(this).parent().children("input").prop("checked", false);
                } else {
                    if ($(this).parent().css("height") == "40px")
                        $(this).parent().css({"height": "auto", "overflow-y": "scroll"});
                    else
                        $(this).parent().css({"height": "40px", "overflow-y": "hidden"});
                }

            })
        });
    </script>