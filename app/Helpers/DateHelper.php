<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    public static function convertToDB($date)
    {
        return Carbon::createFromFormat('Y-m-d H:m:s', $date)
            ->format('d-m-Y');
    }
}