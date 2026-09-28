<?php

namespace WlSdk\Wl\Catalog\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Retrieves an information about current sale item.
 */
class Element
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves an information about current sale item.
     *
     * Used to render the detail view of a single store item (promotion, product, event, or coupon) in the
     * client-facing catalog. Returns everything needed to display the item: price, taxes, images,
     * description, booking restrictions, and available purchase options.
     *
     * @return ElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ElementGetRequest $request): ElementGetResponse
    {
        return new ElementGetResponse($this->client->request('/Wl/Catalog/CatalogList/Element.json', $request->params(), 'GET'));
    }

    /**
     * Displays information about a certain item in the store.
     *
     * Works exactly as `get()` method.
     * This method is added so that batched item identifiers can be sent in the request body
     * rather than as URL query parameters, avoiding URL length limits.
     *
     * @return ElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ElementPostRequest $request): ElementPostResponse
    {
        return new ElementPostResponse($this->client->request('/Wl/Catalog/CatalogList/Element.json', $request->params(), 'POST'));
    }
}
