<?php
namespace WlSdk\Wl\Catalog\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Retrieves an information about current sale item.
 */
class ElementGet
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
}
