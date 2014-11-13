<?php

class HomeController extends BaseController {

    protected $layout = 'layouts.common';

    public function showWelcome() {
        return View::make('hello');
    }

    public function getIndex() {
        View::share('PAGETITLE', 'Home page');
        $this->layout->content = View::make('home', array('pagetitle' => 'Home Page'));
    }

}
