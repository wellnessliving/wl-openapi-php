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
     * @return EditViewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EditViewGetRequest $request): EditViewGetResponse
    {
        return new EditViewGetResponse($this->client->request('/Wl/Catalog/StaffApp/CatalogCartEdit/EditView.json', $request->params(), 'GET'));
    }
}
