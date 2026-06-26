<?php

namespace WlSdk\Wl\QuickStart;

class QuickStartConfigGetRequest
{
    /**
     * Quick Start class CID.
     *
     * @var int|null
     * @see \WlSdk\Wl\QuickStart\QuickStartAbstract
     */
    public ?int $cid = null;

    /**
     * Key of business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key to bind configuration to a specific user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid' => $this->cid,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
