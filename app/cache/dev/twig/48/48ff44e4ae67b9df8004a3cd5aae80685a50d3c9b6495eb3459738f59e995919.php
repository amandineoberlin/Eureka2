<?php

/* IntranetPlatformBundle::layout.html.twig */
class __TwigTemplate_6e345f5c2be7e281d7010c6f58065b15e77dbe423c224cf278326b172fa8af3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreCoreBundle:Core:layout.html.twig", "IntranetPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreCoreBundle:Core:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b988ce58fa919986d0911c7a178dbcbf8a34d7b18e4312710945e76cb0dcf9cc = $this->env->getExtension("native_profiler");
        $__internal_b988ce58fa919986d0911c7a178dbcbf8a34d7b18e4312710945e76cb0dcf9cc->enter($__internal_b988ce58fa919986d0911c7a178dbcbf8a34d7b18e4312710945e76cb0dcf9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b988ce58fa919986d0911c7a178dbcbf8a34d7b18e4312710945e76cb0dcf9cc->leave($__internal_b988ce58fa919986d0911c7a178dbcbf8a34d7b18e4312710945e76cb0dcf9cc_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_42033666f80c21a6ce51155558a23fc3e51a06426f3d2bb94b5f47b4c33ebc62 = $this->env->getExtension("native_profiler");
        $__internal_42033666f80c21a6ce51155558a23fc3e51a06426f3d2bb94b5f47b4c33ebc62->enter($__internal_42033666f80c21a6ce51155558a23fc3e51a06426f3d2bb94b5f47b4c33ebc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        // line 5
        echo "
    ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 7
            echo "        <div class=\"row\">
            <h3 class=\"col-md-offset-1 col-md-10 well\" style=\"text-align:center;\">
                Menu Client </h3>
            ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo " 
            <div class=\"row\">
                <h3 class=\"col-md-offset-1 col-md-10 well\" style=\"text-align:center;\">
                    Menu Client </h3>
                ";
        }
        // line 15
        echo "

            ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 18
            echo "                <nav class=\"navbar btn-group-justified  navbar-inverse \">
                    <a class=\"navbar-brand\" href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("intranet_accueil");
            echo "\">Accueil</a>
                    <a class=\"navbar-brand\" href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon Compte</a>
                    <a class=\"navbar-brand\" href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("intranet_faire-une-demande");
            echo "\">Faire une demande</a>
                    <a class=\"navbar-brand\" href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("intranet_voir-mes-demandes");
            echo "\">Mes demandes</a>
                    <a class=\"navbar-brand\" href=\"\">Mes Factures</a>
                    <a class=\"navbar-brand\" href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">D&eacute;connexion</a>
                </nav>
            </div>
        ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "            <nav class=\"navbar btn-group-justified  navbar-inverse \">
                <a class=\"navbar-brand\" href=\"\">Accueil</a>
                <a class=\"navbar-brand\" href=\"\">Mon Compte</a>
                <a class=\"navbar-brand\" href=\"\">Donn&eacute;es clients</a>
                <a class=\"navbar-brand\" href=\"\">Demandes</a>
                <a class=\"navbar-brand\" href=\"\">Factures</a>
                <a class=\"navbar-brand\" href=\"\">Administration</a>
                <a class=\"navbar-brand\" href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">D&eacute;connexion</a>  
            </nav>
        </div>
    ";
        }
        // line 39
        echo "

    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
";
        
        $__internal_42033666f80c21a6ce51155558a23fc3e51a06426f3d2bb94b5f47b4c33ebc62->leave($__internal_42033666f80c21a6ce51155558a23fc3e51a06426f3d2bb94b5f47b4c33ebc62_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_51cf021d341a192d35bc03f02fd85268c7e17c1f8dc881395686418af4357491 = $this->env->getExtension("native_profiler");
        $__internal_51cf021d341a192d35bc03f02fd85268c7e17c1f8dc881395686418af4357491->enter($__internal_51cf021d341a192d35bc03f02fd85268c7e17c1f8dc881395686418af4357491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "    ";
        
        $__internal_51cf021d341a192d35bc03f02fd85268c7e17c1f8dc881395686418af4357491->leave($__internal_51cf021d341a192d35bc03f02fd85268c7e17c1f8dc881395686418af4357491_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 42,  124 => 41,  116 => 43,  114 => 41,  110 => 39,  103 => 35,  94 => 28,  87 => 24,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  67 => 18,  65 => 17,  61 => 15,  54 => 10,  48 => 7,  46 => 6,  43 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "CoreCoreBundle:Core:layout.html.twig" %}*/
/* {% block nav %}*/
/*     {# onglets de navigation affichés par condition de roles tels que définis dans app/security.yml */
/*     #}*/
/* */
/*     {% if is_granted('ROLE_USER') %}*/
/*         <div class="row">*/
/*             <h3 class="col-md-offset-1 col-md-10 well" style="text-align:center;">*/
/*                 Menu Client </h3>*/
/*             {% elseif is_granted('ROLE_ADMIN') %} */
/*             <div class="row">*/
/*                 <h3 class="col-md-offset-1 col-md-10 well" style="text-align:center;">*/
/*                     Menu Client </h3>*/
/*                 {% endif %}*/
/* */
/* */
/*             {% if is_granted('ROLE_USER') %}*/
/*                 <nav class="navbar btn-group-justified  navbar-inverse ">*/
/*                     <a class="navbar-brand" href="{{ path("intranet_accueil") }}">Accueil</a>*/
/*                     <a class="navbar-brand" href="{{ path("fos_user_profile_show") }}">Mon Compte</a>*/
/*                     <a class="navbar-brand" href="{{ path("intranet_faire-une-demande") }}">Faire une demande</a>*/
/*                     <a class="navbar-brand" href="{{ path("intranet_voir-mes-demandes") }}">Mes demandes</a>*/
/*                     <a class="navbar-brand" href="">Mes Factures</a>*/
/*                     <a class="navbar-brand" href="{{ path("fos_user_security_logout") }}">D&eacute;connexion</a>*/
/*                 </nav>*/
/*             </div>*/
/*         {% elseif is_granted('ROLE_ADMIN') %}*/
/*             <nav class="navbar btn-group-justified  navbar-inverse ">*/
/*                 <a class="navbar-brand" href="">Accueil</a>*/
/*                 <a class="navbar-brand" href="">Mon Compte</a>*/
/*                 <a class="navbar-brand" href="">Donn&eacute;es clients</a>*/
/*                 <a class="navbar-brand" href="">Demandes</a>*/
/*                 <a class="navbar-brand" href="">Factures</a>*/
/*                 <a class="navbar-brand" href="">Administration</a>*/
/*                 <a class="navbar-brand" href="{{ path("fos_user_security_logout") }}">D&eacute;connexion</a>  */
/*             </nav>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/*     {% block body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
