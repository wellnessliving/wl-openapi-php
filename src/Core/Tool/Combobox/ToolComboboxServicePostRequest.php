<?php

namespace WlSdk\Core\Tool\Combobox;

class ToolComboboxServicePostRequest
{
    /**
     * A data additional.
     * Various parameters for comboboxes that depend on the specific combobox.
     *
     * @var array|null
     */
    public ?array $a_data_additional = null;

    /**
     * Filter data.
     * Various parameters for comboboxes that depend on the specific combobox.
     *
     * @var array|null
     */
    public ?array $a_filter = null;

    /**
     * CID of a combobox class.
     * `null` until initialized.
     *
     * One of {@link \WlSdk\Core\Tool\Combobox\ToolComboboxAbstract} subclasses.
     *
     * @var int|null
     * @see \WlSdk\Core\Tool\Combobox\ToolComboboxAbstract
     */
    public ?int $cid = null;

    /**
     * ID of the combobox.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * Key of the combobox.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * The name of the combobox.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Value of combobox.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_data_additional' => $this->a_data_additional,
            'a_filter' => $this->a_filter,
            'cid' => $this->cid,
            's_id' => $this->s_id,
            's_key' => $this->s_key,
            's_name' => $this->s_name,
            's_value' => $this->s_value,
            ],
            static fn ($v) => $v !== null
        );
    }
}
