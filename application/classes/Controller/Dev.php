<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dev extends Controller {

	public function action_index()
	{
		$this->response->body(
            'Создано '.Date::fuzzy_span(1396863044).'.<br />'.
            'Режим работы '.Kohana::$config->load('app.mode')
        );
	}

}
