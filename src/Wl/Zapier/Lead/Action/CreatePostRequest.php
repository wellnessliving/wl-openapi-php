<?php

namespace WlSdk\Wl\Zapier\Lead\Action;

class CreatePostRequest
{
    /**
     * Business key for which trigger/action is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Date of birth of the lead.
     *
     * @var string|null
     */
    public ?string $dl_birth = null;

    /**
     * Key of the lead source.
     *
     * If `null` than {@link \WlSdk\Wl\Mode\ModeSid} lead source will be used.
     * `LEAD_SOURCE_REPLACE_NONE` if Lead Source is
     * to be unselected for the user.
     *
     * @var string|null
     */
    public ?string $k_lead_source = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'dl_birth' => $this->dl_birth,
            'k_lead_source' => $this->k_lead_source,
            'text_address' => $this->text_address,
            'text_mail' => $this->text_mail,
            'text_name_first' => $this->text_name_first,
            'text_name_last' => $this->text_name_last,
            'text_phone' => $this->text_phone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
