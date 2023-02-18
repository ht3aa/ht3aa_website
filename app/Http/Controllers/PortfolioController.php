<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $certificates = [
        [
            "A certificate of appreciation1" => "js_first_steps_iraqi.jpg",
            "Certificate of completion1" =>
                "شهادة_الثانية_للدورة_مال_مبادرة-1.jpg",
            "Certificate of completion2" => "udemy_colt-steel-1.jpg",
        ],
        [
            "A certificate of appreciation2" => "المهندس_حسن_تحسين_2-1.jpg",
            "A certificate of appreciation3" => "speakers_Certificate_2.jpg",
            "Certificate of completion3" => "شهادة_IBM_CAD101EN _ edX-1.jpg",
        ],
        [
            "A certificate of appreciation5" => "حسن_تحسين_عبدالرضا-1.jpg",
            "A certificate of appreciation6" => "speakers_Certificate.jpg",
            "A certificate of appreciation7" => "من_برنامج_دعم_الشباب.jpg",
        ],
    ];

    public function __invoke()
    {
        return view("pages.portfolio", ["certificates" => $this->certificates]);
    }
}
