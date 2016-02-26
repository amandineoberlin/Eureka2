<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_00299b3d73322abbb49e087a5d99b0ae5f5c2db6e4ac1c460be56381095bbdf8 extends Twig_Template
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
        $__internal_b923d63585ade93de45592a00746ec7fa37669cde6cfa830773a2da250b0f5bf = $this->env->getExtension("native_profiler");
        $__internal_b923d63585ade93de45592a00746ec7fa37669cde6cfa830773a2da250b0f5bf->enter($__internal_b923d63585ade93de45592a00746ec7fa37669cde6cfa830773a2da250b0f5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<div>
    <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>
<div>
    <hr>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-danger\" role=\"button\">Annuler</a>
    <hr
</div>
";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b923d63585ade93de45592a00746ec7fa37669cde6cfa830773a2da250b0f5bf->leave($__internal_b923d63585ade93de45592a00746ec7fa37669cde6cfa830773a2da250b0f5bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  41 => 10,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/* {{ form_widget(form) }}*/
/* <div>*/
/*     <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/* </div>*/
/* <div>*/
/*     <hr>*/
/*     <a href="{{path("fos_user_profile_show")}}" class="btn btn-danger" role="button">Annuler</a>*/
/*     <hr*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
