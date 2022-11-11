<?php

namespace App\Orchid\Screens\Editors;

use App\Models\Pages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\NoReturn;
use Orchid\Alert\Toast;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Screen;
use Orchid\Screen\Fields\Code;
use Orchid\Support\Facades\Layout;
use ReflectionException;
use Throwable;
use Illuminate\Http\Request;

class EditIndexScreen extends Screen
{
    public $page;

    /**
     * Query data.
     *
     * @return array
     */
    #[ArrayShape(['page' => "mixed", 'code' => "false|string"])]
    public function query(): iterable
    {
        return [
            'page'=>Pages::all()->find($_GET['id'])['Path'],
            'code'=>file_get_contents(resource_path('views') . Pages::all()->find($_GET['id'])['Path']),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->page;
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Сохранить изменения')
            ->method('update')
        ];
    }

    /**
     * Views.
     *
     * @return iterable
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('page'),
                SimpleMDE::make('code')
                    ->lang('html')
            ]),
        ];
    }

    /**
     * @throws Throwable
     */
    #[NoReturn] public function update(Request $request)
    {
        file_put_contents(resource_path('views') . $request['page'], $request['code']);
        \Orchid\Support\Facades\Toast::info('Успешно');
    }

}
