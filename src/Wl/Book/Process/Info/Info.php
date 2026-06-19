<?php
namespace WlSdk\Wl\Book\Process\Info;

use WlSdk\WlSdkClient;

/**
 * Returns class session details and booking information for the "Class and Location" step of the booking wizard.
 */
class Info
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns class session details and booking information for the "Class and Location" step of the booking wizard.
     *
     * Loads session data, staff, location, contract, capacity, wait-list state, pricing, special instructions, and
     * recurring booking availability for the given class period and date. For events it also returns the list of
     * individually selectable sessions together with their free-session eligibility.
     *
     * @deprecated Use {@link Wl\Book\Process\Info\Info54Api} instead.
     *
     * @return InfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InfoGetRequest $request): InfoGetResponse
    {
        return new InfoGetResponse($this->client->request('/Wl/Book/Process/Info/Info.json', $request->params(), 'GET'));
    }

    /**
     * Processes the "Class and Location" step of the booking wizard, optionally recording the waiver agreement and booking the session.
     *
     * Accepts the selected sessions, asset assignments, recurring configuration, and waiver signature, then
     * attempts
     * to book the session immediately when no further payment or resource steps are needed. Returns booking keys,
     * activity keys, and flags indicating whether additional wizard steps are required.
     *
     * @deprecated Use {@link Wl\Book\Process\Info\Info54Api} instead.
     *
     * @return InfoPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(InfoPostRequest $request): InfoPostResponse
    {
        return new InfoPostResponse($this->client->request('/Wl/Book/Process/Info/Info.json', $request->params(), 'POST'));
    }
}
