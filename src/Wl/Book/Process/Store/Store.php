<?php
namespace WlSdk\Wl\Book\Process\Store;

use WlSdk\WlSdkClient;

/**
 * Processes the "Purchase Options" step of the booking wizard, validates selections, and books the session when
 * possible.
 */
class Store
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Processes the "Purchase Options" step of the booking wizard, validates selections, and books the session when possible.
     *
     * Stores the selected purchase option (existing login promotion or new purchasable item) and session data in
     * the booking process context, validates availability and eligibility, and attempts to complete the booking
     * immediately when no payment or quiz step is needed. Returns visit keys, activity keys, and a flag indicating
     * whether further wizard steps are required.
     *
     * @return StorePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StorePostRequest $request): StorePostResponse
    {
        return new StorePostResponse($this->client->request('/Wl/Book/Process/Store/Store.json', $request->params(), 'POST'));
    }
}
