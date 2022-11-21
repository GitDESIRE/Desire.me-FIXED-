<?php

namespace App\Console\Commands;

use DateTime;
use Illuminate\Console\Command;
use Watson\Active\Route;

class generateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @throws \Exception
     */
    public function handle()
    {
        $defaultdate = new DateTime('2018-01-01 10:01:01');

        $site_url = env('APP_URL');
        $base =
            '<?xml version="1.0" encoding="UTF-8"?>
            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
            </urlset>';

        $xmlbase = new \SimpleXMLElement($base);

        $routes = ['privacy.polity', 'index', 'service.web', 'service.promotion',
            'service.rate', 'service.star', 'service.arrow', 'portfolio', 'portfolio.dolfie',
            'portfolio.nike', 'portfolio.noiseland', 'portfolio.tocha', 'about', 'new'];
       /* $row  = $xmlbase->addChild("url");
        $row->addChild("loc",$site_url);
        $row->addChild("lastmod",date("c"));
        $row->addChild("changefreq","monthly");
        $row->addChild("priority","1");

        $row  = $xmlbase->addChild("url");
        $row->addChild("loc",route('page_about'));
        $row->addChild("lastmod",$defaultdate->format("Y-m-d\TH:i:sP"));
        $row->addChild("changefreq","monthly");
        $row->addChild("priority","1");*/

        foreach ($routes as $route) {
            $this->addUrl($route, $defaultdate, $xmlbase);
        }

        $xmlbase->saveXML(public_path()."/sitemap.xml");
    }

    private function addUrl($urlName, $date, $xml)
    {
        $row  = $xml->addChild("url");
        $row->addChild("loc",route($urlName));
        $row->addChild("lastmod",$date->format("Y-m-d\TH:i:sP"));
        $row->addChild("changefreq","monthly");
        $row->addChild("priority","1");
    }
}
