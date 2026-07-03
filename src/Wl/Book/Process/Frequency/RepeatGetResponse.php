<?php

namespace WlSdk\Wl\Book\Process\Frequency;

/**
 * Response from GET
 */
class RepeatGetResponse
{
    /**
     * List of visits to be created for the given settings:
     *
     * @var RepeatGetResponseVisit[]|null
     */
    public ?array $a_visit = null;

    /**
     * Date to start recurring booking. Not empty only when
     * [RepeatApi::$id_repeat_end](/Wl/Book/Process/Frequency/Repeat.json) == {@link \WlSdk\RsRepeatEndSid}.
     *
     * @var string|null
     */
    public ?string $dt_from = null;

    /**
     * Date to finish recurring booking. Not empty only when
     * [RepeatApi::$id_repeat_end](/Wl/Book/Process/Frequency/Repeat.json) == {@link \WlSdk\RsRepeatEndSid}.
     *
     * @var string|null
     */
    public ?string $dt_to = null;

    /**
     * Count of the visits to be created. Not empty only when
     * [RepeatApi::$id_repeat_end](/Wl/Book/Process/Frequency/Repeat.json) == {@link \WlSdk\RsRepeatEndSid}.
     *
     * @var int|null
     * @see \WlSdk\RsRepeatEndSid
     */
    public ?int $i_count = null;

    /**
     * Start date of repeatable period in human-readable format.
     *
     * @var string|null
     */
    public ?string $text_date_from = null;

    /**
     * End date of repeatable period in human-readable format.
     *
     * @var string|null
     */
    public ?string $text_date_to = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? array_map(static fn ($item) => new RepeatGetResponseVisit((array)$item), (array)$data['a_visit']) : null;
        $this->dt_from = isset($data['dt_from']) ? (string)$data['dt_from'] : null;
        $this->dt_to = isset($data['dt_to']) ? (string)$data['dt_to'] : null;
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->text_date_from = isset($data['text_date_from']) ? (string)$data['text_date_from'] : null;
        $this->text_date_to = isset($data['text_date_to']) ? (string)$data['text_date_to'] : null;
    }
}
