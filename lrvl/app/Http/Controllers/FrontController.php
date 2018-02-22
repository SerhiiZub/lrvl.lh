<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 22.02.18
 * Time: 15:13
 */

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;


class FrontController extends BaseController
//class FrontController extends Controller
{
    private $tplDir;
    protected $controllerName;
    protected $class;

    public function __construct()
    {
        $this->class = \get_class($this);
        $this->controllerName = str_replace('controller', '', strtolower(class_basename($this->class)));
        $this->tplDir = 'front.'.$this->controllerName.'.';
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return $this->actionIndex();
    }

    /**
     * @param $template
     * @param array $data
     * @param array $mergeData
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function view($template, array $data = [], array $mergeData = []){
        return view($this->tplDir.$template, $data, $mergeData);
    }

    public function actionIndex()
    {
        return $this->view('index');
    }
}