<?php
namespace WlSdk\Wl\Business\Design;

class BusinessDesignGetRequest
{
    /**
     * Business key to get design data.
     * 
     * May be `null`. In this case default business design data is returned.
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
