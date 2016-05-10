<?php

/* ImdAppBundle:Admin:adminlogin.html.twig */
class __TwigTemplate_5d04ba8820567af2ee9c67141290c807efd45c1b23bbf799923538dac7ac904c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"container theme-showcase\" role=\"main\">

        ";
        // line 11
        echo "        

        ";
        // line 14
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "            <ul>
                <li><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Bekijk uw profiel</a></li>
                <li>
                    <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                </li>
            </ul>
        ";
        }
        // line 22
        echo "
        ";
        // line 24
        echo "
        <div class=\"panel panel-default\">

            <div class=\"panel-heading\">
                Login for admins
            </div>

            <div class=\"panel-body\">
                <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" \" /> 

                    <div class=\"form-group\">
                        <label for=\"username\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\"  required=\"required\" />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>

                    <div class=\"form-group\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>

                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-default\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>
            </div>

        </div>

        

    </div>

";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Admin:adminlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 50,  112 => 47,  103 => 41,  95 => 36,  88 => 32,  78 => 24,  75 => 22,  66 => 18,  61 => 16,  58 => 15,  55 => 14,  51 => 11,  46 => 7,  43 => 6,  37 => 2,  11 => 1,);
    }
}
