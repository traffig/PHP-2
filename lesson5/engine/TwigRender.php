<?php


namespace app\engine;


use app\interfaces\IRender;

class TwigRender implements IRender
{

    public function renderTemplate($template, $params = [])
    {
        $loader = new \Twig\Loader\FilesystemLoader('../twigTemplates');
        $twig = new \Twig\Environment($loader);
        $templatePath = $template . '.tmpl';
//        var_dump($templatePath);
        return $twig->render($templatePath, $params);
    }
}