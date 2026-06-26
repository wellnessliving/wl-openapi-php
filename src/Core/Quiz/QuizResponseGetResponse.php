<?php

namespace WlSdk\Core\Quiz;

/**
 * Response from GET
 */
class QuizResponseGetResponse
{
    /**
     * List of quiz questions with responses.
     *
     * @var QuizResponseGetResponseElementA[]|QuizResponseGetResponseElementB[]|QuizResponseGetResponseElementC[]|QuizResponseGetResponseElementD[]|QuizResponseGetResponseElementE[]|QuizResponseGetResponseElementF[]|QuizResponseGetResponseElementG[]|QuizResponseGetResponseElementH[]|QuizResponseGetResponseElementI[]|QuizResponseGetResponseElementJ[]|QuizResponseGetResponseElementK[]|QuizResponseGetResponseElementL[]|QuizResponseGetResponseElementM[]|QuizResponseGetResponseElementN[]|null
     */
    public ?array $a_element = null;

    /**
     * Date when response was submitted.
     *
     * @var string|null
     */
    public ?string $dtu_response = null;

    /**
     * Whether to show numbering of the form elements that supports numbering.
     *
     * `true` to show numbering on the form for elements that supports numbering.
     * `false` to not show numbering.
     *
     * @var bool|null
     */
    public ?bool $show_numbering = null;

    /**
     * Title of the filled form.
     *
     * `null` in case when not filled yet.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_element = $data['a_element'] ?? null;
        $this->dtu_response = isset($data['dtu_response']) ? (string)$data['dtu_response'] : null;
        $this->show_numbering = isset($data['show_numbering']) ? (bool)$data['show_numbering'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
