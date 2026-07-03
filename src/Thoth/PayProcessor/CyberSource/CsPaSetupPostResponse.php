<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

/**
 * Response from POST
 */
class CsPaSetupPostResponse
{
    /**
     * Key of payment transaction that was created.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * JWT token, as returned by Cyber Source.
     *
     * @var string|null
     */
    public ?string $s_jwt = null;

    /**
     * Reference ID, as returned by Cyber Source.
     *
     * @var string|null
     */
    public ?string $s_reference = null;

    /**
     * Device collection URL, as returned by Cyber Source.
     *
     * @var string|null
     */
    public ?string $url_collection = null;

    public function __construct(array $data)
    {
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
        $this->s_jwt = isset($data['s_jwt']) ? (string)$data['s_jwt'] : null;
        $this->s_reference = isset($data['s_reference']) ? (string)$data['s_reference'] : null;
        $this->url_collection = isset($data['url_collection']) ? (string)$data['url_collection'] : null;
    }
}
