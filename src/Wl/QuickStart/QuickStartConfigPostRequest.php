<?php

namespace WlSdk\Wl\QuickStart;

class QuickStartConfigPostRequest
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

    /**
     * Last configuration for the quick start state.
     *
     * `null` if not initialized yet. `array` for compatibility with JavaScript.
     *
     *  Has the following structure:
     *
     * @var array|null
     */
    public ?array $a_config = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid' => $this->cid,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_config' => $this->a_config,
            ],
            static fn ($v) => $v !== null
        );
    }
}
