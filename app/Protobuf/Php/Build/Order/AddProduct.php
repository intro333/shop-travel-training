<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: order.proto

namespace  App\Protobuf\Php\Build\Order;

use App\Protobuf\Php\Build\GPBMetadata\Order;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>order.AddProduct</code>
 */
class AddProduct extends Message
{
    /**
     * <code>string body = 2;</code>
     */
    private $body = '';

    public function __construct() {
        Order::initOnce();
        parent::__construct();
    }

    /**
     * <code>string body = 2;</code>
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * <code>string body = 2;</code>
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->body = $var;
    }

}

