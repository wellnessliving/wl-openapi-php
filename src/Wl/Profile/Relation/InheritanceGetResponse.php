<?php

namespace WlSdk\Wl\Profile\Relation;

/**
 * Response from GET
 */
class InheritanceGetResponse
{
    /**
     * Text representation of relative's address.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Text representation of relative's cell phone number.
     *
     * @var string|null
     */
    public ?string $text_cell_phone = null;

    /**
     * Text representation of relative's city.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * Text representation of relative's city's key for combobox.
     *
     * @var string|null
     */
    public ?string $text_city_key = null;

    /**
     * Text representation of relative's home phone number.
     *
     * @var string|null
     */
    public ?string $text_home_phone = null;

    /**
     * Text representation of relative's email address.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Text representation of relative's postal code.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * Text representation of relative's work phone number.
     *
     * @var string|null
     */
    public ?string $text_work_phone = null;

    public function __construct(array $data)
    {
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_cell_phone = isset($data['text_cell_phone']) ? (string)$data['text_cell_phone'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
        $this->text_city_key = isset($data['text_city_key']) ? (string)$data['text_city_key'] : null;
        $this->text_home_phone = isset($data['text_home_phone']) ? (string)$data['text_home_phone'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->text_work_phone = isset($data['text_work_phone']) ? (string)$data['text_work_phone'] : null;
    }
}
