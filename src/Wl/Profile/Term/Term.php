<?php

namespace WlSdk\Wl\Profile\Term;

use WlSdk\WlSdkClient;

/**
 * Returns online waiver information for the specified user and business.
 */
class Term
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns online waiver information for the specified user and business.
     *
     * Returns the rendered online waiver text for the business along with the client's current
     *  agreement status. Used to display the waiver page and show whether the client has already
     *  signed, including their signature image and the confirmation timestamp.
     *
     * @return TermGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TermGetRequest $request): TermGetResponse
    {
        return new TermGetResponse($this->client->request('/Wl/Profile/Term/Term.json', $request->params(), 'GET'));
    }
}
