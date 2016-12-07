<?php

/* releases.html */
class __TwigTemplate_740e8d7a4b7c012058217222fc517964527aa1fba63a1d827e6c3d45426ea637 extends Twig_Template
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
        echo "<div class=\"form-group\">
    <a href=\"/admin/releases/add\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Додати реліз</a>
</div>
<div class=\"form-inline pull-right\">
\t<input type='text' class='form-control search-form' id='search' data-section=\"releases\" placeholder='Пошук релізів'>
\t<label><input class='radio-inline' type='radio' name='search-by' value='title' checked>За назвою</label>
\t<label><input class='radio-inline' type='radio' name='search-by' value='tracklist'>За треклістом</label>
</div>
<form action=\"/admin/releases/\" method=\"POST\">
    <button class=\"btn btn-primary\" name=\"resort\"><span class=\"glyphicon glyphicon-refresh\"></span> Відсортувати</button>
\t<div class=\"content\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["releases"]) ? $context["releases"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "\t\t<div class=\"item\">
\t\t\t<div class=\"item-image inline\">
\t\t\t\t<a href=\"/admin/releases/edit/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
            echo "\" style=\"background-image: url(/images/releases/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_cover", array()), "html", null, true);
            echo ");\"></a>
\t\t\t</div>
\t\t\t<div class=\"item-info inline\">
\t\t\t\t<h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_title", array()), "html", null, true);
            echo "</h4>
\t\t\t\t<h5>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_artist", array()), "html", null, true);
            echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"item-actions inline\">
\t\t\t\t<a class='btn btn-success' href='/admin/releases/edit/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
            echo "'>
\t\t\t\t\t<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Редагувати
\t\t\t\t</a>
\t\t\t\t<a class='btn btn-danger' href='/admin/releases/delete/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
            echo "' onclick='return confirm(\"Видалити?\")'>
\t\t\t\t\t<span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Видалити
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"item-sort inline\">
\t\t\t\t<div class='inline' style='width: 48px;'>
\t\t\t\t\t<a class='btn btn-info' href='/admin/releases/sortup/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
            echo "'>
                        <span class='glyphicon glyphicon-arrow-up'></span>
                    </a>
\t\t\t\t\t<a class='btn btn-info' href='/admin/releases/sortdown/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
            echo "'>
                        <span class='glyphicon glyphicon-arrow-down'></span>
                    </a>
\t\t\t\t</div>
\t\t\t\t<div class='inline' style=\"max-width: 100px;\">
\t\t\t\t\t<label>Порядок сортування:<br>
\t\t\t\t\t    <input type='text' name=\"sort[";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
            echo "]\" class='form-control' value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sort", array()), "html", null, true);
            echo "'>
                    </label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</div>
</form>
<script src=\"/admin/js/lodash.js\"></script>
<script type=\"text/html\" id=\"release-template\">
    <div class=\"item\">
        <div class=\"item-image inline\">
            <a href=\"/admin/releases/edit/<%=id%>\" style=\"background-image: url(/images/releases/<%=picture%>);\"></a>
        </div>
        <div class=\"item-info inline\">
            <h4><%=title%></h4>
            <h5><%=info%></h5>
        </div>
        <div class=\"item-actions inline\">
            <a class='btn btn-success' href='/admin/releases/edit/<%=id%>'>
                <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Редагувати
            </a>
            <a class='btn btn-danger' href='/admin/releases/delete/<%=id%>' onclick='return confirm(\"Видалити?\")'>
                <span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Видалити
            </a>
        </div>
        <div class=\"item-sort inline\">
            <div class='inline' style='width: 48px;'>
                <a class='btn btn-info' href='/admin/releases/sortup/<%=id%>'>
                    <span class='glyphicon glyphicon-arrow-up'></span>
                </a>
                <a class='btn btn-info' href='/admin/releases/sortdown/<%=id%>'>
                    <span class='glyphicon glyphicon-arrow-down'></span>
                </a>
            </div>
            <div class='inline' style=\"max-width: 100px;\">
                <label>Порядок сортування:<br>
                    <input type='text' name=\"sort[<%=id%>]\" class='form-control' value='<%=sort%>'>
                </label>
            </div>
        </div>
    </div>
</script>
";
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
        return array (  114 => 48,  100 => 42,  91 => 36,  85 => 33,  76 => 27,  70 => 24,  64 => 21,  60 => 20,  52 => 17,  48 => 15,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
