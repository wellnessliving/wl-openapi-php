<?php

namespace WlSdk\Wl\Classes\Period\Staff;

use WlSdk\WlSdkClient;

/**
 * Replaces the instructors of one session of a class or an event.
 */
class Substitute
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Replaces the instructors of one session of a class or an event.
     *
     * Sets the given instructors for the session of {@link \WlSdk\Wl\Classes\Period\Staff\Substitute} that takes
     * place at
     * {@link \WlSdk\Wl\Classes\Period\Staff\Substitute}. The other sessions of the series keep their instructors:
     * the series is
     * split around the date, so that the session gets a class period of its own, and the sessions before and after
     * it
     * get new class periods. Every instructor must work for the business and teach the kind of the session, a
     * class or
     * an event. The clients booked into the session and the instructors who are added or removed are notified. A
     * call
     * with the instructors that the session already has changes nothing and notifies nobody.
     *
     * @return SubstitutePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SubstitutePostRequest $request): SubstitutePostResponse
    {
        return new SubstitutePostResponse($this->client->request('/Wl/Classes/Period/Staff/Substitute.json', $request->params(), 'POST'));
    }
}
