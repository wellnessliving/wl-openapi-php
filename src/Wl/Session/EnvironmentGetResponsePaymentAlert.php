<?php

namespace WlSdk\Wl\Session;

class EnvironmentGetResponsePaymentAlert
{
    /**
     * Time left in seconds. `null` if business account is not created
     * or if service interruption dates aren't specified.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Determines whether to show an alert. Alert should be shown only once per session.
     *
     * @var bool|null
     */
    public ?bool $is_alert = null;

    /**
     * Determines whether the business is churned.
     *
     * @var bool|null
     */
    public ?bool $is_churn = null;

    /**
     * Link to business billing page on the web.
     *
     * @var string|null
     */
    public ?string $url_billing = null;

    public function __construct(array $data)
    {
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->is_alert = isset($data['is_alert']) ? (bool)$data['is_alert'] : null;
        $this->is_churn = isset($data['is_churn']) ? (bool)$data['is_churn'] : null;
        $this->url_billing = isset($data['url_billing']) ? (string)$data['url_billing'] : null;
    }
}
