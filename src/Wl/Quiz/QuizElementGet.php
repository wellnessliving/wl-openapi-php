<?php
namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * Returns quiz element data including settings, elements, and access information for the given quiz.
 *
 * @deprecated
 */
class QuizElementGet
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
     * @return QuizElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizElementGetRequest $request): QuizElementGetResponse
    {
        return new QuizElementGetResponse($this->client->request('/Wl/Quiz/QuizElement.json', $request->params(), 'GET'));
    }
}
