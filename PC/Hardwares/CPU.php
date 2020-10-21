<?php

namespace PC\Hardwares;

class CPU{
    public function Freeze(){
        echo "Freeze CPU\n";
    }

    public function Jump($pos){
        echo "Jumping to $pos\n";
    }

    public function Execute(){
        echo "Executing\n";
    }
}