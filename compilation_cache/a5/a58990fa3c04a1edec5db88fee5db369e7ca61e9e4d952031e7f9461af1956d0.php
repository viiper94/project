<?php

/* index.html */
class __TwigTemplate_159eb1db8d163257ac7f8d15e32dbb495f6d83eca144413f62d0c49e48025514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width\">
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/favicon.ico\" />
\t<link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/style.css\">
\t<title>";
        // line 9
        if ( !(null === (isset($context["title"]) ? $context["title"] : null))) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        } else {
            echo "Damage Records";
        }
        echo "</title>
</head>
<body>
\t<div class=\"wrapper\">
\t\t<header>
\t\t\t<nav class=\"navbar navbar-default bottom\">
\t\t\t\t<div class=\"nav-container container-fluid\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t    <span class=\"sr-only\">Розгорнути меню</span>
\t\t\t\t\t\t    <span class=\"icon-bar\"></span>
\t\t\t\t\t\t    <span class=\"icon-bar\"></span>
\t\t\t\t\t\t    <span class=\"icon-bar\"></span>
\t\t\t\t\t    </button>
\t\t\t\t\t\t<a href=\"/\" class=\"logo\"><img src=\"/assets/img/damage-logo-sign-600.png\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<li ";
        // line 27
        if (((isset($context["controller"]) ? $context["controller"] : null) == "news")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/\">НОВИНИ</a></li>
\t\t\t\t\t\t\t<li ";
        // line 28
        if (((isset($context["controller"]) ? $context["controller"] : null) == "releases")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/releases\">РЕЛІЗИ</a></li>
\t\t\t\t\t\t\t<li ";
        // line 29
        if (((isset($context["controller"]) ? $context["controller"] : null) == "artists")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/artists\">АРТИСТИ</a></li>
\t\t\t\t\t\t\t<li ";
        // line 30
        if (((isset($context["controller"]) ? $context["controller"] : null) == "school")) {
            echo "class=\"active\"";
        }
        echo " id=\"dropdown\"><a href=\"/school\">ШКОЛА</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown hidden-xs\">
                                    <li><a href=\"/school\">ПРО КУРСИ</a></li>
                                    <li><a href=\"/school\">ОБЛАДНАННЯ</a></li>
                                    <li><a href=\"/school\">ЦІНИ</a></li>
                                    <li><a href=\"/school\">КОНТАКТИ</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 38
        if (((isset($context["controller"]) ? $context["controller"] : null) == "about")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/about\">ПРО НАС</a></li>
\t\t\t\t\t\t\t<li ";
        // line 39
        if (((isset($context["controller"]) ? $context["controller"] : null) == "contacts")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/contacts\">КОНТАКТИ</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"search-box\">
                            <form action=\"/search/\" method=\"GET\">
                                <input type=\"text\" name=\"q\" placeholder=\"Пошук\" minlength=\"3\">
                                <button><span class=\"glyphicon glyphicon-search\"></span></button>
                            </form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<main>
\t\t\t";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "   \t\t</main>
\t\t<footer>
\t\t\t<div class=\"partners\">
\t\t\t\t<p>PARTNERS:</p>
\t\t\t\t<a href=\"http://www.kissfm.ua/\"><img src=\"/assets/img/partner-1.png\"></a>
\t\t\t\t<a href=\"#\"><img src=\"/assets/img/partner-2.png\"></a>
\t\t\t\t<a href=\"http://besttrack.in.ua\"><img src=\"/assets/img/partner-3.png\"></a>
\t\t\t\t<a href=\"http://sweet-n-low.de/\"><img src=\"/assets/img/partner-4.png\"></a>
\t\t\t</div>
\t\t\t<div class=\"links\">
\t\t\t\t<p>FOLLOW US:</p>
\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"social-link fb\"></a>
\t\t\t\t<a href=\"https://twitter.com/\" class=\"social-link twitter\"></a>
\t\t\t\t<a href=\"https://vk.com\" class=\"social-link vk\"></a>
\t\t\t\t<a href=\"https://soundcloud.com/\" class=\"social-link soundcloud\"></a>
\t\t\t\t<a href=\"https://www.youtube.com/\" class=\"social-link youtube\"></a>
\t\t\t\t<a href=\"https://www.instagram.com/\" class=\"social-link instagram\"></a>
\t\t\t\t<a href=\"http://www.last.fm/ru/\" class=\"social-link lastfm\"></a>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"copyright\">
\t\t\t\t<p>&copy; DAMAGE RECORDS</p>
\t\t\t</div> 
\t\t</footer>
\t</div>
\t<script src=\"/assets/js/jquery.min.js\"></script>
\t<script src=\"/assets/js/jquery.sticky.js\"></script>
\t<script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/assets/js/script.js\"></script>
</body>
</html>";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "
   \t\t\t";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  146 => 52,  112 => 55,  110 => 52,  92 => 39,  86 => 38,  73 => 30,  67 => 29,  61 => 28,  55 => 27,  30 => 9,  20 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
