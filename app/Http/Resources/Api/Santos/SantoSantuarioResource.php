<?php

namespace App\Http\Resources\Api\Santos;

use Illuminate\Http\Resources\Json\JsonResource;

class SantoSantuarioResource extends JsonResource
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
            'name' => $this->name,
            'date_fundada' => $this->date_fundada,
            'history' => $this->history,
        ];

    }
}
