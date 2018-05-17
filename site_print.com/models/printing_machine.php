<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Printing_machine extends CI_Model {

    public function shell_execution() {
        
        $command = shell_exec("print /d:LPT1 index.txt");

        return $command;
    }

}
