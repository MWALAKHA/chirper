<?php
 
namespace App\Http\Controllers;
 
//use Illuminate\Http\Response;
use Illuminate\View\View;
//use Illuminate\Http\Request;
 
class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(): View
    {
        
        return view('chirps', [
            //
        ]);
    }
}


