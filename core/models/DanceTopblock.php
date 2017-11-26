<?php
/**
 * Created by PhpStorm.
 * User: DecoDer
 * Date: 28.10.2016
 * Time: 1:16
 */

namespace app\models;


class DanceTopblock extends Topblock
{
    public function upload()
    {
        if ($this->validate()) {
            $name = $this->img->baseName . '.' . $this->img->extension;
            $this->img->saveAs(dirname(__DIR__) . '/web/images/top_blocks/' . $name);
            return true;
        } else {
            return false;
        }
    }
}