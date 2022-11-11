<?php

namespace App\Orchid\Screens\Editors;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Watson\Active\Route;

class FileScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Файловый менеджер';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            /*Layout::rows([
                Button::make('Открыть файловый менджер')
                    ->method('OpenFileManager')
            ])*/
            Layout::view('pages/file-manager')
        ];
    }

    public function OpenFileManager(): \Illuminate\Http\RedirectResponse
    {
        return redirect('/filemanager');
    }
}
