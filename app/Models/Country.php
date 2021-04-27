<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'alpha2_code', 'alpha3_code', 'country_code',
        'capital_city', 'sub_region', 'timezone', 'country_flag'
    ];

    public static function getBaseUrl()
    {
        $url = "https://restcountries.eu/rest/v2/all";

        return $url;
    }
}