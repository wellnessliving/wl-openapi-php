<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCartEdit;

use WlSdk\WlSdkClient;

/**
 * Calculates price information about sale item.
 */
class EditView
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates price information about sale item.
     *
     * Validates the location, user, and requested sale item, builds the appropriate purchase
     *  item (product, promotion, or other catalog item), applies any prorate configuration,
     *  manual discount rules for the client, and manually set taxes, then returns the
     *  resulting subtotal, tax, discount, and total amounts for the requested quantity.
     *
     * @return EditViewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EditViewGetRequest $request): EditViewGetResponse
    {
        return new EditViewGetResponse($this->client->request('/Wl/Catalog/StaffApp/CatalogCartEdit/EditView.json', $request->params(), 'GET'));
    }
}
