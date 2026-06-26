<?php

namespace WlSdk\Core\Passport\Login\Register;

class RegisterFieldGetRequest
{
    /**
     * The application ID.
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
