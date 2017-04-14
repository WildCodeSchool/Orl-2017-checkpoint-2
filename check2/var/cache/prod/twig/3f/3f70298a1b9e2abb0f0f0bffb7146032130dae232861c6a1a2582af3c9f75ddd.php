<?php

/* SubjectBundle:Default:index.html.twig */
class __TwigTemplate_2d45f821d6e197c32d4261d71cfb92697d896235c05c54f9ae1a4e5ed72c7a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Subject/layout.html.twig", "SubjectBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Subject/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"intro container\">
        <div class=\"row>\">
            <h1>Checkpoint 2 - 14/04/2017</h1>
            <p>Le checkpoint se découpe en deux étapes, tu peux réaliser les deux étapes distinctement les unes des autres, elles ne sont pas liées.</p>
            <p>La partie sur Symfony / MVC / Intégration se découpe elle aussi en plusieurs étapes, cependant réalise les bien dans l'ordre.</p>
            <p>Même si tu ne parviens pas à réaliser la totalité de l'étape, laisse le code, il manque parfois peu de chose pour que ce soit fonctionnel, et si tu as besoin, n'hesite pas à faire appel à ton formateur</p>
            <div class=\"row attention line_divider\">
                <div class=\"col m2\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/subject/pictures/attention.png"), "html", null, true);
        echo "\" alt=\"attention\"/>
                </div>
                <div class=\"col m8\">
                    <p>Avant toute chose, crée toi une branche sur git avec ton nom, c'est sur cette dernière que tu travailleras. Une fois le travail effectué tu pousseras ton travail dessus</p>
                </div>
                <div class=\"col m2\">
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/subject/pictures/attention.png"), "html", null, true);
        echo "\" alt=\"attention\"/>
                </div>
            </div>
        </div>
        <div class=\"row etapes\">
            <div class=\"col m6\">
                <h4>Algorithmique</h4>
                <div><a class=\"waves-effect waves-light btn\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("algo");
        echo "\">C'est parti</a></div>
            </div>
            <div class=\"col m6\">
                <h4>Symfony / MVC / Intégration</h4>
                <div><a class=\"waves-effect waves-light btn\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sf3");
        echo "\">C'est parti</a></div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "SubjectBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  61 => 26,  51 => 19,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SubjectBundle:Default:index.html.twig", "/home/wilder2/Projets/check2/src/SubjectBundle/Resources/views/Default/index.html.twig");
    }
}
