<?php
namespace App\Services;

class DiceThrower
{
    public function rollDices($nbDices, $nbFaces): array
    {
        $results = [];
        if ($nbDices > 0 && $nbFaces > 1) {
            for ($i = 1; $i<= $nbDices; $i++) {
                $results[] = rand(1, $nbFaces);
            }
        }

        return $results;
    }

    //var_dump(rollDices(5, 8));

    public function rollTwenty($nbDices): array
    {
        $results = [];
        if ($nbDices > 0) {
            for ($i = 1; $i<= $nbDices; $i++) {
                $results[] = rand(1, 20);
            }
        }

        return $results;
    }
    //var_dump(rollTwenty(5));

    public function rollHundred($nbDices): array
    {
        $results = [];
        if ($nbDices > 0) {
            for ($i = 1; $i<= $nbDices; $i++) {
                $results[] = rand(1, 100);
            }
        }

        return $results;
    }

    //var_dump(rollHundred(3));
}
