<?php

namespace RealDebrid\Request\Settings;

use RealDebrid\Auth\Token;
use RealDebrid\Request\AbstractRequest;
use RealDebrid\Request\RequestType;

/**
 * POST /settings/disableLogs
 *
 * Disable user logs
 * @package RealDebrid\Request\Settings
 * @author Valentin GOT
 */
class DisableLogsRequest extends AbstractRequest {

    /**
     * Disable user logs
     *
     * Warning: This action is currently irreversible, take care.
     * @param Token $token Access token
     */
    public function __construct(Token $token) {
        parent::__construct();

        $this->setToken($token);
    }

    public function getRequestType() {
        return RequestType::POST;
    }

    public function getUri() {
        return "settings/disableLogs";
    }
}