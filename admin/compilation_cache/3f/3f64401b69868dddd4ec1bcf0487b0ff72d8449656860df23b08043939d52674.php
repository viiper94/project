<?php

/* add_news.html */
class __TwigTemplate_7dad142b988dac1f81918384afc965df511ac33e0c7fadbc9d8f15ca0718efdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "add_news.html", 1);
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
        <input type=\"submit\" value=\"Додати новину\" name=\"add_news\" class=\"btn btn-primary\">
    </div>
    <div class=\"form-group\">
        <label class=\"control-label\">Зображення</label>
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000000\">
        <input type=\"file\" accept=\"image/jpeg, image/png\" name=\"picture\" required>
    </div>
    <div class=\"form-group\">
        <label for=\"title\" class=\"control-label\">Заголовок</label>
        <input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\" required>
    </div>
    <div class=\"form-group\">
        <label for=\"text\" class=\"control-label\">Текст</label>
        <textarea id=\"text\" name=\"text\" required></textarea>
    </div>
    <div class=\"row\">
        <h3>Схожі новини</h3>
        <div class=\"col-md-7 form-group\">
            <h4>Всі новини</h4>
            <button class=\"btn btn-danger\" id=\"deselect-btn\">Зняти обрані</button>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"related[]\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "news_title", array()), "html", null, true);
            echo "
                </label>
             </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
        <div class=\"col-md-5\">
            <h4>Пошук новин</h4>
            <input type=\"text\" class=\"form-control\" id=\"search-related\" data-section=\"news\" data-id=\"-1\" placeholder=\"Шукати новину\">
            <div class=\"item-list\"></div>
        </div>
    </div>
    <div class=\"form-group\">
        <input type=\"submit\" value=\"Додати новину\" name=\"add_news\" class=\"btn btn-primary\">
    </div>
</form>
<script type=\"text/javascript\" src=\"/admin/ck-editor/ckeditor.js\"></script>
<script type=\"text/javascript\">
    CKEDITOR.replace('text');
</script>
<script src=\"/admin/js/lodash.js\"></script>
<script type=\"text/html\" id=\"news-template\">
    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\" name=\"related[]\" value=\"<%=id%>\"> <%=title%>
        </label>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "add_news.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 32,  63 => 28,  59 => 26,  55 => 25,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
