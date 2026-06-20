<?php

namespace WlSdk\Wl\Lead\Source;

use WlSdk\WlSdkClient;

/**
 * Creates or edits a custom source lead.
 */
class LeadSourceElement
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
     * @deprecated Use {@link Wl\Lead\LeadPageApi::post()} instead. Will be removed after WL-89292 done.
     *
     * @return LeadSourceElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadSourceElementPostRequest $request): LeadSourceElementPostResponse
    {
        return new LeadSourceElementPostResponse($this->client->request('/Wl/Lead/Source/LeadSourceElement.json', $request->params(), 'POST'));
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
