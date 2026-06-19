<?php
namespace WlSdk\Core\Sid;

use WlSdk\WlSdkClient;

/**
 * Returns the list of all items for the given Sid class.
 */
class CoreSidApi
{
    /**
     * Name of the Sid class to get list from.
     * 
     * Should be a fully qualified class name.
     *
     * @var string|null
     */
    public ?string $s_class_name = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of all items for the given Sid class.
     *
     * Populates enumeration dropdowns and lookup tables on the frontend.
     *
     * @return CoreSidApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CoreSidApiGetResponse
    {
        return new CoreSidApiGetResponse($this->client->request('/Core/Sid/CoreSid.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            's_class_name' => $this->s_class_name,
            ],
            static fn($v) => $v !== null
        );
    }
}
