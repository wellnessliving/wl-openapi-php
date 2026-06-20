<?php

namespace WlSdk\Wl\Business\Select;

class BusinessSelectGetResponseSelectBusiness
{
    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The name of the business.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * This will be true for the current business.
     *
     * @var bool|null
     */
    public ?bool $selected = null;

    public function __construct(array $data)
    {
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->selected = isset($data['selected']) ? (bool)$data['selected'] : null;
    }
}
