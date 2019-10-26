<?php
namespace App\Controllers;


use Framework\App;

/**
 * Class UsersController
 * @package App\Controllers
 */
class UsersController
{
     public function index()
     {
         $users = App::get('database')->selectAll('users');
         return view('users', compact('users'));
     }


     public function store()
     {
         // $name = $_POST['name'];
         App::get('database')->insert('users', [
             'name' => $_POST['name']
         ]);

         return redirect('users');
     }
}