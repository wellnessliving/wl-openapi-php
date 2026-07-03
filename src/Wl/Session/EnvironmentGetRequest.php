<?php

namespace WlSdk\Wl\Session;

class EnvironmentGetRequest
{
    /**
     * Application ID.
     *
     * @var string|null
     */
    public ?string $s_application_id = null;

    public function params(): array
    {
        return array_filter(
            [
            's_application_id' => $this->s_application_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
