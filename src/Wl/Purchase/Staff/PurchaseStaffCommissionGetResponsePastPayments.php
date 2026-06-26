<?php

namespace WlSdk\Wl\Purchase\Staff;

class PurchaseStaffCommissionGetResponsePastPayments
{
    /**
     * Number of auto-payments.
     *
     * @var int|null
     */
    public ?int $i_payment = null;

    /**
     * Url to the staff commission report. See {@link \WlSdk\RsReportSid}.Empty string if no payments.
     *
     * @var string|null
     */
    public ?string $url_report = null;

    public function __construct(array $data)
    {
        $this->i_payment = isset($data['i_payment']) ? (int)$data['i_payment'] : null;
        $this->url_report = isset($data['url_report']) ? (string)$data['url_report'] : null;
    }
}
