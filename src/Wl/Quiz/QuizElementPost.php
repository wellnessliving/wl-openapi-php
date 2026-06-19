<?php
namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * Creates or updates a quiz with the given elements and settings.
 *
 * @deprecated
 */
class QuizElementPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates or updates a quiz with the given elements and settings.
     *
     * When no quiz key is provided, a new quiz is created; when a key is given, the existing quiz
     * is updated in place. Element list and configuration are saved in a single transaction.
     *
     * @return QuizElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizElementPostRequest $request): QuizElementPostResponse
    {
        return new QuizElementPostResponse($this->client->request('/Wl/Quiz/QuizElement.json', $request->params(), 'POST'));
    }
}
