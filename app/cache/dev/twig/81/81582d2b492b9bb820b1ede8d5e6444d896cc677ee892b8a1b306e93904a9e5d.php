<?php

/* IntranetPlatformBundle:Main:edit.html.twig */
class __TwigTemplate_8be56b19b832f0623c81b3c425189907ad0e00627d79b238565dfc7dce43cb68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IntranetPlatformBundle::layout.html.twig", "IntranetPlatformBundle:Main:edit.html.twig", 1);
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
        $__internal_07bc7dedce2de0f3efd822bfe6e9553498e90e9669f5b4b825db982f90dc4f7d = $this->env->getExtension("native_profiler");
        $__internal_07bc7dedce2de0f3efd822bfe6e9553498e90e9669f5b4b825db982f90dc4f7d->enter($__internal_07bc7dedce2de0f3efd822bfe6e9553498e90e9669f5b4b825db982f90dc4f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07bc7dedce2de0f3efd822bfe6e9553498e90e9669f5b4b825db982f90dc4f7d->leave($__internal_07bc7dedce2de0f3efd822bfe6e9553498e90e9669f5b4b825db982f90dc4f7d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_96602fa613313827761a867150740e935b3f1197b3d6c103f0097eb21bac8338 = $this->env->getExtension("native_profiler");
        $__internal_96602fa613313827761a867150740e935b3f1197b3d6c103f0097eb21bac8338->enter($__internal_96602fa613313827761a867150740e935b3f1197b3d6c103f0097eb21bac8338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


";
        
        $__internal_96602fa613313827761a867150740e935b3f1197b3d6c103f0097eb21bac8338->leave($__internal_96602fa613313827761a867150740e935b3f1197b3d6c103f0097eb21bac8338_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle:Main:edit.html.twig";
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
/* */
/* */
/* {% endblock %}*/
