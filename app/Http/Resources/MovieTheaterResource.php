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
            'Movie_ID' => $this->id,
            'Title' => $this->TotalMovieRating(),
            'Theater_name' =>  $this->Theater_name,
            'Start_time' => $this->Start_time,
            'End_time' => $this->End_time,
            'Description' => $this->Description,
            'Theater_room_no' => $this->Theater_room_no,
        ];
    }
}
