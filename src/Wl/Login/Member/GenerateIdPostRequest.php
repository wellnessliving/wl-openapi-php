<?php

namespace WlSdk\Wl\Login\Member;

class GenerateIdPostRequest
{
    /**
     * User's ids.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
