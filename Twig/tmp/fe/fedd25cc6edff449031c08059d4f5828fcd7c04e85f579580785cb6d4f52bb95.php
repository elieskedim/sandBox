<?php

/* home.twig */
class __TwigTemplate_3c2528b7f6e1488d0afa65a3f882bee1b81e4f6ebcdaf45b287d9c271d622900 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello World !";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "C:\\xampp\\htdocs\\sandBox\\Twig\\template\\home.twig");
    }
}
