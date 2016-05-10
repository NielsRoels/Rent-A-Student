<?php

/* base.html.twig */
class __TwigTemplate_652a9a6a13bfce78a006b27d90f2b871c61a775d8d2e1a318b0c37224edc9e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->env->loadTemplate("nav.html.twig")->display($context);
        // line 13
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 28
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "UNDEFINED";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        // line 15
        echo "            <footer class=\"footer\">
                <div class=\"container\">
                    <p class=\"text-muted\">
                    <b class=\"brand\">HEROES</b> is een initiatief ontwikkelt door
                    <a href=\"//jasperdesmet.be\">Jasper De Smet</a>, 
                    <a href=\"//ianemsens.be\">Ian Emsens</a>, 
                    <a href=\"//nielsroels.be\">Niels Roels</a> en 
                    <a href=\"//alexandretozzi.be\">Alexandre Tozzi</a>.
                    Met afbeeldingen van <a href=\"//dorienthys.com\">Dorien Thys</a>.
                    </p>
                </div>
            </footer>
        ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "            <script src=\"https://code.jquery.com/jquery-2.1.3.min.js\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/bootstrap-sass-official/assets/javascripts/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  103 => 29,  100 => 28,  84 => 15,  81 => 14,  76 => 13,  69 => 7,  66 => 6,  60 => 5,  54 => 32,  51 => 28,  48 => 14,  45 => 13,  43 => 12,  36 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
