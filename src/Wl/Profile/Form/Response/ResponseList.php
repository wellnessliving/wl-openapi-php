<?php
namespace WlSdk\Wl\Profile\Form\Response;

use WlSdk\WlSdkClient;

/**
 * Returns the lists of completed and pending quiz responses for the specified user and business.
 */
class ResponseList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the lists of completed and pending quiz responses for the specified user and business.
     *
     * Returns the client's completed, draft, and pending form responses for the business, sorted
     *  newest first. Also provides permission flags that control which actions the current user may
     *  perform on each response.
     *
     * @return ResponseListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ResponseListGetRequest $request): ResponseListGetResponse
    {
        return new ResponseListGetResponse($this->client->request('/Wl/Profile/Form/Response/ResponseList.json', $request->params(), 'GET'));
    }
}
