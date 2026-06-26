<?php

namespace WlSdk\Core\Prg\AsyncTask;

class AsyncThreadListGetResponseInfo
{
    /**
     * Contain log information about error that happened this task.
     *  Copy of result of TableView::load().
     *
     * @var array|null
     */
    public ?array $a_view = null;

    /**
     * Dumped variable of the task.
     *
     * @var string|null
     */
    public ?string $html_task = null;

    public function __construct(array $data)
    {
        $this->a_view = isset($data['a_view']) ? (array)$data['a_view'] : null;
        $this->html_task = isset($data['html_task']) ? (string)$data['html_task'] : null;
    }
}
