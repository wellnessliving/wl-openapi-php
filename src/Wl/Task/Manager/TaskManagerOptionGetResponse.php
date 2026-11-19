<?php

namespace WlSdk\Wl\Task\Manager;

/**
 * Response from GET
 */
class TaskManagerOptionGetResponse
{
    /**
     * The shown columns in their order. One of {@link \WlSdk\Wl\Task\Manager\TaskManagerColumnEnum} cases each, as
     * IDs.
     *
     * The answer of `get` always holds the column Task. For `put`: `null` to keep the columns as they are; the
     * column
     * Task is added first when the list does not have it, because it is always shown.
     *
     * @var int[]|null
     */
    public ?array $a_column = null;

    /**
     * How many tasks a page of the table has: 25, 50 or 100.
     *
     * The answer of `get` always holds it. For `put`: `null` to keep the size as it is.
     *
     * @var int|null
     */
    public ?int $i_page_size = null;

    public function __construct(array $data)
    {
        $this->a_column = isset($data['a_column']) ? (array)$data['a_column'] : null;
        $this->i_page_size = isset($data['i_page_size']) ? (int)$data['i_page_size'] : null;
    }
}
