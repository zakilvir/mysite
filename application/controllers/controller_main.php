<?php

class Controller_Main extends Controller
{

	function action_index()
	{
		$this->view->generate(array('content' =>'main_view.php', 'title' => "Ilvir Zakiryanov's site"), 'template_view.php');
	}
}
