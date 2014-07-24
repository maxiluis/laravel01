<?php
class SessionsController extends BaseController {

	public function create(){
		if(Auth::check()){
			return Redirect::to('/listar');
		}
		return View::make('create');
	}

	public function store(){
		//logica del login
		$password = Input::get('password');
		$username = Input::get('username');
		$arrayName = array('username' => $username, 'password'=>$password );
		if(Auth::attempt($arrayName)){
			return Redirect::to('/listar');
		}
		return Redirect::back()->withInput();
	}

	public function destroy(){
		Auth::logout();
		return Redirect::to('/login');
	}



}

?>