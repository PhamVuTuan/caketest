<?php
namespace App\Controller;


class TestsController extends AppController
{
    public function view()
    {
        $arr = array(1,2,3,4);

        $this->set('data',$arr);

        echo 123; exit;
    }

}
