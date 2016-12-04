<?php

/* artist.html */
class __TwigTemplate_46549de837a1d71bec58dbec2657e6021db39bc0b200be7b6b672bd66bd31732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "artist.html", 1);
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
\t<figure>
\t\t<img src=\"/images/artists/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "artist_picture", array()), "html", null, true);
        echo "\">
\t</figure>
\t<article>
\t\t<span>";
        // line 8
        echo $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "artist_bio", array());
        echo "</span>
\t</article>
\t<div class=\"sharers\">
\t\t<a href=\"#\" class=\"share-fb\"></a>
\t\t<a href=\"#\" class=\"share-twitter\"></a>
\t\t<a href=\"#\" class=\"share-vk\"></a>
\t\t<a href=\"#\" class=\"share-mail\"></a>
\t</div>
    ";
        // line 16
        if ( !twig_test_empty((isset($context["related"]) ? $context["related"] : null))) {
            // line 17
            echo "\t<div class=\"related\">
\t\t<span>Схожі артисти:</span>
\t\t<div class=\"clearfix\"></div>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "\t\t<div class=\"item related-item\" style=\"background-image: url(/images/artists/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_picture", array()), "html", null, true);
                echo ");\">
\t\t\t<a href=\"/artists/";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_id", array()), "html", null, true);
                echo "\">
\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<span>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_name", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t<div class=\"clearfix\"></div>
\t</div>
    ";
        }
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "artist.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  86 => 31,  74 => 25,  68 => 22,  63 => 21,  59 => 20,  54 => 17,  52 => 16,  41 => 8,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
