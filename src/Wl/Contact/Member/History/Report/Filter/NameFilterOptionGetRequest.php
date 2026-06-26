<?php

namespace WlSdk\Wl\Contact\Member\History\Report\Filter;

class NameFilterOptionGetRequest
{
    /**
     * Contact methods selected in filter.
     * Values are one of {@link \WlSdk\Wl\Contact\ContactSid} constants.
     *
     * @var int[]|null
     */
    public ?array $a_contact_method = null;

    /**
     * Mail types selected in filter.
     * Values are one of {@link \WlSdk\RsMailSid} constants.
     *
     * @var int[]|null
     */
    public ?array $a_mail_type = null;

    /**
     * SMS direction filter values.
     * Values are one of {@link \WlSdk\Core\Sid\YesNoSid} constants.
     *
     * @var int[]|null
     */
    public ?array $a_sms_channel = null;

    /**
     * End date in local format.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date in local format.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Report kind for which options should be loaded.
     *
     * Available values: `contact`, `mail`, `sms`.
     *
     * @var string|null
     */
    public ?string $sid_report = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_contact_method' => $this->a_contact_method,
            'a_mail_type' => $this->a_mail_type,
            'a_sms_channel' => $this->a_sms_channel,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'k_business' => $this->k_business,
            'sid_report' => $this->sid_report,
            ],
            static fn ($v) => $v !== null
        );
    }
}
