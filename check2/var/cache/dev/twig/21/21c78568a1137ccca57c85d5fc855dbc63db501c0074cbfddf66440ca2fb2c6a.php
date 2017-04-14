<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f53598199cc3172408221a89a9eac1511d4f127300a5f528a0185e5de92d91d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c1a02d063b7a8f2c281c75cadc80499dfe14cb2fb3f991d4fb7c5a914f2c170b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a02d063b7a8f2c281c75cadc80499dfe14cb2fb3f991d4fb7c5a914f2c170b->enter($__internal_c1a02d063b7a8f2c281c75cadc80499dfe14cb2fb3f991d4fb7c5a914f2c170b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ae6b8ef456e59dd02f93897995ff0823fc1d479d64f7f71928fd763199f25e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6b8ef456e59dd02f93897995ff0823fc1d479d64f7f71928fd763199f25e52->enter($__internal_ae6b8ef456e59dd02f93897995ff0823fc1d479d64f7f71928fd763199f25e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a02d063b7a8f2c281c75cadc80499dfe14cb2fb3f991d4fb7c5a914f2c170b->leave($__internal_c1a02d063b7a8f2c281c75cadc80499dfe14cb2fb3f991d4fb7c5a914f2c170b_prof);

        
        $__internal_ae6b8ef456e59dd02f93897995ff0823fc1d479d64f7f71928fd763199f25e52->leave($__internal_ae6b8ef456e59dd02f93897995ff0823fc1d479d64f7f71928fd763199f25e52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_164504cf8d583b075e839a3aeac0a0053961f8f22c804ea00f86550f2e4219ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164504cf8d583b075e839a3aeac0a0053961f8f22c804ea00f86550f2e4219ef->enter($__internal_164504cf8d583b075e839a3aeac0a0053961f8f22c804ea00f86550f2e4219ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_899cf2e42dd413ef2034ecb0aed4eb14a988c0ce5e09b62d903364d23b5051b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899cf2e42dd413ef2034ecb0aed4eb14a988c0ce5e09b62d903364d23b5051b6->enter($__internal_899cf2e42dd413ef2034ecb0aed4eb14a988c0ce5e09b62d903364d23b5051b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_899cf2e42dd413ef2034ecb0aed4eb14a988c0ce5e09b62d903364d23b5051b6->leave($__internal_899cf2e42dd413ef2034ecb0aed4eb14a988c0ce5e09b62d903364d23b5051b6_prof);

        
        $__internal_164504cf8d583b075e839a3aeac0a0053961f8f22c804ea00f86550f2e4219ef->leave($__internal_164504cf8d583b075e839a3aeac0a0053961f8f22c804ea00f86550f2e4219ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec6b1f96008bf39d8218afb14269038bfd8caf63be99bac1c4339923ba0ece88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6b1f96008bf39d8218afb14269038bfd8caf63be99bac1c4339923ba0ece88->enter($__internal_ec6b1f96008bf39d8218afb14269038bfd8caf63be99bac1c4339923ba0ece88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_019e1c17f53612793a9b7bddb954574ead7466621b9e9bfc37867b81a4f12b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019e1c17f53612793a9b7bddb954574ead7466621b9e9bfc37867b81a4f12b07->enter($__internal_019e1c17f53612793a9b7bddb954574ead7466621b9e9bfc37867b81a4f12b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_019e1c17f53612793a9b7bddb954574ead7466621b9e9bfc37867b81a4f12b07->leave($__internal_019e1c17f53612793a9b7bddb954574ead7466621b9e9bfc37867b81a4f12b07_prof);

        
        $__internal_ec6b1f96008bf39d8218afb14269038bfd8caf63be99bac1c4339923ba0ece88->leave($__internal_ec6b1f96008bf39d8218afb14269038bfd8caf63be99bac1c4339923ba0ece88_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c15d3a4865e033572a1de1a44ef7f06d90ef7bfcb98f3ec96ad03e876528ccc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15d3a4865e033572a1de1a44ef7f06d90ef7bfcb98f3ec96ad03e876528ccc2->enter($__internal_c15d3a4865e033572a1de1a44ef7f06d90ef7bfcb98f3ec96ad03e876528ccc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b177309db26c7eb31068719de6ed076d7ef8517d1f6532a967c8f755066f4935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b177309db26c7eb31068719de6ed076d7ef8517d1f6532a967c8f755066f4935->enter($__internal_b177309db26c7eb31068719de6ed076d7ef8517d1f6532a967c8f755066f4935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_b177309db26c7eb31068719de6ed076d7ef8517d1f6532a967c8f755066f4935->leave($__internal_b177309db26c7eb31068719de6ed076d7ef8517d1f6532a967c8f755066f4935_prof);

        
        $__internal_c15d3a4865e033572a1de1a44ef7f06d90ef7bfcb98f3ec96ad03e876528ccc2->leave($__internal_c15d3a4865e033572a1de1a44ef7f06d90ef7bfcb98f3ec96ad03e876528ccc2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/wilder2/Projets/check2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
