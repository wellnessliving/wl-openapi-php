<?php
namespace WlSdk\Wl\Business;

use WlSdk\WlSdkClient;

/**
 * Claims business.
 */
class BusinessPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Claims business.
     *
     * Used when a prospective client claims an existing unclaimed business record during onboarding.
     * Activates trial features, updates the location contact details, and optionally creates an owner
     * staff account. The business must not already be claimed and the location must belong to it.
     *
     * @return BusinessPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(BusinessPutRequest $request): BusinessPutResponse
    {
        return new BusinessPutResponse($this->client->request('/Wl/Business/Business.json', $request->params(), 'PUT'));
    }
}
