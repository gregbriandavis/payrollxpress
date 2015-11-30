    <section class="xpress-quote multiple-bg-padding text-center light-text">
      <div class="container">
        <div class="">
          <h1>Fast track operations</h1>
          <h2 class="dash">with Payroll Xpress</h2>
          <p class="text-center"><button data-toggle="modal" href="#quick-quote" class="learn-more-btn">Xpress Payroll Quote</button></p>
          <div class="modal fade" id="quick-quote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Xpress Payroll Quote</h4>
              </div>
              <div class="modal-body">
                <?php
                  $a = new GlobalArea('Quick Quote Form');
                  $a->display($c);
                  $a->setBlockLimit(1);
                ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
            </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <section class="text-center section-padding" id="partners">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-md-12">
            <h2 class="dash">Partners</h2>
          </div>
        </div>
        <div class="row-fluid">
          <div class="partners-wrapper wp4 animated fadeInDown">
            <div class="col-md-2 col-sm-4 col-xs-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-1">
              <!--  --><img src="<?=$this->getThemePath()?>/images/xero-logo-hires-RGB.6053529f.png" />
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
              <!--  --><img src="<?=$this->getThemePath()?>/images/CanadianPayrollAssociation.363c162b.jpg" />
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
              <!--  --><img src="<?=$this->getThemePath()?>/images/tbxi.9e6283ba.png" />
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
              <!--  --><img src="<?=$this->getThemePath()?>/images/paymate.9c815c41.jpg" />
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
              <!--  --><img src="<?=$this->getThemePath()?>/images/tbcc.27a4d514.png" />
            </div>
          </div>
        </div>
      </div>
    </section>
        <hr />
    <section class="section-padding" id="consultation">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-md-6 section-padding">
            <h1>Call Us Today</h1>
            <p>Call or fill out the enquiry form and one of our friendly staff will be in touch to get you setup with Xero accounting.</p>
            <a class="xero-more-btn" title="Call" href="tel:+1807625-6800">1+(807) 625-6800</a>
          </div>
          <div class="col-md-6 section-padding">
            <h2>book A Free Consultation</h2>
            <form action="" method="POST" role="form">
              <div class="form-group">
                <input type="text" class="form-control" id="Name" placeholder="Name">
                <input type="tel" class="form-control" id="ContactPhoneNumber" placeholder="Contact Phone Number">
                <input type="email" class="form-control" id="EMAIL" placeholder="EMAIL">
                <textarea class="form-control" id="Additionalcomments" rows="5" placeholder="Company Name and Additional Comments" ></textarea>
              </div>
              <button type="submit" class="btn xero-more-btn">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="section-padding light-text" id="xero">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-md-6 section-padding">
            <div class="row-fluid">
              <div class="col-md-12 xero-blog-list-title">
                <div class="row">
                  <div class="col-md-8 col-sm-6 col-xs-7">
                    <h3>Latest blog posts from Xero</h3>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-5">
                    <a class="xero-more-btn pull-right" href="https://www.xero.com/blog/" target="_blank">See All</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row-fluid">
              <div class="col-md-12 xero-blog-list">
                <ul class="list-unstyled">
                  <li><a href="https://www.xero.com/blog/2015/08/top-5-advantages-of-cloud-bookkeeping/">Top 5 Advantages Of Cloud Bookkeeping</a></li>
                  <li><a href="https://www.xero.com/blog/2015/10/this-accountant-offers-3-tips-on-improving-your-cash-flow-today/">This Accountant Offers 3 Tips On Improving Your Cash Flow Today</a></li>
                  <li><a href="https://www.xero.com/blog/2015/09/converting-leads-into-sales-5-easy-ways/">Converting Leads Into Sales 5 Easy Ways</a></li>
                  <li><a href="https://www.xero.com/blog/2015/08/5-tips-to-starting-a-business/">5 Tips To Starting A Business</a></li>
                  <li><a href="https://www.xero.com/blog/2015/08/the-top-4-benefits-of-cloud-services/">The Top 4 Benefits Of Cloud Services</a></li>
                  <li><a href="https://www.xero.com/blog/2015/08/whats-new-with-xero-square/">What's New With Xero Square</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="col-md-6 section-padding">
            <div class="row-fluid">
              <div class="col-md-12 xero-blog-list-title">
                <div class="row">
                  <div class="col-md-8 col-sm-6 col-xs-7">
                    <h3>Latest tweets from Xero</h3>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-5">
                    <a class="xero-more-btn pull-right" href="https://www.xero.com/blog/" target="_blank">See All</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row-fluid">
                <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Xero" data-widget-id="660909981118693376">Tweets by @Xero</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="text-center section-padding" id="contact">
      <div class="container-fluid">
        <div class="row-fluid">

          <div class="col-md-4 col-sm-4">
            <div class="light-box box-hover">
              <a href="https://www.google.ca/maps/place/1085+Carrick+St,+Thunder+Bay,+ON+P7B+6L9/data=!4m2!3m1!1s0x4d5921e5121bda33:0x5d44f2e9f13b3453?sa=X&ved=0ahUKEwjSisaiqajJAhXGej4KHa_VAYEQ8gEIGzAA" target="_blank">
                <span class="dash icon icon-location"></span>
              </a>
              <h3>Address</h3>
              <a href="https://www.google.ca/maps/place/1085+Carrick+St,+Thunder+Bay,+ON+P7B+6L9/data=!4m2!3m1!1s0x4d5921e5121bda33:0x5d44f2e9f13b3453?sa=X&ved=0ahUKEwjSisaiqajJAhXGej4KHa_VAYEQ8gEIGzAA" target="_blank">
                1085 Carrick St <br />Thunder Bay, ON  P7B 6L9
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="light-box box-hover">
              <a href="tel:+1807625-6800">
                <span class="dash icon icon-mobile"></span>
              </a>
              <h3>Phone</h3>
                <a href="tel:+1807625-6800">1+(807) 625-6800</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="light-box box-hover">
              <a href="mailto:info@payrollxpress.ca">
                <span class="dash icon icon-mail"></span>
              </a>
              <h3>Email</h3>
                <a href="mailto:info@payrollxpress.ca">info@payrollxpress.ca</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-md-12">
            <a href="#top"><div class="up-btn"></div></a>
          </div>
        </div>
        <div class="row-fluid">
          <div class="col-md-6">
            <ul class="list-inline social-buttons">
              <li><a href="https://twitter.com/payrollxpress" class="social-btn"><span class="icon icon-twitter"></span></a></li>
              <li><a href="<?=$this->url('/login')?>" class="social-btn"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a></li>
            </ul>
          </div>
          <div class="col-md-6 credit">
            <p>Copyright &copy; <?php echo date("Y"); ?> Payroll Xpress. All rights reserved. <a href="/privacy-policy">Terms &amp; Conditions</a> | <a href="/terms-conditions">Legal</a></p>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="<?=$this->getThemePath()?>/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=$this->getThemePath()?>/scripts/jQuery.headroom.min.js"></script>
    <script type="text/javascript" src="<?=$this->getThemePath()?>/scripts/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?=$this->getThemePath()?>/scripts/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?=$this->getThemePath()?>/scripts/main.dae6023f.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-23693383-25', 'auto');
      ga('send', 'pageview');

    </script>
    <?php Loader::element('footer_required'); ?>

  </body>
</html>