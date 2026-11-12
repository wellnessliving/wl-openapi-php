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
     *   <li>the dynamic barcode has expired;</li>
     *   <li>the business uses QR codes, which the kiosk does not read: every scan gives this result.</li>
     * </ul>
     * Only one client is returned: there is no list of the candidates.
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
