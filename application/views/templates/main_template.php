<!-- main_template.php -->
<html>
        <head>
                <title>Poll Response</title>
                <style> @import url('<?php echo base_url(); ?>css/bootstrap.min.css'); </style>
                  
        </head>
        <body>
      <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
      <div class="nav-collapse collapse">
            <ul class="nav">
                       <li><?php echo anchor('response/', 'View All Responses'); ?></li>
                       <li><?php echo anchor('response/create','Create New Response'); ?></li>
                      </ul>
      </div><!-- /nav-collapse -->
                       
        </div><!-- /containter -->
      </div><!-- /navar-inner -->
      </div><!-- /navbar -->
      <br /><br />
      
                <div class="container" id="content">
                  <?php echo $content; ?>
                </div><!-- /container -->
         <script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        </body>
</html>
<!-- End main_template.php -->