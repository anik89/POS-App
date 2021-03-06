
<div class='row'>
    <div class="col-md-4 formcontainer">
        <?php echo form_open('expense/edit/'.$expense->id, array('type' => 'post' , 'role' => 'form')); ?>

        <div class="form-group">
            <label for="group_name"> Select expense Type name : </label>
            <select name ='expense_type_id' class='form-control'>
                <?php foreach($expense_types as $expense_type): ?>
                    <option
                        <?php if($expense_type->id == $expense->expense_type_id): ?>
                            selected
                        <?php endif ?>
                        value="<?php print $expense_type->id; ?>"><?php echo $expense_type->reason; ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <label for="group_name"> Select showroom name : </label>
            <select name='showroom_id' class='form-control'>
                <?php foreach($showrooms as $showroom): ?>
                    <option
                        <?php if($expense->showroom_id == $showroom->id): ?>
                            selected
                        <?php endif ?>
                        value="<?php print $showroom->id; ?>"><?php echo $showroom->name; ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <label for="group_name"> amount : </label>
            <?php echo form_input(array('name' => 'amount', 'class' => 'form-control', 'value' => $expense->amount)); ?>
        </div>


        <div class="form-group">
            <label for="group_name"> Explanation : </label>
            <textarea name="explanation" class="form-control"><?php echo $expense->explanation; ?></textarea>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-default" value="submit"/>
        </div>
        <?php echo form_close();?>

        <?php echo br(2); ?>
        <?php echo validation_errors(); ?>
    </div>
</div>