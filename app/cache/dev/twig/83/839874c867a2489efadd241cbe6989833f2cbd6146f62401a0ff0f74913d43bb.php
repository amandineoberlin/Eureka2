<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_bc4414feea836decef30fbdf9867f3acec544cc1727c79feee5ffb09b8fdfd71 extends Twig_Template
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
        $__internal_3d9665735fa05c513efffdb8b875aaef82d33f7798b21f089b26329c39dab5fb = $this->env->getExtension("native_profiler");
        $__internal_3d9665735fa05c513efffdb8b875aaef82d33f7798b21f089b26329c39dab5fb->enter($__internal_3d9665735fa05c513efffdb8b875aaef82d33f7798b21f089b26329c39dab5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d9665735fa05c513efffdb8b875aaef82d33f7798b21f089b26329c39dab5fb->leave($__internal_3d9665735fa05c513efffdb8b875aaef82d33f7798b21f089b26329c39dab5fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0b31dd6c27f1bc70ca2d0baf87ed9c001e3af2f13f2d495021cd434c4f0c7b6 = $this->env->getExtension("native_profiler");
        $__internal_a0b31dd6c27f1bc70ca2d0baf87ed9c001e3af2f13f2d495021cd434c4f0c7b6->enter($__internal_a0b31dd6c27f1bc70ca2d0baf87ed9c001e3af2f13f2d495021cd434c4f0c7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a0b31dd6c27f1bc70ca2d0baf87ed9c001e3af2f13f2d495021cd434c4f0c7b6->leave($__internal_a0b31dd6c27f1bc70ca2d0baf87ed9c001e3af2f13f2d495021cd434c4f0c7b6_prof);

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
