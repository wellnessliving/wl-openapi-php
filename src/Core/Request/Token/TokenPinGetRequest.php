<?php
namespace WlSdk\Core\Request\Token;

class TokenPinGetRequest
{
    /**
     * The ID to use to send a security code via a push notification.
     *
     * @var string|null
     */
    public ?string $text_push = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_push' => $this->text_push,
            ],
            static fn($v) => $v !== null
        );
    }
}
