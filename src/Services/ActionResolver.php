<?php
namespace App\Services;

use App\Services\DiceThrower;

include 'DiceThrower.php';

class ActionResolver extends DiceThrower
{
    public function attack($offensive, $defensive)
    {
        $testAttack = rollHundred(1);
        if($testAttack)
    }
}
