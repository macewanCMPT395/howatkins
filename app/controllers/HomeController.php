<?php

class HomeController extends BaseController {

    /**
	 * Display the Home Page.
	 *
	 * @return Response
	 */
    public function showHome() {
	    return View::make('home/home');
    }

}
