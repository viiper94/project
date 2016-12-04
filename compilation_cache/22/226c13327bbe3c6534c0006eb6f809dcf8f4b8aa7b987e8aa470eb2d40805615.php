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
\t<figure>
\t\t<img src=\"/images/news/";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "news_title_picture", array()), "html", null, true);
        echo "\">
\t</figure>
\t<article>
\t\t<span>";
        // line 9
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
        // line 17
        if ( !twig_test_empty((isset($context["related"]) ? $context["related"] : null))) {
            // line 18
            echo "        <div class=\"related\">
            <span>Схожі новини:</span>
            <div class=\"clearfix\"></div>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "            <div class=\"item related-item\" style=\"background-image: url(/images/news/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_title_picture", array()), "html", null, true);
                echo ");\">
                <a href=\"/news/";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
                echo "\">
                    <div class=\"overlay\">
                        <div class=\"title\">
                            <span>";
                // line 26
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
            // line 32
            echo "            <div class=\"clearfix\"></div>
        </div>
    ";
        }
        // line 35
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
        return array (  95 => 35,  90 => 32,  78 => 26,  72 => 23,  67 => 22,  63 => 21,  58 => 18,  56 => 17,  45 => 9,  39 => 6,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
