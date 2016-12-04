<?php

/* artists.html */
class __TwigTemplate_b8982da5f628a2bc652b76d3376a20464e670510ba0102bef90d9b62b2fe017e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "artists.html", 1);
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
        echo "<div class=\"item\" style=\"background-image: url(./images/artists/1.jpg);\">
\t<a href=\"artist.html\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"title\">
\t\t\t\t<span>Lorem ipsum</span>
\t\t\t</div>\t\t\t\t\t
\t\t</div>
\t</a>
</div>
<div class=\"item\" style=\"background-image: url(./images/artists/1.jpg);\">
\t<a href=\"#\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"title\">
\t\t\t\t<span>Lorem ipsum</span>
\t\t\t</div>\t\t\t\t\t
\t\t</div>
\t</a>
</div>
<div class=\"item\" style=\"background-image: url(./images/artists/1.jpg);\">
\t<a href=\"#\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"title\">
\t\t\t\t<span>Lorem ipsum</span>
\t\t\t</div>\t\t\t\t\t
\t\t</div>
\t</a>
</div>
<div class=\"item\" style=\"background-image: url(./images/artists/1.jpg);\">
\t<a href=\"#\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"title\">
\t\t\t\t<span>Lorem ipsum</span>
\t\t\t</div>\t\t\t\t\t
\t\t</div>
\t</a>
</div>
<div class=\"item\" style=\"background-image: url(./images/artists/1.jpg);\">
\t<a href=\"#\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"title\">
\t\t\t\t<span>Lorem ipsum</span>
\t\t\t</div>\t\t\t\t\t
\t\t</div>
\t</a>
</div>
<div class=\"item\" style=\"background-image: url(./images/artists/1.jpg);\">
\t<a href=\"#\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"title\">
\t\t\t\t<span>Lorem ipsum</span>
\t\t\t</div>\t\t\t\t\t
\t\t</div>
\t</a>
</div>
<div class=\"clearfix\"></div>
<div class=\"paginations text-center\">
\t<a href=\"#\" class=\"prev-pgn\"><span class=\"glyphicon glyphicon-backward\"></span></a>
\t<a href=\"#\" class=\"pgn pgn-current\">1</a>
\t<a href=\"#\" class=\"pgn\">2</a>
\t<a href=\"#\" class=\"pgn\">3</a>
\t<a href=\"#\" class=\"pgn\">4</a>
\t<span style=\"color: #fff\">...</span>
\t<a href=\"#\" class=\"pgn\">22</a>
\t<a href=\"#\" class=\"next-pgn\"><span class=\"glyphicon glyphicon-forward\"></span></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "artists.html";
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
