<?php
/**
 * Created by PhpStorm.
 * User: kuzma
 * Date: 15.10.18
 * Time: 1:13
 */

namespace Framework\Http;


class RequestFactory
{
    public static function fromGlobals(array $query=null, array $body=null){
        return (new Request())
            ->setQueryParams($query ?: $_GET)
            ->setParsedBody($body ?: $_POST);
    }

}