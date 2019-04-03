<?php
/**
 * Created by PhpStorm.
 * User: Maik
 * Date: 03/04/2019
 * Time: 15:58
 */

namespace Hcode;

class PageAdmin extends Page {

    public function __construct($opts = array(), $tpl_dir = "/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }
}