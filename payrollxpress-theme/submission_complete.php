<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
    <section id="body-content" class="plain-body section-padding">
	    <div class="container">
  			<div class="row">
        	<div class="col-md-8 col-md-offset-2">
    			<?php
					$a = new Area('Thank You Notification');
					$a->display($c);
					$a->setBlockLimit(1);
				?>       
         	</div>
	     </div>
     </div>
	</section>
<?php $this->inc('elements/footer-no-contact.php'); ?>