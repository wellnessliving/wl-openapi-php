<?php

namespace WlSdk\Wl\Tag;

use WlSdk\WlSdkClient;

/**
 * Returns revenue categories (tags) of the business.
 */
class Tag
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns revenue categories (tags) of the business.
     *
     * Returns tags along with the bookable assets, classes, coupons, promotions, services, and
     * products assigned to each one.
     *
     * @return TagGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TagGetRequest $request): TagGetResponse
    {
        return new TagGetResponse($this->client->request('/Wl/Tag/Tag.json', $request->params(), 'GET'));
    }

    /**
     * Removes the tag.
     *
     * Deletes the revenue category from the business. The deletion fails if the tag is currently
     * set as the primary revenue category for any linked asset, class, coupon, promotion, service,
     * or product (promotions that have already been removed are ignored). On success, notifies
     * listeners about the affected linked objects and invalidates the cached tag list of the
     * business.
     *
     * @return TagDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(TagDeleteRequest $request): TagDeleteResponse
    {
        return new TagDeleteResponse($this->client->request('/Wl/Tag/Tag.json', $request->params(), 'DELETE'));
    }
}
