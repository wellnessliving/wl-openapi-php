<?php
namespace WlSdk\Social\Apple\Login;

class AppleLoginDeleteRequest
{
    /**
     * The application ID.
     *
     * @var string|null
     */
    public ?string $text_application = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_application' => $this->text_application,
            ],
            static fn($v) => $v !== null
        );
    }
}
