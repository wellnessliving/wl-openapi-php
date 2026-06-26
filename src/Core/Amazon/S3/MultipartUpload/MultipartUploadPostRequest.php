<?php

namespace WlSdk\Core\Amazon\S3\MultipartUpload;

class MultipartUploadPostRequest
{
    /**
     * Dataset that should be associated with the public fields of the key object {@link
     * \WlSdk\Core\Amazon\S3\MultipartUpload\MultipartUploadKeyAbstract} being created.
     *  Key - the name of the field.
     *  Value - the values for this field.
     *
     * @var int[]|null
     */
    public ?array $a_key = null;

    /**
     * CID of the uploader class.
     *
     * @var int|null
     * @see \WlSdk\Core\Amazon\S3\MultipartUpload\MultipartUploadAbstract
     */
    public ?int $cid_multipart_upload = null;

    /**
     * File size received from the client.
     *
     * @var int|string|null
     */
    public $i_file_size = null;

    /**
     * A standard MIME type describing the format of the object data `null` if no type is given.
     *
     * @var string|null
     */
    public ?string $s_content_type = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'a_key' => $this->a_key,
            'cid_multipart_upload' => $this->cid_multipart_upload,
            'i_file_size' => $this->i_file_size,
            's_content_type' => $this->s_content_type,
            's_upload_id' => $this->s_upload_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
