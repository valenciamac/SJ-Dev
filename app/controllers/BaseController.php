<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function login()
	{
		/*$user = user::find($workspace);

		return view::make('user.workspace', array('user' => $user));*/

		return View::make('login_view');
	}

}