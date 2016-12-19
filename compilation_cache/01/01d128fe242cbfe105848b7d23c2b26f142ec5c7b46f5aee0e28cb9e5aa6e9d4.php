<?php

/* contacts.html */
class __TwigTemplate_88ce5abb391fee8ae6dbba70dddd2c855974380f2ce9f17524e0bf1c75c74c30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "contacts.html", 1);
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
        echo "<div class=\"news-container text-center\">
\t<p class=\"about\">Контакти Damage Records</p>
    <article class=\"text-center\">
        ";
        // line 6
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "text", array());
        echo "
    </article>
</div>
";
    }

    public function getTemplateName()
    {
        return "contacts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
