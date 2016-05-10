<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d1a0894c5f6ce92d7e6df0c08d92274d77c8d5330f0d5c3dca8ba2604175f36b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "'s Profile";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"container\">
\t\t\t<section class=\"col-xs-12 col-sm-4\">
\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "html", null, true);
        echo "\" alt=\"image\" class=\"img-responsive img-thumbnail img-circle center-block user-image-medium\">
\t\t\t\t<h2 class=\"text-center\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</h2>
\t\t\t\t";
        // line 10
        $this->env->loadTemplate("rating.html.twig")->display($context);
        // line 11
        echo "
\t\t\t\t";
        // line 12
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
            // line 13
            echo "\t\t\t\t\t<div class=\"center-block action-container\">
\t\t\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_messages_conversation", array("partnerId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-spectre btn-action center-block\">
\t\t\t\t\t\t\tSend me a message!
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</section>
\t\t\t<section class=\"col-xs-12 col-sm-8\">
\t\t\t\t<h1>Wie is ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "?</h3>
\t\t\t\t<p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "bio", array()), "html", null, true);
        echo "</p>

\t\t\t\t<h3 class=\"profile-specialization-row\">
\t\t\t\t\t";
        // line 25
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "specialization", array()) == "")) {
            // line 26
            echo "\t\t\t\t\t";
        } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "specialization", array()) == "development")) {
            // line 27
            echo "\t\t\t\t\t<span class=\"glyphicon txt-col-lightgray gi-h3 glyphicon-cog\"></span>
\t\t\t\t\t<span>Developer</span>
\t\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t\t<span class=\"glyphicon txt-col-lightgray gi-h3 glyphicon-pencil\"></span>
\t\t\t\t\t<span>Designer</span>
\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t</h3>

                <h3 class=\"profile-city-row\">
                    <span class=\"glyphicon txt-col-lightgray gi-h3 glyphicon-tower\"></span>
                    <span>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getImdYear", array(0 => "text"), "method"), "html", null, true);
        echo " jaar</span>
                </h3>

                <h3 class=\"profile-city-row\">
                    <span class=\"glyphicon txt-col-lightgray gi-h3 glyphicon-gift\"></span>
                    <span>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateOfBirth", array()), "d/m/Y"), "html", null, true);
        echo "</span>
                </h3>

\t\t\t\t<h3 class=\"profile-city-row\">
\t\t\t\t\t<span class=\"glyphicon txt-col-lightgray gi-h3 glyphicon-globe\"></span>
\t\t\t\t\t<span>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city", array()), "html", null, true);
        echo "</span>
\t\t\t\t</h3>

\t\t\t\t<h3 class=\"profile-city-row\">
\t\t\t\t\t<span class=\"glyphicon txt-col-lightgray gi-h3 glyphicon-envelope\"></span>
\t\t\t\t\t<span>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span>
\t\t\t\t</h3>

                <h3 class=\"profile-website-row\">
                    <span class=\"glyphicon txt-col-lightgray gi-h3 glyphicon-link\"></span>
                    <span><a class=\"txt-col-5\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "website", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "website", array()), "html", null, true);
        echo "</a></span>
                </h3>
\t\t\t\t";
        // line 59
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
            // line 60
            echo "                \t<h3>
\t                \t<span class=\"glyphicon txt-col-lightgray gi-h3 glyphicon-wrench\"></span>
\t                \t<span><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Edit profile</a></span>
                \t</h3>
                ";
        }
        // line 65
        echo "\t\t\t</section>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  160 => 62,  156 => 60,  154 => 59,  147 => 57,  139 => 52,  131 => 47,  123 => 42,  115 => 37,  109 => 33,  104 => 30,  99 => 27,  96 => 26,  94 => 25,  88 => 22,  84 => 21,  80 => 19,  72 => 14,  69 => 13,  67 => 12,  64 => 11,  62 => 10,  56 => 9,  52 => 8,  47 => 5,  44 => 4,  37 => 2,  11 => 1,);
    }
}
