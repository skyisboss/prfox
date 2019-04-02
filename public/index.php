<?php
// @package    Prfox PHP-Framework
// @author     pixelFox skyisboss@gmail.com
// @link       https://github.com/skyisboss/Prfox
// @copyright  Copyright (c) 2015-2018 
// @license    http://www.apache.org/licenses/LICENSE-2.0
// 
// web入口

require './../vendor/autoload.php';

use Prfox\Base\Application;

(new Application(dirname(__DIR__)))->run();

