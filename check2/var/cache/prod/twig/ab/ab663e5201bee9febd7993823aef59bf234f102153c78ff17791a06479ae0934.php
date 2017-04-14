<?php

/* @Subject/layout.html.twig */
class __TwigTemplate_75e1b707c2a3b8b49acd77fb5369ccf6032db952d6a4283634be29182f0fc495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>Checkpoint 2 - PHP</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"https://avatars1.githubusercontent.com/u/8874047?v=3&s=200\" />
</head>

<body id=\"body\">
";
        // line 16
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "</body>
</html>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <!-- Compiled and minified CSS -->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/subject/css/style.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 16
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 17
        echo "    <ul id=\"dropdown1\" class=\"dropdown-content\">
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
        <li class=\"divider\"></li>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("algo");
        echo "\">Algorithmique</a></li>
        <li class=\"divider\"></li>
        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sf3");
        echo "\">Symfony / MVC / Intégration</a></li>
    </ul>
    <nav>
        <div class=\"nav-wrapper\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"brand-logo center nav_bar_logo\"><img src=\"https://avatars1.githubusercontent.com/u/8874047?v=3&s=200\" alt=\"logo wcs\"/></a>
            <ul id=\"nav-mobile\" class=\"left hide-on-med-and-down\">
                <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Menu</a></li>
            </ul>
        </div>
    </nav>
";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        // line 37
        echo "    <footer class=\"page-footer\">
        <div class=\"footer-copyright\">
            <div class=\"container\">
                © 2017 Copyright WCS
            </div>
        </div>
    </footer>
";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "    <script src=\"https://code.jquery.com/jquery-3.1.0.min.js\"   integrity=\"sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=\"   crossorigin=\"anonymous\"></script>
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Subject/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 47,  128 => 46,  117 => 37,  114 => 36,  109 => 34,  98 => 26,  91 => 22,  86 => 20,  81 => 18,  78 => 17,  75 => 16,  69 => 10,  64 => 7,  61 => 6,  56 => 51,  54 => 46,  51 => 45,  49 => 36,  46 => 35,  44 => 34,  41 => 33,  39 => 16,  33 => 12,  31 => 6,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Subject/layout.html.twig", "/home/wilder2/Projets/check2/src/SubjectBundle/Resources/views/layout.html.twig");
    }
}
