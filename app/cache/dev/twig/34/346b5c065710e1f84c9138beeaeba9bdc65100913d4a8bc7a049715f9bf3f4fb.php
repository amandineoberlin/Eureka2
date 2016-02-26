<?php

/* IntranetPlatformBundle:Main:accueil.html.twig */
class __TwigTemplate_06631530ba4e266f62fa419a5f82dee6f1af05203604a413ddb61f5cb5b95c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IntranetPlatformBundle::layout.html.twig", "IntranetPlatformBundle:Main:accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97cd5a39f565f28673ba2c733c06d2e8f86f76b867283b937f4d7e1c15a0e81c = $this->env->getExtension("native_profiler");
        $__internal_97cd5a39f565f28673ba2c733c06d2e8f86f76b867283b937f4d7e1c15a0e81c->enter($__internal_97cd5a39f565f28673ba2c733c06d2e8f86f76b867283b937f4d7e1c15a0e81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97cd5a39f565f28673ba2c733c06d2e8f86f76b867283b937f4d7e1c15a0e81c->leave($__internal_97cd5a39f565f28673ba2c733c06d2e8f86f76b867283b937f4d7e1c15a0e81c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ccd1aa55df97f8c1d8aa0c3b32168297f41a14eae80227fbf46fc342f7c8f85 = $this->env->getExtension("native_profiler");
        $__internal_8ccd1aa55df97f8c1d8aa0c3b32168297f41a14eae80227fbf46fc342f7c8f85->enter($__internal_8ccd1aa55df97f8c1d8aa0c3b32168297f41a14eae80227fbf46fc342f7c8f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <p>Page accueil</p>
    
";
        
        $__internal_8ccd1aa55df97f8c1d8aa0c3b32168297f41a14eae80227fbf46fc342f7c8f85->leave($__internal_8ccd1aa55df97f8c1d8aa0c3b32168297f41a14eae80227fbf46fc342f7c8f85_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle:Main:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "IntranetPlatformBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <p>Page accueil</p>*/
/*     */
/* {% endblock %}*/
