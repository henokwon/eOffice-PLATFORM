<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

// This is use full for transformation( various form of data)

class CustomerFormResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
