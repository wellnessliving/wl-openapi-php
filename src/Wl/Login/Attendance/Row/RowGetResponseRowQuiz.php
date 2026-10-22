<?php

namespace WlSdk\Wl\Login\Attendance\Row;

class RowGetResponseRowQuiz
{
    /**
     * Status and action data for a single form:
     *
     * @var RowGetResponseRowQuizQuizStatus|null
     */
    public ?RowGetResponseRowQuizQuizStatus $a_quiz_status = null;

    /**
     * Rendered HTML of the form status badge, as shown in the attendance list.
     *
     * @var string|null
     */
    public ?string $html_quiz_status = null;

    public function __construct(array $data)
    {
        $this->a_quiz_status = isset($data['a_quiz_status']) ? new RowGetResponseRowQuizQuizStatus((array)$data['a_quiz_status']) : null;
        $this->html_quiz_status = isset($data['html_quiz_status']) ? (string)$data['html_quiz_status'] : null;
    }
}
