<?php

namespace WlSdk\Wl\Appointment\Book\Question;

use WlSdk\WlSdkClient;

/**
 * Retrieves questions for the current service.
 */
class Question
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves questions for the current service.
     *
     * Returns the list of intake questions defined for the specified service that the client must
     *  answer before completing an appointment booking. Each question includes its text, a stable
     *  hash key for matching answers, and input size metadata.
     *
     * @return QuestionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuestionGetRequest $request): QuestionGetResponse
    {
        return new QuestionGetResponse($this->client->request('/Wl/Appointment/Book/Question/Question.json', $request->params(), 'GET'));
    }
}
