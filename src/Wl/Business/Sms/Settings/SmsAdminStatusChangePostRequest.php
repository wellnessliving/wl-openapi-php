<?php

namespace WlSdk\Wl\Business\Sms\Settings;

class SmsAdminStatusChangePostRequest
{
    /**
     * Business key, primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The new registration status to set.
     *
     * @var int|null
     */
    public ?int $id_registration_status = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'id_registration_status' => $this->id_registration_status,
            ],
            static fn ($v) => $v !== null
        );
    }
}
