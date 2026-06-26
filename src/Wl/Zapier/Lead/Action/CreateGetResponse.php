<?php

namespace WlSdk\Wl\Zapier\Lead\Action;

/**
 * Response from GET
 */
class CreateGetResponse
{
    /**
     * Date of birth of the lead.
     *
     * @var string|null
     */
    public ?string $dl_birth = null;

    /**
     * Home address of the lead.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Email name of the lead.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * First name of the lead.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * Last name of the lead.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * Phone number of the lead.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function __construct(array $data)
    {
        $this->dl_birth = isset($data['dl_birth']) ? (string)$data['dl_birth'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
    }
}
