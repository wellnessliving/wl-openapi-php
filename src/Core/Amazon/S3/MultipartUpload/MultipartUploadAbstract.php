<?php

namespace WlSdk\Core\Amazon\S3\MultipartUpload;

/**
 * Multipart upload allows you to upload a single object as a set of parts.
 * Each part is a contiguous portion of the object's data.
 * You can upload these object parts independently and in any order.
 * If transmission of any part fails, you can retransmit that part without affecting other parts.
 * After all parts of your object are uploaded, Amazon S3 assembles these parts and creates the object.
 *
 * This is a hybrid module.
 * Startup, completion and aborting of uploads are performed on the server.
 * Uploading is performed on the client side.
 *
 * See `Core_Amazon_S3_MultipartUpload` in JavaScript.
 *
 * Values:
 * - 1013 (`Wl\Video\VideoMultipartUpload`): Implements the uploading of large-volume video in parts.
 */
class MultipartUploadAbstract
{
    /** Implements the uploading of large-volume video in parts. */
    public const VideoMultipartUpload = 1013;
}
