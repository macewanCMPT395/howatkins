<?php

class HomeController extends BaseController {

    /**
	 * Display the Home Page.
	 *
	 * @return Response
	 */
    public function showHome() {
        $auth = Auth::check();
        $id = -1;

        if ($auth) $id = Auth::user()->id;
        
        return View::make('home/home', 
                array('authorized' => $auth, 'id' => $id));
    }

}
