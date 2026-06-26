<?php

namespace WlSdk\Wl\Service\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns list of promotions that can be used to pay for the service.
 */
class ServicePromotion
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of promotions that can be used to pay for the service.
     *
     * @return ServicePromotionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServicePromotionGetRequest $request): ServicePromotionGetResponse
    {
        return new ServicePromotionGetResponse($this->client->request('/Wl/Service/Promotion/ServicePromotion.json', $request->params(), 'GET'));
    }
}
