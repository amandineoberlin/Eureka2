<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6620bc22039124cf2a18e07dabe4f4edb9d523043cd2c6dd5ec51a8d8c907dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38d8ee734e67595483cc5b3233b2f67b4f2d1d07c01d50ef3ea3b67a81a8df58 = $this->env->getExtension("native_profiler");
        $__internal_38d8ee734e67595483cc5b3233b2f67b4f2d1d07c01d50ef3ea3b67a81a8df58->enter($__internal_38d8ee734e67595483cc5b3233b2f67b4f2d1d07c01d50ef3ea3b67a81a8df58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38d8ee734e67595483cc5b3233b2f67b4f2d1d07c01d50ef3ea3b67a81a8df58->leave($__internal_38d8ee734e67595483cc5b3233b2f67b4f2d1d07c01d50ef3ea3b67a81a8df58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_effbb1c2a32470309afce9516796ff56745449f33bd460185efde22a7195c2b3 = $this->env->getExtension("native_profiler");
        $__internal_effbb1c2a32470309afce9516796ff56745449f33bd460185efde22a7195c2b3->enter($__internal_effbb1c2a32470309afce9516796ff56745449f33bd460185efde22a7195c2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_effbb1c2a32470309afce9516796ff56745449f33bd460185efde22a7195c2b3->leave($__internal_effbb1c2a32470309afce9516796ff56745449f33bd460185efde22a7195c2b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
