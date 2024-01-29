<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" width="100%" id="dataTables-example">
        <thead>

            <tr>
                <th><?php echo S_ID ?></th>
                <th><?php echo TABLE_SELECT ?></th>
                <th><?php echo S_USERNAME ?></th>
                <th><?php echo S_USERLEVEL ?></th>
            </tr>
        </thead>
        <tbody>

            <?php for ($k = 0; $k < count($form); $k++): ?>
                <tr <?php if ($k % 2)
                echo "class='white_row'"; ?> >
            <?php $users = $this->getAllUsers(); ?>
                    <td align="center" ><?= IView::persianNumber($k + 1); ?></td>
                    <td align="center" ><a class="select_link" href="?com_users=1&func=select&sfunc=users&username=<?php echo $form[$k]["username"]; ?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
                    <td align="center" ><?= $form[$k]["username"]; ?></td>
                    <td align="center" ><?= $form[$k]["userlevel"]; ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>