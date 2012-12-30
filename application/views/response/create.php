<!-- create.php -->

	<legend>Create a Poll Response</legend>
<?php echo form_open('response/create/'); ?>

        <label for="question">Question</label>
        <br>
        <input type="text" id="question" name="question" value="" />

        <label for="answer">Answer</label>
        <br>
        <input type="text" id="answer" name="answer" value="" />

        <input type="submit" name="save" value="save" />
<?php echo form_close(); ?>
<!-- END create.php -->