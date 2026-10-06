<?php

namespace WlSdk\Wl\Profile\Waiver;

class WaiverGetResponseWaiver
{
    /**
     * Agreement date in business timezone.
     *
     * @var string|null
     */
    public ?string $dt_agree_local = null;

    /**
     * Agreement date in UTC.
     *
     * @var string|null
     */
    public ?string $dt_agree_utc = null;

    /**
     * Contract text.
     *
     * @var string|null
     */
    public ?string $html_contract = null;

    /**
     * IP address from which agreement was done.
     *
     * @var string|null
     */
    public ?string $ip_agree = null;

    /**
     * URL to agreement signature.
     *
     * @var string|null
     */
    public ?string $url_signature = null;

    public function __construct(array $data)
    {
        $this->dt_agree_local = isset($data['dt_agree_local']) ? (string)$data['dt_agree_local'] : null;
        $this->dt_agree_utc = isset($data['dt_agree_utc']) ? (string)$data['dt_agree_utc'] : null;
        $this->html_contract = isset($data['html_contract']) ? (string)$data['html_contract'] : null;
        $this->ip_agree = isset($data['ip_agree']) ? (string)$data['ip_agree'] : null;
        $this->url_signature = isset($data['url_signature']) ? (string)$data['url_signature'] : null;
    }
}
