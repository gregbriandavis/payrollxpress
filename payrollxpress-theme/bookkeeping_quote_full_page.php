<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
    <section id="body-content" class="plain-body section-padding">
	    <div class="container">
  			<div class="row">
	        	<div class="col-md-6 col-md-offset-3">
	        		<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true">×</button>
							  <h4 class="modal-title">Bookkeeping Quote</h4>
							</div>
							<div class="modal-body">
				    			<?php
									$a = new GlobalArea('Bookkeeping Quote Form');
									$a->display($c);
									$a->setBlockLimit(1);
								?>
							</div>
						</div>
					</div>
	         	</div>
		    </div>
	     </div>
	</section>
<?php $this->inc('elements/footer-no-contact.php'); ?>