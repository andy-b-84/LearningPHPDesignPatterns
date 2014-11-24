<?php
namespace Lpdp;

/**
 * @param string $className
 */
function __autoload($className) {
    $classNameWithoutNamespace = substr($className, 5);
    require_once "$classNameWithoutNamespace.php";
}
spl_autoload_register('\Lpdp\__autoload');

/**
 * Class Client
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 106
 */
class Client {
    //For direct instantiation
    /**
     * @var IPrototype
     */
    private $fly1;
    /**
     * @var IPrototype
     */
    private $fly2;

    //For cloning
    /**
     * @var IPrototype
     */
    private $c1Fly;
    /**
     * @var IPrototype
     */
    private $c2Fly;
    /**
     * @var IPrototype
     */
    private $updatedCloneFLy;

    public function __construct() {
        //Instantiate
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();

        //Clone
        $this->c1Fly = clone $this->fly1;

        $this->c2Fly = clone $this->fly2;
        $this->updatedCloneFLy = clone $this->fly2;

        //Update clones
        $this->c1Fly->mated = true;
        $this->c2Fly->fecundity=186;

        $this->updatedCloneFLy->eyeColor='purple';
        $this->updatedCloneFLy->wingBeat=220;
        $this->updatedCloneFLy->unitEyes=750;
        $this->updatedCloneFLy->fecundity=92;

        //Send through the hinting method
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updatedCloneFLy);
    }

    /**
     * @param IPrototype $fly
     * @return void
     */
    private function showFly(IPrototype $fly) {
        echo "Eye color: $fly->eyeColor<br />";
        echo "Wing Beats/second: $fly->wingBeat<br />";
        echo "Eye units: $fly->unitEyes<br />";
        $genderNow = $fly->getGender();
        echo "Gender: $genderNow<br />";
        if ($fly->isFemale()) {
            //AAARGH! OK, that's for the sake of the example, but geez...
            echo "Number of eggs: $fly->fecundity";
        } elseif ($fly->isMale()) {
            //Still AAARGH!
            echo "Mated: $fly->mated";
        }
        echo '<br /><br />';
    }
}

$client = new Client();