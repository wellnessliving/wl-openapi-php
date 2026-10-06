<?php

namespace WlSdk\Wl\Collector\DebtStatus;

use WlSdk\WlSdkClient;

/**
 * Retrieves the debt status of the specified user within the business.
 */
class DebtStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves the debt status of the specified user within the business.
     *
     * Validates the business, the user, the current subscription, and access privileges, then loads the
     * current debt status: days past due, current and future debt amounts, collection dates, and any comment.
     *
     * @return DebtStatusGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DebtStatusGetRequest $request): DebtStatusGetResponse
    {
        return new DebtStatusGetResponse($this->client->request('/Wl/Collector/DebtStatus/DebtStatus.json', $request->params(), 'GET'));
    }
}
