<?php

/* edit_news.html */
class __TwigTemplate_d1a9eed647ef71e392c0539b324bdcee6697e387e51d1d317038425ac15e6339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "edit_news.html", 1);
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
        echo "<form action=\"/admin/news\" method=\"POST\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
    <div class=\"form-group\">
        <input type=\"submit\" value=\"Зберегти новину\" name=\"edit_news\" class=\"btn btn-primary\">
    </div>
    <div class=\"form-group\">
        <label class=\"control-label\">Зображення</label>
        <img src=\"/images/news/";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "news_title_picture", array()), "html", null, true);
        echo "\" class=\"img-responsive\" width=\"300px\">
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000000\">
        <input type=\"file\" accept=\"image/jpeg, image/png\" name=\"picture\">
    </div>
    <div class=\"form-group\">
        <label for=\"title\" class=\"control-label\">Заголовок</label>
        <input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "news_title", array()), "html", null, true);
        echo "\" required>
    </div>
    <div class=\"form-group\">
        <label for=\"text\" class=\"control-label\">Текст</label>
        <textarea id=\"text\" name=\"text\" required>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "news_article", array()), "html", null, true);
        echo "</textarea>
    </div>
    <div class=\"row\">
        <h3>Схожі новини</h3>
        <div class=\"col-md-7 form-group\">
            <h4>Всі новини</h4>
            <button class=\"btn btn-danger\" id=\"deselect-btn\">Зняти обрані</button>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 27
            echo "            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"related[]\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
            echo "\"";
            if (twig_in_filter($this->getAttribute($context["item"], "news_id", array()), $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "news_related", array()))) {
                echo " checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_title", array()), "html", null, true);
            echo "
                </label>
             </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>
        <div class=\"col-md-5\">
            <h4>Пошук новин</h4>
            <input type=\"text\" class=\"form-control\" id=\"search\" placeholder=\"Шукати новину\">
            <div class=\"item-list\"></div>
        </div>
    </div>
    <div class=\"form-group\">
        <input type=\"hidden\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "news_id", array()), "html", null, true);
        echo "\" name=\"id\" class=\"btn btn-primary\">
        <input type=\"submit\" value=\"Зберегти новину\" name=\"edit_news\" class=\"btn btn-primary\">
    </div>
</form>
<script type=\"text/javascript\" src=\"/admin/ck-editor/ckeditor.js\"></script>
<script type=\"text/javascript\">
    CKEDITOR.replace('text');
    CKEDITOR.config.allowedContent = true;
</script>
";
    }

    public function getTemplateName()
    {
        return "edit_news.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  89 => 33,  73 => 29,  69 => 27,  65 => 26,  55 => 19,  48 => 15,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
