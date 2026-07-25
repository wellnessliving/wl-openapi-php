<?php

namespace WlSdk\Wl\Pay\Processor\CyberSource;

use WlSdk\WlSdkClient;

/**
 * Generates a capture context for `CyberSource` Flex Microform.
 */
class CsCaptureContext
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Generates a capture context for `CyberSource` Flex Microform.
     *
     * Returns a capture context and key ID that the client uses to encrypt the card number before
     *  sending it in the follow-on Tokenize Card request.
     *
     * @return CsCaptureContextPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CsCaptureContextPostRequest $request): CsCaptureContextPostResponse
    {
        return new CsCaptureContextPostResponse($this->client->request('/Wl/Pay/Processor/CyberSource/CsCaptureContext.json', $request->params(), 'POST'));
    }
}
