<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    public static function convertToDB($value)
    {
        return Carbon::createFromFormat('Y-m-d H:m:s', $value)
            ->format('d-m-Y');
    }
}