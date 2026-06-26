<?php

namespace WlSdk\Wl\Import\Custom\Upload;

/**
 * Response from POST
 */
class CustomUploadValidatePostResponse
{
    /**
     * Count of the rows that cannot be imported due to validation errors.
     *
     * @var int|null
     */
    public ?int $i_invalid = null;

    /**
     * Count of the rows in the  file.
     *
     * @var int|null
     */
    public ?int $i_total = null;

    public function __construct(array $data)
    {
        $this->i_invalid = isset($data['i_invalid']) ? (int)$data['i_invalid'] : null;
        $this->i_total = isset($data['i_total']) ? (int)$data['i_total'] : null;
    }
}
