<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'products',
            'id' => (string) $this->resource->getRouteKey(),
            'attributes' => [
                'name' => $this->resource->name,
                'description' => $this->resource->description,
                'category_id' => $this->resource->category_id,
                'brand_id' => $this->resource->brand_id,
            ],
            'links' => [
                'self' => route('products.show', $this->resource)
            ]
        ];
    }
}
