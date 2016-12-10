<?php

/* add_release.html */
class __TwigTemplate_816282b03e9197accec941c20542db99e03ff4499f5b9049e3458484061cfc58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "add_release.html", 1);
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
        echo "<form action=\"/admin/releases\" method=\"POST\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
    <div class=\"form-group\">
        <button type=\"submit\" name=\"add_release\" class=\"btn btn-primary\">
            <span class=\"glyphicon glyphicon-floppy-disk\"></span> Додати реліз
        </button>
    </div>
    <div class=\"form-group\">
        <label for=\"title\" class=\"control-label\">Назва</label>
        <input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\" required>
    </div>
    <div class=\"form-group\">
        <label for=\"artist\" class=\"control-label\">Артист</label>
        <input type=\"text\" name=\"artist\" id=\"artist\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <div class=\"col-md-4\">
            <label class=\"control-label\" style=\"margin-left: -15px;\">Обкладинка</label>
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000000\">
            <input type=\"file\" accept=\"image/jpeg, image/png\" name=\"picture\" style=\"margin-left: -15px;\"\" required>
        </div>
        <div class=\"col-md-4\">
            <label for=\"date\" class=\"control-label\">Дата релізу</label>
            <input type=\"date\" name=\"date\" id=\"date\" class=\"form-control\">
        </div>
        <div class=\"col-md-4\">
            <label for=\"number\" class=\"control-label\">Номер релізу</label>
            <input type=\"text\" name=\"number\" id=\"number\" class=\"form-control\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"itunes\" class=\"control-label\">Лінк на iTunes</label>
        <input type=\"text\" name=\"itunes\" id=\"itunes\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"gplay\" class=\"control-label\">Лінк на Google Play</label>
        <input type=\"text\" name=\"gplay\" id=\"gplay\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"spotify\" class=\"control-label\">Лінк на Spotify</label>
        <input type=\"text\" name=\"spotify\" id=\"spotify\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"deezer\" class=\"control-label\">Лінк на Deezer</label>
        <input type=\"text\" name=\"deezer\" id=\"deezer\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"description\" class=\"control-label\">Опис релізу</label>
        <textarea id=\"description\" name=\"description\"></textarea>
    </div>
    <div class=\"form-group\">
        <label for=\"tracklist\" class=\"control-label\">Трекліст</label>
        <textarea id=\"tracklist\" name=\"tracklist\"></textarea>
    </div>
    <div class=\"row\">
        <h3>Схожі релізи</h3>
        <div class=\"col-md-7 form-group\">
            <h4>Всі релізи</h4>
            <button class=\"btn btn-danger\" id=\"deselect-btn\">Зняти обрані</button>
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"related\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_title", array()), "html", null, true);
            echo "
                </label>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </div>
        <div class=\"col-md-5\">
            <h4>Пошук релізу</h4>
            <div class=\"form-inline\">
                <input type=\"text\" class=\"form-control\" id=\"search-related\" data-section=\"releases\" data-id=\"-1\" placeholder=\"Шукати реліз\">
                <label><input class='radio-inline' type='radio' name='search-by' value='release_title' checked>За назвою</label>
                <label><input class='radio-inline' type='radio' name='search-by' value='release_tracklist'>За треклістом</label>
            </div>
            <div class=\"checked-list\"></div>
            <div class=\"item-list\"></div>
        </div>
    </div>
    <div class=\"form-group\">
        <button type=\"submit\" name=\"add_release\" class=\"btn btn-primary\">
            <span class=\"glyphicon glyphicon-floppy-disk\"></span> Додати реліз
        </button>
    </div>
</form>
<script type=\"text/javascript\" src=\"../ck-editor/ckeditor.js\"></script>
<script type=\"text/javascript\">
    CKEDITOR.replace('description');
</script>
<script type=\"text/javascript\">
    CKEDITOR.replace('tracklist');
</script>
<script src=\"/admin/js/lodash.js\"></script>
<script type=\"text/html\" id=\"release-template\">
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
        return "add_release.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 68,  99 => 64,  95 => 62,  91 => 61,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
