<?php

namespace WlSdk\Core\Amazon\Ses\Blacklist;

class BlacklistDeleteRequest
{
    /**
     * Email address.
     *
     * @var string|null
     */
    public ?string $s_mail = null;

    public function params(): array
    {
        return array_filter(
            [
            's_mail' => $this->s_mail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
