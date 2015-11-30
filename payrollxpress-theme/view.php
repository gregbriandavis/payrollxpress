<?php defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
    <section id="body-content" class="plain-body section-padding">
	    <div class="container">
  			<div class="row">
	        	<div class="col-md-6">
	        		<div class="client-profile">
				        <?php print $innerContent; ?>
				        <?php
				            $u = new User;
				            if ($u->isLoggedIn()) {
				                echo '<br /><a class="btn btn-primary" href="' . View::url('/login/logout') . '"> <span class="icon-left-arrow"> LOGOUT</a>';
				            } else {
				                echo '<a class="btn btn-primary" href="' . View::url('/login') . '"> LOGIN <span class="icon-right-arrow"> </a>';
				            }
				        ?>
					</div>
	         	</div>
				<div class="col-md-6">
					<div class="time-submitting">
						<h1>Time Submitting</h1>
						<h2>1. Download Timesheet</h2>
						<?php
							$a = new Area('Download File');
							$a->display($c);
		      			?>
		      			<h2>2. Upload Timesheet</h2>
		      			<?php
							$a = new Area('Upload File');
							$a->display($c);
		      			?>
		      		</div>
	      			<h1>Hard Copy Resources</h1>
					<?php
						$a = new Area('Resources List');
						$a->display($c);
	      			?>
				</div>
		    </div>
		    <br />
  			<div class="row">
	        	<div class="col-md-12">
	        		<div class="alert">
	        			<?php
				          $attr = $c->getAttribute('client_alert');
				          if (!empty($attr)): ?>
				            <p>
				              <?php echo "<span style='font-weight: bold; text-transform: uppercase;'>Important Notice:</span> " . $c->getAttribute('client_alert') ?>
				            </p>
				        <?php endif; ?> 
		      		</div>
	        	</div>
	        </div>  			
	        <div class="row">
	        	<div class="col-md-12">
	        		<h1>Manage Employees</h1>
	        	</div>
	        </div>
  			<div class="row">
	        	<div class="col-md-6">
			       <h2>Add New Employee</h2>
			       <div class="form-container">
				       <?php
							$a = new Area('Add New Employee');
							$a->display($c);
		      			?>
	      			</div>
	         	</div>
				<div class="col-md-6">
					<h2>Remove Employee</h2>
			       	<div class="form-container">
			       		<?php
							$a = new Area('Terminate New Employee');
							$a->display($c);
		      			?>
		      		</div>
				</div>
		    </div>
	    </div>
	</section>
<?php $this->inc('elements/footer.php'); ?>
