<?php

class SessionsController extends BaseController {
    
    public function create() {
        return View::make('sessions/create');
    }

    public function destroy() {
        // 'log the user out -- GET /logout';
        return Redirect::route('sessions.create');
    }

    public function store() {
        return 'attempt to log the user in -- POST /login';
    }
}
