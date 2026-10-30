<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseUrlCatalog
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
     * URL of the page of the instance in the store.
     *
     * @var string|null
     */
    public ?string $url_catalog = null;

    /**
     * URL of the checkout of the instance.
     *
     * @var string|null
     */
    public ?string $url_checkout = null;

    public function __construct(array $data)
    {
        $this->html_end_local = isset($data['html_end_local']) ? (string)$data['html_end_local'] : null;
        $this->html_start_local = isset($data['html_start_local']) ? (string)$data['html_start_local'] : null;
        $this->url_catalog = isset($data['url_catalog']) ? (string)$data['url_catalog'] : null;
        $this->url_checkout = isset($data['url_checkout']) ? (string)$data['url_checkout'] : null;
    }
}
