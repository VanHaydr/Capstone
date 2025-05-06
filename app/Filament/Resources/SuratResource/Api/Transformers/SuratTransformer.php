<?php
namespace App\Filament\Resources\SuratResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Surat;

/**
 * @property Surat $resource
 */
class SuratTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
