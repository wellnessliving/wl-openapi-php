<?php
namespace WlSdk\Thoth\WlPay\Form;

use WlSdk\WlSdkClient;

/**
 * Returns information about payment environment.
 */
class EnvironmentApi
{
    /**
     * The key of the business to retrieve payment information for.
     * 
     * This will be `0` if not set yet.
     * An empty string or `null` if payments are performed with the WellnessLiving system merchant.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the currency to retrieve payment information for.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * The key of the location to retrieve payment information for.
     * 
     * This will be `0` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user ID to retrieve payment information for. Primary key in the PassportLoginSql table.
     * 
     * `null` if not defined.
     *
     * @var string|null
     */
    public ?string $uid_owner = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about payment environment.
     *
     * @deprecated
     *
     * @return EnvironmentApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): EnvironmentApiGetResponse
    {
        return new EnvironmentApiGetResponse($this->client->request('/Thoth/WlPay/Form/Environment.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_currency' => $this->k_currency,
            'k_location' => $this->k_location,
            'uid_owner' => $this->uid_owner,
            ],
            static fn($v) => $v !== null
        );
    }
}
