<?php

namespace WlSdk\Wl\Classes\Info;

class InfoGetRequest
{
    /**
     * Key of the business in which the class resides.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class identifier to get information for.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            ],
            static fn ($v) => $v !== null
        );
    }
}
