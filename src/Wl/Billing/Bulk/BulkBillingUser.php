<?php

namespace WlSdk\Wl\Billing\Bulk;

use WlSdk\WlSdkClient;

/**
 * Removes the client from the batch so that they are not billed.
 */
class BulkBillingUser
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Removes the client from the batch so that they are not billed.
     *
     * Only a client that has not been billed yet can be removed; a client that was already charged or failed keeps
     * their result. The client is not deleted from the batch - they are marked cancelled and skipped when the
     * billing
     * runs, together with the moment of the change and the acting user.
     *
     * @return BulkBillingUserDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(BulkBillingUserDeleteRequest $request): BulkBillingUserDeleteResponse
    {
        return new BulkBillingUserDeleteResponse($this->client->request('/Wl/Billing/Bulk/BulkBillingUser.json', $request->params(), 'DELETE'));
    }
}
