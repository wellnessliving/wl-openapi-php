<?php

namespace WlSdk\Core\Spa\Application;

class SpaApplicationGetRequest
{
    /**
     * Unique ID of application.
     *
     * @var string|null
     */
    public ?string $s_application = null;

    public function params(): array
    {
        return array_filter(
            [
            's_application' => $this->s_application,
            ],
            static fn ($v) => $v !== null
        );
    }
}
