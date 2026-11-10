<?php

namespace WlSdk\Wl\Visit\Kiosk;

/**
 * Response from GET
 */
class AttemptListGetResponse
{
    /**
     * The attempts of the page, the newest first:
     *
     * @var AttemptListGetResponseAttempt[]|null
     */
    public ?array $a_attempt = null;

    /**
     * Number of the gym check-ins and the failed attempts of the whole day.
     *
     * @var int|null
     */
    public ?int $i_count_all = null;

    /**
     * Number of the failed attempts of the whole day.
     *
     * @var int|null
     */
    public ?int $i_count_fail = null;

    /**
     * Number of the gym check-ins of the whole day.
     *
     * @var int|null
     */
    public ?int $i_count_success = null;

    /**
     * Whether the page is the last one.
     *
     * @var bool|null
     */
    public ?bool $is_page_last = null;

    public function __construct(array $data)
    {
        $this->a_attempt = isset($data['a_attempt']) ? array_map(static fn ($item) => new AttemptListGetResponseAttempt((array)$item), (array)$data['a_attempt']) : null;
        $this->i_count_all = isset($data['i_count_all']) ? (int)$data['i_count_all'] : null;
        $this->i_count_fail = isset($data['i_count_fail']) ? (int)$data['i_count_fail'] : null;
        $this->i_count_success = isset($data['i_count_success']) ? (int)$data['i_count_success'] : null;
        $this->is_page_last = isset($data['is_page_last']) ? (bool)$data['is_page_last'] : null;
    }
}
