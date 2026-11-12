<?php

namespace WlSdk\Wl\Visit\Kiosk;

/**
 * Response from POST
 */
class ScanPostResponse
{
    /**
     * Result of the scan.
     *
     * One of {@link \WlSdk\Wl\Visit\Kiosk\ScanResultSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\Kiosk\ScanResultSid
     */
    public ?int $id_scan_result = null;

    /**
     * First name of the client.
     *
     * `null` if no client is found.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * Last name of the client.
     *
     * `null` if no client is found.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * Key of the client.
     *
     * `null` if no client is found.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Address of the photo of the client, for example `https://example.com/photo.jpg`.
     *
     * `null` if no client is found.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->id_scan_result = isset($data['id_scan_result']) ? (int)$data['id_scan_result'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
