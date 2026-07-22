<?php

namespace WlSdk\Wl\Pay\Form;

class EnvironmentGetResponsePayProcessorPublicInfo
{
    /**
     * Merchant site identifier assigned by Nuvei.
     *
     * @var string|null
     */
    public ?string $s_merchant_site = null;

    /**
     * Nuvei merchant identifier.
     *
     * @var string|null
     */
    public ?string $s_nuvei_id = null;

    public function __construct(array $data)
    {
        $this->s_merchant_site = isset($data['s_merchant_site']) ? (string)$data['s_merchant_site'] : null;
        $this->s_nuvei_id = isset($data['s_nuvei_id']) ? (string)$data['s_nuvei_id'] : null;
    }
}
