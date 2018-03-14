<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
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
          'question' => $this->question->title,
          'reply_id' => $this->id,
          'body' => $this->body,
          'user' => $this->user->name
        ];
    }
}
