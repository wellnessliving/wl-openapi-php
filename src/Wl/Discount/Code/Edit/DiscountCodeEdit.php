<?php
namespace WlSdk\Wl\Discount\Code\Edit;

use WlSdk\WlSdkClient;

/**
 * Gets information about discount.
 */
class DiscountCodeEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about discount.
     *
     * Used to load the discount code editor form. Returns the full configuration of an existing discount
     * code so the staff member can review or modify it: value, date range, usage limit, which items it
     * applies to, client type restrictions, and whether it is currently active.
     *
     * @return DiscountCodeEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DiscountCodeEditGetRequest $request): DiscountCodeEditGetResponse
    {
        return new DiscountCodeEditGetResponse($this->client->request('/Wl/Discount/Code/Edit/DiscountCodeEdit.json', $request->params(), 'GET'));
    }

    /**
     * Saves information about discount code or create new.
     *
     * Used to create a new discount code or update an existing one from the backend editor. Pass no
     * discount code key to create; pass an existing key to update. Returns the key of the saved code.
     *
     * @return DiscountCodeEditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DiscountCodeEditPostRequest $request): DiscountCodeEditPostResponse
    {
        return new DiscountCodeEditPostResponse($this->client->request('/Wl/Discount/Code/Edit/DiscountCodeEdit.json', $request->params(), 'POST'));
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
