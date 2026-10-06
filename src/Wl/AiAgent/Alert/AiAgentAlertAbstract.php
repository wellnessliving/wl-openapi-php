<?php

namespace WlSdk\Wl\AiAgent\Alert;

/**
 * Alerts based on `Ai Agent` events.
 *
 * Values:
 * - 2342 (`Wl\AiAgent\Alert\AiAgentCallbackRequestAlert`): Alert that is sent to a staff member when a client requests
 * a callback during a conversation with `Ai Agent`.
 * - 2341 (`Wl\AiAgent\Alert\AiAgentConversationPhoneAlert`): Alert that is sent to a staff member when a new phone
 * conversation starts between a client and `Ai Agent`.
 * - 2340 (`Wl\AiAgent\Alert\AiAgentConversationTextAlert`): Alert that is sent to a staff member when a new text
 * conversation starts between a client and `Ai Agent`.
 */
class AiAgentAlertAbstract
{
    /** Alert that is sent to a staff member when a client requests a callback during a conversation with `Ai Agent`. */
    public const AiAgentCallbackRequestAlert = 2342;

    /** Alert that is sent to a staff member when a new phone conversation starts between a client and `Ai Agent`. */
    public const AiAgentConversationPhoneAlert = 2341;

    /** Alert that is sent to a staff member when a new text conversation starts between a client and `Ai Agent`. */
    public const AiAgentConversationTextAlert = 2340;
}
