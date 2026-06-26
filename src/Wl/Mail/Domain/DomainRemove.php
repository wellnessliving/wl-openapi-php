<?php

namespace WlSdk\Wl\Mail\Domain;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Mail/Domain/DomainRemove.json
 */
class DomainRemove
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls DELETE /Wl/Mail/Domain/DomainRemove.json.
     *
     * @return DomainRemoveDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(DomainRemoveDeleteRequest $request): DomainRemoveDeleteResponse
    {
        return new DomainRemoveDeleteResponse($this->client->request('/Wl/Mail/Domain/DomainRemove.json', $request->params(), 'DELETE'));
    }
}
