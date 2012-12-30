<!-- poll/create.php -->
<?php if (validation_errors()) : ?>
<div class="error"><?php echo validation_errors(); ?></div>
<?php endif; ?>
<legend>Edit Poll</legend>

		<?php echo form_open('poll/edit/','class="form"'); ?>
		<fieldset>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $poll->name; ?>" />
		<br>
        <label for="startDate">Start Date</label>
        <input type="date" id="startDate" name="startDate" value="<?php echo $poll->startDate; ?>" />
        <br>
        <label for="endDate">End Date</label>
        <input type="date" id="endDate" name="endDate" value="<?php echo $poll->endDate; ?>" />
        <label for="closed">Closed</label>
        <br>
        <input type="checkbox" id="closed" name="closed" checked="no" />
		<br><br>
        <input class='btn' type="submit" name="save" value="Save" /><?php echo anchor('poll','Cancel','class="btn"'); ?>
        </fieldset>
<?php echo form_close(); ?>

	
<!-- END poll/create.php -->