<p class="text-center"><button data-toggle="modal" href="#bookkeeping-quote" class="learn-more-btn">Bookkeeping Quote</button></p>
<div class="modal fade" id="bookkeeping-quote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true">&times;</button>
			  <h4 class="modal-title">Bookkeeping Quote</h4>
			</div>
			<div class="modal-body">
				<?php
					$a = new GlobalArea('Bookkeeping Quote Form');
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