<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'product_name'=>$this->name,
            'category_name'=>$this->catname->name,
            'price'=>$this->price,
            'price_with_currency'=>"$ ".$this->price,
        ];
    }
}
