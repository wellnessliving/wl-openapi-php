<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

class PatternPostRequest
{
    /**
     * ID of the notification. One of {@link \WlSdk\RsMailSid} constants. `0` for empty template.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

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
     * Mail pattern data to save.
     *
     * @var array|null
     */
    public ?array $a_pattern_save = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail' => $this->id_mail,
            'k_business' => $this->k_business,
            'k_mail_pattern' => $this->k_mail_pattern,
            'a_pattern_save' => $this->a_pattern_save,
            ],
            static fn ($v) => $v !== null
        );
    }
}
