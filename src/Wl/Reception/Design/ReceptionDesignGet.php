<?php
namespace WlSdk\Wl\Reception\Design;

use WlSdk\WlSdkClient;

/**
 * Returns information about settings for Check In Web Application.
 */
class ReceptionDesignGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about settings for Check In Web Application.
     *
     * This method does not require any access checks, because this is public information.
     *
     * @return ReceptionDesignGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReceptionDesignGetRequest $request): ReceptionDesignGetResponse
    {
        return new ReceptionDesignGetResponse($this->client->request('/Wl/Reception/Design/ReceptionDesign.json', $request->params(), 'GET'));
    }
}
