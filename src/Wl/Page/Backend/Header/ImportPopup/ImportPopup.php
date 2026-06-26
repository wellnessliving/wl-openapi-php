<?php

namespace WlSdk\Wl\Page\Backend\Header\ImportPopup;

use WlSdk\WlSdkClient;

/**
 * Gives popup settings.
 */
class ImportPopup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gives popup settings.
     *
     * @return ImportPopupGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ImportPopupGetRequest $request): ImportPopupGetResponse
    {
        return new ImportPopupGetResponse($this->client->request('/Wl/Page/Backend/Header/ImportPopup/ImportPopup.json', $request->params(), 'GET'));
    }

    /**
     * Updates the content visibility flag.
     *
     * @return ImportPopupPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ImportPopupPutRequest $request): ImportPopupPutResponse
    {
        return new ImportPopupPutResponse($this->client->request('/Wl/Page/Backend/Header/ImportPopup/ImportPopup.json', $request->params(), 'PUT'));
    }
}
