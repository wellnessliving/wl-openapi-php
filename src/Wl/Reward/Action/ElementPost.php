<?php
namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Requests points earning.
 */
class ElementPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
