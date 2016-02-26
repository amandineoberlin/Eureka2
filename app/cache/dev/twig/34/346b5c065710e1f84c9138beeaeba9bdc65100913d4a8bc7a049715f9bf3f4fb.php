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
        $__internal_c5b659ac62ed7d2e7294cedd009ed8c164e99dabd30a6863161e5a285915f75b = $this->env->getExtension("native_profiler");
        $__internal_c5b659ac62ed7d2e7294cedd009ed8c164e99dabd30a6863161e5a285915f75b->enter($__internal_c5b659ac62ed7d2e7294cedd009ed8c164e99dabd30a6863161e5a285915f75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b659ac62ed7d2e7294cedd009ed8c164e99dabd30a6863161e5a285915f75b->leave($__internal_c5b659ac62ed7d2e7294cedd009ed8c164e99dabd30a6863161e5a285915f75b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_990dba5993d432994a6634be4d1be033866c28a5959cea982edbd476b8fca14e = $this->env->getExtension("native_profiler");
        $__internal_990dba5993d432994a6634be4d1be033866c28a5959cea982edbd476b8fca14e->enter($__internal_990dba5993d432994a6634be4d1be033866c28a5959cea982edbd476b8fca14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <p>Page accueil</p>
    
";
        
        $__internal_990dba5993d432994a6634be4d1be033866c28a5959cea982edbd476b8fca14e->leave($__internal_990dba5993d432994a6634be4d1be033866c28a5959cea982edbd476b8fca14e_prof);

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
