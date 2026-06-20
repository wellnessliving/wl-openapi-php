<?php
namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about reward action item.
 */
class Element
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about reward action item.
     *
     * Returns the point value, score type, description, and whether the user has already submitted a points
     * request
     * for the specified reward action.
     *
     * @return ElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ElementGetRequest $request): ElementGetResponse
    {
        return new ElementGetResponse($this->client->request('/Wl/Reward/Action/Element.json', $request->params(), 'GET'));
    }

    /**
     * Requests points earning.
     *
     * Submits a custom reward points request for the specified action on behalf of the given user and records
     * the pending approval request.
     *
     * @return ElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ElementPostRequest $request): ElementPostResponse
    {
        return new ElementPostResponse($this->client->request('/Wl/Reward/Action/Element.json', $request->params(), 'POST'));
    }
}
