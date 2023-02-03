<?php

namespace App\Http\Resources\projects;

use Illuminate\Http\Resources\Json\JsonResource;

class InnovProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
    [
        'title'=> $this->title,
        'year'=> $this->year,
        'type'=> $this->type,
        'category'=> $this->category,
        'institution'=> $this->institution,
        'isNominated'=> $this->isNominated ? 'Green': 'NO'
    ];
    }
}
