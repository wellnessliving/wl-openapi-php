<?php
namespace WlSdk\Thoth\WlPay\Owner;

use WlSdk\WlSdkClient;

/**
 * Returns information about payment owner.
 */
class OwnerApi
{
    /**
     * Business key.
     * 
     * `null` if not passed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of a user to show information for.
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
     * Returns information about payment owner.
     *
     * Must be called before initiating any payment on behalf of a user, to determine the correct payment
     * owner keys to pass to the payment form. Also indicates whether a family-account relationship exists
     * (for example, a parent paying for a child), which affects how the payment form is pre-populated.
     *
     * @return OwnerApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): OwnerApiGetResponse
    {
        return new OwnerApiGetResponse($this->client->request('/Thoth/WlPay/Owner/Owner.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
