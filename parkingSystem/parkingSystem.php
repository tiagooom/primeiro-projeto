<?php
class ParkingSystem {
     
     
    function __construct(private $big, private $medium, private $small) {
        
    }
  
    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType) {
        switch ($carType) {
            case 1:
            if($this->big == 0) return false;
            else 
            {
                $this->big--;
                return true;
            }
        
            case 2:
            if($this->medium == 0) return false;
            else 
            {
                $this->medium--;
                return true;
            }
        
            case 3:
            if($this->small == 0) return false;
            else 
            {
                $this->small--;
                return true;
            }
        
        }
    }
}

/**
 * Your ParkingSystem object will be instantiated and called as such:
 * $obj = ParkingSystem($big, $medium, $small);
 * $ret_1 = $obj->addCar($carType);
 */