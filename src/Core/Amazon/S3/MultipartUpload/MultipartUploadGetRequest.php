<?php

namespace WlSdk\Core\Amazon\S3\MultipartUpload;

class MultipartUploadGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'a_key' => $this->a_key,
            'cid_multipart_upload' => $this->cid_multipart_upload,
            'i_file_size' => $this->i_file_size,
            's_content_type' => $this->s_content_type,
            ],
            static fn ($v) => $v !== null
        );
    }
}
