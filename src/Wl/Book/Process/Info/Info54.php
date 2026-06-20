<?php

namespace WlSdk\Wl\Book\Process\Info;

use WlSdk\WlSdkClient;

/**
 * Returns class and location booking information, enriched with localized date and time for each session.
 */
class Info54
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns class and location booking information, enriched with localized date and time for each session.
     *
     * Delegates to the parent implementation and then appends a localized `html_date_time` string to each
     * available session using the business locale and either the client's profile timezone or the location
     * timezone.
     *
     * @return Info54GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Info54GetRequest $request): Info54GetResponse
    {
        return new Info54GetResponse($this->client->request('/Wl/Book/Process/Info/Info54.json', $request->params(), 'GET'));
    }

    /**
     * Processes the "Class and Location" step of the booking wizard, optionally recording the waiver agreement and booking the session.
     *
     * Accepts the selected sessions, asset assignments, recurring configuration, and waiver signature, then
     * attempts
     * to book the session immediately when no further payment or resource steps are needed. Returns booking keys,
     * activity keys, and flags indicating whether additional wizard steps are required.
     *
     * @return Info54PostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(Info54PostRequest $request): Info54PostResponse
    {
        return new Info54PostResponse($this->client->request('/Wl/Book/Process/Info/Info54.json', $request->params(), 'POST'));
    }
}
