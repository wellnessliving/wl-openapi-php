<?php

namespace WlSdk\Wl\Event;

class EventListGetResponseEventListLogoC
{
    /**
     * `true` if a placeholder is shown instead of an actual logo.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * `true` if the logo belongs to this class, `false` if inherited from the location,
     * `null` if the image is empty.
     *
     * @var bool|null
     */
    public ?bool $is_own = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    public function __construct(array $data)
    {
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->is_own = isset($data['is_own']) ? (bool)$data['is_own'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
    }
}
