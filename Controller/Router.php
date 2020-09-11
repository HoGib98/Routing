<?php

namespace Asian\Routing\Controller;

/**
 * Aureatelabs Custom router Controller Router
 */
class Router implements \Magento\Framework\App\RouterInterface
{
    /**
     * @var \Magento\Framework\App\ActionFactory
     */
    protected $actionFactory;

    /**
     * Response
     *
     * @var \Magento\Framework\App\ResponseInterface
     */
    protected $_response;

    /**
     * @param \Magento\Framework\App\ActionFactory $actionFactory
     * @param \Magento\Framework\App\ResponseInterface $response
     */
    public function __construct(
        \Magento\Framework\App\ActionFactory $actionFactory,
        \Magento\Framework\App\ResponseInterface $response
    ) {
        $this->actionFactory = $actionFactory;
        $this->_response = $response;
    }

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @return \Magento\Framework\App\ActionInterface|void
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $identifier = trim($request->getPathInfo(), '/');
        if (strpos($identifier, 'us') !== false || strpos($identifier, 'front_name/index/us') !== false) {
            $request->setModuleName('front_name')
                ->setControllerName('index')
                ->setActionName('us');

        } else if (strpos($identifier, 'uk') !== false) {
            $request->setModuleName('front_name')
                ->setControllerName('index')
                ->setActionName('uk');

        } else if (strpos($identifier, 'eu') !== false) {
            $request->setModuleName('front_name')
                ->setControllerName('index')
                ->setActionName('eu');

        } else {
            $request->setModuleName('front_name')
                ->setControllerName('index')
                ->setActionName('index');

        }
        return $this->actionFactory
            ->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
    }
}
