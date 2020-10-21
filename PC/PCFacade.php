<?php

namespace PC;

use PC\Hardwares\CPU;
use PC\Hardwares\HDD;
use PC\Hardwares\RAM;

class PCFacade {
    private CPU $cpu;
    private HDD $hdd;
    private RAM $ram;

    public function __construct(){
        $this->cpu = new CPU();
        $this->hdd = new HDD();
        $this->ram = new RAM();
    }

    public function start(){
        $pos = rand(1,1024);
        $this->cpu->Freeze();
        $this->ram->Load($pos , $this->hdd->Read(rand(1,2048) , 8));
        $this->cpu->Jump($pos);
        $this->cpu->Execute();
    }
}