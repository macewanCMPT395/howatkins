<?php

class UsersController extends BaseController {

    protected $user;



    public function __construct(User $user) {
        $this->user = $user;
    }


	/**
	 * Display a listing of Users.
	 *
	 * @return Response
	 */
	public function index() {
        $users = $this->user->all();
        return View::make('users/index', ['users' => $users]);
    }

	/**
	 * Show the form for creating a new User.
	 *
	 * @return Response
	 */
	public function create() {
        return View::make('users/create');
	}

	/**
	 * Store a newly created User in storage.
	 *
	 * @return Response
	 */
    public function store() {
       
       

	




	
        $input = Input::all();
        $input['password'] = Hash::make($input['password']);


        if (!$this->user->fill($input)->isValid()) {
            return Redirect::back()->withInput()
                        ->withErrors($this->user->errors);
        }
        $this->user->save();
        
        Auth::login($this->user);
        return Redirect::to("/");
	}

	/**
	 * Display the specified User by $id.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($id) {
        $requestedUser = User::find($id);
        $editable = false;

        if ($loggedInUser = Auth::user()) { // If a user is logged in..
            if ($loggedInUser->id == $id)
                $editable = true;
        }

        return View::make('users/show', 
                ['user' => $requestedUser, 'editable' => $editable]);
    }

	/**
	 * Show the form for editing the specified User by $id.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id) {
        // Only the user that owns this page should be able to get here.

        $loggedInUser = Auth::user();

        if (Auth::guest() || $loggedInUser->id != $id) {
            return Redirect::route('sessions.create');
        }

        return View::make('users/edit', ['user' => $loggedInUser]);
	}

	/**
	 * Update the specified User in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
        // Make sure the logged in user is the one making the change.
        
        $loggedInUser = Auth::user();
        if (Auth::guest() || $loggedInUser->id != $id) {
            return Redirect::route('sessions.create');
        }

        $input = Input::all();
        $user = User::find($id);

        if (!$user->fill($input)->isValid()) {
            return Redirect::back()->withInput()
                    ->withErrors($user->errors);
        }
        $user->save(); 

        return Redirect::to("users/$id");
	}

	/**
	 * Remove the specified User from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
        // Make sure only a logged in user can delete themselves.

        $loggedInUser = Auth::user();
        if (Auth::guest() || $loggedInUser->id != $id) {
            return Redirect::route('sessions.create');
        }

        Auth::logout();

        $user = User::find($id);
        $user->delete();
    
        return Redirect::to('/');
	}

}
