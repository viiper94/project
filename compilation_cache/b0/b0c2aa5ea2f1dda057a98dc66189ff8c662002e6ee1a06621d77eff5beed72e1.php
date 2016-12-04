<?php

/* pagination.html */
class __TwigTemplate_8355a8d4142f5b8fd81b3e51b016e5e78efd63fca3a8fc67bfa945c324f66965 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["prev"] = ($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()) - 1);
        // line 3
        echo "<a class=\"prev-pgn";
        if (((isset($context["prev"]) ? $context["prev"] : null) >= 1)) {
            echo "\" href=\"/";
            echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
            echo "/?page=";
            echo twig_escape_filter($this->env, (isset($context["prev"]) ? $context["prev"] : null), "html", null, true);
            echo "\"";
        } else {
            echo " disabled\"";
        }
        echo ">
    <span class=\"glyphicon glyphicon-backward\"></span>
</a>

";
        // line 8
        echo "<a href=\"/";
        echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
        echo "/?page=1\" class=\"pgn";
        if (($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()) == 1)) {
            echo " pgn-current";
        }
        echo "\">1</a>

";
        // line 11
        if (($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array()) >= 10)) {
            // line 12
            echo "    ";
            if (($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()) < 6)) {
                // line 13
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(2, ($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()) + 2)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "            <a href=\"/";
                    echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
                    echo "/?page=";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" class=\"pgn";
                    if (($context["i"] == $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()))) {
                        echo " pgn-current";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "        <span style=\"color: #fff\">...</span>
        ";
                // line 18
                echo "        <a href=\"/";
                echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
                echo "/?page=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array()), "html", null, true);
                echo "\" class=\"pgn\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array()), "html", null, true);
                echo "</a>
    ";
            } elseif (($this->getAttribute(            // line 19
(isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()) >= ($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array()) - 4))) {
                // line 20
                echo "        <span style=\"color: #fff\">...</span>
        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()) - 2), $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 22
                    echo "            <a href=\"/";
                    echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
                    echo "/?page=";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" class=\"pgn";
                    if (($context["i"] == $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()))) {
                        echo " pgn-current";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "    ";
            } else {
                // line 25
                echo "        <span style=\"color: #fff\">...</span>
        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()) - 2), ($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()) + 2)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 27
                    echo "        <a href=\"/";
                    echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
                    echo "/?page=";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" class=\"pgn";
                    if (($context["i"] == $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()))) {
                        echo " pgn-current";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "        <span style=\"color: #fff\">...</span>
        ";
                // line 31
                echo "        <a href=\"/";
                echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
                echo "/?page=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array()), "html", null, true);
                echo "\" class=\"pgn\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array()), "html", null, true);
                echo "</a>
    ";
            }
        } else {
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(2, $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 35
                echo "<a href=\"/";
                echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
                echo "/?page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" class=\"pgn";
                if (($context["i"] == $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()))) {
                    echo " pgn-current";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 38
        echo "
";
        // line 40
        $context["next"] = ($this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "current_page", array()) + 1);
        // line 41
        echo "<a class=\"next-pgn";
        if (((isset($context["next"]) ? $context["next"] : null) <= $this->getAttribute((isset($context["pgn"]) ? $context["pgn"] : null), "total_pages", array()))) {
            echo "\" href=\"/";
            echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
            echo "/?page=";
            echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
            echo "\"";
        } else {
            echo " disabled\"";
        }
        echo ">
    <span class=\"glyphicon glyphicon-forward\"></span>
</a>";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 41,  178 => 40,  175 => 38,  157 => 35,  153 => 34,  142 => 31,  139 => 29,  122 => 27,  118 => 26,  115 => 25,  112 => 24,  95 => 22,  91 => 21,  88 => 20,  86 => 19,  77 => 18,  74 => 16,  57 => 14,  52 => 13,  49 => 12,  47 => 11,  37 => 8,  21 => 3,  19 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
