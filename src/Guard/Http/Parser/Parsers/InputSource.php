<?php

namespace SMSkin\IdentityServiceClient\Guard\Http\Parser\Parsers;

use Illuminate\Http\Request;
use SMSkin\IdentityServiceClient\Guard\Contracts\Http\Parser;
use SMSkin\IdentityServiceClient\Guard\Http\Parser\Traits\KeyTrait;

class InputSource implements Parser
{
    use KeyTrait;

    public function parse(Request $request): ?string
    {
        return $request->input($this->key);
    }
}
