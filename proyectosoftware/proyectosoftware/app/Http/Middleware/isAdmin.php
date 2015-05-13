<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class isAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
     
     	protected $auth;

    public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	//metodo obligatorio luego registrar middleware en kernel
	public function handle($request, Closure $next)
	{ 
		   //dd($this->auth);
       //dd($request->get('user')->get('nombre'));
       
       if (!$this->auth->check())
        {
            return redirect('/');
        }
        return $next($request);

	}
    
   

}
