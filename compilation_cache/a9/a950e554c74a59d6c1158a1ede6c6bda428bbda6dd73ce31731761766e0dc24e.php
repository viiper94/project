<?php

/* artists.html */
class __TwigTemplate_496c1aca6e1fb61d8c96606a21884e3aac4c4d20d6a39c5370b4d93dad7cd361 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artists"]) ? $context["artists"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 4
            echo "<div class=\"item\" style=\"background-image: url(/images/artists/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "artist_picture", array()), "html", null, true);
            echo ");\">
\t<a href=\"/artists/";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "artist_id", array()), "html", null, true);
            echo "\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"title\">
\t\t\t\t<h3>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "artist_name", array()), "html", null, true);
            echo "</h3>
\t\t\t</div>
\t\t</div>
\t</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "<div class=\"clearfix\"></div>
";
        // line 15
        if (($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array()) > 1)) {
            // line 16
            echo "<div class=\"paginations text-center row\">
    ";
            // line 17
            $this->loadTemplate("pagination.html", "artists.html", 17)->display($context);
            // line 18
            echo "</div>
";
        }
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
        return array (  68 => 18,  66 => 17,  63 => 16,  61 => 15,  58 => 14,  46 => 8,  40 => 5,  35 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
