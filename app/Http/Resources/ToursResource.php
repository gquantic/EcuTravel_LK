<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ToursResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,

            'route_number' => $this->route_number,
            'route_depart_station' => $this->route_depart_station,
            'route_arrival_station'=> $this->route_arrival_station,
            'route_departure_address' => $this->route_departure_address,
            'route_arrival_address' => $this->route_arrival_address,

            'vehicle' => $this->vehicle,
            'vehicle_type ' => $this->vehicle_type,
            'vehicle_model_vehicle' => $this->vehicle_model_vehicle,
            'vehicle_gus_number_vehicle' => $this->vehicle_gus_number_vehicle,

            'driver' => $this->driver,
            'driver_2' => $this->driver_2,

            'depart_time' => $this->depart_time,
            'arrival_time' => $this->arrival_time,
            'departure_date' => $this->departure_date,
            'arrival_date' => $this->arrival_date,
            'condition_tours' => $this->condition_tours,
        ];
    }
}
