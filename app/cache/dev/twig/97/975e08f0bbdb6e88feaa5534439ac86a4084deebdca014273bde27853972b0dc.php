<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_548004c04b8dde47f4a385ce7f9e1ef07644ca26de3f874e7978b0c110cfa000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0993288bfa18d7e7151e6d27e66c1d9baacacb3e8fe4235b97778e15417790d8 = $this->env->getExtension("native_profiler");
        $__internal_0993288bfa18d7e7151e6d27e66c1d9baacacb3e8fe4235b97778e15417790d8->enter($__internal_0993288bfa18d7e7151e6d27e66c1d9baacacb3e8fe4235b97778e15417790d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0993288bfa18d7e7151e6d27e66c1d9baacacb3e8fe4235b97778e15417790d8->leave($__internal_0993288bfa18d7e7151e6d27e66c1d9baacacb3e8fe4235b97778e15417790d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ce911f924e9dd219b3a89f8bac3101bb6549be2f5eac74a5faaf0c2ad8df4cc = $this->env->getExtension("native_profiler");
        $__internal_9ce911f924e9dd219b3a89f8bac3101bb6549be2f5eac74a5faaf0c2ad8df4cc->enter($__internal_9ce911f924e9dd219b3a89f8bac3101bb6549be2f5eac74a5faaf0c2ad8df4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9ce911f924e9dd219b3a89f8bac3101bb6549be2f5eac74a5faaf0c2ad8df4cc->leave($__internal_9ce911f924e9dd219b3a89f8bac3101bb6549be2f5eac74a5faaf0c2ad8df4cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
