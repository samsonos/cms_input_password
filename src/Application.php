<?php
/**
 * Created by PhpStorm.
 * User: onysko
 * Date: 17.04.2015
 * Time: 12:17
 */

namespace samsoncms\input\password;

/**
 * SamsonCMS Application for date time input field
 * @package samsoncms\input\datetime
 */
class Application extends \samsoncms\input\Application
{
    /** @var int Field type number */
    public static $type = 15;

    /** @var string SamsonCMS field class */
    protected $fieldClass = '\samsoncms\input\password\Password';
}
