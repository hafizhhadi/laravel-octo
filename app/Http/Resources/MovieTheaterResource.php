<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieTheaterResource extends JsonResource
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
            'Movie_ID' => $this->movie_id,
            'Title' => $this->movie->title,
            'Theater_name' => $this->theater->name,
            'Start_time' => $this->start_date_time,
            'End_time' => $this->end_date_time,
            'Description' => $this->movie->description,
            'Theater_room_no' => $this->id,
        ];
    }
}
