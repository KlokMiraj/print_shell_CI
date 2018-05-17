<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!function_exists('shell_exection')){
    function shell_execution($command){
        $print= shell_exec($command);
        
        return $print;
    }
}