<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginForm extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */

	//reglas de validacion del formulario
	public function rules()
	{
		return [
		"nombre"	=>	"required",
			"contrasena"	=>	"required",
	];
	}

}
