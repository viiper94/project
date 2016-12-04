<?php

/* search.html */
class __TwigTemplate_92fb9ebce491a51cca6b58f545dce0792b2104bd1f2a946f2aa8538736957d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "search.html", 1);
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
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 4
            echo "<h3 class=\"search-header\">Знайдені новини:</h3>
";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "<div class=\"item item-block\" style=\"background-image: url(/images/news/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_title_picture", array()), "html", null, true);
                echo ");\">
\t<a href=\"/news/";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
                echo "\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"date\">
\t\t\t\t<span>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_date", array()), "html", null, true);
                echo "</span>
\t\t\t</div>
\t\t\t<div class=\"title\">
\t\t\t\t<span>";
                // line 13
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
            // line 19
            echo "<div class=\"clearfix\"></div>
";
        }
        // line 21
        if (($this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "title", array()) || $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "artist", array()))) {
            // line 22
            echo "<h3 class=\"search-header\">Знайдені релізи:</h3>
";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "title", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "<div class=\"item\" style=\"background-image: url(/images/releases/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_cover", array()), "html", null, true);
                echo ");\">
    <a href=\"/releases/";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
                echo "\">
        <div class=\"overlay\">
            <div class=\"title\">
                <h4>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_artist", array()), "html", null, true);
                echo "</h4>
                <h3>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_title", array()), "html", null, true);
                echo "</h3>
            </div>
        </div>
    </a>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "artist", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 36
                echo "<div class=\"item\" style=\"background-image: url(/images/releases/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_cover", array()), "html", null, true);
                echo ");\">
    <a href=\"/releases/";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
                echo "\">
        <div class=\"overlay\">
            <div class=\"title\">
                <h4>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_artist", array()), "html", null, true);
                echo "</h4>
                <h3>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_title", array()), "html", null, true);
                echo "</h3>
            </div>
        </div>
    </a>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "<div class=\"clearfix\"></div>
";
        }
        // line 49
        if ((isset($context["artists"]) ? $context["artists"] : null)) {
            // line 50
            echo "<h3 class=\"search-header\">Знайдені артисти:</h3>
";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["artists"]) ? $context["artists"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                // line 52
                echo "<div class=\"item\" style=\"background-image: url(/images/artists/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "artist_picture", array()), "html", null, true);
                echo ");\">
    <a href=\"/artists/";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "artist_id", array()), "html", null, true);
                echo "\">
        <div class=\"overlay\">
            <div class=\"title\">
                <h3>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "artist_name", array()), "html", null, true);
                echo "</h3>
            </div>
        </div>
    </a>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "<div class=\"clearfix\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 62,  164 => 56,  158 => 53,  153 => 52,  149 => 51,  146 => 50,  144 => 49,  140 => 47,  128 => 41,  124 => 40,  118 => 37,  113 => 36,  109 => 35,  97 => 29,  93 => 28,  87 => 25,  82 => 24,  78 => 23,  75 => 22,  73 => 21,  69 => 19,  57 => 13,  51 => 10,  45 => 7,  40 => 6,  36 => 5,  33 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
