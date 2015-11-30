<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
		<section class="banner-image light-text text-center wp1 animated fadeInDown" style="background: url('<?=$this->getThemePath()?>/images/filter/<?php echo $c->getAttribute('service_banner_image') ?>') no-repeat top center;-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; min-height: 300px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 wp1 delay-1s animated fadeInUp">
            <!--  --><h1 class="dash text-shadow"><?php echo $c->getAttribute('service_heading') ?></h1>
            <!--  --><h2 class="text-shadow"><?php echo $c->getAttribute('service_tagline') ?></h2>
          </div>
        </div>
      </div>
    </section>

    <section id="body-content" class="wp2 delay-2s animated fadeInLeft intro section-padding">
      <div class="container-fluid no-padding">
        <div class="row-fluid">
          <div class="col-md-9 col-md-push-3 col-sm-8 col-sm-push-4 white-bg content">
            <span class="icon icon-bookkeeping visible-xs text-center small-icon"></span>
            <h1 class="dash"><span class="icon icon-<?php echo $c->getAttribute('service_icon_name') ?> hidden-xs"></span><?php echo $c->getCollectionName(); ?></h1>
          	<?php
							$a = new Area('Service WriteUp');
							$a->display($c);
      			?>
          </div>
          <div class="col-md-3 col-md-pull-9 col-sm-4 col-sm-pull-8 services">
            <h1 class="dash">Services</h1>
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
      </div>
    </section>
<?php $this->inc('elements/footer.php'); ?>