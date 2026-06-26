<?php

namespace WlSdk\Wl\Business\Sms\Chat\Staff;

class SmsChatStaffAssignListGetRequest
{
    /**
     * Status of the dialog. One of {@link \WlSdk\Wl\Business\Sms\Chat\Dialog\DialogStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Sms\Chat\Dialog\DialogStatusSid
     */
    public ?int $id_dialog_status = null;

    /**
     * Business key.
     * Primary key in RsBusinessSql table.
     * `null` if not specified, will throw an exception.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_dialog_status' => $this->id_dialog_status,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
