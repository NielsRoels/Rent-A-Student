<?php

/* ImdAppBundle:Booking:rate.html.twig */
class __TwigTemplate_0826a65af59c5925298a814e466e2a91b19e3fad148d9aff16684cdde4378cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Selecteer een datum!";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container padding\">

        <div class=\"col-md-4 guide-card\">
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_user_profile_show_id", array("id" => $this->getAttribute($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "guide", array()), "id", array()))), "html", null, true);
        echo "\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "guide", array()), "picture", array()), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-thumbnail img-circle center-block\">
            </a>
            <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "guide", array()), "firstname", array()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "guide", array()), "lastname", array()), "html", null, true);
        echo "</small></h2>
            <h4>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "guide", array()), "getImdYear", array(0 => "full-text"), "method"), "html", null, true);
        echo " ";
        $context["vars"] = array("user" => $this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "guide", array()));
        echo " ";
        $this->env->loadTemplate("rating.html.twig")->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
        echo "</h4>
            <p>development</p>
        </div>

        <div class=\"col-md-8\">
            <h1>Beoordeling uw rondleiding: </h1>
            <ul>
                <li>Datum: ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "meetTime", array()), "m/d/Y"), "html", null, true);
        echo "</li>
                <li>Plaats: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "place", array()), "html", null, true);
        echo "</li>
            </ul>
            <form method=\"POST\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_guide_booking_handle_rate", array("id" => $this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "id", array()))), "html", null, true);
        echo "\">
                 <div class=\"form-group\">
                    <label for=\"rating\">Beoordeling:</label>
                    <div class=\"input-group col-md-2\">
                        <input type=\"number\" name=\"rating\" class=\"form-control\" id=\"rating\" placeholder=\"5\" ";
        // line 28
        echo ((($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "rating", array()) || ($this->getAttribute((isset($context["loggedinUser"]) ? $context["loggedinUser"] : $this->getContext($context, "loggedinUser")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "guest", array()), "id", array())))) ? ("disabled") : (""));
        echo "  value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "rating", array())) ? ($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "rating", array())) : ("")), "html", null, true);
        echo "\" />
                        <div class=\"input-group-addon\"> / 5 </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"feedback\">Feedback:</label>
                    <textarea class=\"form-control\" name=\"feedback\" id=\"feedback\" placeholder=\"Feedback\" ";
        // line 34
        echo ((($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "feedback", array()) || ($this->getAttribute((isset($context["loggedinUser"]) ? $context["loggedinUser"] : $this->getContext($context, "loggedinUser")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "guest", array()), "id", array())))) ? ("disabled") : (""));
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "feedback", array())) ? ($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "feedback", array())) : ("")), "html", null, true);
        echo "</textarea>
                </div>

                ";
        // line 37
        if ((( !$this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "rating", array()) &&  !$this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "feedback", array())) && ($this->getAttribute((isset($context["loggedinUser"]) ? $context["loggedinUser"] : $this->getContext($context, "loggedinUser")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "guest", array()), "id", array())))) {
            // line 38
            echo "                    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                ";
        }
        // line 40
        echo "                
            </form>
            
            <form method=\"POST\" action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_guide_booking_admin_feedback_answer", array("id" => $this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "id", array()))), "html", null, true);
        echo "\">
                <div class=\"form-group\">
                    <label for=\"feedbackAnswer\">Admin feedback:</label>
                    <textarea class=\"form-control\" name=\"feedbackAnswer\" id=\"feedbackAnswer\" placeholder=\"Feedback\" ";
        // line 46
        echo ((($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "feedBackAnswer", array()) || ($this->getAttribute((isset($context["loggedinUser"]) ? $context["loggedinUser"] : $this->getContext($context, "loggedinUser")), "hasRole", array(0 => "ROLE_ADMIN"), "method") == false))) ? ("disabled") : (""));
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "feedBackAnswer", array())) ? ($this->getAttribute($this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "feedBackAnswer", array()), "comment", array())) : ("")), "html", null, true);
        echo "</textarea>
                </div>

                ";
        // line 49
        if (( !$this->getAttribute((isset($context["booking"]) ? $context["booking"] : $this->getContext($context, "booking")), "feedBackAnswer", array()) && $this->getAttribute((isset($context["loggedinUser"]) ? $context["loggedinUser"] : $this->getContext($context, "loggedinUser")), "hasRole", array(0 => "ROLE_ADMIN"), "method"))) {
            // line 50
            echo "                    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                ";
        }
        // line 52
        echo "            
            </form>
        </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Booking:rate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  143 => 50,  141 => 49,  133 => 46,  127 => 43,  122 => 40,  118 => 38,  116 => 37,  108 => 34,  97 => 28,  90 => 24,  85 => 22,  81 => 21,  67 => 14,  61 => 13,  56 => 11,  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
