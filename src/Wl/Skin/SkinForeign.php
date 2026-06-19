<?php
namespace WlSdk\Wl\Skin;

use WlSdk\WlSdkClient;

/**
 * Creates a new widget.
 */
class SkinForeign
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

    /**
     * Updates the existing widget.
     *
     * Updates the configuration of an existing widget skin identified by the business and
     * external foreign ID. Throws an error if no matching foreign ID is found, directing
     * the caller to use POST instead.
     *
     * @return SkinForeignPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(SkinForeignPutRequest $request): SkinForeignPutResponse
    {
        return new SkinForeignPutResponse($this->client->request('/Wl/Skin/SkinForeign.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes the existing widget.
     *
     * Permanently removes a widget skin and its foreign ID mapping from the business. Used
     * by external integrators to clean up a widget that is no longer needed.
     *
     * @return SkinForeignDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(SkinForeignDeleteRequest $request): SkinForeignDeleteResponse
    {
        return new SkinForeignDeleteResponse($this->client->request('/Wl/Skin/SkinForeign.json', $request->params(), 'DELETE'));
    }
}
