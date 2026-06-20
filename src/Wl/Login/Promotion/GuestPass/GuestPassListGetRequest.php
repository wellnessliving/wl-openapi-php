<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass;

class GuestPassListGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class key to filter guest passes by.
     * 
     * `null` if guest passes should not be filtered by class.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Location key to filter guest passes by.
     * 
     * `null` if guest passes should not be filtered by location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
