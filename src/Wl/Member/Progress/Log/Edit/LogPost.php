<?php
namespace WlSdk\Wl\Member\Progress\Log\Edit;

use WlSdk\WlSdkClient;

/**
 * Saves progress fields log.
 */
class LogPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves progress fields log.
     *
     * Validates and persists the field values for the specified user and date, enforcing access
     * rules (clients cannot edit verified entries), and logs the change when data is modified.
     *
     * @return LogPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LogPostRequest $request): LogPostResponse
    {
        return new LogPostResponse($this->client->request('/Wl/Member/Progress/Log/Edit/Log.json', $request->params(), 'POST'));
    }
}
