<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 26/07/2017
 * Time: 10:01 AM
 */

namespace App;


class View
{

    protected $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }
    public function display($path){
        echo $this->render($path);
    }
    public function render(string $path){
        ob_start();

        //getting rid of $this in templates
        foreach ($this->data as $k => $v){
            $$k = $v;
        }
        include 'Templates/Partial/header.php';

        include $path;

        include 'Templates/Partial/footer.php';

        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}