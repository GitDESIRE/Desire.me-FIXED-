<?php

namespace App\Console\Commands;

use DateTime;
use Illuminate\Console\Command;

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
//дефолтная дата, к примеру создания сайта. Используется там,
//где нужно указать дату для страниц не сохраненных в базе данных
        $defaultdate = new DateTime('2018-01-01 10:01:01');
//берем базовый урл сайта
        $site_url = env('APP_URL');
//это шаблон файла XML для сайтмапа, здесь не нужно ничего менять
        $base = '<?xml version="1.0" encoding="UTF-8"?>
            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
            </urlset>';
//создаем корневой элемент, в который будут добавлены все остальные
        $xmlbase = new \SimpleXMLElement($base);
//создаем первый элемент, с ссылкой на главную страницу
        $row = $xmlbase->addChild("url");
        $row->addChild("loc", $site_url);
//параметр lastmod - последнее обновление вашей страницы.
//дата последней модификации задана временем генерации файла
//учитывайте формат времени здесь должен быть конкретный Y-m-d\TH:i:sP , в противном случае
//получите ошибку валидности файла
        //после того как создали карту сайта, ее нужно записать в файл
        $xmlbase->saveXML(public_path() . "/sitemap.xml");
    }
}
