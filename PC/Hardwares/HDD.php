<?php

namespace PC\Hardwares;

class HDD{
    function Read($sector , $size){
        return "char at sector $sector with $size size";
    }
}