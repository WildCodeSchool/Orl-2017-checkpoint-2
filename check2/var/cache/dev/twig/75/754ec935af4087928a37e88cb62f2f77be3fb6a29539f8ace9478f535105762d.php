<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dae027eb2981f265b54ea1a4e8e6d99771f230f3406bbec133f56678914f8dbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97b95465528a008274f9a9aa08ab9d0c22506f9aeafcfe6eb9995476be1d8fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b95465528a008274f9a9aa08ab9d0c22506f9aeafcfe6eb9995476be1d8fe5->enter($__internal_97b95465528a008274f9a9aa08ab9d0c22506f9aeafcfe6eb9995476be1d8fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cb30d6050c749db80151dff4e91f32153884e3a9cddd6dce379865e26fa45424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb30d6050c749db80151dff4e91f32153884e3a9cddd6dce379865e26fa45424->enter($__internal_cb30d6050c749db80151dff4e91f32153884e3a9cddd6dce379865e26fa45424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97b95465528a008274f9a9aa08ab9d0c22506f9aeafcfe6eb9995476be1d8fe5->leave($__internal_97b95465528a008274f9a9aa08ab9d0c22506f9aeafcfe6eb9995476be1d8fe5_prof);

        
        $__internal_cb30d6050c749db80151dff4e91f32153884e3a9cddd6dce379865e26fa45424->leave($__internal_cb30d6050c749db80151dff4e91f32153884e3a9cddd6dce379865e26fa45424_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64f585cac50473286a8e7ae3741052476852d9053e2361bb0eed903ec1632196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f585cac50473286a8e7ae3741052476852d9053e2361bb0eed903ec1632196->enter($__internal_64f585cac50473286a8e7ae3741052476852d9053e2361bb0eed903ec1632196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_35630d2b1657c4f05d0b3c407215ada7eb2c5cfb9b18befd9d10fc9bd552b8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35630d2b1657c4f05d0b3c407215ada7eb2c5cfb9b18befd9d10fc9bd552b8b9->enter($__internal_35630d2b1657c4f05d0b3c407215ada7eb2c5cfb9b18befd9d10fc9bd552b8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_35630d2b1657c4f05d0b3c407215ada7eb2c5cfb9b18befd9d10fc9bd552b8b9->leave($__internal_35630d2b1657c4f05d0b3c407215ada7eb2c5cfb9b18befd9d10fc9bd552b8b9_prof);

        
        $__internal_64f585cac50473286a8e7ae3741052476852d9053e2361bb0eed903ec1632196->leave($__internal_64f585cac50473286a8e7ae3741052476852d9053e2361bb0eed903ec1632196_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77271d7a1a47e91012dd1848d7a609bbeb5e5eac01637f561f4fd032ffffbff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77271d7a1a47e91012dd1848d7a609bbeb5e5eac01637f561f4fd032ffffbff1->enter($__internal_77271d7a1a47e91012dd1848d7a609bbeb5e5eac01637f561f4fd032ffffbff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8bfd8ef86352139b2c3e177002eaa55cff8443a9d339e1d5db395882e0917f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfd8ef86352139b2c3e177002eaa55cff8443a9d339e1d5db395882e0917f17->enter($__internal_8bfd8ef86352139b2c3e177002eaa55cff8443a9d339e1d5db395882e0917f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8bfd8ef86352139b2c3e177002eaa55cff8443a9d339e1d5db395882e0917f17->leave($__internal_8bfd8ef86352139b2c3e177002eaa55cff8443a9d339e1d5db395882e0917f17_prof);

        
        $__internal_77271d7a1a47e91012dd1848d7a609bbeb5e5eac01637f561f4fd032ffffbff1->leave($__internal_77271d7a1a47e91012dd1848d7a609bbeb5e5eac01637f561f4fd032ffffbff1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_333ba0af46202259cf80abce2825f0f50771c981219879c1203f90e125d4bbce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333ba0af46202259cf80abce2825f0f50771c981219879c1203f90e125d4bbce->enter($__internal_333ba0af46202259cf80abce2825f0f50771c981219879c1203f90e125d4bbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f1c4cb72359aa8d47fe769d5cfe753360776286ef47c92b8abb5ca73f10ffa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c4cb72359aa8d47fe769d5cfe753360776286ef47c92b8abb5ca73f10ffa2d->enter($__internal_f1c4cb72359aa8d47fe769d5cfe753360776286ef47c92b8abb5ca73f10ffa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f1c4cb72359aa8d47fe769d5cfe753360776286ef47c92b8abb5ca73f10ffa2d->leave($__internal_f1c4cb72359aa8d47fe769d5cfe753360776286ef47c92b8abb5ca73f10ffa2d_prof);

        
        $__internal_333ba0af46202259cf80abce2825f0f50771c981219879c1203f90e125d4bbce->leave($__internal_333ba0af46202259cf80abce2825f0f50771c981219879c1203f90e125d4bbce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/wilder2/Projets/check2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
