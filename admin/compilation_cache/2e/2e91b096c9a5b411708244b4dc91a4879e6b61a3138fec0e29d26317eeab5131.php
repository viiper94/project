<?php

/* artists.html */
class __TwigTemplate_8d800e7f6596c57752b4b26885aa356c1c52201d6864bff78f2f504b6f8ab703 extends Twig_Template
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
        echo "<div class=\"form-group\">
    <a href=\"/admin/artists/add\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Додати артиста</a>
</div>
<div class=\"form-inline pull-right\">
\t<input type='text' class='form-control search-form' id='search' placeholder='Пошук виконавців'>
</div>
<form action=\"/admin/artists/\" method=\"POST\">
    <button class=\"btn btn-primary\" name=\"resort\"><span class=\"glyphicon glyphicon-refresh\"></span> Відсортувати</button>
\t<div class=\"content\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artists"]) ? $context["artists"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "\t\t<div class=\"item\">
\t\t\t<div class=\"item-image inline\">
\t\t\t\t<a href=\"/admin/artists/edit/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_id", array()), "html", null, true);
            echo "\" style=\"background-image: url(/images/artists/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_picture", array()), "html", null, true);
            echo ");\"></a>
\t\t\t</div>
\t\t\t<div class=\"item-info inline\">
\t\t\t\t<h4>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_name", array()), "html", null, true);
            echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"item-actions inline\">
\t\t\t\t<a class='btn btn-success' href='/admin/artists/edit/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_id", array()), "html", null, true);
            echo "'>
\t\t\t\t\t<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Редагувати
\t\t\t\t</a>
\t\t\t\t<a class='btn btn-danger' href='/admin/artists/delete/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_id", array()), "html", null, true);
            echo "' onclick='return confirm(\"Видалити?\")'>
\t\t\t\t\t<span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Видалити
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"item-sort inline\">
\t\t\t\t<div class='inline' style='width: 48px;'>
\t\t\t\t\t<a class='btn btn-info' href='/admin/artists/sortup/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_id", array()), "html", null, true);
            echo "'><span class='glyphicon glyphicon-arrow-up'></span></a>
\t\t\t\t\t<a class='btn btn-info' href='/admin/artists/sortdown/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_id", array()), "html", null, true);
            echo "'><span class='glyphicon glyphicon-arrow-down'></span></a>
\t\t\t\t</div>
\t\t\t\t<div class='inline' style=\"max-width: 100px;\">
\t\t\t\t\t<label for='field'>Порядок сортування:<br>
\t\t\t\t\t<input type='text' id='field' name=\"sort[";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_id", array()), "html", null, true);
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
        // line 40
        echo "\t</div>
</form>
";
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
        return array (  103 => 40,  90 => 35,  83 => 31,  79 => 30,  70 => 24,  64 => 21,  58 => 18,  50 => 15,  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
