<?php

namespace WlSdk\Core\Request;

/**
 * Response from GET
 */
class ExampleGetResponse
{
    /**
     * Example result.
     *
     * @var int|null
     */
    public ?int $i_result = null;

    /**
     * Key of the log record written by the API controller.
     *
     * @var string|null
     */
    public ?string $s_log = null;

    public function __construct(array $data)
    {
        $this->i_result = isset($data['i_result']) ? (int)$data['i_result'] : null;
        $this->s_log = isset($data['s_log']) ? (string)$data['s_log'] : null;
    }
}
