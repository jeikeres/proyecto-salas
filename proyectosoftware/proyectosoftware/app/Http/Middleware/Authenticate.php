<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	//recive request usuario y closure siempre
	public function handle($request, Closure $next)
	{   //si el usuario esta como invitado
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{//uuario no autorizado
				return response('Unauthorized.', 401);
			}
			else
			{//redirige a vista login
				return redirect()->guest('login');
			}
		}
         //sino pasa al siguiente middleware
		return $next($request);
	}

}
