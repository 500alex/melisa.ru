<?php
/**
 * Created by PhpStorm.
 * User: DecoDer
 * Date: 08.11.2016
 * Time: 1:08
 */

namespace app\models;


class DanceTeachers extends Teachers
{
    public function upload()
    {
        if ($this->validate()) {
            $name = $this->img->baseName . '.' . $this->img->extension;
            $this->img->saveAs(dirname(__DIR__) . '/web/images/teachers/' . $name);
            return true;
        } else {
            return false;
        }
    }
}