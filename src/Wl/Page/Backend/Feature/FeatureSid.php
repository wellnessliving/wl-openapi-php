<?php

namespace WlSdk\Wl\Page\Backend\Feature;

/**
 * List of available features in the system that can be shown in owner's header.
 *
 * Last used ID: 37.
 *
 * Values:
 * - 34 (`AI_AGENT`): Ai Agent.
 * - 32 (`ALERT`): Alerts.
 * - 28 (`ALL`): List of all features.
 * - 36 (`ANDROID_CHECK_IN_APP`): WellnessLiving Android Check-In App.
 * - 17 (`ATTENDANCE`): Popup window where clients can select classes and add themselves to the attendance list.
 * - 9 (`BACKEND_DASHBOARD`): Business settings basic page.
 * - 20 (`BUSINESS_PROMOTE`): Business settings for synchronization with third-party booking services.
 * - 37 (`BUSINESS_SUBSCRIPTION`): Business subscription landing page.
 * - 1 (`CATALOG_LIST`): Online store.
 * - 2 (`CLIENT_ALL`): Report with list of all clients.
 * - 31 (`COLLECTION`): List of the collections overdue payments.
 * - 18 (`DIRECT_MAIL`): Client campaigns and area mails.
 * - 30 (`FINANCE`): Finance options and Quickbooks integration.
 * - 33 (`FITBUILDER`): Fit Builder setup page.
 * - 14 (`FRONTEND`): Frontend part of the business.
 * - 35 (`IOS_CHECK_IN_APP`): WellnessLiving iOS Check-In App.
 * - 22 (`LEAD_ADD`): Add New Lead.
 *
 *   Opens form for adding new user based on the fields configured in the "Lead Capture Widget".
 * - 21 (`LOG_REPORT`): Log report of staff activity.
 * - 12 (`MARKETING`): List of email patterns that are connected to the online marketing.
 * - 19 (`PARTNER`): Page with information about partner program.
 * - 23 (`PRESENCE`): Presence landing page, where staff can get their custom website.
 * - 29 (`QUIZ`): Quiz form creator.
 * - 16 (`RECEPTION`): Popup window where client can check-in to the upcoming classes.
 * - 4 (`REPORT_DASHBOARD`): Customizable business dashboard.
 * - 3 (`REPORT_FAVORITE`): Favorites reports.
 * - 5 (`REVIEW_LIST`): List of review.
 * - 11 (`REWARD`): Rewards program.
 * - 6 (`SCHEDULE`): Business schedule.
 * - 15 (`SELF_SIGNUP`): Popup window where new clients can sign up themselves to the classes.
 * - 13 (`SKIN_APP`): Page to config custom client's app.
 * - 10 (`SUPPORT`): Link to the page of the support page.
 * - 8 (`TASK_MANAGEMENT`): Creation of the user.
 * - 24 (`TOAST_MESSAGE`): Toast notifications.
 * - 25 (`TWO_WAY_SMS`): Landing page for 2-way SMS feature.
 * - 7 (`USER_CREATE`): Creation of the user.
 * - 26 (`VIDEO`): On-Demand videos with FitVID.
 * - 27 (`VIRTUAL`): Virtual sessions with FitLIVE.
 */
class FeatureSid
{
    /** Ai Agent. */
    public const AI_AGENT = 34;

    /** Alerts. */
    public const ALERT = 32;

    /** List of all features. */
    public const ALL = 28;

    /** WellnessLiving Android Check-In App. */
    public const ANDROID_CHECK_IN_APP = 36;

    /** Popup window where clients can select classes and add themselves to the attendance list. */
    public const ATTENDANCE = 17;

    /** Business settings basic page. */
    public const BACKEND_DASHBOARD = 9;

    /** Business settings for synchronization with third-party booking services. */
    public const BUSINESS_PROMOTE = 20;

    /** Business subscription landing page. */
    public const BUSINESS_SUBSCRIPTION = 37;

    /** Online store. */
    public const CATALOG_LIST = 1;

    /** Report with list of all clients. */
    public const CLIENT_ALL = 2;

    /** List of the collections overdue payments. */
    public const COLLECTION = 31;

    /** Client campaigns and area mails. */
    public const DIRECT_MAIL = 18;

    /** Finance options and Quickbooks integration. */
    public const FINANCE = 30;

    /** Fit Builder setup page. */
    public const FITBUILDER = 33;

    /** Frontend part of the business. */
    public const FRONTEND = 14;

    /** WellnessLiving iOS Check-In App. */
    public const IOS_CHECK_IN_APP = 35;

    /** Add New Lead. */
    public const LEAD_ADD = 22;

    /** Log report of staff activity. */
    public const LOG_REPORT = 21;

    /** List of email patterns that are connected to the online marketing. */
    public const MARKETING = 12;

    /** Page with information about partner program. */
    public const PARTNER = 19;

    /** Presence landing page, where staff can get their custom website. */
    public const PRESENCE = 23;

    /** Quiz form creator. */
    public const QUIZ = 29;

    /** Popup window where client can check-in to the upcoming classes. */
    public const RECEPTION = 16;

    /** Customizable business dashboard. */
    public const REPORT_DASHBOARD = 4;

    /** Favorites reports. */
    public const REPORT_FAVORITE = 3;

    /** List of review. */
    public const REVIEW_LIST = 5;

    /** Rewards program. */
    public const REWARD = 11;

    /** Business schedule. */
    public const SCHEDULE = 6;

    /** Popup window where new clients can sign up themselves to the classes. */
    public const SELF_SIGNUP = 15;

    /** Page to config custom client's app. */
    public const SKIN_APP = 13;

    /** Link to the page of the support page. */
    public const SUPPORT = 10;

    /** Creation of the user. */
    public const TASK_MANAGEMENT = 8;

    /** Toast notifications. */
    public const TOAST_MESSAGE = 24;

    /** Landing page for 2-way SMS feature. */
    public const TWO_WAY_SMS = 25;

    /** Creation of the user. */
    public const USER_CREATE = 7;

    /** On-Demand videos with FitVID. */
    public const VIDEO = 26;

    /** Virtual sessions with FitLIVE. */
    public const VIRTUAL = 27;
}
