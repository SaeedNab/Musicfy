<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SongResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'url'=>$this->url,
            'iamge'=>$this->image,
            'time'=>$this->time,
            'album'=>$this->album,
            'artist'=>$this->artists
        ];
    }
}
