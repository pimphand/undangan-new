<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Str;

class CommentResource extends JsonResource
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
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama),
            'komentar' => $this->komentar,
        ];
    }
}
