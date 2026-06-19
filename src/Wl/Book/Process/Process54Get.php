<?php
namespace WlSdk\Wl\Book\Process;

use WlSdk\WlSdkClient;

/**
 * Returns the ordered list of booking wizard steps, including the quiz step when required.
 *
 * @deprecated
 */
class Process54Get
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the ordered list of booking wizard steps, including the quiz step when required.
     *
     * Delegates to the parent implementation and then appends the quiz (or document) step when the class or event
     * requires it, adds the detail step for Client Web App flows, and re-sorts the path into the correct wizard
     * order.
     *
     * @return Process54GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Process54GetRequest $request): Process54GetResponse
    {
        return new Process54GetResponse($this->client->request('/Wl/Book/Process/Process54.json', $request->params(), 'GET'));
    }
}
