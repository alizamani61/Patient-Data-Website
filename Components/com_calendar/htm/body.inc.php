<td title="<?php echo $td_title?>"<?php echo $dayclass;?> >      
     <?php if($newFlag):?>
        <div class="cal_daynumber">
            <strong><?php echo IView::persianNumber($Output) ?></strong>
        </div>
<!--    <a class="cal_event_new" href="<?php echo $mywin ?>" title="<?php echo NEW_PATIENT ?>"><i class='glyphicon glyphicon-plus'></i></a>-->
        <?php if($dataFlag):?>
            <div class="cal_event_show" align="center">
                <a href="#" onclick="getReferral('<?=$date?>')"><i class='glyphicon glyphicon-folder-open'></i></a>
            </div>
        <?php endif;?>
    <?php endif;?>
</td>
