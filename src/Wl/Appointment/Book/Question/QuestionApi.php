<?php
namespace WlSdk\Wl\Appointment\Book\Question;

use WlSdk\WlSdkClient;

/**
 * Retrieves questions for the current service.
 */
class QuestionApi
{
    /**
     * The service key used for retrieving questions.
     *
     * @var string|null
     */
    public ?string $k_service = null;

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
     * @return QuestionApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): QuestionApiGetResponse
    {
        return new QuestionApiGetResponse($this->client->request('/Wl/Appointment/Book/Question/Question.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_service' => $this->k_service,
            ],
            static fn($v) => $v !== null
        );
    }
}
