<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e3fc443fa2dcd7dffbbb18aaf8761e3aefee828d2fa0b14b8eafa23a014ad9ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_884e504039d09fca51b83683fd03f58595abebcd080241697db5903f32d866d2 = $this->env->getExtension("native_profiler");
        $__internal_884e504039d09fca51b83683fd03f58595abebcd080241697db5903f32d866d2->enter($__internal_884e504039d09fca51b83683fd03f58595abebcd080241697db5903f32d866d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_884e504039d09fca51b83683fd03f58595abebcd080241697db5903f32d866d2->leave($__internal_884e504039d09fca51b83683fd03f58595abebcd080241697db5903f32d866d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4b450c094d00aef98c59981ea7e2fa6552799095997954266cc832beda070ce = $this->env->getExtension("native_profiler");
        $__internal_c4b450c094d00aef98c59981ea7e2fa6552799095997954266cc832beda070ce->enter($__internal_c4b450c094d00aef98c59981ea7e2fa6552799095997954266cc832beda070ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c4b450c094d00aef98c59981ea7e2fa6552799095997954266cc832beda070ce->leave($__internal_c4b450c094d00aef98c59981ea7e2fa6552799095997954266cc832beda070ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_36493d41198075815e530117aaa5efbb0d1a48bc03116385c8a0ffb3ce81deb7 = $this->env->getExtension("native_profiler");
        $__internal_36493d41198075815e530117aaa5efbb0d1a48bc03116385c8a0ffb3ce81deb7->enter($__internal_36493d41198075815e530117aaa5efbb0d1a48bc03116385c8a0ffb3ce81deb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_36493d41198075815e530117aaa5efbb0d1a48bc03116385c8a0ffb3ce81deb7->leave($__internal_36493d41198075815e530117aaa5efbb0d1a48bc03116385c8a0ffb3ce81deb7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a231fac233b3a331fb632976d5dac77e92999748482929a719997189ee6a6650 = $this->env->getExtension("native_profiler");
        $__internal_a231fac233b3a331fb632976d5dac77e92999748482929a719997189ee6a6650->enter($__internal_a231fac233b3a331fb632976d5dac77e92999748482929a719997189ee6a6650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a231fac233b3a331fb632976d5dac77e92999748482929a719997189ee6a6650->leave($__internal_a231fac233b3a331fb632976d5dac77e92999748482929a719997189ee6a6650_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
