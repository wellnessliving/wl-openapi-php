<?php

namespace WlSdk\Wl\Pay\Form;

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
     * Called before rendering a payment form to determine which payment methods and card types are available
     * for a given business and location, what surcharges apply, and how the form should behave (tip prompt,
     * optional card save). This endpoint is deprecated; use {@link \WlSdk\Thoth\WlPay\Form\EnvironmentUser}
     *  for new integrations.
     *
     * @deprecated Use {@link \Thoth\WlPay\Form\EnvironmentUserApi} instead.
     *
     * @return EnvironmentGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EnvironmentGetRequest $request): EnvironmentGetResponse
    {
        return new EnvironmentGetResponse($this->client->request('/Wl/Pay/Form/Environment.json', $request->params(), 'GET'));
    }
}
