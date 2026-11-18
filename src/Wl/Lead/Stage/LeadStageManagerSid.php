<?php

namespace WlSdk\Wl\Lead\Stage;

/**
 * Who manages the lead stages of the locations of an Enterprise.
 *
 * The value is chosen by the Enterprise Headquarters in the setting "Lead stages are managed by" and is stored as
 * {@link \WlSdk\Wl\Business\Config\Option\OptionSidAbstract}.
 *
 * Last used ID: 2.
 *
 * Values:
 * - 1 (`EACH_LOCATION`): Each location manages its own lead stages, also after the Enterprise Headquarters pushed its
 * stages to it.
 * - 2 (`HEADQUARTERS`): The Enterprise Headquarters manages the lead stages. A location that received a push can view
 * its stages, but
 *   its staff can not add, rename, reorder or delete them.
 */
class LeadStageManagerSid
{
    /** Each location manages its own lead stages, also after the Enterprise Headquarters pushed its stages to it. */
    public const EACH_LOCATION = 1;

    /** The Enterprise Headquarters manages the lead stages. A location that received a push can view its stages, but */
    public const HEADQUARTERS = 2;
}
