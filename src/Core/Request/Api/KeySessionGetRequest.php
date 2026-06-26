<?php

namespace WlSdk\Core\Request\Api;

class KeySessionGetRequest
{
    /**
     * Application ID.
     *
     * @var string|null
     */
    public ?string $s_application = null;

    /**
     * CSRF code.
     *
     * @var string|null
     */
    public ?string $s_csrf = null;

    public function params(): array
    {
        return array_filter(
            [
            's_application' => $this->s_application,
            's_csrf' => $this->s_csrf,
            ],
            static fn ($v) => $v !== null
        );
    }
}
