<?php
/**
 * Kunena Component
 * @package     Kunena.Framework
 * @subpackage  Icons
 *
 * @copyright   (C) 2008 - 2016 Kunena Team. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link        https://www.kunena.org
 **/
defined('_JEXEC') or die();


/**
 * Class KunenaIcons
 *
 * @since  5.0
 *
 */
class KunenaIcons
{
	/**
	 * Return the arrow down icon
	 *
	 * @return string
	 */
	static public function arrowdown()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-arrow-down hasTooltip"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<span class="icon icon-arrow-down hasTooltip"></span>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-arrow-down hasTooltip"></span>';
		}
		else
		{
			return '<span class="icon icon-arrow-down hasTooltip"></span>';
		}
	}

	/**
	 * Return the arrwo up icon
	 *
	 * @return string
	 */
	static public function arrowup()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-arrow-up hasTooltip"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<span class="icon icon-arrow-up hasTooltip"></span>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-arrow-up hasTooltip"></span>';
		}
		else
		{
			return '<span class="icon icon-arrow-up hasTooltip"></span>';
		}
	}

	/**
	 * Return the members icon
	 *
	 * @return string
	 */
	static public function members()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-user fa-big" aria-hidden="true"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<span class="icon icon-user icon-big"></span>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-user glyphicon-super"></span>';
		}
		else
		{
			return '<span class="icon icon-user icon-big"></span>';
		}
	}

	/**
	 * Return the stats icon
	 *
	 * @return string
	 */
	static public function stats()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-bar-chart fa-big" aria-hidden="true"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<span class="icon icon-bars icon-big"></span>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-stats glyphicon-super"></span>';
		}
		else
		{
			return '<span class="icon icon-bars icon-big"></span>';
		}
	}


	/**
	 * Return the search icon
	 *
	 * @return string
	 */
	static public function search()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-search" aria-hidden="true"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<span class="icon icon-search"></span>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-search"></span>';
		}
		else
		{
			return '<span class="icon icon-search"></span>';
		}
	}

	/**
	 * Return the collapse icon
	 *
	 * @return string
	 */
	static public function collapse()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return 'fa';
		}
		elseif ($topicicontype == 'B2')
		{
			return 'b2';
		}
		elseif ($topicicontype == 'B3')
		{
			return 'b3';
		}
		else
		{
			return 'b3';
		}
	}

	/**
	 * Return the cancel icon
	 *
	 * @return string
	 */
	static public function cancel()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-times"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="icon icon-cancel"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-remove-sign"></span>';
		}
		else
		{
			return '<i class="icon icon-remove-sign"></i>';
		}
	}

	/**
	 * Return the ip icon
	 *
	 * @return string
	 */
	static public function ip()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if (!KunenaUserHelper::getMyself()->isModerator())
		{
			return;
		}

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-compass"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="icon icon-compass"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-compass"></span>';
		}
		else
		{
			return '<i class="icon icon-compass"></i>';
		}
	}

	/**
	 * Return the email icon
	 *
	 * @return string
	 */
	static public function email()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-envelope"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="icon icon-envelope"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-envelope"></span>';
		}
		else
		{
			return '<i class="icon icon-envelope"></i>';
		}
	}

	/**
	 * Return the bookmark icon
	 *
	 * @return string
	 */
	static public function bookmark()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-bookmark"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="icon icon-bookmark"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-bookmark"></span>';
		}
		else
		{
			return '<i class="icon icon-bookmark"></i>';
		}
	}

	/**
	 * Return the back icon
	 *
	 * @return string
	 */
	static public function back()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-angle-left"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="icon icon-arrow-left"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-arrow-left"></span>';
		}
		else
		{
			return '<i class="icon icon-arrow-left"></i>';
		}
	}

	/**
	 * Return the save icon
	 *
	 * @return string
	 */
	static public function save()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-save"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="icon icon-save"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-save"></span>';
		}
		else
		{
			return '<i class="icon icon-save"></i>';
		}
	}

	/**
	 * Return the edit icon
	 *
	 * @return string
	 */
	static public function edit()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-edit"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="icon icon-edit"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-edit"></span>';
		}
		else
		{
			return '<i class="icon icon-edit"></i>';
		}
	}

	/**
	 * Return the attach icon
	 *
	 * @return string
	 */
	static public function attach()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-paperclip"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="icon icon-flag-2 icon-white"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-paperclip"></span>';
		}
		else
		{
			return '<i class="icon icon-flag-2 icon-white"></i>';
		}
	}

	/**
	 * Return the plus icon
	 *
	 * @return string
	 */
	static public function plus()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-plus"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="icon icon-plus"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-plus"></span>';
		}
		else
		{
			return '<i class="icon icon-plus"></i>';
		}
	}

	/**
	 * Return the upload icon
	 *
	 * @return string
	 */
	static public function upload()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="fa fa-upload"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="icon icon-upload"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="glyphicon glyphicon-upload"></span>';
		}
		else
		{
			return '<i class="icon icon-upload"></i>';
		}
	}

	/**
	 * Return the picture icon
	 *
	 * @return string
	 */
	static public function picture()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="large-kicon fa fa-picture-o"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="large-kicon icon icon-picture"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="large-kicon glyphicon glyphicon-picture"></span>';
		}
		else
		{
			return '<i class="large-kicon icon icon-picture"></i>';
		}
	}

	/**
	 * Return the file icon
	 *
	 * @return string
	 */
	static public function file()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="large-kicon fa fa-file-o"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="large-kicon icon icon-file"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="large-kicon glyphicon glyphicon-file"></span>';
		}
		else
		{
			return '<i class="large-kicon icon icon-file"></i>';
		}
	}

	/**
	 * Return the delete icon
	 *
	 * @return string
	 */
	static public function delete()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i class="large-kicon fa fa-trash"></i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i class="large-kicon icon icon-trash"></i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<span class="large-kicon glyphicon glyphicon-trash"></span>';
		}
		else
		{
			return '<i class="large-kicon icon icon-trash"></i>';
		}
	}

	/**
	 * Return the poll add icon
	 *
	 * @return string
	 */
	static public function poll_add()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i id="kbutton-poll-add" class="fa fa-plus btn btn-xs btn-small btn-default"
						alt="'. JText::_('COM_KUNENA_POLL_ADD_POLL_OPTION') .'"> </i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i id="kbutton-poll-add" class="icon icon-plus btn btn-small"
						alt="'. JText::_('COM_KUNENA_POLL_ADD_POLL_OPTION') .'"> </i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<i id="kbutton-poll-add" class="glyphicon glyphicon-plus btn btn-xs btn-default"
						alt="'. JText::_('COM_KUNENA_POLL_ADD_POLL_OPTION') .'"> </i>';
		}
		else
		{
			return '<i id="kbutton-poll-add" class="icon icon-plus btn btn-small"
						alt="'. JText::_('COM_KUNENA_POLL_ADD_POLL_OPTION') .'"> </i>';
		}
	}

	/**
	 * Return the poll rem icon
	 *
	 * @return string
	 */
	static public function poll_rem()
	{
		$ktemplate  = KunenaFactory::getTemplate();
		$topicicontype    = $ktemplate->params->get('topicicontype');

		if ($topicicontype == 'fa')
		{
			return '<i id="kbutton-poll-add" class="fa fa-minus btn btn-xs btn-small btn-default"
						alt="'. JText::_('COM_KUNENA_POLL_ADD_POLL_OPTION') .'"> </i>';
		}
		elseif ($topicicontype == 'B2')
		{
			return '<i id="kbutton-poll-add" class="icon icon-minus btn btn-small"
						alt="'. JText::_('COM_KUNENA_POLL_ADD_POLL_OPTION') .'"> </i>';
		}
		elseif ($topicicontype == 'B3')
		{
			return '<i id="kbutton-poll-add" class="glyphicon glyphicon-minus btn btn-xs btn-default"
						alt="'. JText::_('COM_KUNENA_POLL_ADD_POLL_OPTION') .'"> </i>';
		}
		else
		{
			return '<i id="kbutton-poll-add" class="icon icon-minus btn btn-small"
						alt="'. JText::_('COM_KUNENA_POLL_ADD_POLL_OPTION') .'"> </i>';
		}
	}
}
