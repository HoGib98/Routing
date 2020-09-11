<?php
namespace Asian\Routing\Block;

class Test extends \Magento\Framework\View\Element\Template
{
    public function geturluk()
    {
        $datas = ['front_name/index/us', 'front_name/index/eu'];
        return $datas;
    }
    public function geturlus()
    {
        $datas = ['front_name/index/uk', 'front_name/index/eu'];
        return $datas;
    }
    public function geturleu()
    {
        $datas = ['front_name/index/us', 'front_name/index/uk'];
        return $datas;
    }
}
