<?php
namespace WlSdk\Wl\Appointment\Edit;

class AddonUpdateGetResponseAddonData
{
    /**
     * Data about appointment add-ons.
     *
     * @var AddonUpdateGetResponseAddonDataAddon|null
     */
    public ?AddonUpdateGetResponseAddonDataAddon $a_addon = null;

    /**
     * Add-ons available for purchase: zero quantity, zero usage quantity, and zero banked quantity.
     *
     * @var AddonUpdateGetResponseAddonDataAddonBuy|null
     */
    public ?AddonUpdateGetResponseAddonDataAddonBuy $a_addon_buy = null;

    /**
     * Add-ons already owned but not selected: zero quantity, zero usage quantity, non-zero banked quantity.
     *
     * @var AddonUpdateGetResponseAddonDataAddonOwn|null
     */
    public ?AddonUpdateGetResponseAddonDataAddonOwn $a_addon_own = null;

    /**
     * Add-ons selected for this appointment: non-zero quantity or non-zero usage quantity.
     *
     * @var AddonUpdateGetResponseAddonDataAddonSelect|null
     */
    public ?AddonUpdateGetResponseAddonDataAddonSelect $a_addon_select = null;

    /**
     * Whether at least one of appointment add-ons is bankable.
     *
     * @var bool|null
     */
    public ?bool $is_addon_banking = null;

    /**
     * Whether all appointment add-ons have non-zero quantity or non-zero usage quantity.
     *
     * @var bool|null
     */
    public ?bool $is_all_addon_selected = null;

    /**
     * Determines whether the add-on search field needs to be shown.
     *
     * @var bool|null
     */
    public ?bool $is_search = null;

    public function __construct(array $data)
    {
        $this->a_addon = isset($data['a_addon']) ? new AddonUpdateGetResponseAddonDataAddon((array)$data['a_addon']) : null;
        $this->a_addon_buy = isset($data['a_addon_buy']) ? new AddonUpdateGetResponseAddonDataAddonBuy((array)$data['a_addon_buy']) : null;
        $this->a_addon_own = isset($data['a_addon_own']) ? new AddonUpdateGetResponseAddonDataAddonOwn((array)$data['a_addon_own']) : null;
        $this->a_addon_select = isset($data['a_addon_select']) ? new AddonUpdateGetResponseAddonDataAddonSelect((array)$data['a_addon_select']) : null;
        $this->is_addon_banking = isset($data['is_addon_banking']) ? (bool)$data['is_addon_banking'] : null;
        $this->is_all_addon_selected = isset($data['is_all_addon_selected']) ? (bool)$data['is_all_addon_selected'] : null;
        $this->is_search = isset($data['is_search']) ? (bool)$data['is_search'] : null;
    }
}
