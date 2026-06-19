<?php
namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * Deletes the quiz with the given key.
 */
class QuizElement72Delete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes the quiz with the given key.
     *
     * Permanently removes the quiz and all associated elements.
     *
     * @return QuizElement72DeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(QuizElement72DeleteRequest $request): QuizElement72DeleteResponse
    {
        return new QuizElement72DeleteResponse($this->client->request('/Wl/Quiz/QuizElement72.json', $request->params(), 'DELETE'));
    }
}
