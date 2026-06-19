<?php
namespace WlSdk\Thoth\WlPay\Method;

use WlSdk\WlSdkClient;

/**
 * Returns list of active payment methods data.
 */
class ListApi
{
    /**
     * Whether only active payment methods should be returned.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Whether payment method [RsPayMethodSid::ACCOUNT_MANUAL](#/components/schemas/RsPayMethodSid) should be
     * included in response.
     *
     * @var bool|null
     */
    public ?bool $show_manual = null;

    /**
     * The key of a user to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of active payment methods data.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Thoth/WlPay/Method/List.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_active' => $this->is_active,
            'k_business' => $this->k_business,
            'show_manual' => $this->show_manual,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
