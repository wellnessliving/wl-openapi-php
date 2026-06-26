<?php

namespace WlSdk\Wl\Quiz\Index;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Quiz/Index/QuizSubscription.json
 */
class QuizSubscription
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls PUT /Wl/Quiz/Index/QuizSubscription.json.
     *
     * @return QuizSubscriptionPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(QuizSubscriptionPutRequest $request): QuizSubscriptionPutResponse
    {
        return new QuizSubscriptionPutResponse($this->client->request('/Wl/Quiz/Index/QuizSubscription.json', $request->params(), 'PUT'));
    }
}
