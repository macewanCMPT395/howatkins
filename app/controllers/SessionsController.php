<?php

class SessionsController extends BaseController {
    
    public function create() {
        if (Auth::check()) {
            $id = Auth::user()->id;
            return Redirect::to("/users/$id");
        }
                
        return View::make('sessions.create');
    }

    public function destroy() {
        Auth::logout();
        return Redirect::route('sessions.create');
    }

    public function store() {
        if (Auth::attempt(Input::only('email', 'password'))) {
            $id = Auth::user()->id;
            return Redirect::to("/users/$id");
        }
        return Redirect::back()->withInput();
    }
}
