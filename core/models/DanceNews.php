<?php
/**
 * Created by PhpStorm.
 * User: DecoDer
 * Date: 10.11.2016
 * Time: 0:31
 */

namespace app\models;


class DanceNews extends News
{
    public function upload()
    {
        if ($this->validate()) {
            $name = $this->img->baseName . '.' . $this->img->extension;
            $this->img->saveAs(dirname(__DIR__) . '/web/images/news/' . $name);
            return true;
        } else {
            return false;
        }
    }
}