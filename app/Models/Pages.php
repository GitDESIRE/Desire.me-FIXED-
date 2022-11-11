<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

/**
 * App\Models\Pages
 *
 * @property int $id
 * @property string $name Название страницы
 * @property string $URL
 * @property string $Path
 * @method static \Illuminate\Database\Eloquent\Builder|Pages defaultSort(string $column, string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Pages filters(?mixed $kit = null, ?\Orchid\Filters\HttpFilter $httpFilter = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Pages filtersApply(iterable $filters = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pages filtersApplySelection($class)
 * @method static \Illuminate\Database\Eloquent\Builder|Pages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pages query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pages whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pages wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pages whereURL($value)
 * @mixin \Eloquent
 */
class Pages extends Model
{
    use Filterable;
    use HasFactory;
    use AsSource;

}
