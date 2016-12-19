<?php

/* /index.html */
class __TwigTemplate_c37993ca417228054b68b767a39901a86a31fdeb2f20a92f742a33b4ef8806cf extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Index</title>
</head>
<body>
    Hello, ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "! You are using ";
        echo twig_escape_filter($this->env, (isset($context["view_engine"]) ? $context["view_engine"] : null), "html", null, true);
        echo " view engine.
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/index.html", "/Users/xiaozhuai/work/ez_app/views_twig/index.html");
    }
}
