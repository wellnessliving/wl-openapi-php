<?php
namespace WlSdk\Thoth\WlPay\Form;

use WlSdk\WlSdkClient;

/**
 * Returns information about payment environment.
 */
class EnvironmentUser
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about payment environment.
     *
     * @return EnvironmentUserGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EnvironmentUserGetRequest $request): EnvironmentUserGetResponse
    {
        return new EnvironmentUserGetResponse($this->client->request('/Thoth/WlPay/Form/EnvironmentUser.json', $request->params(), 'GET'));
    }
}
