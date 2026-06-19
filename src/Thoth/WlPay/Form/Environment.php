<?php
namespace WlSdk\Thoth\WlPay\Form;

use WlSdk\WlSdkClient;

/**
 * Returns information about payment environment.
 */
class Environment
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
     * @deprecated
     *
     * @return EnvironmentGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EnvironmentGetRequest $request): EnvironmentGetResponse
    {
        return new EnvironmentGetResponse($this->client->request('/Thoth/WlPay/Form/Environment.json', $request->params(), 'GET'));
    }
}
