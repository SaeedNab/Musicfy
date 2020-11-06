<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Morilog\Jalali\Jalalian;

class AlbumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'url' => $this->url,
            'image' => $this->image,
            'tracks' => $this->tracks,
            'songs' => $this->songs,
            'artists' => $this->artists,
            'created_at' => Jalalian::fromCarbon($this->created_at)->format('y/m/d')
        ];
    }
}
