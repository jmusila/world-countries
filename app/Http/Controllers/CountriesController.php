<?php

namespace App\Http\Controllers;

use App\Models\Country;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CountriesController extends Controller
{

    public function index()
    {
        $countries = Country::all();

        return view('countries.index', compact('countries'));
    }

    /**
     * Get the data from API
     *
     * @return Arrays
     */
    public function getData()
    {
        $client = new Client();

        $url = Country::getBaseUrl();

        $response = $client->request('GET', $url, [
            'verify' => false
        ]);

        $responseBody = json_decode($response->getBody());

        return $responseBody;
    }

    /**
     * Save all countries
     */
    public function saveCountries()
    {
        $responseBody = $this->getData();

        if (!empty($responseBody)) {
            foreach ($responseBody as $resp) {
                $country_details = new Country([
                     'name' => isset($resp->name) ? $resp->name : "",
                     'abbreviation' => isset($resp->alpha2Code) ? $resp->alpha2Code : "",
                     'country_code' => isset($resp->callingCodes[0]) ? $resp->callingCodes[0] : ""
                 ]);
     
                $country_details->save();
            }

            return redirect('countries.all')->with('success', 'Countries saved successfully');
        }

        return redirect('countries.all')->with('error', 'Whoops! Something went wrong. Please try again.');
    }
}
