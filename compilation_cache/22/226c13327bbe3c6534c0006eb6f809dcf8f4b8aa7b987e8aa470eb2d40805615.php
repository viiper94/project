<?php

/* news.html */
class __TwigTemplate_a1392f32cf2d100249614a15491d34ec5e6577aec2527839cb97e2e3bbe02a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "news.html", 1);
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
    <h2>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "news_title", array()), "html", null, true);
        echo "</h2>
\t<article>
\t\t<span>";
        // line 6
        echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "news_article", array());
        echo "</span>
\t</article>
\t<div class=\"sharers\">
\t\t<a href=\"#\" class=\"share-fb\"></a>
\t\t<a href=\"#\" class=\"share-twitter\"></a>
\t\t<a href=\"#\" class=\"share-vk\"></a>
\t\t<a href=\"#\" class=\"share-mail\"></a>
\t</div>
    ";
        // line 14
        if ( !twig_test_empty((isset($context["related"]) ? $context["related"] : null))) {
            // line 15
            echo "        <div class=\"related\">
            <span>Схожі новини:</span>
            <div class=\"clearfix\"></div>
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "            <div class=\"item related-item\" style=\"background-image: url(/images/news/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_title_picture", array()), "html", null, true);
                echo ");\">
                <a href=\"/news/";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
                echo "\">
                    <div class=\"overlay\">
                        <div class=\"title\">
                            <span>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_title", array()), "html", null, true);
                echo "</span>
                        </div>
                    </div>
                </a>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            <div class=\"clearfix\"></div>
        </div>
    ";
        }
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "news.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  84 => 29,  72 => 23,  66 => 20,  61 => 19,  57 => 18,  52 => 15,  50 => 14,  39 => 6,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
