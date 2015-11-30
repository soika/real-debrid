<?php

namespace RealDebrid\Request\Torrents;

use RealDebrid\Auth\Token;
use RealDebrid\Request\AbstractRequest;
use RealDebrid\Request\RequestType;

/**
 * Class SelectFilesRequest
 *
 * @package RealDebrid\Request\Torrents
 * @author Valentin GOT
 */
class SelectFilesRequest extends AbstractRequest {
    private $id;
    private $body = array();

    /**
     * Select files of a torrent to start it
     * Warning: To get file IDs, use /torrents/info/{id}
     *
     * @param Token $token Access token
     * @param string $id Torrent ID
     * @param string $files Selected files IDs (comma separated) or "all"
     */
    public function __construct(Token $token, $id, $files) {
        parent::__construct();

        $this->setToken($token);
        $this->id = $id;
        $body['files'] = $files;
    }

    public function getId() {
        return $this->id;
    }

    public function getRequestType() {
        return RequestType::POST;
    }

    public function getUri() {
        return "torrents/selectFiles/:id";
    }

    public function getPostBody() {
        return $this->body;
    }
}