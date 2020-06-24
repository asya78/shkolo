<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Models\Button;

/**
 * Description of DefaultController
 *
 * @author Asya Toteva 
 */
class DefaultController extends Controller{
    
    public static function getHome(){
        $data = [
            'buttons' => Button::getButtons()
        ];
        
        return view('pages.home')->with($data);
    }
    
}
