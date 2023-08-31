<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Auth;

class LeaveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'total_day' => $this->total_day,
            'reason' => $this->reason,
            'status' => $this->status,
            'user_id' => $this->user_id,
        ];
    }
}
