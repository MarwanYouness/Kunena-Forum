<?php
/**
 * @version $Id$
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

$template = KunenaTemplate::getInstance();
?>
<div id="Kunena">
<?php
$this->displayMenu ();
$this->displayLoginBox ();
?>
<!-- BEGIN: GENERAL STATS -->
<?php if($this->config->showgenstats): ?>
<div class="kblock kgenstats">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="kgenstats_tbody"></a></span>
		<h2><span><?php echo $this->escape($this->config->board_title); ?> <?php echo JText::_('COM_KUNENA_STAT_FORUMSTATS'); ?></span></h2>
	</div>
	<div class="kcontainer" id="kgenstats_tbody">
		<div class="kbody">
	<table  class = "kblocktable">
		<tbody>
			<tr class = "ksth">
				<th colspan="2"><?php echo JText::_('COM_KUNENA_STAT_GENERAL_STATS'); ?></th>
			</tr>
			<tr class = "krow1">
				<td class = "kcol-first">
					<div class="kstatsicon"></div>
				</td>
				<td class = "kcol-mid">
					<?php echo JText::_('COM_KUNENA_STAT_TOTAL_USERS'); ?>:<b> <?php echo $this->userlist;?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_LATEST_MEMBERS'); ?>:<b> <?php echo CKunenaLink::GetProfileLink(intval($this->lastestmemberid)); ?></b>

					<br /> <?php echo JText::_('COM_KUNENA_STAT_TOTAL_MESSAGES'); ?>: <b> <?php echo intval($this->totalmessages); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_TOTAL_SUBJECTS'); ?>: <b> <?php echo intval($this->totaltitles); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_TOTAL_SECTIONS'); ?>: <b> <?php echo intval($this->totalsections); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_TOTAL_CATEGORIES'); ?>: <b> <?php echo intval($this->totalcats); ?></b>

					<br /> <?php echo JText::_('COM_KUNENA_STAT_TODAY_OPEN_THREAD'); ?>: <b> <?php echo intval($this->todayopen); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_YESTERDAY_OPEN_THREAD'); ?>: <b> <?php echo intval($this->yesterdayopen); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_TODAY_TOTAL_ANSWER'); ?>: <b> <?php echo intval($this->todayanswer); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_YESTERDAY_TOTAL_ANSWER'); ?>: <b> <?php echo intval($this->yesterdayanswer); ?></b>

				</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
</div>
<?php endif; ?>
<!-- FINISH: GENERAL STATS -->

<?php
$tabclass = array("row1","row2");
$k = 0;
?>

<!-- B: Pop Subject -->
<?php if($this->config->showpopsubjectstats && !empty($this->toptitles)) : ?>
<div class="kblock kpopsubjstats">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="kpopsubstats-tbody"></a></span>
		<h2><span><?php echo JText::_('COM_KUNENA_STAT_TOP'); ?> <strong><?php echo $this->config->popsubjectcount; ?></strong> <?php echo JText::_('COM_KUNENA_STAT_POPULAR'); ?> <?php echo JText::_('COM_KUNENA_STAT_POPULAR_USER_KGSG'); ?></span></h2>
	</div>
	<div class="kcontainer" id="kpopsubstats-tbody">
		<div class="kbody">
			<table class = "kblocktable">
				<tbody>
					<tr class = "ksth" >
						<th class="kname"> <?php echo JText::_('COM_KUNENA_GEN_SUBJECT') ;?></th>
						<th class="kbar">&nbsp;</th>
						<th class="kname"><?php echo JText::_('COM_KUNENA_USRL_HITS') ;?></th>
					</tr>
					<?php
					foreach ($this->toptitles as $toptitle) :
						$k = 1 - $k;
						if ($toptitle->hits == $this->toptitlehits) {
							$barwidth = 100;
						} else {
							$barwidth = round(($toptitle->hits * 100) / $this->toptitlehits);
						}
					?>
					<tr class = "k<?php echo $this->escape($tabclass[$k]); ?>">
						<td class="kcol-first">
							<?php echo CKunenaLink::GetThreadLink( 'view', intval($toptitle->catid), intval($toptitle->id), KunenaHtmlParser::parseText ($toptitle->subject), '' ); ?>
						</td>
						<td class="kcol-mid">
							<img class = "kstats-bar" src = "<?php echo $template->getImagePath('bar.png') ?>" alt = "" height = "10" width = "<?php echo intval($barwidth);?>%" />
						</td>
						<td class="kcol-last">
							<?php echo intval($toptitle->hits); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- F: Pop Subject -->

<!-- B: Pop Poll -->
<?php if($this->config->showpoppollstats && !empty($this->toppolls)): ?>
<div class="kblock kpoppollstats">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="kpoppollstats_tbody"></a></span>
		<h2><span><?php echo JText::_('COM_KUNENA_STAT_TOP'); ?> <strong><?php echo $this->config->poppollscount; ?></strong> <?php echo JText::_('COM_KUNENA_STAT_POPULAR'); ?> <?php echo JText::_('COM_KUNENA_STAT_POPULAR_POLLS_KGSG'); ?></span></h2>
	</div>
	<div class="kcontainer" id="kpoppollstats_tbody">
		<div class="kbody">
			<table class = "kblocktable">
				<tbody>
					<tr  class = "ksth" >
						<th class="kname"> <?php echo JText::_('COM_KUNENA_POLL_STATS_NAME');?></th>
						<th class="kbar">&nbsp;  </th>
						<th class="kname"><?php echo JText::_('COM_KUNENA_USRL_VOTES') ;?></th>
					</tr>
					<?php
						foreach($this->toppolls as $toppoll) :
						$k = 1 - $k;
						if (intval($toppoll->total) == $this->toppollvotes) {
							$barwidth = 100;
						} else {
							$barwidth = round((intval($toppoll->total) * 100) / $this->toppollvotes);
						}
					?>
					<tr class = "k<?php echo $this->escape($tabclass[$k]); ?>">
						<td class="kcol-first">
							<?php echo CKunenaLink::GetThreadLink( 'view', intval($toppoll->catid), intval($toppoll->threadid), $this->escape($toppoll->title), '' ); ?>
						</td>
						<td class="kcol-mid">
							<img class = "kstats-bar" src = "<?php echo $template->getImagePath('bar.png') ?>" alt = "" height = "10" width = "<?php echo intval($barwidth);?>%"/>
						</td>
						<td class="kcol-last">
							<?php echo intval($toppoll->total); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- F: Pop Polls -->

<!-- B: User Messages -->
<?php if($this->config->showpopuserstats && !empty($this->topposters)): ?>
<div class="kblock kpopuserstats">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="kpopusermsgstats_tbody"></a></span>
		<h2><span><?php echo JText::_('COM_KUNENA_STAT_TOP'); ?> <strong><?php echo $this->config->popusercount; ?></strong> <?php echo JText::_('COM_KUNENA_STAT_POPULAR'); ?> <?php echo JText::_('COM_KUNENA_STAT_POPULAR_USER_TMSG'); ?></span></h2>
	</div>
	<div class="kcontainer" id="kpopusermsgstats_tbody">
		<div class="kbody">
			<table class = "kblocktable">
				<tbody>
					<tr class = "ksth" >
						<th class="kname"><?php echo JText::_('COM_KUNENA_USRL_USERNAME') ;?></th>
						<th class="kbar">&nbsp;</th>
						<th class="kname"><?php echo JText::_('COM_KUNENA_USRL_POSTS') ;?></th>
					</tr>
					<?php
						foreach ($this->topposters as $poster) :
						$k = 1 - $k;
						if ($poster->posts == $this->topmessage) {
							$barwidth = 100;
						} else {
							$barwidth = round(($poster->posts * 100) / $this->topmessage);
						}
					?>
					<tr class = "k<?php echo $this->escape($tabclass[$k]); ?>">
						<td class="kcol-first">
							<?php echo CKunenaLink::GetProfileLink(intval($poster->userid)); ?>
						</td>
						<td class="kcol-mid">
							<img class = "kstats-bar" src = "<?php echo $template->getImagePath('bar.png') ?>" alt = "" height = "10" width = "<?php echo intval($barwidth);?>%" />
						</td>
						<td class="kcol-last">
							<?php echo intval($poster->posts); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- F: User Messages -->

<!-- B: Pop User  -->
<?php if($this->config->showpopuserstats && !empty($this->topprofiles)): ?>
<div class="kblock kpopprofilestats">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="kpopuserhitstats_tbody"></a></span>
		<h2><span><?php echo JText::_('COM_KUNENA_STAT_TOP'); ?> <strong><?php echo $this->config->popusercount; ?></strong> <?php echo JText::_('COM_KUNENA_STAT_POPULAR'); ?> <?php echo JText::_('COM_KUNENA_STAT_POPULAR_USER_GSG'); ?></span></h2>
	</div>
	<div class="kcontainer" id="kpopuserhitstats_tbody">
		<div class="kbody">
			<table class = "kblocktable">
				<tbody>
					<tr class = "ksth ks">
						<th class="kname"> <?php echo JText::_('COM_KUNENA_USRL_USERNAME') ;?></th>
						<th class="kbar">&nbsp;</th>
						<th class="kname"><?php echo JText::_('COM_KUNENA_USRL_HITS') ;?></th>
					</tr>
					<?php
						foreach ($this->topprofiles as $topprofile) :
						$k = 1 - $k;
						if ($topprofile->hits == $this->topprofilehits) {
							$barwidth = 100;
						} else {
							$barwidth = round(($topprofile->hits * 100) / $this->topprofilehits);
						}
					?>
					<tr class = "k<?php echo $this->escape($tabclass[$k]); ?>">
						<td class="kcol-first">
							<?php echo CKunenaLink::GetProfileLink(intval($topprofile->user_id)); ?>
						</td>
						<td class="kcol-mid">
							<img class = "kstats-bar" src = "<?php echo $template->getImagePath('bar.png') ?>" alt = "" height = "10" width = "<?php echo intval($barwidth);?>%"/>
						</td>
						<td class="kcol-last">
							<?php echo intval($topprofile->hits); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- F: User User -->

<!-- B: Pop Thank you  -->
<?php if($this->config->showpopthankyoustats && !empty($this->topuserthanks)): ?>
<div class="kblock kpopthanksstats">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="kpopthankyou_tbody"></a></span>
		<h2><span><?php echo JText::_('COM_KUNENA_STAT_TOP'); ?> <strong><?php echo $this->config->popthankscount; ?></strong> <?php echo JText::_('COM_KUNENA_STAT_POPULAR'); ?> <?php echo JText::_('COM_KUNENA_STAT_POPULAR_USER_THANKS_YOU'); ?></span></h2>
	</div>
	<div class="kcontainer" id="kpopthankyou_tbody">
		<div class="kbody">
			<table class = "kblocktable">
				<tbody>
					<tr class = "ksth ks" >
						<th class="kname"> <?php echo JText::_('COM_KUNENA_USRL_USERNAME') ;?></th>
						<th class="kbar">&nbsp;</th>
						<th class="kname"><?php echo JText::_('COM_KUNENA_STAT_THANKS_YOU_RECEIVED') ;?></th>
					</tr>
					<?php
						foreach ($this->topuserthanks as $topthanks) :
						$k = 1 - $k;
						if ($topthanks->receivedthanks == $this->topthanks) {
							$barwidth = 100;
						} else {
							$barwidth = round(($topthanks->receivedthanks * 100) / $this->topthanks);
						}
					?>
					<tr class = "k<?php echo $this->escape($tabclass[$k]); ?>">
						<td class="kcol-first">
							<?php echo CKunenaLink::GetProfileLink(intval($topthanks->id)); ?>
						</td>
						<td class="kcol-mid">
							<img class = "kstats-bar" src = "<?php echo $template->getImagePath('bar.png') ?>" alt = "" height = "10" width = "<?php echo intval($barwidth);?>%"/>
						</td>
						<td class="kcol-last">
							<?php echo intval($topthanks->receivedthanks); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- F: Thank you -->
<?php $this->displayFooter (); ?>
</div>