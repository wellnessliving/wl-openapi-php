<?php
namespace WlSdk\Wl\Reward\Score\Current;

class CurrentGetRequest
{
    /**
     * ID of a business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID to retrieve information about.
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
