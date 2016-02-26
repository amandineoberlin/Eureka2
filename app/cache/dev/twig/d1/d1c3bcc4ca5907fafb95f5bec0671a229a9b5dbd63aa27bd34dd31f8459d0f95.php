<?php

/* CoreCoreBundle:Core:layout.html.twig */
class __TwigTemplate_6cd63de9bf0ab358df55f60025112ac8d4f15e5ea6198ad5b54f7d7f8db0d8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aac138b1f1b5622258468e99326bfe6acd5fc2ed1c34e0d2b42b31dd5940964b = $this->env->getExtension("native_profiler");
        $__internal_aac138b1f1b5622258468e99326bfe6acd5fc2ed1c34e0d2b42b31dd5940964b->enter($__internal_aac138b1f1b5622258468e99326bfe6acd5fc2ed1c34e0d2b42b31dd5940964b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCoreBundle:Core:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <html class=\"no-js\">
        <head>
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

            <title>Eureka</title>

            <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logoEurShortcut.png"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" media=\"all\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" media=\"all\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" media=\"all\"/>
            <!--javascript/jquery-->

            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/components/jquery/jquery-ui.css"), "html", null, true);
        echo "\" media=\"screen\"\t/>
            <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery/jquery-ui.js"), "html", null, true);
        echo "\"></script>

            <!--<script type=\"text/javascript\" src=\"../web/assets/bootstrap/js/dataTables.bootstrap.js\"></script>
            <!--<script type=\"text/javascript\" src=\"/web/components/bootstrap/js/jquery-1.11.1.min.js\"></script>
            <!--<script type=\"text/javascript\" src=\"../../assets/components/bootstrap/js/jquery.dataTables.min.js\"></script>

            <!--<script type=\"text/javascript\" src=\"../../assets/components/bootstrap/js/bootstrap.js\"></script>
            <!--<script type=\"text/javascript\" src=\"../../assets/components/bootstrap/js/bootstrap-dropdown.js\"></script>
            <!--<script type=\"text/javascript\" src=\"../../assets/js/suggestions.php\"></script>
            <!--<script type=\"text/javascript\" src=\"../../assets/components/allFunction.js\"></script>-->

        </head>

        <body id=\"haut\" class=\"well container\">
        <body id=\"haut\">
            <div class=\"row well\">
                <ul style=\"text-align:center;\" class=\"nav nav-pills\">
                    <!--LOGO -->
                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getUrl("accueil_homepage");
        echo "\" title=\"Accueil\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"alt=\"Logo Eureka\"/></a></li>
                    
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getUrl("accueil_homepage");
        echo "\" title=\"Accueil\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cap.jpg"), "html", null, true);
        echo "\" alt=\"Accueil\"/></a></li>
                    <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getUrl("presentation_homepage");
        echo "\" title=\"Présentation\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cap2.jpg"), "html", null, true);
        echo "\" alt=\"Présentation\"/></a></li>
                    <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getUrl("intranet_accueil");
        echo "\" title=\"Intranet\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cap3.jpg"), "html", null, true);
        echo "\" alt=\"Intranet\"/></a></li>\t\t\t\t\t
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getUrl("contact_homepage");
        echo "\" title=\"Contact\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cap4.jpg"), "html", null, true);
        echo "\" alt=\"Contact\"/></a></li>
                </ul>\t\t
            </div>


            ";
        // line 47
        $this->displayBlock('nav', $context, $blocks);
        // line 49
        echo "

            <footer>     \t\t
            </footer>

        </body>
    </html>";
        
        $__internal_aac138b1f1b5622258468e99326bfe6acd5fc2ed1c34e0d2b42b31dd5940964b->leave($__internal_aac138b1f1b5622258468e99326bfe6acd5fc2ed1c34e0d2b42b31dd5940964b_prof);

    }

    // line 47
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5de3ee8297cebf0dc9736ef0f4f34bfb02b80b387b6cedb0be45fef573ee2715 = $this->env->getExtension("native_profiler");
        $__internal_5de3ee8297cebf0dc9736ef0f4f34bfb02b80b387b6cedb0be45fef573ee2715->enter($__internal_5de3ee8297cebf0dc9736ef0f4f34bfb02b80b387b6cedb0be45fef573ee2715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 48
        echo "            ";
        
        $__internal_5de3ee8297cebf0dc9736ef0f4f34bfb02b80b387b6cedb0be45fef573ee2715->leave($__internal_5de3ee8297cebf0dc9736ef0f4f34bfb02b80b387b6cedb0be45fef573ee2715_prof);

    }

    public function getTemplateName()
    {
        return "CoreCoreBundle:Core:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  132 => 47,  119 => 49,  117 => 47,  107 => 42,  101 => 41,  95 => 40,  89 => 39,  82 => 37,  61 => 19,  57 => 18,  53 => 17,  47 => 14,  43 => 13,  39 => 12,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*     <html class="no-js">*/
/*         <head>*/
/*             <meta charset="utf-8">*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/*             <title>Eureka</title>*/
/* */
/*             <link rel="shortcut icon" href="{{ asset("images/logoEurShortcut.png") }}">*/
/* */
/*             <link rel="stylesheet" type="text/css" href="{{ asset("assets/bootstrap/css/bootstrap.css") }}" media="all"/>*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/main.css") }}" media="all" />*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset("assets/bootstrap/css/dataTables.bootstrap.css") }}" media="all"/>*/
/*             <!--javascript/jquery-->*/
/* */
/*             <link rel="stylesheet" type="text/css" href="{{ asset("assets/components/jquery/jquery-ui.css") }}" media="screen"	/>*/
/*             <script type="text/javascript" src="{{ asset("assets/jquery/jquery-1.10.2.js") }}"></script>*/
/*             <script type="text/javascript" src="{{ asset("assets/jquery/jquery-ui.js") }}"></script>*/
/* */
/*             <!--<script type="text/javascript" src="../web/assets/bootstrap/js/dataTables.bootstrap.js"></script>*/
/*             <!--<script type="text/javascript" src="/web/components/bootstrap/js/jquery-1.11.1.min.js"></script>*/
/*             <!--<script type="text/javascript" src="../../assets/components/bootstrap/js/jquery.dataTables.min.js"></script>*/
/* */
/*             <!--<script type="text/javascript" src="../../assets/components/bootstrap/js/bootstrap.js"></script>*/
/*             <!--<script type="text/javascript" src="../../assets/components/bootstrap/js/bootstrap-dropdown.js"></script>*/
/*             <!--<script type="text/javascript" src="../../assets/js/suggestions.php"></script>*/
/*             <!--<script type="text/javascript" src="../../assets/components/allFunction.js"></script>-->*/
/* */
/*         </head>*/
/* */
/*         <body id="haut" class="well container">*/
/*         <body id="haut">*/
/*             <div class="row well">*/
/*                 <ul style="text-align:center;" class="nav nav-pills">*/
/*                     <!--LOGO -->*/
/*                     <li><a href="{{ url('accueil_homepage') }}" title="Accueil"> <img src="{{ asset("images/logo.png") }}"alt="Logo Eureka"/></a></li>*/
/*                     */
/*                     <li><a href="{{ url('accueil_homepage') }}" title="Accueil"><img src="{{ asset("images/cap.jpg") }}" alt="Accueil"/></a></li>*/
/*                     <li><a href="{{ url('presentation_homepage') }}" title="Présentation"><img src="{{ asset("images/cap2.jpg") }}" alt="Présentation"/></a></li>*/
/*                     <li><a href="{{ url('intranet_accueil') }}" title="Intranet"><img src="{{ asset("images/cap3.jpg") }}" alt="Intranet"/></a></li>					*/
/*                     <li><a href="{{ url('contact_homepage') }}" title="Contact"><img src="{{ asset("images/cap4.jpg") }}" alt="Contact"/></a></li>*/
/*                 </ul>		*/
/*             </div>*/
/* */
/* */
/*             {% block nav %}*/
/*             {% endblock %}*/
/* */
/* */
/*             <footer>     		*/
/*             </footer>*/
/* */
/*         </body>*/
/*     </html>*/
