<?php

/* index.html */
class __TwigTemplate_956f5ba1b2858587fc2eee58d15975a261c5489a565197c547d87af676baaabc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'msg' => array($this, 'block_msg'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<link rel=\"stylesheet\" href=\"/admin/bootstrap/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"/admin/css/style.css\">
\t<script src=\"/admin/js/jquery-3.1.1.min.js\"></script>
\t<script src=\"/admin/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/admin/js/script.js\"></script>
    <title>Панель керування</title>
</head>
<body>
\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t  \t<div class=\"container-fluid\">
\t   \t\t<div class=\"navbar-header\">
\t      \t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" 
\t      \t\taria-expanded=\"false\">
\t\t\t        <span class=\"sr-only\">Розкрити меню</span>
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t        <span class=\"icon-bar\"></span>
\t\t      \t</button>
\t      \t\t<a href=\"/admin/\"><img src=\"/assets/img/damage-logo-sign-600.png\" style=\"height: 50px\"></a>
\t    \t</div>
\t    \t<div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
\t      \t\t<ul class=\"nav navbar-nav\">
\t\t        \t<li ";
        // line 27
        if (((isset($context["controller"]) ? $context["controller"] : null) == "news")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin\">НОВИНИ</a></li>
\t\t        \t<li ";
        // line 28
        if (((isset($context["controller"]) ? $context["controller"] : null) == "releases")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/releases\">РЕЛІЗИ</a></li>
\t\t       \t\t<li ";
        // line 29
        if (((isset($context["controller"]) ? $context["controller"] : null) == "artists")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/artists\">АРТИСТИ</a></li>
\t\t        \t<li ";
        // line 30
        if (((isset($context["controller"]) ? $context["controller"] : null) == "about")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/about\">ПРО DAMAGE</a></li>
\t\t        \t<li ";
        // line 31
        if (((isset($context["controller"]) ? $context["controller"] : null) == "contacts")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/contacts\">КОНТАКТИ</a></li>
\t      \t\t</ul>
\t    \t</div>
\t\t</div>
\t</nav>
    ";
        // line 36
        $this->displayBlock('msg', $context, $blocks);
        // line 41
        echo "\t<main class=\"col-md-10 col-md-offset-1\">
\t\t";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "\t</main>
</body>
</html>";
    }

    // line 36
    public function block_msg($context, array $blocks = array())
    {
        // line 37
        echo "        ";
        if ( !twig_test_empty((isset($context["msg"]) ? $context["msg"] : null))) {
            // line 38
            echo "            ";
            echo (isset($context["msg"]) ? $context["msg"] : null);
            echo "
        ";
        }
        // line 40
        echo "    ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "
   \t\t";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  112 => 42,  108 => 40,  102 => 38,  99 => 37,  96 => 36,  90 => 45,  88 => 42,  85 => 41,  83 => 36,  73 => 31,  67 => 30,  61 => 29,  55 => 28,  49 => 27,  21 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
