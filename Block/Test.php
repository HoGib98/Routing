<?php
namespace Asian\Routing\Block;

class Test extends \Magento\Framework\View\Element\Template
{
    public function geturluk()
    {
        $datas = ['us', 'eu'];
        return $datas;
    }
    public function geturlus()
    {
        $datas = ['uk', 'eu'];
        return $datas;
    }
    public function geturleu()
    {
        $datas = ['us', 'uk'];
        return $datas;
    }
}
