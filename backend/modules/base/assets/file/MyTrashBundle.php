<?php

namespace backend\modules\base\assets\file;

use backend\modules\base\assets\lib\ChosenBundle;
use backend\modules\base\assets\lib\DateTimePickerBundle;
use backend\modules\base\assets\InitBundle;
use backend\modules\base\assets\lib\MaskedInputBundle;

class MyTrashBundle extends InitBundle
{
    public $js = [
        'js/file/my_trash.js',
    ];

    public $depends = [
        ChosenBundle::class,
        MaskedInputBundle::class,
        DateTimePickerBundle::class,
    ];

    public function __construct()
    {
        parent::__construct();
        foreach ($this->css as $k => $v) {
            $this->css[$k] = $v . "?m=" . strval(rand(10000, 99999));
        }
        foreach ($this->js as $k => $v) {
            $this->js[$k] = $v . "?m=" . strval(rand(10000, 99999));
        }
    }
}