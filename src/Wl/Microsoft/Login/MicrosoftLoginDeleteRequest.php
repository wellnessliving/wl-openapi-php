<?php
namespace WlSdk\Wl\Microsoft\Login;

class MicrosoftLoginDeleteRequest
{
    /**
     * The client for whom the Microsoft account will be unlinked.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
