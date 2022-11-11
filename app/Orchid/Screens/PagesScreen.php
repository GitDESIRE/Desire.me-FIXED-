<?php

namespace App\Orchid\Screens;

use App\Models\Pages;
use http\Client;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Code;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class PagesScreen extends Screen
{
    public $description = 'Список страниц';
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'Pages'=>Pages::all()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Страницы';
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return iterable
     */
    public function layout(): iterable
    {
        return [
                Layout::table('Pages', [
                    TD::make('name', 'Название страницы'),
                    TD::make('URL', 'Адрес страницы'),
                    TD::make('Path', 'Путь к файлу'),
                    TD::make('action')->render(function (Pages $page) {
                        return Button::make('Редактировать')
                            ->method('update')->parameters([
                                'page'=>$page->id
                            ]);
                    })
                ])
            ];
    }

    public function update(Pages $page): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('platform.edit.index', ["id"=>$page]);
    }

}
