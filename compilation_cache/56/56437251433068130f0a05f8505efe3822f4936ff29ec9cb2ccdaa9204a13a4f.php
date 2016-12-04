<?php

/* about.html */
class __TwigTemplate_18d9bc7abd618ace1f85cf62f0786b070be0497e2830db68b6ae276f28a1b82e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "about.html", 1);
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
        echo "<div class=\"news-container\">
\t<p class=\"about\">Про Damage Records</p>
\t<article>
\t";
        // line 6
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "text", array());
        echo "
\t</article>
\t<div class=\"popup\">
\t\t<p><a data-target=\"#collapsable\" data-toggle=\"collapse\" aria-expanded=\"false\" href=\"#subscribe\">Підписатися на новини Damage Records</a></p>
\t\t<form action=\"#\" id=\"collapsable\" method=\"POST\" name=\"subscribe-email\" class=\"collapse\">
\t\t\t<input name=\"name\" required type=\"text\" class=\"popup-form form-control\" placeholder=\"Ім'я\">
\t\t\t<input name=\"email\" required type=\"email\" class=\"popup-form form-control\" placeholder=\"E-Mail\">
\t\t\t<input type=\"submit\" value=\"Підписатися!\" class=\"popup-form btn\" style=\"vertical-align: top;\">
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "about.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
