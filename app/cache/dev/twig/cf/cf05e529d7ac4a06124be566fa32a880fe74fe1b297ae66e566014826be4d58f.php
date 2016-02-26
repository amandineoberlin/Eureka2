<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_18603a56672167fe0e660d572828e9ec03a85c451251e58434873e577b12a175 extends Twig_Template
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
        $__internal_14c90979a0fd176f332c1291ca45dccc0cc191501d9eefd74294fbb133e63020 = $this->env->getExtension("native_profiler");
        $__internal_14c90979a0fd176f332c1291ca45dccc0cc191501d9eefd74294fbb133e63020->enter($__internal_14c90979a0fd176f332c1291ca45dccc0cc191501d9eefd74294fbb133e63020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "<ul class=\"nav nav-tabs\">
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Connexion</a></li>
    <li class=\"active\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></li>  
</ul>
<hr>

";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
";
        // line 12
        echo "Email : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
Pseudo : ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
<div>
    <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Valider", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>

";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<hr>";
        
        $__internal_14c90979a0fd176f332c1291ca45dccc0cc191501d9eefd74294fbb133e63020->leave($__internal_14c90979a0fd176f332c1291ca45dccc0cc191501d9eefd74294fbb133e63020_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  53 => 15,  48 => 13,  43 => 12,  39 => 10,  32 => 6,  28 => 5,  25 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {# Lien de redirection vers la route d'inscription et de connexion #}*/
/* <ul class="nav nav-tabs">*/
/*     <li><a href="{{path("fos_user_security_login")}}">Connexion</a></li>*/
/*     <li class="active"><a href="{{path("fos_user_registration_register")}}">S'inscrire</a></li>  */
/* </ul>*/
/* <hr>*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* {#{{ form_widget(form) }}#}*/
/* Email : {{ form_widget(form.email) }}*/
/* Pseudo : {{ form_widget(form.username) }}*/
/* <div>*/
/*     <input type="submit" value="{{ 'Valider'|trans }}" />*/
/* </div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* <hr>*/
