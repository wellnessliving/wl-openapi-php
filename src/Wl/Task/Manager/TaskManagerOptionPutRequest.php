<?php

namespace WlSdk\Wl\Task\Manager;

class TaskManagerOptionPutRequest
{
    /**
     * Key of the business whose Task Manager the settings belong to.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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

    /**
     * Whether `put` sets the columns and their order back to the default. `a_column` is not given then.
     *
     * @var bool|null
     */
    public ?bool $is_reset = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_column' => $this->a_column,
            'i_page_size' => $this->i_page_size,
            'is_reset' => $this->is_reset,
            ],
            static fn ($v) => $v !== null
        );
    }
}
