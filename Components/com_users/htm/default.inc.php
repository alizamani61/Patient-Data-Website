<ul class="nav nav-tabs">
    <li class="active"><a href="#usersTab" data-toggle="tab">منوها</a>
    </li>
    <li><a href="#usersSearchTab" data-toggle="tab">جستجو</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade in active" id="usersTab">
        <form role="form" name='usesr_form' id='access_form' action="<?php echo $_SERVER["PHP_SELF"] . "?com_users=1&func=usersnew&sfunc=users" ?>" method='POST'>
            <div class="form-group">
                <label class="col-sm-2 control-label"><?= USERNAME1 ?></label>
                <input class="form-control" name='username' type='text' value="<?php echo $form['username'] ?>" />
                <font face='verdana' color='red'><?php echo $error['username'] ?></font>
            </div>        

            <div class="form-group">
                <label class="col-sm-2 control-label"><?= PASSWORD1 ?></label>
                <input class="form-control" name='password' type='password' size="50" value="" />
                <font face='verdana' color='red'><?php echo $error['password'] ?></font>
               </div>        

            <div class="form-group">
                <label class="col-sm-2 control-label"><?= EMAIL ?></label>
                <input class="form-control" name='email' size="50" style="text-align: left" type='text' value="<?php echo $form['email'] ?>" />
                <font face='verdana' color='red'><?php echo $error['email'] ?></font>
                </div>        

            <div class="form-group">
                <label class="col-sm-2 control-label"><?= USERLEVEL1 ?></label>
                <select class="form-control" name='userlevel' >
                    <?php if ($form['userlevel'] == 10): ?>
                        <option value="<?= $form['userlevel'] ?>" selected><?= ADMIN ?></option>
                    <?php endif; ?>
                    <?php if ($form['userlevel'] == 1): ?>
                        <option value="<?= $form['userlevel'] ?>" selected><?= USERS ?></option>
                    <?php endif; ?>
                    <option value="10"><?= ADMIN ?></option>
                    <option value="1"><?= USERS ?></option>

                </select>
                </div>        

            <div id="buttons_div" class="form-group group-submit">
                <input name='com_users_save' type='hidden' value="1" />
                <a class="btn btn-primary" title="<?=USERSNEW ?>" id="new_link" href="?com_users=1&func=usersnew&sfunc=users" ><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?=USERSNEW ?></a>
                <input name='token' type='hidden' value="<?php echo $this->getToken() ?>" />
                <button class="btn btn-primary" type="submit" id="save_link" name='submit' value="" ><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?=USERSSAVE ?></button>
                <?php if (trim($form['username']) != ""): ?>
                    <button class="btn btn-primary btn-danger" value="<?= USERSDEL ?>" id="delete_link" type='button' onclick="dialog_redirect('?com_users=1&func=usersdel&&sfunc=users&username=<?=$form['username']; ?>','<?= DETETECONFIRM ?>')"><i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?= USERSDELETE ?></button>
                <?php endif; ?>
            </div>
            <?php if ($message != ""): ?>
                <div class="alert alert-success alert-dismissible" role="alert"><img src="images/info.png" width="20px" height="20px;"/>&nbsp;<?php echo $message ?></div>
            <?php endif; ?>
        </form>

    </div>
    <!-- /.row (nested) -->

    <div class="tab-pane fade tab-search" id="usersSearchTab">

    </div>
</div>