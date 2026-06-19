<?php
namespace WlSdk\Wl\Discount\Code\Edit;

use WlSdk\WlSdkClient;

/**
 * Duplicates an existing discount code.
 */
class DiscountCodeEditPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Duplicates an existing discount code.
     *
     * Used in the backend when a staff member wants to create a similar discount code without re-entering
     * all settings manually. Creates an exact copy with a new unique code string.
     *
     * @return DiscountCodeEditPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(DiscountCodeEditPutRequest $request): DiscountCodeEditPutResponse
    {
        return new DiscountCodeEditPutResponse($this->client->request('/Wl/Discount/Code/Edit/DiscountCodeEdit.json', $request->params(), 'PUT'));
    }
}
