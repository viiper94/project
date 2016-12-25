<?php

/* releases.html */
class __TwigTemplate_8b40a1fc12cedf2e9b1cef5cde2818d7e17c51ef48d7f1d02184d0d2533c6eb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "releases.html", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["releases"]) ? $context["releases"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "<div class=\"item\" style=\"background-image: url(/images/releases/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_cover", array()), "html", null, true);
            echo ");\">
\t<a href=\"/releases/";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
            echo "\" data-target=\"releases\" class=\"ajaxable\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"title\">
\t\t\t\t<h4>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_artist", array()), "html", null, true);
            echo "</h4>
\t\t\t\t<h3>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_title", array()), "html", null, true);
            echo "</h3>
\t\t\t</div>
\t\t</div>
\t</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<div class=\"clearfix\"></div>
";
        // line 16
        if (($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array()) > 1)) {
            // line 17
            echo "<div class=\"paginations text-center row\">
    ";
            // line 18
            $this->loadTemplate("pagination.html", "releases.html", 18)->display($context);
            // line 19
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "releases.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  72 => 18,  69 => 17,  67 => 16,  64 => 15,  52 => 9,  48 => 8,  40 => 5,  35 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
