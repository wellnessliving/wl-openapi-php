<?php
namespace WlSdk\Wl\Business;

use WlSdk\WlSdkClient;

/**
 * Creates new business.
 */
class BusinessPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates new business.
     *
     * Used during the self-onboarding flow when a new client signs up for WellnessLiving. Creates the business
     * with its default integrations, optional first location, default service categories, and an optional owner
     * staff account - all in a single transaction. Rate-limited per IP and globally to prevent abuse.
     *
     * @return BusinessPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessPostRequest $request): BusinessPostResponse
    {
        return new BusinessPostResponse($this->client->request('/Wl/Business/Business.json', $request->params(), 'POST'));
    }
}
