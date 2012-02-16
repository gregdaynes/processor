<?php
/**
 * @package		jEvolve.MetaMiner
 * @subpackage	plg_metaminer_system_metaminer
 * @copyright	Copyright (C) 2010 jEvolve.net. All rights reserved.
 * @license		GNU General Public License <http://www.gnu.org/copyleft/gpl.html>
 * @link		http://jevolve.net
 * @version		1.0
 * @date		08/04/2010
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// import library dependencies
jimport('joomla.event.plugin');

/**
 * plgSystemMetaminer class.
 *
 * @extends JPlugin
 */
class plgSystemProcessor extends JPlugin
{
	/**
	 * __construct function.
	 *
	 * @access public
	 * @param mixed &$subject
	 * @param mixed $config
	 * @return void
	 */
	function __construct( &$subject, $config ) {	
		parent::__construct( $subject, $config );
	}

	/**
	 * onAfterDispatch function.
	 *
	 * @access public
	 * @return void
	 */
	function onAfterRender()
	{
		return $this->renderPlugin('onAfterRender');
	}

	/**
	 * renderPlugin function.
	 *
	 * @access public
	 * @param mixed $event
	 * @return void
	 */
	function renderPlugin($event) {
		$app	  = &JFactory::getApplication();
		$document = &JFactory::getDocument();
		
		if ($app->isAdmin()) {
			return true;
		}
		
		
		if ($document->template != 'jev_newsletter') {
			return true;
		}

		
			
			print_r(JResponse::getBody());
			exit;	
		
		
		
		/*


		$document->setBuffer($document->getBuffer('component').$module_output, 'component');
		*/
	}
}