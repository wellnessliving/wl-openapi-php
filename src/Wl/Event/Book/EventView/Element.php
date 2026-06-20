<?php

namespace WlSdk\Wl\Event\Book\EventView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about event item.
 */
class Element
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about event item.
     *
     * Used to render the event detail page or event card in the booking flow. Returns everything needed
     * to display the event to a prospective client: schedule, pricing, booking availability, assigned staff
     * with photos, and available installment payment options.
     *
     * @return ElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ElementGetRequest $request): ElementGetResponse
    {
        return new ElementGetResponse($this->client->request('/Wl/Event/Book/EventView/Element.json', $request->params(), 'GET'));
    }
}
