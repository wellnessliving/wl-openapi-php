<?php
namespace WlSdk\Wl\Lead\Source;

use WlSdk\WlSdkClient;

/**
 * Deletes custom source lead.
 */
class LeadSourceElementDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes custom source lead.
     *
     * Removes the specified custom lead source from the business. If a replacement lead source key is provided,
     * all users currently assigned to the deleted source are reassigned to it before deletion.
     *
     * @return LeadSourceElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LeadSourceElementDeleteRequest $request): LeadSourceElementDeleteResponse
    {
        return new LeadSourceElementDeleteResponse($this->client->request('/Wl/Lead/Source/LeadSourceElement.json', $request->params(), 'DELETE'));
    }
}
