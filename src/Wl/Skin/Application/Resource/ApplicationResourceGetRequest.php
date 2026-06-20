<?php
namespace WlSdk\Wl\Skin\Application\Resource;

class ApplicationResourceGetRequest
{
    /**
     * The business key.
     * Empty to get data for all businesses.
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
