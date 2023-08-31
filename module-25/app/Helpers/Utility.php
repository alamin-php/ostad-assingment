<?php
// app/Helpers/Utility.php

namespace App\Helpers;

class Utility
{
    public static function generateRandomEmployeeId()
    {
        $prefix = 'EMP';
        $randomNumber = mt_rand(100000, 999999);
        return $prefix . $randomNumber;
    }
}
