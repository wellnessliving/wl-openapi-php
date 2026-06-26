<?php

namespace WlSdk\Wl\Classes\Tab;

class ClassTabPostRequest
{
    /**
     * Class tab key. Primary key in the Sql table.
     * `null` to create new class tab.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * ID of class tab object. One of {@link \WlSdk\Wl\Classes\Tab\TabSid} constants.
     * `null` to hide class tab.
     *
     * @var int|null
     * @see \WlSdk\Wl\Classes\Tab\TabSid
     */
    public ?int $id_class_tab_object = null;

    /**
     * Id of class tab type if this class tab is system default. One of {@link \WlSdk\Wl\Classes\Tab\TabSid}
     * constants.
     * `null` to hide class tab or if class tab is not system default.
     *
     * @var int|null
     * @see \WlSdk\Wl\Classes\Tab\TabSid
     */
    public ?int $id_class_tab_system = null;

    /**
     * Business key. Primary key in the RsBusinessSql table.
     * `null` to hide class tab.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class tab title.
     * `null` to hide class tab.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_class_tab' => $this->k_class_tab,
            'id_class_tab_object' => $this->id_class_tab_object,
            'id_class_tab_system' => $this->id_class_tab_system,
            'k_business' => $this->k_business,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
