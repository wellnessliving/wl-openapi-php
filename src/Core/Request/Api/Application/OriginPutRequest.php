<?php

namespace WlSdk\Core\Request\Api\Application;

class OriginPutRequest
{
    /**
     * A list of origins.
     *
     * An associative array where the key is the origin URL of the site where API calls can be made,
     *  and the value is the additional API domain used to make API requests to the WellnessLiving server.
     * `null` if not yet initialized.
     *
     * @var string[]|null
     */
    public ?array $a_list = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_list' => $this->a_list,
            ],
            static fn ($v) => $v !== null
        );
    }
}
