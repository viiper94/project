<?php

/* news.html */
class __TwigTemplate_9b161dbcf9c763e6193afc1b63fd7742436b79eeb1f7c735f1ee51e17e8f55f4 extends Twig_Template
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
        echo "<div class=\"form-group\">
\t<a href=\"/admin/news/add\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Додати новину</a>
</div>
<div class=\"form-inline pull-right\">
\t<input type='text' class='form-control search-form' id='search' placeholder='Пошук новин'>
</div>
<form action=\"/admin/news/\" method=\"POST\">
\t<button class=\"btn btn-primary\" name=\"resort\"><span class=\"glyphicon glyphicon-refresh\"></span> Відсортувати</button>
\t<div class=\"content\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "\t\t<div class=\"item\">
\t\t\t<div class=\"item-image inline\">
\t\t\t\t<a href=\"/admin/news/edit/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
            echo "\" style=\"background-image: url(/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_title_picture", array()), "html", null, true);
            echo ");\"></a>
\t\t\t</div>
\t\t\t<div class=\"item-info inline\">
\t\t\t\t<h4>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_title", array()), "html", null, true);
            echo "</h4>
\t\t\t\t<h5>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_date", array()), "html", null, true);
            echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"item-actions inline\">
\t\t\t\t<a class='btn btn-success' href='/admin/news/edit/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
            echo "'>
\t\t\t\t\t<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Редагувати
\t\t\t\t</a>
\t\t\t\t<a class='btn btn-danger' href='/admin/news/delete/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
            echo "' onclick='return confirm(\"Видалити?\")'>
\t\t\t\t\t<span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Видалити
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"item-sort inline\">
\t\t\t\t<div class='inline' style='width: 48px;'>
\t\t\t\t\t<a class='btn btn-info' href='/admin/news/sortup/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
            echo "'><span class='glyphicon glyphicon-arrow-up'></span></a>
\t\t\t\t\t<a class='btn btn-info' href='/admin/news/sortdown/";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
            echo "'><span class='glyphicon glyphicon-arrow-down'></span></a>
\t\t\t\t</div>
\t\t\t\t<div class='inline' style=\"max-width: 100px;\">
\t\t\t\t\t<label for='field'>Порядок сортування:<br>
\t\t\t\t\t<input type='text' id='field' name=\"sort[";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
            echo "]\" class='form-control' value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sort", array()), "html", null, true);
            echo "'>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t</div>
</form>
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
        return array (  107 => 41,  94 => 36,  87 => 32,  83 => 31,  74 => 25,  68 => 22,  62 => 19,  58 => 18,  50 => 15,  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
