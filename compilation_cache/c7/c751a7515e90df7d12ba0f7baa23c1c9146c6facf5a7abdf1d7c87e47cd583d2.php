<?php

/* release.html */
class __TwigTemplate_5589fba44058cbcc0fd8aed75c78cc2a501bbc92c88d4681d32c2eac08dff274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "release.html", 1);
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
        echo "<div class=\"release-container\">
\t<div class=\"left pull-left\">
\t\t<div class=\"release-info\">
\t\t\t<p class=\"artist\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "release_artist", array()), "html", null, true);
        echo "</p>
\t\t\t<p class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "release_title", array()), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<div class=\"release-cover\">
\t\t\t<img src=\"/images/releases/";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "release_cover", array()), "html", null, true);
        echo "\" class=\"img-responsive\">
\t\t</div>
\t\t<div class=\"release-listen\">
\t\t\t<p>Listen and download:</p>
\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "release_itunes", array()), "html", null, true);
        echo "\" class=\"itunes\" target=\"_blank\"></a>
\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "release_gplay", array()), "html", null, true);
        echo "\" class=\"gplay\" target=\"_blank\"></a>
\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "release_spotify", array()), "html", null, true);
        echo "\" class=\"spotify\" target=\"_blank\"></a>
\t\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "release_deezer", array()), "html", null, true);
        echo "\" class=\"deezer\" target=\"_blank\"></a>
\t\t</div>
\t\t<div class=\"sharers\">
\t\t\t<p>Share:</p>
\t\t\t<a href=\"#\" class=\"share-fb\"></a>
\t\t\t<a href=\"#\" class=\"share-twitter\"></a>
\t\t\t<a href=\"#\" class=\"share-vk\"></a>
\t\t\t<a href=\"#\" class=\"share-mail\"></a>
\t\t</div>
\t</div>
\t<div class=\"right pull-right\">
\t\t<div class=\"release-nav text-center\">
\t\t\t<a ";
        // line 29
        if ( !twig_test_empty((isset($context["prev"]) ? $context["prev"] : null))) {
            echo "href=\"/releases/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "releases_id", array()), "html", null, true);
            echo "\"";
        }
        echo " class=\"glyphicon glyphicon-menu-left";
        if (twig_test_empty($this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "releases_id", array()))) {
            echo " disabled";
        }
        echo "\"></a>
\t\t\t<span>Search releases</span>
\t\t\t<a ";
        // line 31
        if ( !twig_test_empty((isset($context["next"]) ? $context["next"] : null))) {
            echo "href=\"/releases/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "releases_id", array()), "html", null, true);
            echo "\"";
        }
        echo "  class=\"glyphicon glyphicon-menu-right";
        if (twig_test_empty($this->getAttribute((isset($context["next"]) ? $context["next"] : null), "releases_id", array()))) {
            echo " disabled";
        }
        echo "\"></a>
\t\t</div>
\t\t<div class=\"release-description\">
\t\t\t";
        // line 34
        echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "release_description", array());
        echo "
\t\t</div>
\t\t<div class=\"release-tracklist\">
\t\t\t<h3>Трекліст:</h3>
\t\t\t";
        // line 38
        echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "release_tracklist", array());
        echo "
\t\t</div>
\t</div>
\t<div class=\"clearfix\"></div>
    ";
        // line 42
        if ( !twig_test_empty((isset($context["related"]) ? $context["related"] : null))) {
            // line 43
            echo "\t<div class=\"related\">
\t\t<p>Схожі релізи:</p>
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["rel"]) {
                // line 46
                echo "\t\t<div class=\"item related-item\" style=\"background-image: url(/images/releases/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rel"], "release_cover", array()), "html", null, true);
                echo ");\">
\t\t\t<a href=\"/releases/";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["rel"], "releases_id", array()), "html", null, true);
                echo "\">
\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<span>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["rel"], "release_title", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t<div class=\"clearfix\"></div>
\t</div>
    ";
        }
        // line 59
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "release.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 59,  154 => 56,  142 => 50,  136 => 47,  131 => 46,  127 => 45,  123 => 43,  121 => 42,  114 => 38,  107 => 34,  93 => 31,  80 => 29,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  46 => 10,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
