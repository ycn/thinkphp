<?php
class PublicAction extends Action {
	protected function _initialize () {
		$isAjax = $this->isAjax();
		if ($isAjax) {
			_initializeAjax();
		}
		else {
			_initializeNoneAjax();
		}
	}
	
	protected function _initializeAjax () {
		
	}
	
	protected function _initializeNoneAjax () {
		
	}
}
?>