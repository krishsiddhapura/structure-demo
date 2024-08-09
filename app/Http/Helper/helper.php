<?php

// File Name
use Illuminate\Support\Carbon;

function fileName($ext, $prefix = "img_")
{
    return $prefix . now()->format('dmYHisv') . rand(100000, 999999) . '.' . $ext;
}

// To use carbon in blade file
function carbon()
{
    return new Carbon();
}

// Convert time to human readable format
function dateToHuman($date, $format = 'Y-m-d H:i:s', $timezone = "UTC")
{
    try {
        if (!empty($date)) {
            return Carbon::parse($date, "UTC")
                ->tz($timezone)
                ->format($format);
        } else {
            return "N/A";
        }
    } catch (Exception $exception) {
        return "N/A";
    }
}


// Add comma in long numbers
function numberWithCommas($number)
{
    if (is_numeric($number)) {
        return number_format($number, 2, '.', ',');
    } else {
        return $number;
    }
}


