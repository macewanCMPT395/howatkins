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
        //return 'display user create form -- GET /users/create';
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
        
        return Redirect::to('/');
	}

	/**
	 * Display the specified User by $id.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($id) {
        $user = User::find($id);
        return View::make('users/show', ['user' => $user]);
	}

	/**
	 * Show the form for editing the specified User by $id.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		return "display the edit user form -- GET /users/$id/edit";
	}

	/**
	 * Update the specified User in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		return "update the user -- POST /users/$id";
	}

	/**
	 * Remove the specified User from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		return 'destory the user -- DELETE /users/{users} ';
	}

}
