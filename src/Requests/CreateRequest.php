<?php

namespace Pingdelivery\Requests;


class CreateRequest
{
    public $number;
    public $senderNumber;

    /**
     * @var \Pingdelivery\Entities\Recipient
     */
    public $recipient;

    /**
     * @var \Pingdelivery\Entities\Items
     */
    public $items;

    public $paytype;
    public $price;
    public $assessed;
    public $comment;
}