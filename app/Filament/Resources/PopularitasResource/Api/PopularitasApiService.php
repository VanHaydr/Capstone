<?php
namespace App\Filament\Resources\PopularitasResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\PopularitasResource;
use Illuminate\Routing\Router;


class PopularitasApiService extends ApiService
{
    protected static string | null $resource = PopularitasResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
