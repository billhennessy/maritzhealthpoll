<!-- view_many_posts.php -->
<table class="table table-bordered table-striped">
        <thead>
                <tr>
                    	<th>Poll</th>
                        <th>Question</th>
                        <th>Response</th>
                        <th>&nbsp;</th>
                </tr>
        </thead>
        <tbody>
                <?php foreach($responses as $response) : ?>
                <tr>
                      	<td><?php echo $response->poll_id; ?></td>
                        <td><?php echo $response->question_id; ?></td>
                        <td><?php echo $response->answer_value; ?></td>
                        <td><?php echo anchor('response/delete/'.$response->id,'Delete'); ?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
</table>
<hr>
<br>
<?php echo anchor('response/create','New Response','class="btn"'); ?>
<!-- End view_many_posts.php -->