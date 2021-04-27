<?php

namespace App\Http\Controllers;

use App\Models\Country;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    /**
     * Get the data from API
     *
     * @return JsonRequest
     */
    public function getData()
    {
        $client = new Client();

        $url = Country::getBaseUrl();
    }
}
