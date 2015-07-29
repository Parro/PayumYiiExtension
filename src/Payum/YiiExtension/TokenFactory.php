<?php
namespace Payum\YiiExtension;

use Payum\Core\Security\AbstractTokenFactory;

class TokenFactory extends AbstractTokenFactory
{
    /**
     * @param string $path
     * @param array $parameters
     *
     * @return string
     */
    protected function generateUrl($path, array $parameters = array())
    {
        $ampersand = '&';
        $schema = '';

                \Yii::warning($path);
                \Yii::warning($parameters);
                $urlParameters = [trim($path,'/')];

                foreach ($parameters as $key => $value) {
                    $urlParameters[$key] = $value;
                }
                \Yii::warning($urlParameters);
        return
            \Yii::$app->getRequest()->getHostInfo($schema).
            \Yii::$app->getUrlManager()->createUrl($urlParameters)
        ;
    }
}
