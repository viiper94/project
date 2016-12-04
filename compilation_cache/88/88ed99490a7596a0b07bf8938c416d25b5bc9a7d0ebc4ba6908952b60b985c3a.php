<?php

/* main.html */
class __TwigTemplate_7b341e824c6dee2e2898f94b1a3c72c494dd0706565ee54a3dec278cbf711b78 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "<div class=\"item item-block\" style=\"background-image: url(./images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_title_picture", array()), "html", null, true);
            echo ");\">
\t<a href=\"/news/";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
            echo "\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"date\">
\t\t\t\t<span>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_date", array()), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t\t<div class=\"title\">
\t\t\t\t<span>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_title", array()), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t</div>
\t</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "<div class=\"clearfix\"></div>
";
        // line 18
        if (($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array()) > 1)) {
            // line 19
            echo "<div class=\"paginations text-center row\">
    ";
            // line 20
            $this->loadTemplate("pagination.html", "main.html", 20)->display($context);
            // line 21
            echo "</div>
";
        }
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
        return array (  74 => 21,  72 => 20,  69 => 19,  67 => 18,  64 => 17,  52 => 11,  46 => 8,  40 => 5,  35 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
