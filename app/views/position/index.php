<?php build('content') ?>
    <div class="container-fluid">
        <?php echo wControlButtonRight($pageMainTitle, [
            $navigationHelper->setNav('menu', 'Add New Position', _route('position:create'))
        ])?>

        <div class="card">
            <?php echo wCardHeader(wCardTitle('Positions'))?>
            <div class="card-body">
                <?php Flash::show()?>
                <div class="table-responsive">
                    
                </div>

                <table class="table table-bordered" id="dataTable">
                        <thead>
                            <th><?php echo $form->label('position_name')?></th>
                            <th><?php echo $form->label('min_rate')?></th>
                            <th><?php echo $form->label('max_rate')?></th>
                            <th>Action</td>
                        </thead>

                        <tbody>
                            <?php foreach($positions as $key => $row) :?>
                                <tr>
                                    <td><?php echo $row->position_name?></td>
                                    <td><?php echo amountHTML($row->min_rate)?></td>
                                    <td><?php echo amountHTML($row->max_rate)?></td>
                                    <td><?php echo wLinkDefault(_route('position:edit', $row->id), 'Edit')?></td>
                                </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                    
                    
            </div>
        </div>
    </div>
<?php endbuild()?>
<?php loadTo('tmp/admin_layout')?>