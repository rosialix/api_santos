<?php

namespace App\Http\Resources\Api\Santos;

use App\Models\Santos\SantoPensamiento;
use Illuminate\Http\Resources\Json\JsonResource;

class SantoSantoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
          return [
            'id' => $this->id,
            'santo' => $this->santo_name,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'birth_date' => $this->birth_date,
            'birth_of_death' => $this->birth_of_death,
            'country' => $this->country,
            'location' => $this->location,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'biography' => $this->biography,
            'galeria' => $this->galeria,
            'santuario' => new SantoSantuarioResource($this->santoSantuario),
            'pensamientos' => SantoPensamientoResource::collection($this->whenLoaded('santoPensamientos')),
            'cronologias' => SantoCronologiaResource::collection($this->whenLoaded('santoCronologias')),
            'patronos' => SantoPatronoResource::collection($this->whenLoaded('santoPatronos')),

          ];
    }
}
