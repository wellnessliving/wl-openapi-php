<?php

namespace WlSdk\Wl\Visit\Kiosk;

use WlSdk\WlSdkClient;

/**
 * Finds the client by a scanned value.
 */
class Scan
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Finds the client by a scanned value.
     *
     * The result is one of:
     * <ul>
     *   <li>the client is found: the key, the name and the photo of the client;</li>
     *   <li>no client that the staff member may see matches the value;</li>
     *   <li>the member ID of the client is inactive;</li>
     *   <li>the dynamic barcode has expired, or the 30 seconds of the QR code have passed;</li>
     *   <li>the business uses QR codes, and the value contains `|` but is not a well-formed QR code.</li>
     * </ul>
     * At a business that uses QR codes, a value without `|` is found as at a business that does not use them. Only
     * one client is returned: there is no list of the candidates.
     *
     * @return ScanPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ScanPostRequest $request): ScanPostResponse
    {
        return new ScanPostResponse($this->client->request('/Wl/Visit/Kiosk/Scan.json', $request->params(), 'POST'));
    }
}
