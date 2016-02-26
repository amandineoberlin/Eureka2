<?php

/* IntranetPlatformBundle:Main:index.html.twig */
class __TwigTemplate_42df8b3a620718d5b2af38252deebe979ca99aabac3089df5a2b02ad2f8413c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IntranetPlatformBundle::layout.html.twig", "IntranetPlatformBundle:Main:index.html.twig", 1);
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
        $__internal_1d4c39737d96c6090f645113a9563ca8674421796fee6d0cbed1e7504a62f6ea = $this->env->getExtension("native_profiler");
        $__internal_1d4c39737d96c6090f645113a9563ca8674421796fee6d0cbed1e7504a62f6ea->enter($__internal_1d4c39737d96c6090f645113a9563ca8674421796fee6d0cbed1e7504a62f6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d4c39737d96c6090f645113a9563ca8674421796fee6d0cbed1e7504a62f6ea->leave($__internal_1d4c39737d96c6090f645113a9563ca8674421796fee6d0cbed1e7504a62f6ea_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb38eaaba1dd7d53132cb4af5020c1a358840f58400bf46427f75b7bcc4478d9 = $this->env->getExtension("native_profiler");
        $__internal_bb38eaaba1dd7d53132cb4af5020c1a358840f58400bf46427f75b7bcc4478d9->enter($__internal_bb38eaaba1dd7d53132cb4af5020c1a358840f58400bf46427f75b7bcc4478d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
index

";
        
        $__internal_bb38eaaba1dd7d53132cb4af5020c1a358840f58400bf46427f75b7bcc4478d9->leave($__internal_bb38eaaba1dd7d53132cb4af5020c1a358840f58400bf46427f75b7bcc4478d9_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle:Main:index.html.twig";
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
/* index*/
/* */
/* {% endblock %}*/
