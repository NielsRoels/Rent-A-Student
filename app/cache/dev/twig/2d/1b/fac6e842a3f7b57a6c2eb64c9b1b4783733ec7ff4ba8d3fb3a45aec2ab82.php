<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2d1bfac6e842a3f7b57a6c2eb64c9b1b4783733ec7ff4ba8d3fb3a45aec2ab82 extends Twig_Template
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
    <div class=\"container padding\" role=\"main\">

        ";
        // line 11
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "            <ul>
                <li><a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Bekijk uw profiel</a></li>
                <li>
                    <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                </li>
            </ul>
        ";
        }
        // line 19
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 23
        echo "                <h2>Login via facebook!</h2>
                <ul class=\"loginMethods\">
                    <li>
                        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\" class=\"btn btn-block btn-social btn-facebook btn-lg\">
                            <i class=\"fa fa-facebook\"></i> Login via facebook
                        </a>
                    </li>
                  ";
        // line 40
        echo "                </ul>
            </div>
            <div class=\"col-md-6\">
    
                <h2>IMD gids login</h2>
                
                ";
        // line 47
        echo "                ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 48
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 50
        echo "    
                ";
        // line 52
        echo "                <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" /> 

                    <div class=\"form-group\">
                        <label for=\"username\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>

                   ";
        // line 69
        echo "                    
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-default\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>
                <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("imd_registration_imd_role");
        echo "\">
                    IMD gids worden?
                </a>
            </div>
      </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 72,  140 => 70,  137 => 69,  130 => 61,  123 => 57,  119 => 56,  113 => 53,  108 => 52,  105 => 50,  99 => 48,  96 => 47,  88 => 40,  81 => 26,  76 => 23,  71 => 19,  62 => 15,  57 => 13,  54 => 12,  51 => 11,  46 => 7,  43 => 6,  37 => 2,  11 => 1,);
    }
}
