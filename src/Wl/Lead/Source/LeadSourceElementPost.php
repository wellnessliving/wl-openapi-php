<?php
namespace WlSdk\Wl\Lead\Source;

use WlSdk\WlSdkClient;

/**
 * Creates or edits a custom source lead.
 *
 * @deprecated
 */
class LeadSourceElementPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates or edits a custom source lead.
     *
     * Accepts a list of lead source records and applies bulk create or update operations: new entries without a
     * key are inserted, and existing entries are updated with a new sort order or title.
     *
     * @return LeadSourceElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadSourceElementPostRequest $request): LeadSourceElementPostResponse
    {
        return new LeadSourceElementPostResponse($this->client->request('/Wl/Lead/Source/LeadSourceElement.json', $request->params(), 'POST'));
    }
}
