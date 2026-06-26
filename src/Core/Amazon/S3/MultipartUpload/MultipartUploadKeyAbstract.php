<?php

namespace WlSdk\Core\Amazon\S3\MultipartUpload;

/**
 * Key class for multipart uploader.
 *
 * The key provides access checks for uploader, participates in the generation of the file name.
 *
 * Values:
 * - 1016 (`Wl\Video\VideoMultipartUploadKey`): Key class for video multipart uploader.
 *
 *   The key provides access checks for uploader, participates in the generation of the file name.
 */
class MultipartUploadKeyAbstract
{
    /** Key class for video multipart uploader. */
    public const VideoMultipartUploadKey = 1016;
}
