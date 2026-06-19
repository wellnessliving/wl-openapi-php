<?php
namespace WlSdk\Wl\Discount\Code\Edit;

use WlSdk\WlSdkClient;

/**
 * Saves information about discount code or create new.
 */
class DiscountCodeEditPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
