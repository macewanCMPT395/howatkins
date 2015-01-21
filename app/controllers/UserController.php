<?php

class UserController extends BaseController {

	/**
	 * Display a listing of Users.
	 *
	 * @return Response
	 */
	public function index() {
		return 'list users -- GET /users';
	}

	/**
	 * Show the form for creating a new User.
	 *
	 * @return Response
	 */
	public function create() {
		return 'display user create form -- GET /users/create';
	}

	/**
	 * Store a newly created User in storage.
	 *
	 * @return Response
	 */
	public function store() {
		return 'store created user -- POST /users ';
	}

	/**
	 * Display the specified User by $id.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
        return "show a specific user -- GET /users/$id";
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
