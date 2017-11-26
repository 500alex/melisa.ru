<?php
/**
 * Created by PhpStorm.
 * User: DecoDer
 * Date: 27.10.2016
 * Time: 1:12
 */

namespace app\models;


class DanceSliders extends Sliders
{
    public function upload()
    {
        if ($this->validate()) {
            $name = $this->img->baseName . '.' . $this->img->extension;
            $this->img->saveAs(dirname(__DIR__) . '/web/images/slider/' . $name);
            return true;
        } else {
            return false;
        }
    }
}