<?php
namespace WlSdk\Thoth\ExplorerSearch\ClassSession;

class ClassSessionSearchGetResponseClassSession
{
    /**
     * Date and time when booking for this session starts in UTC. `null` if there is no "too early" limitation.
     *
     * @var string|null
     */
    public ?string $dtu_book_begin = null;

    /**
     * Date and time when booking for this session ends in UTC. `null` if there is no "too late" limitation.
     *
     * @var string|null
     */
    public ?string $dtu_book_end = null;

    /**
     * Date and time of the session in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_session = null;

    /**
     * Class key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Class session key.
     *
     * @var string|null
     */
    public ?string $k_class_period_session = null;

    public function __construct(array $data)
    {
        $this->dtu_book_begin = isset($data['dtu_book_begin']) ? (string)$data['dtu_book_begin'] : null;
        $this->dtu_book_end = isset($data['dtu_book_end']) ? (string)$data['dtu_book_end'] : null;
        $this->dtu_session = isset($data['dtu_session']) ? (string)$data['dtu_session'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_class_period_session = isset($data['k_class_period_session']) ? (string)$data['k_class_period_session'] : null;
    }
}
