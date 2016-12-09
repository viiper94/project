<?php

/* edit_artist.html */
class __TwigTemplate_96b9c8da9d146d173330964c02f059c687ac86e1657e99dd200a132a17d24f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "edit_artist.html", 1);
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
        echo "<form action=\"/admin/artists/\" method=\"POST\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
    <div class=\"form-group\">
        <button type=\"submit\" name=\"edit_artist\" class=\"btn btn-primary\">
            <span class=\"glyphicon glyphicon glyphicon-floppy-disk\"></span> Зберегти артиста
        </button>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label\">Зображення</label>
        <img src=\"/images/artists/";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artists"]) ? $context["artists"] : null), "artist_picture", array()), "html", null, true);
        echo "\" class=\"img-responsive\" width=\"300px\">
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000000\">
        <input type=\"file\" accept=\"image/jpeg, image/png\" name=\"picture\">
    </div>
    <div class=\"form-group\">
        <label for=\"name\" class=\"control-label\">Ім'я артиста/гурту</label>
        <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artists"]) ? $context["artists"] : null), "artist_name", array()), "html", null, true);
        echo "\" required>
    </div>
    <div class=\"form-group\">
        <label for=\"text\" class=\"control-label\">Про артиста</label>
        <textarea id=\"text\" name=\"text\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artists"]) ? $context["artists"] : null), "artist_bio", array()), "html", null, true);
        echo "</textarea>
    </div>
    <div class=\"row\">
        <h3>Схожі артисти</h3>
        <div class=\"col-md-7 form-group\">
            <h4>Всі артисти</h4>
            <button class=\"btn btn-danger\" id=\"deselect-btn\">
                <span class=\"glyphicon glyphicon-ban-circle\"></span> Зняти обрані
            </button>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"related[]\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_id", array()), "html", null, true);
            echo "\"";
            if (twig_in_filter($this->getAttribute($context["item"], "artist_id", array()), $this->getAttribute((isset($context["artists"]) ? $context["artists"] : null), "artist_related", array()))) {
                echo " checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "artist_name", array()), "html", null, true);
            echo "
                </label>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
        <div class=\"col-md-5\">
            <h4>Пошук артистів</h4>
            <input type=\"text\" class=\"form-control\" id=\"search-related\" data-id=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artists"]) ? $context["artists"] : null), "artist_id", array()), "html", null, true);
        echo "\" data-section=\"artists\" placeholder=\"Шукати артиста\">
            <div class=\"checked-list\"></div>
            <div class=\"item-list\"></div>
        </div>
    </div>
    <div class=\"form-group\">
        <input type=\"hidden\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artists"]) ? $context["artists"] : null), "artist_id", array()), "html", null, true);
        echo "\" name=\"id\">
        <button type=\"submit\" name=\"edit_artist\" class=\"btn btn-primary\">
            <span class=\"glyphicon glyphicon glyphicon-floppy-disk\"></span> Зберегти артиста
        </button>
    </div>
</form>
<script type=\"text/javascript\" src=\"/admin/ck-editor/ckeditor.js\"></script>
<script type=\"text/javascript\">
    CKEDITOR.replace('text');
</script>
<script src=\"/admin/js/lodash.js\"></script>
<script type=\"text/html\" id=\"artist-template\">
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
        return "edit_artist.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  98 => 40,  93 => 37,  77 => 33,  73 => 31,  69 => 30,  57 => 21,  50 => 17,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
