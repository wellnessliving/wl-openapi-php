<?php
namespace WlSdk\Core\Request;

use WlSdk\WlSdkClient;

/**
 * Returns the example result for debugging.
 */
class ExampleApi
{
    /**
     * Example argument.
     *
     * @var int|null
     */
    public ?int $i_argument = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the example result for debugging.
     *
     * A diagnostic endpoint used to verify that a given API connection is working correctly. Increments
     * the input argument by one (confirming round-trip data flow), records a debug log entry with the
     * current session and authentication context, and returns the log key so the caller can inspect it.
     *
     * @return ExampleApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ExampleApiGetResponse
    {
        return new ExampleApiGetResponse($this->client->request('/Core/Request/Example.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'i_argument' => $this->i_argument,
            ],
            static fn($v) => $v !== null
        );
    }
}
