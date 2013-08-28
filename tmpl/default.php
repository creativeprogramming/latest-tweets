<?php
/**
 * @version		1.3
 * @package		Latest Tweets (module) for Joomla! 1.5 & 2.5
 * @author    JoomlaWorks - http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<div class="ltBlock">
	<ul id="ltUpdateId<?php echo $module->id; ?>" class="ltBlockList">
		<li class="ltBlockListLoader"><span><?php echo JText::_('MOD_JW_LT_LOADING'); ?></span></li>
	</ul>
	<div class="ltFollowUsLink">
		<a target="_blank" href="http://twitter.com/<?php echo $ltUsername; ?>">
			<span><?php echo JText::_('MOD_JW_LT_FOLLOW_US_ON_TWITTER'); ?></span>
		</a>
	</div>
</div>
