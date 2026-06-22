<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

class PatternGetRequest
{
    /**
     * ID of the notification. One of {@link \WlSdk\RsMailSid} constants. `0` for empty template.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * Whether to get a list of custom template data. `true` - to get a list, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_custom_list = null;

    /**
     * Business key.
     * `null` to use the system business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Mail pattern key.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

    /**
     * SID of the mail form. String representation of one from {@link \WlSdk\RsMailFormSid} class constants.
     *
     * @var string|null
     */
    public ?string $sid_mail_form = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail' => $this->id_mail,
            'is_custom_list' => $this->is_custom_list,
            'k_business' => $this->k_business,
            'k_mail_pattern' => $this->k_mail_pattern,
            'sid_mail_form' => $this->sid_mail_form,
            ],
            static fn ($v) => $v !== null
        );
    }
}
