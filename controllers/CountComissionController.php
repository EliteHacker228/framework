<?php

class CountComissionController
{
    /**
     * Action name
     * @var string
     */
    public $name = 'count-comission';

    /**
     * Hello Action
     * @return Response
     */
    public function countComissionAction() {

        return new Response($this->render('count-comission-page-template', []));
    }

    protected function render($templateName, $vars = [])
    {
        ob_start();
        extract($vars);
        include sprintf('templates/%s.php', $templateName);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function __call($name, $arguments)
    {
        return new Response('Sorry but this action not found',
            '404', 'Not found');
    }
}