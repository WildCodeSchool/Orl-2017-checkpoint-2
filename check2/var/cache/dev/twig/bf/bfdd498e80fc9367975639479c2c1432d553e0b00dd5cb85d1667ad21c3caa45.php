<?php

/* CommitStripBundle:card:show.html.twig */
class __TwigTemplate_01dee473ce110bde5510edd832ea6e793403a6104349b02553f44ae5d1e9b532 extends Twig_Template
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
        $__internal_a1141fde6da2d3b6ea927958df868c56f0b02e5874779c50227a6b62674bad7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1141fde6da2d3b6ea927958df868c56f0b02e5874779c50227a6b62674bad7c->enter($__internal_a1141fde6da2d3b6ea927958df868c56f0b02e5874779c50227a6b62674bad7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommitStripBundle:card:show.html.twig"));

        $__internal_ab7aa65392d608e32a4c2406a23c657f69e06222f4680f1a94a405ff0affc541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7aa65392d608e32a4c2406a23c657f69e06222f4680f1a94a405ff0affc541->enter($__internal_ab7aa65392d608e32a4c2406a23c657f69e06222f4680f1a94a405ff0affc541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommitStripBundle:card:show.html.twig"));

        // line 1
        echo "<h1>Il était une fois</h1>


<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 4, $this->getSourceContext()); })()), "picture", array()), "html", null, true);
        echo "\">

<form>
    <a href=\"/showstory/1\">
        <input type=\"button\" value=\"page 1\"/>
    </a>
</form>



<form>
    <a href=\"/showstory/2\">
        <input type=\"button\" value=\"page 2\"/>
    </a>
</form>

<form>
    <a href=\"/showstory/3\">
        <input type=\"button\" value=\"page 3\"/>
    </a>
</form>

<form>
    <a href=\"/showstory/4\">
        <input type=\"button\" value=\"page 4\"/>
    </a>
</form>

";
        
        $__internal_a1141fde6da2d3b6ea927958df868c56f0b02e5874779c50227a6b62674bad7c->leave($__internal_a1141fde6da2d3b6ea927958df868c56f0b02e5874779c50227a6b62674bad7c_prof);

        
        $__internal_ab7aa65392d608e32a4c2406a23c657f69e06222f4680f1a94a405ff0affc541->leave($__internal_ab7aa65392d608e32a4c2406a23c657f69e06222f4680f1a94a405ff0affc541_prof);

    }

    public function getTemplateName()
    {
        return "CommitStripBundle:card:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Il était une fois</h1>


<img src=\"{{ story.picture }}\">

<form>
    <a href=\"/showstory/1\">
        <input type=\"button\" value=\"page 1\"/>
    </a>
</form>



<form>
    <a href=\"/showstory/2\">
        <input type=\"button\" value=\"page 2\"/>
    </a>
</form>

<form>
    <a href=\"/showstory/3\">
        <input type=\"button\" value=\"page 3\"/>
    </a>
</form>

<form>
    <a href=\"/showstory/4\">
        <input type=\"button\" value=\"page 4\"/>
    </a>
</form>

", "CommitStripBundle:card:show.html.twig", "/home/wilder2/Projets/check2/src/CommitStripBundle/Resources/views/card/show.html.twig");
    }
}
