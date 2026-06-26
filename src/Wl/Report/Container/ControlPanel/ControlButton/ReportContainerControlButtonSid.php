<?php

namespace WlSdk\Wl\Report\Container\ControlPanel\ControlButton;

/**
 * List of the control buttons in the report container.
 *
 * Last ID: 25.
 *
 * <b>Note.</b> If you add a new constant you have to change the
 *
 * [ReportContainerControlButtonSid::defaultConfig()](#/components/schemas/Wl.Report.Container.ControlPanel.ControlButton.ReportContainerControlButtonSid)
 * method.
 * Otherwise a user will not be able to customize this button.
 *
 * Values:
 * - 21 (`ADD_NEW_LEAD`): Add new lead button.
 * - 15 (`BOOK_CLASS`): Book a class with the selected users.
 * - 20 (`CAMPAIGN`): 'View campaign' button. Shows campaign mail template.
 * - 17 (`COLLAPSE`): Collapse report cards on page.
 * - 11 (`COLLECTION_CUSTOMIZE`): Customize the collection.
 * - 1 (`CONTACT`): Quick contact button. Shows available methods to send message to user.
 * - 19 (`CONTACT_LOG_ADD`): Add contact log button. Used in "Contact History" report in a client profile.
 * - 8 (`CUSTOMIZE`): Customize the report.
 * - 6 (`DASHBOARD`): Add report to Dashboard.
 * - 10 (`DASHBOARD_REMOVE`): Add report to Dashboard.
 * - 24 (`DELETE_CLIENT`): Delete selected clients button.
 * - 13 (`DOWNLOAD_FILES`): Download button.
 * - 9 (`DUPLICATE`): Duplicate the report.
 * - 18 (`EXPAND`): Expand report cards on page.
 * - 2 (`EXPORT`): Export report button. Shows available methods to export of the report.
 * - 5 (`FAVORITE`): Add report to favorite reports.
 * - 12 (`GENERATE_FILES`): Generate files button.
 * - 16 (`GENERATE_ID`): Generate client id button.
 * - 7 (`GROUP`): Manage client groups button.
 * - 14 (`GROUP_REMOVE`): Remove from group button.
 * - 22 (`IMPORT_CLIENT`): Button for open client import page.
 * - 3 (`PRINTING`): Print report button.
 * - 4 (`SAVE`): Save report button.
 * - 23 (`SEND_CAMPAIGN`): 'Send campaign' dropdown.
 * - 25 (`SEND_WELCOME_EMAIL`): 'Send Welcome Email' to selected clients.
 */
class ReportContainerControlButtonSid
{
    /** Add new lead button. */
    public const ADD_NEW_LEAD = 21;

    /** Book a class with the selected users. */
    public const BOOK_CLASS = 15;

    /** 'View campaign' button. Shows campaign mail template. */
    public const CAMPAIGN = 20;

    /** Collapse report cards on page. */
    public const COLLAPSE = 17;

    /** Customize the collection. */
    public const COLLECTION_CUSTOMIZE = 11;

    /** Quick contact button. Shows available methods to send message to user. */
    public const CONTACT = 1;

    /** Add contact log button. Used in "Contact History" report in a client profile. */
    public const CONTACT_LOG_ADD = 19;

    /** Customize the report. */
    public const CUSTOMIZE = 8;

    /** Add report to Dashboard. */
    public const DASHBOARD = 6;

    /** Add report to Dashboard. */
    public const DASHBOARD_REMOVE = 10;

    /** Delete selected clients button. */
    public const DELETE_CLIENT = 24;

    /** Download button. */
    public const DOWNLOAD_FILES = 13;

    /** Duplicate the report. */
    public const DUPLICATE = 9;

    /** Expand report cards on page. */
    public const EXPAND = 18;

    /** Export report button. Shows available methods to export of the report. */
    public const EXPORT = 2;

    /** Add report to favorite reports. */
    public const FAVORITE = 5;

    /** Generate files button. */
    public const GENERATE_FILES = 12;

    /** Generate client id button. */
    public const GENERATE_ID = 16;

    /** Manage client groups button. */
    public const GROUP = 7;

    /** Remove from group button. */
    public const GROUP_REMOVE = 14;

    /** Button for open client import page. */
    public const IMPORT_CLIENT = 22;

    /** Print report button. */
    public const PRINTING = 3;

    /** Save report button. */
    public const SAVE = 4;

    /** 'Send campaign' dropdown. */
    public const SEND_CAMPAIGN = 23;

    /** 'Send Welcome Email' to selected clients. */
    public const SEND_WELCOME_EMAIL = 25;
}
