<?php
/**
* @package      EasyDiscuss
* @copyright    Copyright (C) 2010 - 2016 Stack Ideas Sdn Bhd. All rights reserved.
* @license      GNU/GPL, see LICENSE.php
* Komento is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined('_JEXEC') or die('Restricted access');
?>
<div id="ed" class="ed-mod m-leaderboard <?php echo $params->get('moduleclass_sfx');?>">
    <div class="ed-list--vertical has-dividers--bottom-space">
    <?php $i = 1; ?>
    <?php foreach($users as $user) { ?>
        <div class="ed-list__item">
            <span class="item-rank rank-<?php echo $i;?>">
                
            </span>
            <div class="o-flag">
            <?php if ($params->get('showavatar')) { ?>
                <div class="o-flag__img t-lg-mr--md">
                    <a class="o-avatar" href="<?php echo $user->getLink(); ?>">
                        <img src="<?php echo $user->getAvatar(); ?>">
                    </a>
                </div>
            <?php } ?>
                <div class="o-flag__body">
                    <a href="<?php echo $user->getLink(); ?>" class="m-post-title t-lg-mb--sm">
                        <?php echo $user->getName(); ?>
                    </a>
                    <div class="m-list--inline m-list--has-divider t-lg-mb-sm">
                        <?php if ($order == 'answers') { ?>
                        <div class="m-list__item">
                             <div class="m-post-meta t-fs--sm"><?php echo JText::_('MOD_EASYDISCUSS_LEADERBOARD_ANSWERS'); ?>: <?php echo $user->total_answers; ?></div>
                        </div>
                        <?php } ?>

                        <?php if ($order == 'points') { ?>
                        <div class="m-list__item">
                             <div class="m-post-meta t-fs--sm"><?php echo JText::_('MOD_EASYDISCUSS_LEADERBOARD_POINTS'); ?>: <?php echo $user->total_points; ?></div>
                        </div>
                        <?php } ?>

                        <?php if ($order == 'posts') { ?>
                        <div class="m-list__item">
                             <div class="m-post-meta t-fs--sm"><?php echo JText::_('MOD_EASYDISCUSS_LEADERBOARD_POSTS'); ?>: <?php echo $user->total_posts; ?></div>
                        </div>
                        <?php } ?>
                    </div>      
                </div>
            </div>
        </div>
        <?php $i++; ?>
    <?php } ?>
    <?php if ($my->id > 0 && $params->get('showcurrentpoints')) { ?>
        <div class="m-post-meta t-fs--sm">
            <?php echo JText::_('MOD_EASYDISCUSS_LEADERBOARD_CURRENT_POINTS');?>: <strong><a href="<?php echo $my->getLink();?>"><?php echo $my->getPoints();?></a></strong>
        </div>
    <?php } ?>  
    </div>
</div>