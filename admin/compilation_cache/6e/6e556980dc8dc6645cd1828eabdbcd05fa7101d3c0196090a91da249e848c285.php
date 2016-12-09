<?php

/* edit_release.html */
class __TwigTemplate_0aae967c09eba1bf4955722e30cf5e3fa1a3bf16e04ada1edb86b92cae8bbf73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "edit_release.html", 1);
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
        echo "<form action=\"/admin/releases/\" method=\"POST\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
    <div class=\"form-group\">
        <button type=\"submit\" name=\"edit_release\" class=\"btn btn-primary\">
            <span class=\"glyphicon glyphicon-floppy-disk\"></span> Зберегти реліз
        </button>
    </div>
    <div class=\"form-group\">
        <label for=\"title\" class=\"control-label\">Назва</label>
        <input type=\"text\" name=\"title\" id=\"title\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_title", array()), "html", null, true);
        echo "\" required>
    </div>
    <div class=\"form-group\">
        <label for=\"artist\" class=\"control-label\">Артист</label>
        <input type=\"text\" name=\"artist\" id=\"artist\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_artist", array()), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <div class=\"col-md-4\">
            <label class=\"control-label\" style=\"margin-left: -15px;\">Обкладинка</label>
            <img src=\"/images/releases/";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_cover", array()), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"margin-left: -15px;\">
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000000\">
            <input type=\"file\" accept=\"image/jpeg, image/png\" name=\"picture\" style=\"margin-left: -15px;\">
        </div>
        <div class=\"col-md-8\">
            <label for=\"date\" class=\"control-label\">Дата релізу</label>
            <input type=\"date\" name=\"date\" id=\"date\" class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_date", array()), "html", null, true);
        echo "\">
            <label for=\"number\" class=\"control-label\">Номер релізу</label>
            <input type=\"text\" name=\"number\" id=\"number\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_number", array()), "html", null, true);
        echo "\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"itunes\" class=\"control-label\">Лінк на iTunes</label>
        <input type=\"text\" name=\"itunes\" id=\"itunes\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_itunes", array()), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"gplay\" class=\"control-label\">Лінк на Google Play</label>
        <input type=\"text\" name=\"gplay\" id=\"gplay\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_gplay", array()), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"spotify\" class=\"control-label\">Лінк на Spotify</label>
        <input type=\"text\" name=\"spotify\" id=\"spotify\" class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_spotify", array()), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"deezer\" class=\"control-label\">Лінк на Deezer</label>
        <input type=\"text\" name=\"deezer\" id=\"deezer\" class=\"form-control\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_deezer", array()), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"description\" class=\"control-label\">Опис релізу</label>
        <textarea id=\"description\" name=\"description\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_description", array()), "html", null, true);
        echo "</textarea>
    </div>
    <div class=\"form-group\">
        <label for=\"tracklist\" class=\"control-label\">Трекліст</label>
        <textarea id=\"tracklist\" name=\"tracklist\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_tracklist", array()), "html", null, true);
        echo "</textarea>
    </div>
    <div class=\"row\">
        <h3>Схожі релізи</h3>
        <div class=\"col-md-7 form-group\">
            <h4>Всі релізи</h4>
            <button class=\"btn btn-danger\" id=\"deselect-btn\">
                <span class=\"glyphicon glyphicon-ban-circle\"></span> Зняти обрані
            </button>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"related[]\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "releases_id", array()), "html", null, true);
            echo "\" ";
            if (twig_in_filter($this->getAttribute($context["item"], "releases_id", array()), $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "release_related", array()))) {
                echo " checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "release_title", array()), "html", null, true);
            echo "
                </label>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </div>
        <div class=\"col-md-5\">
            <h4>Пошук релізу</h4>
            <div class=\"form-inline\">
                <input type=\"text\" class=\"form-control\" id=\"search-related\" data-section=\"releases\" data-id=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "releases_id", array()), "html", null, true);
        echo "\" placeholder=\"Шукати реліз\">
                <label><input class='radio-inline' type='radio' name='search-by' value='release_title' checked>За назвою</label>
                <label><input class='radio-inline' type='radio' name='search-by' value='release_tracklist'>За треклістом</label>
            </div>
            <div class=\"checked-list\"></div>
            <div class=\"item-list\"></div>
        </div>
    </div>
    <div class=\"form-group\">
        <input type=\"hidden\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["releases"]) ? $context["releases"] : null), "releases_id", array()), "html", null, true);
        echo "\" name=\"id\">
        <button type=\"submit\" name=\"edit_release\" class=\"btn btn-primary\">
            <span class=\"glyphicon glyphicon-floppy-disk\"></span> Зберегти реліз
        </button>
    </div>
</form>
<script type=\"text/javascript\" src=\"/admin/ck-editor/ckeditor.js\"></script>
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
            <input type=\"checkbox\" name=\"related[]\" value=\"<%=id%>\"<% if(checked){ %> checked<% } %>> <%=title%>
        </label>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "edit_release.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 82,  155 => 73,  149 => 69,  133 => 65,  129 => 63,  125 => 62,  113 => 53,  106 => 49,  99 => 45,  92 => 41,  85 => 37,  78 => 33,  70 => 28,  65 => 26,  56 => 20,  48 => 15,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
