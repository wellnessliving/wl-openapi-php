<?php
namespace WlSdk\Wl\Sms\Phone;

/**
 * Response from GET
 */
class BusinessPhoneGetResponse
{
    /**
     * Phone number of the business, which is added as sender for 2-Way SMS feature.
     * 
     * `null` or an empty value if this business does not use this feature.
     *
     * @var string|null
     */
    public ?string $text_phone_sender = null;

    public function __construct(array $data)
    {
        $this->text_phone_sender = isset($data['text_phone_sender']) ? (string)$data['text_phone_sender'] : null;
    }
}
