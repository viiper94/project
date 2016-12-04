<?php

/* main.html */
class __TwigTemplate_eff7743650cc60303cc0bd67a91e3887689e37580ecea5577a083ed3a1f5e027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "main.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"menu\">
\t<button href=\"#\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span></button>
\t<button href=\"#\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-pencil\"></button>
</div>
<div class=\"form-inline pull-right\">
\t<input type='text' class='form-control search-form' id='search' placeholder='Пошук новин'>
</div>
<form action=\"#\" method=\"POST\">
\t<input type=\"button\" class=\"btn btn-primary\" value=\"Сортувати\">
\t<div class=\"content\">
\t\t<div class=\"item\">
\t\t\t<div class=\"item-image inline\">
\t\t\t\t<a href=\"#\" style=\"background-image: url(../images/news/1.jpg);\"></a>
\t\t\t</div>
\t\t\t<div class=\"item-info inline\">
\t\t\t\t<h4>Lorem</h4>
\t\t\t\t<h5>Ipsum</h5>
\t\t\t</div>
\t\t\t<div class=\"item-actions inline\">
\t\t\t\t<a class='btn btn-success' href='#'>
\t\t\t\t\t<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Редагувати
\t\t\t\t</a>
\t\t\t\t<a class='btn btn-danger' href='#' onclick='return confirm(\\\"Удалить?\\\")'>
\t\t\t\t\t<span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Видалити
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"item-sort inline\">
\t\t\t\t<div class='inline' style='width: 48px;'>
\t\t\t\t\t<a class='btn btn-info' href='#'><span class='glyphicon glyphicon-arrow-up'></span></a>
\t\t\t\t\t<a class='btn btn-info' href='#'><span class='glyphicon glyphicon-arrow-down'></span></a>
\t\t\t\t</div>
\t\t\t\t<div class='inline' style=\"max-width: 100px;\">
\t\t\t\t\t<label for='field'>Порядок сортування:<br>
\t\t\t\t\t<input type='text' id='field' class='form-control' value='1'>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
