<?php
/**
 * Created by PhpStorm.
 * User: onysko
 * Date: 17.04.2015
 * Time: 12:17
 */
namespace samsoncms\input\password;

use samsoncms\input\Field;

/**
 * SamsonCMS Date time input field
 * @package samsoncms\input\datetime
 */
class Password extends Field
{
    /** Database object field name */
    protected $param = 'Value';

    /** Special CSS classname for nested field objects to bind JS and CSS */
    protected $cssClass = '__textarea';
}
