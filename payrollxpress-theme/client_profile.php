<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
    <section id="body-content" class="plain-body section-padding">
	    <div class="container">
  			<div class="row">
	        	<div class="col-md-8">
			        <h1>Profile Summary</h1>
			        <hr />
			        <p>Account Number: <?php echo $cobj->getAttribute('account_number'); ?></p>
			        <strong><?php echo $cobj->getAttribute('company'); ?></strong>
			        <p>
			        	<?php echo $cobj->getAttribute('address'); ?>
				        <br /><?php echo $cobj->getAttribute('postal_code'); ?>
				        <br /><?php echo $cobj->getAttribute('city'); ?>
				        <br /><?php echo $cobj->getAttribute('province'); ?>
			        </p>
			        <strong>Phone: </strong>
					<?php echo $cobj->getAttribute('phone'); ?> <br />
			        <strong>Fax: </strong>
				    <?php echo $cobj->getAttribute('fax'); ?> <br />
					<strong>Email: </strong>
				    <?php echo $cobj->getAttribute('email'); ?> <br />
				    <hr />
		        	<?php
						$a = new Area('Download CSV');
						$a->display($c);
	      			?>
	      			<hr />
	      			<h2>Add New Employee</h2>
	      			<?php
						$a = new Area('Add Employee');
						$a->display($c);
	      			?>
	      			<h2>Terminate Employee</h2>
	      			<?php
						$a = new Area('Terminate Employee');
						$a->display($c);
	      			?>
	         	</div>
				<div class="col-md-4">
					<h1>Resource List</h1>
					<?php
						$a = new Area('Resources List');
						$a->display($c);
	      			?>
				</div>
		    </div>
	    </div>
	</section>
<?php $this->inc('elements/footer.php'); ?>