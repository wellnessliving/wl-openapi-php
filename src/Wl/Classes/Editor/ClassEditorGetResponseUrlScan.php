<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseUrlScan
{
    /**
     * End date of the instance, ready to be shown.
     *
     * @var string|null
     */
    public ?string $html_end_local = null;

    /**
     * Start date of the instance, ready to be shown.
     *
     * @var string|null
     */
    public ?string $html_start_local = null;

    /**
     * URL of the page of the ticket scanner for the instance.
     *
     * @var string|null
     */
    public ?string $url_scan = null;

    public function __construct(array $data)
    {
        $this->html_end_local = isset($data['html_end_local']) ? (string)$data['html_end_local'] : null;
        $this->html_start_local = isset($data['html_start_local']) ? (string)$data['html_start_local'] : null;
        $this->url_scan = isset($data['url_scan']) ? (string)$data['url_scan'] : null;
    }
}
