<?php

namespace WlSdk\Wl\Quiz\Element;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Quiz/Element/QuizXMLParse.json
 */
class QuizXMLParse
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Quiz/Element/QuizXMLParse.json.
     *
     * @return QuizXMLParsePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizXMLParsePostRequest $request): QuizXMLParsePostResponse
    {
        return new QuizXMLParsePostResponse($this->client->request('/Wl/Quiz/Element/QuizXMLParse.json', $request->params(), 'POST'));
    }
}
