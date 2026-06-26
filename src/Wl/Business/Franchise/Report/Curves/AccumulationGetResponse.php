<?php

namespace WlSdk\Wl\Business\Franchise\Report\Curves;

/**
 * Response from GET
 */
class AccumulationGetResponse
{
    /**
     * Progress value.
     *
     * @var float|null
     */
    public ?float $f_progress = null;

    /**
     * `true` - accumulation reports exist; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_exists = null;

    /**
     * Link to download archive.
     *
     * @var string|null
     */
    public ?string $url_download = null;

    public function __construct(array $data)
    {
        $this->f_progress = isset($data['f_progress']) ? (float)$data['f_progress'] : null;
        $this->is_exists = isset($data['is_exists']) ? (bool)$data['is_exists'] : null;
        $this->url_download = isset($data['url_download']) ? (string)$data['url_download'] : null;
    }
}
