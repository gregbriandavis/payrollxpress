<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
    <section class="banner-image">
        <div class="container-fluid no-padding">
            <div class="hero">
            <?php
                $a = new Area('Header Image');
                  
                  $a->display($c);
              ?>
          </div>
              <div class="">
            <div class="banner-caption wp1 animated fadeInLeft">
              <h1>
                <?php
              echo $c->getCollectionName();
              ?>
            </h1>
          </div>
        </div>
    </div>
    </section>
    <section id="body-content" class="dark-bg careers section-padding">
      <a href="#body-content" class="up-btn"><span class="icon-arrow-down"></span></a>
      <div class="container">
        <div class="row">
          <div class="col-md-6 wp2">
            <?php
              $a = new Area('Careers');
              $a->display($c);
            ?>          
          </div>
          <div class="col-md-6 wp2 delay-05">
            <?php
              $a = new Area('Articling');
              $a->display($c);
            ?>     
          </div>
       </div>
     </div>
  </section>
<?php $this->inc('elements/footer.php'); ?>