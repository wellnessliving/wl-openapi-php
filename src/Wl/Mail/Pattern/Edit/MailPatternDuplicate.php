<?php

namespace WlSdk\Wl\Mail\Pattern\Edit;

use WlSdk\WlSdkClient;

/**
 * Duplicates the mail pattern.
 */
class MailPatternDuplicate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Duplicates the mail pattern.
     *
     * @return MailPatternDuplicatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MailPatternDuplicatePostRequest $request): MailPatternDuplicatePostResponse
    {
        return new MailPatternDuplicatePostResponse($this->client->request('/Wl/Mail/Pattern/Edit/MailPatternDuplicate.json', $request->params(), 'POST'));
    }
}
