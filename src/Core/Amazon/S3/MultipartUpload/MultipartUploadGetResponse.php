<?php

namespace WlSdk\Core\Amazon\S3\MultipartUpload;

/**
 * Response from GET
 */
class MultipartUploadGetResponse
{
    /**
     * A set of links for unloading parts.
     *
     * Key - part number.
     * Value - link for uploading part.
     *
     * @var array|null
     */
    public ?array $a_part_url = null;

    /**
     * Unique upload ID.
     *
     * This upload ID is used to associate all of the parts in the specific multipart upload.
     * You specify this upload ID in each of your subsequent upload part requests.
     * You also include this upload ID in the final request to either complete or abort the multipart upload
     * request.
     *
     * @var string|null
     */
    public ?string $s_upload_id = null;

    public function __construct(array $data)
    {
        $this->a_part_url = isset($data['a_part_url']) ? (array)$data['a_part_url'] : null;
        $this->s_upload_id = isset($data['s_upload_id']) ? (string)$data['s_upload_id'] : null;
    }
}
