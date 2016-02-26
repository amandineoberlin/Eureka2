<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_380964c334be3bd660d07b8800920f99934b8f6cb13a95fbcf416b1239e76291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 3);
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
        $__internal_a185c8523ae7a9a4312b65cd45e1bbe690247e7c226689afc141aaf2b8fed03b = $this->env->getExtension("native_profiler");
        $__internal_a185c8523ae7a9a4312b65cd45e1bbe690247e7c226689afc141aaf2b8fed03b->enter($__internal_a185c8523ae7a9a4312b65cd45e1bbe690247e7c226689afc141aaf2b8fed03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a185c8523ae7a9a4312b65cd45e1bbe690247e7c226689afc141aaf2b8fed03b->leave($__internal_a185c8523ae7a9a4312b65cd45e1bbe690247e7c226689afc141aaf2b8fed03b_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8eceee9564c8ec90f3ae9c591e4b5bf48d255aaa5243432edf4bf0ec0f73b71 = $this->env->getExtension("native_profiler");
        $__internal_f8eceee9564c8ec90f3ae9c591e4b5bf48d255aaa5243432edf4bf0ec0f73b71->enter($__internal_f8eceee9564c8ec90f3ae9c591e4b5bf48d255aaa5243432edf4bf0ec0f73b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    ";
        // line 12
        echo "    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Connexion</a></li>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></li>  
    </ul>
    <hr>
    
    <div class=\"container-fluid\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            <div class=\"form-group\">
                <label for=\"username\">Nom d'utilisateur</label>
                <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\" />
            </div>
            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">Se souvenir de moi</label>
            </div>
            <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-default\" value=\"Se connecter\" />Se connecter</button>        
        </form>
    </div> 
    <hr>
";
        
        $__internal_f8eceee9564c8ec90f3ae9c591e4b5bf48d255aaa5243432edf4bf0ec0f73b71->leave($__internal_f8eceee9564c8ec90f3ae9c591e4b5bf48d255aaa5243432edf4bf0ec0f73b71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  71 => 20,  67 => 19,  59 => 14,  55 => 13,  52 => 12,  49 => 10,  43 => 8,  40 => 7,  34 => 6,  11 => 3,);
    }
}
/* {# vu que mon architecture de dossiers suit celle du fos user bundle, ma page login hérite de celle*/
/* du fos user bundle #}*/
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {# J'override le template comme je le souhaite #}*/
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     {# Lien de redirection vers la route d'inscription et de connexion #}*/
/*     <ul class="nav nav-tabs">*/
/*         <li class="active"><a href="{{path("fos_user_registration_register")}}">Connexion</a></li>*/
/*         <li><a href="{{path("fos_user_registration_register")}}">S'inscrire</a></li>  */
/*     </ul>*/
/*     <hr>*/
/*     */
/*     <div class="container-fluid">*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*             <div class="form-group">*/
/*                 <label for="username">Nom d'utilisateur</label>*/
/*                 <input type="text" id="username" name="_username" class="form-control" value="{{ last_username }}" required="required" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="password">Mot de passe</label>*/
/*                 <input type="password" id="password" name="_password" class="form-control" required="required" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                 <label for="remember_me">Se souvenir de moi</label>*/
/*             </div>*/
/*             <button type="submit" id="_submit" name="_submit" class="btn btn-default" value="Se connecter" />Se connecter</button>        */
/*         </form>*/
/*     </div> */
/*     <hr>*/
/* {% endblock fos_user_content %}*/
