<?php

namespace Framework\Http;

class Request
{
    private $queryParams;
    private $parsedBody;

    public function getQueryParams()
    {
        return $this->queryParams;
    }

    public function setQueryParams(array $params){
        $new = clone $this;
        $new->queryParams = $params;
        return $new;
    }

    public function getParsedBody()
    {
        return $this->parsedBody;
    }

    public function setParsedBody($data){
        $new = clone $this;
        $new->parsedBody = $data;
        return $new
            ;
    }
}
