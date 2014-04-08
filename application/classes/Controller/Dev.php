<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dev extends Controller {

	public function action_index()
	{
		$this->response->body(
            'Создано '.Date::fuzzy_span(1396863044).'.<br />'.
            'Режим работы '.Kohana::$config->load('app.mode').'<br />'.
            Route::url('default', array('controller' => 'dev', 'action' => 'layout'))
        );
	}

    public function action_layout()
    {
        $view = Twig::Factory('layout');

        $this->response->body($view);
    }

    public function action_view()
    {
        $view = Twig::Factory('dev');
        $view->someVar = 'Variable ;)';

        $this->response->body($view);
    }
}
