<?php

/* index.html */
class __TwigTemplate_d3b1c30b7d2cfffeb60abbbe60742502e58978e70ea71ead267243fcc4966056 extends Twig_Template
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
\t<title>Contact Damage Records</title>\t
</head>
<body>
\t<div class=\"wrapper\">
\t\t<header>
\t\t\t<nav class=\"navbar navbar-default\">
\t\t\t\t<div class=\"nav-container\">
\t\t\t\t\t<div class=\"logo navbar-header\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"/assets/img/damage-logo-sign-600.png\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"/\">НОВИНИ</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"releases\">РЕЛІЗИ</a></li>
\t\t\t\t\t\t<li><a href=\"artists\">АРТИСТИ</a></li>
\t\t\t\t\t\t<li id=\"dropdown\"><a href=\"school\">ШКОЛА</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"school\"><li>ПРО КУРСИ</li></a>
\t\t\t\t\t\t\t\t<a href=\"school\"><li>ОБЛАДНАННЯ</li></a>
\t\t\t\t\t\t\t\t<a href=\"school\"><li>ЦІНИ</li></a>
\t\t\t\t\t\t\t\t<a href=\"school\"><li>КОНТАКТИ</li></a>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"about\">ПРО НАС</a></li>
\t\t\t\t\t\t<li><a href=\"contacts\">КОНТАКТИ</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"search-box\">
\t\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"Пошук\">
\t\t\t\t\t\t<button name=\"search-btn\"><span class=\"glyphicon glyphicon-search\"></span></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<main>
\t\t\t";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "   \t\t</main>
\t\t<footer>
\t\t\t<div class=\"partners\">
\t\t\t\t<p>PARTNERS:</p>
\t\t\t\t<a href=\"#\"><img src=\"/assets/img/partner-1.png\"></a>
\t\t\t\t<a href=\"#\"><img src=\"/assets/img/partner-2.png\"></a>
\t\t\t\t<a href=\"#\"><img src=\"/assets/img/partner-3.png\"></a>
\t\t\t\t<a href=\"#\"><img src=\"/assets/img/partner-4.png\"></a>
\t\t\t</div>
\t\t\t<div class=\"links\">
\t\t\t\t<p>FOLLOW US:</p>
\t\t\t\t<a href=\"#\" class=\"social-link fb\"></a>
\t\t\t\t<a href=\"#\" class=\"social-link twitter\"></a>
\t\t\t\t<a href=\"#\" class=\"social-link vk\"></a>
\t\t\t\t<a href=\"#\" class=\"social-link soundcloud\"></a>
\t\t\t\t<a href=\"#\" class=\"social-link youtube\"></a>
\t\t\t\t<a href=\"#\" class=\"social-link instagram\"></a>
\t\t\t\t<a href=\"#\" class=\"social-link lastfm\"></a>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"copyright\">
\t\t\t\t<p>&copy; DAMAGE RECORDS</p>
\t\t\t</div> 
\t\t</footer>
\t</div>
\t<script src=\"/assets/js/jquery.min.js\"></script>
\t<script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "
   \t\t\t";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  100 => 43,  97 => 42,  65 => 45,  63 => 42,  20 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
