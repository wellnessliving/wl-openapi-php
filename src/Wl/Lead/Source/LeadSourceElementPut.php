<?php
namespace WlSdk\Wl\Lead\Source;

use WlSdk\WlSdkClient;

/**
 * Adds one lead source.
 */
class LeadSourceElementPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds one lead source.
     *
     * Creates a single new custom lead source with the given title for the specified business, assigns it the
     * next available sort position, and returns the generated lead source key.
     *
     * @return LeadSourceElementPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(LeadSourceElementPutRequest $request): LeadSourceElementPutResponse
    {
        return new LeadSourceElementPutResponse($this->client->request('/Wl/Lead/Source/LeadSourceElement.json', $request->params(), 'PUT'));
    }
}
