<?php
namespace WlSdk\Wl\Skin;

use WlSdk\WlSdkClient;

/**
 * Creates a new widget.
 */
class SkinForeignPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new widget.
     *
     * Creates a new widget skin for the business and links it to an external identifier provided
     * by the integrator. The foreign ID must be unique within the business; attempting to create
     * a duplicate triggers an error directing the caller to use PUT instead.
     *
     * @return SkinForeignPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SkinForeignPostRequest $request): SkinForeignPostResponse
    {
        return new SkinForeignPostResponse($this->client->request('/Wl/Skin/SkinForeign.json', $request->params(), 'POST'));
    }
}
