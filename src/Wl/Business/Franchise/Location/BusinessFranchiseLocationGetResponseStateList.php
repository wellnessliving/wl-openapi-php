<?php
namespace WlSdk\Wl\Business\Franchise\Location;

class BusinessFranchiseLocationGetResponseStateList
{
    /**
     * Country key.
     *
     * @var string|null
     */
    public ?string $k_country = null;

    /**
     * State key.
     *
     * @var string|null
     */
    public ?string $k_state = null;

    /**
     * State title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_country = isset($data['k_country']) ? (string)$data['k_country'] : null;
        $this->k_state = isset($data['k_state']) ? (string)$data['k_state'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
