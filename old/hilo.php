<?php



class Deceptecon 
{
    protected $evilness = 10;
    protected $name;
    public static $level = 5;
       
    public function getEvilness($evilness)
    {
        return $this->evilness;
    }

    public function setEvilness($evilness)
    {
        $this->evilness = $evilness;
    }

}

class Battle_Field_Commander extends Deceptecon
{
    public function getCommanderEvilness()
    {
        return $this->evilness;
    }

    public function setCommanderEvilness($evilness)
    {
        $this->evilness = $evilness;
        ++$evilness;
        return $evilness;
    }
}

//$starscream = new Battle_Field_Commander();
//echo $starscream->setCommanderEvilness(12) . "<br>";
//echo $starscream->getCommanderEvilness() . "<br>";


echo Deceptecon::$level;

