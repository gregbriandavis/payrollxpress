<p class="text-center"><button data-toggle="modal" href="#quick-quote" class="learn-more-btn">Xpress Quote</button></p>
<div class="modal fade" id="quick-quote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true">&times;</button>
		  <h4 class="modal-title">Xpress Quote</h4>
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