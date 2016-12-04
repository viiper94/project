<?php

/* page.html */
class __TwigTemplate_810dcc26ffd52222db7fb2226d47ce37549beb33c800d9123b2c343ed5daf66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "page.html", 1);
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
        echo "<form action=\"/admin/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "category", array()), "html", null, true);
        echo "/save\" method=\"POST\">
\t<div class=\"form-group\">
\t\t<label>Текст сторінки</label>
\t\t<textarea name=\"text\" id=\"about\" required>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "text", array()), "html", null, true);
        echo "</textarea>
\t</div>
\t<input type=\"submit\" name=\"save_page\" class=\"btn btn-primary\" value=\"Зберегти\">
</form>
<script type=\"text/javascript\" src=\"/admin/ck-editor/ckeditor.js\"></script>
<script type=\"text/javascript\">
    CKEDITOR.replace('about');
</script>
";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
