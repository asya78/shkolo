<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrintButtons
 *
 * @author Asya Toteva 
 */
namespace App\Traits;

use App\Models\Button;

trait PrintButtons {

    public function getPrintButtons() {
        $data = [
            'buttons' => Button::getButtons()
        ];
        
        return view('pages.home')->with($data);
    }
}
