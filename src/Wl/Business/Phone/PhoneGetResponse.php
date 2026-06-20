<?php
namespace WlSdk\Wl\Business\Phone;

/**
 * Response from GET
 */
class PhoneGetResponse
{
    /**
     * Locale corresponding to the business' address country. One of {@link \WlSdk\Core\Locale\LocaleSid}
     * constants.
     * Note that this may not be the same as the business' locale, if the business is misconfigured and has an
     * address
     * country that is outside its locale.
     *
     * @var \WlSdk\Core\Locale\LocaleSid|null
     */
    public ?\WlSdk\Core\Locale\LocaleSid $id_locale = null;

    /**
     * Business phone number(in locale format).
     * Used to receive SMS notifications from clients. Can be `null` during bundle SID saving.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Business phone number mask.
     *
     * @var string|null
     */
    public ?string $text_phone_mask = null;

    public function __construct(array $data)
    {
        $this->id_locale = isset($data['id_locale']) ? \WlSdk\Core\Locale\LocaleSid::tryFrom((int)$data['id_locale']) : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_phone_mask = isset($data['text_phone_mask']) ? (string)$data['text_phone_mask'] : null;
    }
}
