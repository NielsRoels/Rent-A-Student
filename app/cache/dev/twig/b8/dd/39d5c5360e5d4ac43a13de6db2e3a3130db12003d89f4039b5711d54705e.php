<?php

/* nav.html.twig */
class __TwigTemplate_b8dd39d5c5360e5d4ac43a13de6db2e3a3130db12003d89f4039b5711d54705e extends Twig_Template
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
        // line 1
        $this->displayBlock('nav', $context, $blocks);
    }

    public function block_nav($context, array $blocks = array())
    {
        // line 2
        echo "
\t<nav class=\"navbar navbar-fixed-top navbar-inverse\">
\t\t<div class=\"container\">

\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("imd_app_homepage");
        echo "\">Heroes</a>
\t\t\t</div>

\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">

\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">

\t\t\t\t";
        // line 21
        echo "
\t\t\t\t\t";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Admin <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("imd_app_adminhomepage");
            echo "\">Controlepaneel</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("imd_app_admin_userlist");
            echo "\">Gebruikers</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("imd_app_adminlistbookings");
            echo "\">Boekingen</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t";
        }
        // line 40
        echo "
\t\t\t\t\t";
        // line 41
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "\t\t\t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>
\t\t\t\t\t\t</li>
                    
\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t<li class=\"";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "imd_app_messages_messagelist")) {
                echo "active";
            }
            echo "\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle nav-hover\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Messages<span class=\"caret\"></span></a>
                        \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("imd_app_messages_messagelist");
            echo "\">
\t\t\t\t\t\t\t\t\t\tNew messages: ";
            // line 53
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ImdAppBundle:Nav:notification"));
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
                            </ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("imd_app_booking_list");
            echo "\">Bookings</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Settings <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profiel</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t";
        }
        // line 76
        echo "
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>
\t</nav>
";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 76,  142 => 70,  136 => 67,  126 => 60,  116 => 53,  112 => 52,  101 => 47,  94 => 43,  87 => 42,  85 => 41,  82 => 40,  73 => 34,  67 => 31,  61 => 28,  54 => 23,  52 => 22,  49 => 21,  39 => 13,  26 => 2,  20 => 1,);
    }
}
