<?php
class PublicAction extends Action {
	protected $scriptQueue = array();

	protected function _initialize () {
		$isAjax = $this->isAjax();
		if ($isAjax) {
			$this->initializeAjax();
		}
		else {
			$this->initializeNoneAjax();
		}
	}
	
	protected function initializeAjax () {
		
	}
	
	protected function initializeNoneAjax () {
		// build alTinyObj
		$alTinyObj['domain'] = C('SITE_DOMAIN');
		$alTinyObj['scriptRoot'] = C('STATIC_SERVER') . '/js';
		$this->assign('alTinyObj', json_encode($alTinyObj));
	
		// js queue to load
		if (!empty($this->scriptQueue)) {
			$this->assign('scriptQueue', json_encode($scriptQueue));
		}
	}

}
?>