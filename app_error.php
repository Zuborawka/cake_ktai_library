<?php
/*
 * CakeKtaiLibrary, supports Japanese mobile phone sites coding.
 * This provides many functions such as a carrier check to use Referer or E-mail, 
 * conversion of an Emoji, and more.
 *
 * PHP versions 5
 *
 * CakeKtaiLibrary for CakePHP1.3
 * Copyright 2009-2012, ECWorks.
 
 * Licensed under The GNU General Public Licence
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright		Copyright 2009-2012, ECWorks.
 * @link			http://www.ecworks.jp/ ECWorks.
 * @version			0.5.1
 * @lastmodified	$Date: 2012-02-13 03:00:00 +0900 (Mon, 13 Feb 2012) $
 * @license			http://www.gnu.org/licenses/gpl.html The GNU General Public Licence
 */

//AppError, using Ktai Library helper.
//
class AppError extends ErrorHandler {
	
	function error($params) {
		$this->controller->helper[] = 'Ktai';
		parent::error($params);
	}
	function error404($params) {
		$this->controller->helper[] = 'Ktai';
		parent::error404($params);
	}
	function error500($params) {
		$this->controller->helper[] = 'Ktai';
		parent::error500($params);
	}
	function missingController($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingController($params);
	}
	function missingAction($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingAction($params);
	}
	function privateAction($params) {
		$this->controller->helper[] = 'Ktai';
		parent::privateAction($params);
	}
	function missingTable($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingTable($params);
	}
	function missingDatabase($params = array()) {
		$this->controller->helper[] = 'Ktai';
		parent::missingDatabase($params);
	}
	function missingView($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingView($params);
	}
	function missingLayout($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingLayout($params);
	}
	function missingConnection($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingConnection($params);
	}
	function missingHelperFile($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingHelperFile($params);
	}
	function missingHelperClass($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingHelperClass($params);
	}
	function missingBehaviorFile($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingBehaviorFile($params);
	}
	function missingBehaviorClass($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingBehaviorClass($params);
	}
	function missingComponentFile($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingComponentFile($params);
	}
	function missingComponentClass($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingComponentClass($params);
	}
	function missingModel($params) {
		$this->controller->helper[] = 'Ktai';
		parent::missingModel($params);
	}
}
