<?php
Class EmptyAction extends Action{

	public function index () {
		$this->display("@Empty:404");
	}

	public function _empty () {
		$this->display("@Empty:404");
	}
}
?>