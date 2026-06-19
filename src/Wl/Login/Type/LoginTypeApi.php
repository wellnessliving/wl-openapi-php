<?php
namespace WlSdk\Wl\Login\Type;

use WlSdk\WlSdkClient;

/**
 * Gets a login types list of a business.
 */
class LoginTypeApi
{
    /**
     * If `true`, this `k_business` is a franchisor, and login types of all franchisees should be returned.
     *
     * @var bool|null
     */
    public ?bool $is_franchisor = null;

    /**
     * The business key used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a login types list of a business.
     *
     * Returns all client types configured for the specified business, each with its key, title, client type ID,
     * and
     * a deprecated membership flag. If `is_franchisor` is `true`, returns the combined login types of all
     * franchisees
     * under the franchisor business.
     *
     * @return LoginTypeApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LoginTypeApiGetResponse
    {
        return new LoginTypeApiGetResponse($this->client->request('/Wl/Login/Type/LoginType.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_franchisor' => $this->is_franchisor,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
