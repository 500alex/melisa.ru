<?php
/**
 * Created by PhpStorm.
 * User: DecoDer
 * Date: 08.11.2016
 * Time: 1:54
 */

namespace app\models;


class DanceServices extends Services
{
    public function upload()
    {
        if ($this->validate()) {
            $name = $this->img->baseName . '.' . $this->img->extension;
            $this->img->saveAs(dirname(__DIR__) . '/web/images/services/' . $name);
            return true;
        } else {
            return false;
        }
    }
}