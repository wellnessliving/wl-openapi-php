<?php

namespace WlSdk\Wl\Insurance\Catalog;

class ProgramListGetResponseWellnessProgram
{
    /**
     * The insurance key.
     *
     * @var string|null
     */
    public ?string $k_wellness_program = null;

    /**
     * The Purchase Option price.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The insurance organization name.
     *
     * @var string|null
     */
    public ?string $text_insurance_organization = null;

    /**
     * The insurance partner name.
     *
     * @var string|null
     */
    public ?string $text_partner = null;

    /**
     * The insurance name.
     *
     * @var string|null
     */
    public ?string $text_program = null;

    /**
     * The insurance organization URL.
     *
     * @var string|null
     */
    public ?string $url_insurance_detail = null;

    public function __construct(array $data)
    {
        $this->k_wellness_program = isset($data['k_wellness_program']) ? (string)$data['k_wellness_program'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_insurance_organization = isset($data['text_insurance_organization']) ? (string)$data['text_insurance_organization'] : null;
        $this->text_partner = isset($data['text_partner']) ? (string)$data['text_partner'] : null;
        $this->text_program = isset($data['text_program']) ? (string)$data['text_program'] : null;
        $this->url_insurance_detail = isset($data['url_insurance_detail']) ? (string)$data['url_insurance_detail'] : null;
    }
}
