<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'collection-data' => [
                'id' => 'SKU678743',
                'link' => 'http://127.0.0.1:8000/product/create',
                // 'link' => 'http://localhost/laravelcourse/public/product/create',
            ],
        ];
    }
}
