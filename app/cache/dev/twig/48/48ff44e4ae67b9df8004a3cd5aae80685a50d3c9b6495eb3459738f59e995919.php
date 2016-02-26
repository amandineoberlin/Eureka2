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
        $__internal_506d14208097485e1359c16898cb8b0026d0749485e71b6f31c665b62ab8e016 = $this->env->getExtension("native_profiler");
        $__internal_506d14208097485e1359c16898cb8b0026d0749485e71b6f31c665b62ab8e016->enter($__internal_506d14208097485e1359c16898cb8b0026d0749485e71b6f31c665b62ab8e016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_506d14208097485e1359c16898cb8b0026d0749485e71b6f31c665b62ab8e016->leave($__internal_506d14208097485e1359c16898cb8b0026d0749485e71b6f31c665b62ab8e016_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ea8db3ffec7bbc9d7c49c0820fc9f95c654c9dd5353143da9eb6f866d3eeb1e8 = $this->env->getExtension("native_profiler");
        $__internal_ea8db3ffec7bbc9d7c49c0820fc9f95c654c9dd5353143da9eb6f866d3eeb1e8->enter($__internal_ea8db3ffec7bbc9d7c49c0820fc9f95c654c9dd5353143da9eb6f866d3eeb1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_ea8db3ffec7bbc9d7c49c0820fc9f95c654c9dd5353143da9eb6f866d3eeb1e8->leave($__internal_ea8db3ffec7bbc9d7c49c0820fc9f95c654c9dd5353143da9eb6f866d3eeb1e8_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_f17e7432c2e8882e718dacc3ba27821048d5877c8ba0e5f84c446aaab65857f3 = $this->env->getExtension("native_profiler");
        $__internal_f17e7432c2e8882e718dacc3ba27821048d5877c8ba0e5f84c446aaab65857f3->enter($__internal_f17e7432c2e8882e718dacc3ba27821048d5877c8ba0e5f84c446aaab65857f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "    ";
        
        $__internal_f17e7432c2e8882e718dacc3ba27821048d5877c8ba0e5f84c446aaab65857f3->leave($__internal_f17e7432c2e8882e718dacc3ba27821048d5877c8ba0e5f84c446aaab65857f3_prof);

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
