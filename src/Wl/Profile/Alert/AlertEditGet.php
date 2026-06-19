<?php
namespace WlSdk\Wl\Profile\Alert;

use WlSdk\WlSdkClient;

/**
 * Retrieves login note data.
 */
class AlertEditGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves login note data.
     *
     * Loads a single login note for editing, including its text, access type, flag settings,
     *  booking and purchase restrictions, and location flags. Used to populate the edit form before
     *  saving changes.
     *
     * @return AlertEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AlertEditGetRequest $request): AlertEditGetResponse
    {
        return new AlertEditGetResponse($this->client->request('/Wl/Profile/Alert/AlertEdit.json', $request->params(), 'GET'));
    }
}
