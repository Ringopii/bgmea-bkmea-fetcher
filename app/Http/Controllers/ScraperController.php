<?php

namespace App\Http\Controllers;

use Goutte\Client;
use App\Models\Scraper;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

ini_set('max_execution_time', 0);
class ScraperController extends Controller
{
    public function fetch()
    {
        $client = new Client();
        //FOR BGMEA
        // for ($id = 1; $id <= 4363; $id++) {
        //     $crawler = $client->request('GET', 'https://www.bgmea.com.bd/member/' . $id);
        //     $crl = $crawler->filter('table > tbody > tr > td > table > tbody > tr > td');
        //     $crlcompany = $crawler->filter('table > thead > tr > th > strong');
        //     $crlbgmea = $crawler->filter('table > tbody > tr > td');
        //     $scraper = new Scraper();
        //     $scraper->Position = $crl->getNode(0)->textContent; // Position
        //     $scraper->Name = $crl->getNode(1)->textContent; // Name
        //     $scraper->Mobile = $crl->getNode(2)->textContent; //Phone
        //     $scraper->Email = $crl->getNode(3)->textContent; // Email
        //     $scraper->CompanyName = $crlcompany->getNode(0)->textContent; // Company
        //     $scraper->BGMEARegNo = $crlbgmea->getNode(0)->textContent; // BGMEA Reg No
        //     $scraper->EPBRegNo = $crlbgmea->getNode(1)->textContent; // EPB Reg No
        //     $scraper->save();
        //     echo "Done Member ID is ".$id."<br>"; // Front end log
        // }
        

        // FOR BKMEA
        for ($id = 1; $id <= 10; $id++) {
            $response = Http::get('https://new.bkmea.com/wp-admin/admin-ajax.php?action=bkmea_get_company&id=' . $id);
            echo $response->getStatusCode();
            //echo $response->json(); 
            $data = json_decode($response->getBody(), true);

            scraper::create($data);


            
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param Scraper $scraper
     * @return Response
     */
    public function show(Scraper $scraper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Scraper $scraper
     * @return Response
     */
    public function edit(Scraper $scraper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Scraper $scraper
     * @return Response
     */
    public function update(Request $request, Scraper $scraper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Scraper $scraper
     * @return Response
     */
    public function destroy(Scraper $scraper)
    {
        //
    }
}
