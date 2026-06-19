<?php
namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * Returns quiz element data including settings, elements, and access information for the given quiz.
 */
class QuizElement72Get
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns quiz element data including settings, elements, and access information for the given quiz.
     *
     * Loads the quiz configuration, element list, and access log for the specified business and user context,
     * applying franchise and privilege checks before returning the result.
     *
     * @return QuizElement72GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizElement72GetRequest $request): QuizElement72GetResponse
    {
        return new QuizElement72GetResponse($this->client->request('/Wl/Quiz/QuizElement72.json', $request->params(), 'GET'));
    }
}
