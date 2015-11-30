<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<ul style="margin: 0; padding-left: 1.5em;">
	<div id="blog-index">
		<?php 
		$isFirst = true; //So first item in list can have a different css class (e.g. no top border)
		$excerptBlocks = ($controller->truncateSummaries ? 1 : null); //1 is the number of blocks to include in the excerpt
		$truncateChars = ($controller->truncateSummaries ? $controller->truncateChars : 0);
		$dateHelper = Loader::helper('date');
		/* @var $dateHelper DateHelper */
		foreach ($cArray as $cobj):
			$title = $cobj->getCollectionName();
			$date = $dateHelper->formatDate($cobj->getCollectionDatePublic(), true);
			$author = $cobj->getVersionObject()->getVersionAuthorUserName();
			$link = $nh->getLinkToCollection($cobj);
			$firstClass = $isFirst ? 'first-entry' : '';
			
			$entryController = Loader::controller($cobj);
			if(method_exists($entryController,'getCommentCountString')) {
				$comments = $entryController->getCommentCountString('%s '.t('Comment'), '%s '.t('Comments'));
			}
			$isFirst = false;
		?>
		<div class="entry <?php echo $firstClass; ?>">
			<li>
				<a href="<?php echo $link; ?>"><?php echo $title; ?></a>
			</li>
		<?php endforeach; ?>
	</div>
</ul>
