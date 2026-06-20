<?php
namespace WlSdk\Wl\Business\Select;

class BusinessSelectGetResponseSelect
{
    /**
     * List of businesses the user can access. It is an array, each value is an array with the following keys:
     *
     * @var BusinessSelectGetResponseSelectBusiness|null
     */
    public ?BusinessSelectGetResponseSelectBusiness $a_business = null;

    /**
     * This will be `true` if one of the listed businesses is selected.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * Information for the widget, the name of the key in the list. This should always be `k_business`.
     *
     * @var string|null
     */
    public ?string $name = null;

    /**
     * Information for the widget, what the widget will do on selection.
     *
     * @var string|null
     */
    public ?string $onchange = null;

    /**
     * Information for the widget, the widget instance ID.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * Information for the widget, any additional CSS to apply.
     *
     * @var string|null
     */
    public ?string $s_style = null;

    public function __construct(array $data)
    {
        $this->a_business = isset($data['a_business']) ? new BusinessSelectGetResponseSelectBusiness((array)$data['a_business']) : null;
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->name = isset($data['name']) ? (string)$data['name'] : null;
        $this->onchange = isset($data['onchange']) ? (string)$data['onchange'] : null;
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
        $this->s_style = isset($data['s_style']) ? (string)$data['s_style'] : null;
    }
}
