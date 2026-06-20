<?php
namespace WlSdk\Wl\Member\Progress\Log\Compare;

class CompareGetRequest
{
    /**
     * Key of business to get information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key to search dates for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
