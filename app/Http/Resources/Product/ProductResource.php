<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Name'=>$this->name,
            'Description'=>$this->detail,
            'price'=>$this->price,
            'Stock'=>$this->stock==0 ? 'Stock out':$this->stock,
            'Discount'=>$this->discount,
            'totalPrice'=>round((1-($this->discount/100))*$this->price,2),
            'rating'=>$this->reviews->count()>0? round($this->reviews->sum('star')/$this->reviews->count(),2):'No Rating',
            'href'=>[
                'reviews'=>route('reviews.index',$this->id)
            ]

        ];
    }
}
