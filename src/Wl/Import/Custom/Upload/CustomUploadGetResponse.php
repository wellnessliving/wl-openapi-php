<?php

namespace WlSdk\Wl\Import\Custom\Upload;

/**
 * Response from GET
 */
class CustomUploadGetResponse
{
    /**
     * Count of the rows that are left to be imported.
     *
     * @var int|null
     */
    public ?int $i_left = null;

    public function __construct(array $data)
    {
        $this->i_left = isset($data['i_left']) ? (int)$data['i_left'] : null;
    }
}
