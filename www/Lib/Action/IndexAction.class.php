<?php
class IndexAction extends PublicAction {
	
	public function index() {
		$this->assign('title', '首页');
		$this->display();
	}
}
?>