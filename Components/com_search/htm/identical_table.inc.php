<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" width="100%" id="dataTables-example">
        <thead>
            <tr>
                <th><?=S_IDENTICAL_DATAID ?></th>
                <th><?=TABLE_SELECT ?></th>
                <th><?=S_NAME ?></th>
                <th><?=S_LNAME ?></th>
                <th><?=S_FATHER ?></th>
                <th><?=S_NATIONALID ?></th>
                <th><?=S_RESPHYSICIAN ?></th>
                <th><?=S_AGE ?></th>
                <th><?=S_SEX ?></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($k = 0; $k < count($form); $k++): ?>
                <?php $rowOperated=(($form[$k]["isoperated"]==1)?"class='success'":"");?>
                <tr <?=$rowOperated?> >
                    <td align="center" ><?=$k + 1?></td>
                    <td align="center" ><a class="select_link" href="?com_identical=1&func=select&id=<?=$form[$k]["identical_dataid"]; ?>" target='_blank'><i class="glyphicon glyphicon-pencil"></i></a></td>
                    <td align="center" ><?=$form[$k]["name"]; ?></td>
                    <td align="center" ><?=$form[$k]["lname"]; ?></td>
                    <td align="center" ><?=$form[$k]["father"]; ?></td>
                    <td align="center" ><?=$form[$k]["nationalid"]; ?></td>
                    <td align="center" ><?=$form[$k]["resphysician"]; ?></td>
                    <td align="center" ><?=$form[$k]["age"]?></td>
                    <td align="center" ><?=$form[$k]["sex"]; ?></td>
                </tr>

            <?php endfor; ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $("#dataTables-example").dataTable();
</script> 