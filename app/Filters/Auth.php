<?php namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
class Auth implements FilterInterface
{
   public function before(RequestInterface $request,  $Argument = null)
   {
    if(!session('user_id')){
        return redirect()->to(base_url('auth'));
    }
   }
//--------------------------------------------------------------------
public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
{
// Do something here
}
}