<?php

namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Quiz/QuizElementClone.json
 */
class QuizElementClone
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Quiz/QuizElementClone.json.
     *
     * @return QuizElementClonePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizElementClonePostRequest $request): QuizElementClonePostResponse
    {
        return new QuizElementClonePostResponse($this->client->request('/Wl/Quiz/QuizElementClone.json', $request->params(), 'POST'));
    }
}
