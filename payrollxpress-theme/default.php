    <?php
      defined('C5_EXECUTE') or die(_("Access Denied."));
      $this->inc('elements/header.php');
      $textHelper = Loader::helper("text");
    ?>
    <div id="payroll-slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#payroll-slider" data-slide-to="0" class="active"></li>
        <li data-target="#payroll-slider" data-slide-to="1"></li>
        <li data-target="#payroll-slider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <?php
            $a = new Area('Image Slider 1');
            $a->display($c);
            $a->setBlockLimit(1);
          ?>
          <div class="carousel-caption">
            <h1 class="text-center animated fadeInDown delay-05s">
              <?php echo $c->getAttribute('carousel_tagline1'); ?>
            </h1>
            <p class="text-center">
              <?php echo $c->getAttribute('carousel_link1'); ?>
            </p>
          </div>
        </div>
        <div class="item">
          <?php
            $a = new Area('Image Slider 2');
            $a->display($c);
            $a->setBlockLimit(1);
          ?>
          <div class="carousel-caption">
            <h1 class="text-center animated fadeInDown delay-05s">
              <?php echo $c->getAttribute('carousel_tagline2'); ?>
            </h1>
            <p class="text-center">
              <?php echo $c->getAttribute('carousel_link2'); ?>
            </p>
          </div>
        </div>
        <div class="item">
          <?php
            $a = new Area('Image Slider 3');
            $a->display($c);
            $a->setBlockLimit(1);
          ?>
          <div class="carousel-caption">
            <h1 class="text-center animated fadeInDown delay-05s">
              <?php echo $c->getAttribute('carousel_tagline3'); ?>
            </h1>
            <p class="text-center">
              <?php echo $c->getAttribute('carousel_link3'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <section class="intro section-padding" id="intro">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-md-2 col-sm-4 col-md-offset-2 wp1 animated fadeInLeft">
            <img class="img-responsive" src="<?=$this->getThemePath()?>/images/xero-certified-advisor-logo-hires-RGB.aad0bd62.png">
          </div>
          <div class="col-md-6 col-sm-8 wp1 animated fadeInRight delay-1s">
            <?php
              $a = new Area('Intro Info');
              $a->display($c);
              $a->setBlockLimit(1);
            ?>
            <h2>We Are dedicated to exceptional client services and leading edge processes</h2>
            <p>That's why Payroll Xpress uses Xero accounting and specializes in a full range of payroll services, small business bookkeeping and personal income tax services.</p>
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section class="text-center section-padding" id="features">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-6 animated fadeInUp wp2">
            <a href="/services/payroll-services">
            <div class="pillar">
              <span class="icon icon-payroll shadow"></span>
            </div></a>
            <h3><a href="/services/payroll-services">Payroll Services</a></h3>
           </div>
           <div class="col-md-4 col-sm-6 animated fadeInUp wp2 delay-05s">
            <a href="/services/bookkeeping">
              <div class="pillar">
                <span class="icon icon-bookkeeping shadow"></span>
              </div>
            </a>
            <h3><a href="/services/bookkeeping">Bookkeeping</a></h3>
          </div>
          <div class="col-md-4 col-sm-6 animated fadeInUp wp2 delay-1s">
            <a href="/services/income-taxes">
              <div class="pillar">
                <span class="icon icon-income-taxes shadow"></span>
              </div>
            </a>
            <h3><a href="/services/income-taxes">Income Taxes</a></h3>
          </div>
          <div class="col-md-4 col-sm-6 animated fadeInUp wp2 delay-15s">
            <a href="/services/human-resources">
              <div class="pillar">
                <span class="icon icon-human-resources shadow"></span>
              </div>
            </a>
            <h3><a href="/services/human-resources">Human Resources</a></h3>
          </div>
          <div class="col-md-4 col-sm-6 animated fadeInUp wp2 delay-2s">
            <a href="/services/time-attendance">
              <div class="pillar">
                <span class="icon icon-time-attendance shadow"></span>
              </div>
            </a>
            <h3><a href="/services/time-attendance">Time &amp; Attendance</a></h3>
          </div>
          <div class="col-md-4 col-sm-6 animated fadeInUp wp2 delay-25s">
            <a href="/services/group-benefits">
              <div class="pillar">
                <span class="icon icon-benefits shadow"></span>
              </div>
            </a>
            <h3><a href="/services/group-benefits">Group Benefits</a></h3>
          </div>
        </div>
      </div>
    </section>
    <section id="flexslider">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="hidden-xs hidden-sm col-md-6 col-lg-6 feature-image">
            <div class="wp3 animated fadeInLeft">
              <img src="<?=$this->getThemePath()?>/images/keyboard-bg.af3b19bd.jpg" />
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="slider feature-practices">
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <?php
                      $a = new Area('Company Info');
                      $a->display($c);
                      $a->setBlockLimit(1);
                    ?>
                  </li>
                  <li>
                    <?php
                      $a = new Area('Company Info 2');
                      $a->display($c);
                      $a->setBlockLimit(1);
                    ?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php $this->inc('elements/footer.php'); ?>