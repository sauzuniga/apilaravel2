<?php

namespace App\Http\Resources\v2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{

    // Para mostrar los elementos como elementos individuales
    public $collects = PostResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'data'=>$this->collection,
            'meta'=>[
                'organization'=>'UGB',
                'author'=>'Programacion IV',
            ],
            'type'=>'articles'
        ];
    }
}
