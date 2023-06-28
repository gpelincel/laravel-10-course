<?php

namespace App\DTO\Supports;

use App\ENUMs\SupportStatus;
use App\Http\Requests\StoreUpdateSupportRequest;

class UpdateSupportDTO{

    public function __construct(
        public string $id,
        public string $subject,
        public SupportStatus $status,
        public string $body,
    )
    {
        
    }

    public static function makeFromRequest(StoreUpdateSupportRequest $request){
        return new self (
            $request->id,
            $request->subject,
            SupportStatus::A,
            $request->body,
        );
    }
}