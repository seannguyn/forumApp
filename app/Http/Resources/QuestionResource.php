<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
          'title' => $this->title,
          'path' => $this->path,
          'user' => $this->user->name,
          'body' => $this->body,
          'created at' => $this->created_at->diffForHumans()
        ];
    }
}
