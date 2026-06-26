<?php

namespace WlSdk\Core\Quiz\Element;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Quiz/Element/QuizXMLParse.json
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
     * Calls POST /Core/Quiz/Element/QuizXMLParse.json.
     *
     * @return QuizXMLParsePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizXMLParsePostRequest $request): QuizXMLParsePostResponse
    {
        return new QuizXMLParsePostResponse($this->client->request('/Core/Quiz/Element/QuizXMLParse.json', $request->params(), 'POST'));
    }
}
