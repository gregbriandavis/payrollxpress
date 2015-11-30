<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
    <section class="banner-image">
        <div class="container-fluid no-padding">
        	<div class="hero">
	    	<?php
	        	$a = new GlobalArea('Group Benefits Header Image');
	            $a->setBlockLimit(1);
				$a->display($c);
	        ?>
	        </div>
	    	<div class="col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10 col-xs-8 col-xs-offset-2 jumbotron">
	    		<h1 class="wp1 animated fadeIndown">
			    	Group Benefits
				</h1>
				<h2 class="wp2 animated fadeInup delay-05s"><?php echo $c->getAttribute('service_tagline') ?></h2>
			</div>
		</div>
    </section>
    <section id="body-content" class="plain-body section-padding">
	    <div class="container">
			<div class="row wp1 delay1s">
	        	<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
			        <div class="services">
			        	<h1>Services</h1>
				        <ul>
		                    <li><a href="<?php echo DIR_REL?>/services/payroll">Payroll</a></li>
		                    	<?php
									$a = new GlobalArea('Payroll Pagelist');
									$a->display($c);
									$a->setBlockLimit(1);
				      			?>
		                    <li><a href="<?php echo DIR_REL?>/services/bookkeeping">Bookkeeping</a></li>
		                    	<?php
									$a = new GlobalArea('Bookkeeping Pagelist');
									$a->display($c);
									$a->setBlockLimit(1);
				      			?>
		                    <li><a href="<?php echo DIR_REL?>/services/income-taxes">Income Tax</a></li>
		                    	<?php
									$a = new GlobalArea('Income Tax Pagelist');
									$a->display($c);
									$a->setBlockLimit(1);
				      			?>
		                    <li><a href="<?php echo DIR_REL?>/services/human-resources">Human Resources</a></li>
		                    	<?php
									$a = new GlobalArea('HR Pagelist');
									$a->display($c);
									$a->setBlockLimit(1);
				      			?>
		                    <li><a href="<?php echo DIR_REL?>/services/time-attendance">Time &amp; Attendance</a></li>
		                    	<?php
									$a = new GlobalArea('Time Attendance Pagelist');
									$a->display($c);
									$a->setBlockLimit(1);
				      			?>
		                    <li><a href="<?php echo DIR_REL?>/services/group-benefits">Group Benefits</a></li>
		                    	<?php
									$a = new GlobalArea('Group Benefits Pagelist');
									$a->display($c);
									$a->setBlockLimit(1);
				      			?>
				        </ul>
			        </div>
			    </div>
			    <div class="col-md-8">
	        		<h1><span class="icon icon-benefits"></span>
	        			<?php
							echo $c->getCollectionName();
						?>
					</h1>
			        <?php
						$a = new Area('Left Content');
						$a->display($c);
	      			?>
	         	</div>

			</div>
	     </div>
	</section>
<?php $this->inc('elements/footer.php'); ?>