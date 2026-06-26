<?php

namespace WlSdk\Wl\Login\Promotion\PayMethod;

use WlSdk\WlSdkClient;

/**
 * Changes login promotion automatic payment method.
 */
class AutopayMethod
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes login promotion automatic payment method.
     *
     * @return AutopayMethodPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AutopayMethodPutRequest $request): AutopayMethodPutResponse
    {
        return new AutopayMethodPutResponse($this->client->request('/Wl/Login/Promotion/PayMethod/AutopayMethod.json', $request->params(), 'PUT'));
    }
}
