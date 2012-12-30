<!-- poll.php--> 
<legend>Polls</legend>
<table class="table table-bordered table-hover">
        <thead>
                <tr>
                        <th>Poll ID</th>
                        <th>Name</th>
                        <th>Closed</th>
                   
                        <th>&nbsp;</th>
                        
                </tr>
        </thead>
        <tbody>
                <?php foreach($polls as $poll) : ?>
                <tr>
                        <td><?php echo $poll->id; ?></td>
                        <td><?php echo $poll->name; ?></td>
                        <td><?php echo $poll->closed; ?></td>
                        <td>
                        	<?php echo anchor('poll/edit/'.$poll->id,'Edit', 'class="btn"');?>
                        	<?php echo anchor('poll/view/'.$poll->id,'View', 'class="btn"');?>
                        </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
</table>
<hr>
<?php echo anchor('poll/create','New Poll','class="btn"'); ?>
<!-- End question_table.php -->