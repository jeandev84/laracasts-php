<?php
namespace App\Controllers;


use Framework\App;

/**
 * Class PagesController
 * @package App\Controllers
 */
class PagesController
{

     /**
      * Principe d'action
      * 1. Receive the request
      * 2. Delegate.
      * 3. Return a response.
     */
      public function home()
      {
          $users = App::get('database')->selectAll('users');
          return view('index', compact('users'));
      }


      public function about()
      {
          $company = 'Laracasts';

          /* $project->addList(['' => '']) */
          return view('about', compact('company'));
      }



      public function contact()
      {
          return view('contact');
      }
}

