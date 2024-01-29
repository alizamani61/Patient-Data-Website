<div class="col-lg-12 person-selector"> 
    <div class="col-lg-6">
        <div class="input-group">
            <select class="form-control" id="personid" name='personid'>
                <?php for ($i = 0; $i < count($physicians); $i++): ?>
                    <?php if ($physicians[$i]["id"] == $_SESSION["personid"]): ?>
                        <option value="<?php echo $physicians[$i]['id'] ?>" selected><?php echo $physicians[$i]['name'] . " " . $physicians[$i]['lname'] ?></option>
                    <?php else: ?>
                        <option value="<?php echo $physicians[$i]['id'] ?>" ><?php echo $physicians[$i]['name'] . " " . $physicians[$i]['lname'] ?></option>
                    <?php endif; ?>
                <?php endfor; ?>
            </select>
            <span class="input-group-btn">
                <input class="btn btn-primary" name="submit" type="button" value="تاييد" onclick="window.location.href='?com_calendar=1&com=com_medical&personid='+$('#personid').val()"/>
            </span>
        </div><!-- /input-group -->


    </div>
</div>