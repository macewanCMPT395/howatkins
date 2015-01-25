<?php

class SessionsController extends BaseController {
    
    public function create() {
        if (Auth::check()) {
            $id = Auth::user()->id;
            return Redirect::to("/");
        }
                
        return View::make('sessions.create');
    }

    public function destroy() {
        Auth::logout();
        return Redirect::to('/');
    }

    public function store() {
        if (Auth::attempt(Input::only('email', 'password'))) {
            return Redirect::to('/');
        }
        return Redirect::back()->withInput();
    }
}
