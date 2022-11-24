<?php

namespace App\Console\Commands;

use DateTime;
use Illuminate\Console\Command;
use SimpleXMLElement;
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

        $base =
            '<?xml version="1.0" encoding="UTF-8"?>
            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
            </urlset>';

        $xmlbase = new SimpleXMLElement($base);

        $routes = ['index', 'service.web', 'service.promotion',
            'service.rate', 'service.star', 'service.arrow', 'portfolio', 'portfolio.dolfie',
            'portfolio.nike', 'portfolio.noiseland', 'portfolio.tocha', 'about', 'new',
            'service.digital', 'service.influencer', 'portfolio.atlant'
        ];

        foreach ($routes as $route) {
            $this->addUrl($route, $defaultdate, $xmlbase);
        }

        $xmlbase->saveXML(public_path()."/sitemap.xml");
    }

    private function addUrl($urlName, $date, $xml)
    {
        $row  = $xml->addChild("url");
        $row->addChild("loc",route($urlName));
        $row->addChild("lastmod",date("c"));
        $row->addChild("changefreq","monthly");
        $row->addChild("priority","1");
    }
}
