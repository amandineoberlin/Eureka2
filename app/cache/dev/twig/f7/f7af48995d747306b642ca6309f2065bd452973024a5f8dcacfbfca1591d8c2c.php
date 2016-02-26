<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_c41a22a8721d0cf6dc18750b8d11b015b8730d7fc8cb3e376317eeb17757d433 extends Twig_Template
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
        $__internal_35487a555135151f884bd2a315db7d101b0d4a2a4c503e6b6fbff3c0be50f1f3 = $this->env->getExtension("native_profiler");
        $__internal_35487a555135151f884bd2a315db7d101b0d4a2a4c503e6b6fbff3c0be50f1f3->enter($__internal_35487a555135151f884bd2a315db7d101b0d4a2a4c503e6b6fbff3c0be50f1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "

<div class=\"fos_user_user_show\">
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>

<hr>
<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-warning\" role=\"button\">Modifier mes informations</a>
<hr
";
        
        $__internal_35487a555135151f884bd2a315db7d101b0d4a2a4c503e6b6fbff3c0be50f1f3->leave($__internal_35487a555135151f884bd2a315db7d101b0d4a2a4c503e6b6fbff3c0be50f1f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  33 => 6,  27 => 5,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
/* <hr>*/
/* <a href="{{path("fos_user_profile_edit")}}" class="btn btn-warning" role="button">Modifier mes informations</a>*/
/* <hr*/
/* */
