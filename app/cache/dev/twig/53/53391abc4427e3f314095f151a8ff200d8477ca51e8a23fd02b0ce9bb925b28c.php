<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7dc529f26d8ebdf5f9430c1afc89b27e2d0ab54480fcd69454bddaa878ad3711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_32ff1f2b5a16350a594225c174ef97daa8878cf445339a61240a4f09aeaedd58 = $this->env->getExtension("native_profiler");
        $__internal_32ff1f2b5a16350a594225c174ef97daa8878cf445339a61240a4f09aeaedd58->enter($__internal_32ff1f2b5a16350a594225c174ef97daa8878cf445339a61240a4f09aeaedd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32ff1f2b5a16350a594225c174ef97daa8878cf445339a61240a4f09aeaedd58->leave($__internal_32ff1f2b5a16350a594225c174ef97daa8878cf445339a61240a4f09aeaedd58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e6dff59e0484fd4bc29e9aefd080b613a501f37c87163ddf4326173dffbb119 = $this->env->getExtension("native_profiler");
        $__internal_6e6dff59e0484fd4bc29e9aefd080b613a501f37c87163ddf4326173dffbb119->enter($__internal_6e6dff59e0484fd4bc29e9aefd080b613a501f37c87163ddf4326173dffbb119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6e6dff59e0484fd4bc29e9aefd080b613a501f37c87163ddf4326173dffbb119->leave($__internal_6e6dff59e0484fd4bc29e9aefd080b613a501f37c87163ddf4326173dffbb119_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
