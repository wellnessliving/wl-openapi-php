<?php
namespace WlSdk\Wl\Reward\Prize;

class PrizeGetRequest
{
    /**
     * Key of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
