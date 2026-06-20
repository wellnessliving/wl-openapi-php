<?php

namespace WlSdk\Wl\Member\Progress\Log;

use WlSdk\WlSdkClient;

/**
 * Verifies client's progress log data.
 */
class Verify
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Verifies client's progress log data.
     *
     * Marks all unverified progress log entries for the specified user and date as verified by the currently
     * signed-in staff member, then triggers a search index reindex for the user.
     *
     * @return VerifyPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(VerifyPutRequest $request): VerifyPutResponse
    {
        return new VerifyPutResponse($this->client->request('/Wl/Member/Progress/Log/Verify.json', $request->params(), 'PUT'));
    }
}
