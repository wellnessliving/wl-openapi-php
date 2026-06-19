<?php
namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * Deletes the quiz with the given key.
 *
 * @deprecated
 */
class QuizElementDelete
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
     * @return QuizElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(QuizElementDeleteRequest $request): QuizElementDeleteResponse
    {
        return new QuizElementDeleteResponse($this->client->request('/Wl/Quiz/QuizElement.json', $request->params(), 'DELETE'));
    }
}
