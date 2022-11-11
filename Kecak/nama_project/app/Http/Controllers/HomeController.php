<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
 function index(){
    return view('frontpage.landingpage');
   }

 function form(){
   return view('form.form-layout');
 }
}