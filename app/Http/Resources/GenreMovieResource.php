<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GenreMovieResource extends JsonResource
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
            'Movie_ID' => $this->id,
            'Title' => $this->title,
            'Genre' =>  $this->genres->pluck('name')->implode(', '),
            'Description' => $this->description,
        ];
    }
}
