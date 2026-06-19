<?php
namespace WlSdk\Wl\Book\Process\Store;

use WlSdk\WlSdkClient;

/**
 * Validates and distributes selected purchase options across all clients in the booking group.
 */
class StoreGroupPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Validates and distributes selected purchase options across all clients in the booking group.
     *
     * For each client in the group, validates session selection, resource requirements, recurring booking
     * configuration, and purchase item eligibility. When all clients pass validation, attempts to assign or share
     * promotions across the group and returns per-client distribution results with any error details in
     * `a_purchase_item_distribute`.
     *
     * @return StoreGroupPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StoreGroupPostRequest $request): StoreGroupPostResponse
    {
        return new StoreGroupPostResponse($this->client->request('/Wl/Book/Process/Store/StoreGroup.json', $request->params(), 'POST'));
    }
}
