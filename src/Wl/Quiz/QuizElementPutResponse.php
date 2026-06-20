<?php
namespace WlSdk\Wl\Quiz;

/**
 * Response from PUT
 */
class QuizElementPutResponse
{
    /**
     * Quiz settings.
     *
     * @var QuizElementPutResponseSetting|null
     */
    public ?QuizElementPutResponseSetting $a_setting = null;

    /**
     * Direct URL to quiz.
     *
     * @var string|null
     */
    public ?string $url_quiz = null;

    /**
     * Kiosk direct URL to quiz.
     *
     * @var string|null
     */
    public ?string $url_quiz_kiosk = null;

    public function __construct(array $data)
    {
        $this->a_setting = isset($data['a_setting']) ? new QuizElementPutResponseSetting((array)$data['a_setting']) : null;
        $this->url_quiz = isset($data['url_quiz']) ? (string)$data['url_quiz'] : null;
        $this->url_quiz_kiosk = isset($data['url_quiz_kiosk']) ? (string)$data['url_quiz_kiosk'] : null;
    }
}
