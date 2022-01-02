<?php
defined('_JEXEC') or die('Restricted access');

echo '<div id="phocadownload-tree-module"class="ph-pd-tree-module'.$moduleclass_sfx .'">';
if (!empty($tree)) {
	echo $categoriesHeader;
	echo '<div id="'.$treeId.'">';

	echo $tree;
	echo '</div>';
}
echo '</div>';
?>
