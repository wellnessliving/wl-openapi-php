<?php

namespace WlSdk\Wl\Profile\Contract\ContractAll;

class ContractAllGetResponseContract
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
     * Purchase item title.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * IP address from which agreement was done.
     *
     * @var string|null
     */
    public ?string $ip_agree = null;

    /**
     * Purchase item primary key in RsPurchaseItemSql table.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * Purchase item title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

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
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->ip_agree = isset($data['ip_agree']) ? (string)$data['ip_agree'] : null;
        $this->k_purchase_item = isset($data['k_purchase_item']) ? (string)$data['k_purchase_item'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_signature = isset($data['url_signature']) ? (string)$data['url_signature'] : null;
    }
}
