<?php
namespace WlSdk\Wl\Integration\Curves;

class CurvesFranchiseLocationGetResponseCountryList
{
    /**
     * Country key.
     *
     * @var string|null
     */
    public ?string $k_country = null;

    /**
     * Country title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_country = isset($data['k_country']) ? (string)$data['k_country'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
