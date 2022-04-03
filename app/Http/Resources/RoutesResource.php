<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoutesResource extends JsonResource
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
            'id' => $this->id,

            'number_routes' => $this->number_routes,
            'route_type' => $this->route_type,
            'depart_station' => $this->depart_station,
            'departure_address' => $this->departure_address,
            'arrival_station' => $this->arrival_station,
            'arrival_address' => $this->arrival_address,
            'basic_price' => $this->basic_price,
            'child_price' => $this->child_price,
            'bag_price' => $this->bag_price,
        ];
    }
}
