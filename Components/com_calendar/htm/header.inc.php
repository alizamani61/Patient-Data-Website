<div class="modal fade" id="ScheduleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div style="width:auto" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Schedule</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                &nbsp;
            </div>
        </div>
    </div>
</div>
<div class="x_panel">
    <div class="x_title">
        <h2><small></small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li>
                <a title="Schedules" onclick="getReferral('')"><i class="glyphicon glyphicon-list"></i></a>
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
        </ul>
        <div class="panel-heading" id='cal_container_header1' align="center">
            <a href='<?php echo $prev_year_url ?>' style='text-decoration:none;float:right' ><?= IView::persianNumber($jyear - 1) ?></a>
            <a href='<?php echo $prev_mount_url ?>' style='text-decoration:none' >
                <?php echo IPROCESS::ReturnMonthName($jmonth - 1) ?>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>
                <b><?php echo IPROCESS::ReturnMonthName($jmonth) ?>&nbsp;&nbsp;
                    <?php echo IView::persianNumber($jyear) ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </b>
            </strong>
            <a href='<?php echo $next_mount_url ?>' style='text-decoration:none' >
                <?php echo IPROCESS::ReturnMonthName($jmonth + 1) ?>
            </a>
            <a href='<?php echo $next_year_url ?>' style='text-decoration:none' ><?= IView::persianNumber($jyear + 1) ?></a>

            
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">


        <div class="table-responsive cal-table-container" id="calendar-container">
            <table class="table table-striped table-bordered table-hover" width="100%">
                <tr class="tr_days" bordercolor="#FF0000" >
                    <th class="month"><strong><?php echo FRIDAY ?></strong></th>
                    <th class="month"><strong><?php echo THURSDAY ?></strong></th>
                    <th class="month"><strong><?php echo WEDENSDAY ?></strong></th>
                    <th class="month"><strong><?php echo TUESDAY ?></strong></th>
                    <th class="month"><strong><?php echo MONDAY ?></strong></th>
                    <th class="month"><strong><?php echo SUNDAY ?></strong></th>
                    <th class="month"><strong><?php echo SATURDAY ?></strong></th>
                </tr>


