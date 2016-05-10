<?php

/* ImdAppBundle:Default:index.html.twig */
class __TwigTemplate_3f5b18e89450e0c74fa2b5a5f0e274b6100d22ba086ef9a648fae6874cdd145b extends Twig_Template
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
        echo "WeAreIMD | Heroes";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"jumbotron jumbotron-spacing\">
\t\t<div class=\"container\">
\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_user_profile_show_id", array("id" => $this->getAttribute($this->getAttribute((isset($context["imders"]) ? $context["imders"] : $this->getContext($context, "imders")), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\" class=\"center-block\">
\t\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["imders"]) ? $context["imders"] : $this->getContext($context, "imders")), 0, array(), "array"), "picture", array()), "html", null, true);
        echo "\" alt=\"image\" class=\"img-responsive img-thumbnail img-circle center-block user-image-large\">
\t\t\t</a>
\t\t\t<h1 class=\"jumbotron-title text-center text-white\">
\t\t\t\tKies je Hero!
\t\t\t\t<p>
\t\t\t\t\t<small class=\"text-white center-block margin-abit-t para-action\">Interactive Multimedia Design is misschien jouw ideale richting, maar je bent toch nog niet helemaal zeker? \"Boek\" nu één van onze IMD Heroes en beleef samen een onvergetelijke IMD-dag!</small>
\t\t\t\t</p>
\t\t\t</h1>
\t\t\t<div class=\"center-block action-container\">
\t\t\t\t";
        // line 18
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("imd_guest_login");
            echo "\" class=\"btn btn-default btn-action btn-ghost btn-lg center-block\">
\t\t\t\t\t\tBoek een Hero
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("imd_app_guide_booking_date");
            echo "\" class=\"btn btn-default btn-action btn-ghost btn-lg center-block\">
\t\t\t\t\t\tDoe mee!
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t<div class=\"center-block margin-alil-t text-center\">
\t\t\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("imd_registration_imd_role");
        echo "\" class=\"call-secondary text-white\">
\t\t\t\t\t\tof wordt zelf een Hero.
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container-fluid bg-col-1\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"row-title text-center\">
\t\t\t\t<b class=\"brand\">HEROES</b>
\t\t\t</h2>
\t\t\t<section class=\"col-xs-12 col-sm-4 container__section\">
\t\t\t\t<h3 class=\"section__title\">Hero</h3>
\t\t\t\t<p class=\"section__body\">Creëer een unieke ervaring die geheel naar jouw wensen is afgesteld. Kies een Hero die bij jouw interesses aansluit of iemand die een radicaal andere richting uitgaat. Al onze Heroes helpen je vrijwillig verder met al je vragen en problemen, digitaal of face-to-face. Spreek gewoon af.</p>
\t\t\t</section>
\t\t\t<section class=\"col-xs-12 col-sm-4 container__section\">
\t\t\t\t<h3 class=\"section__title\">Tour</h3>
\t\t\t\t<p class=\"section__body\">Kom langs tijdens één van onze evenementen en krijg onmiddelijk een zicht op de geweldige sfeer die IMD zo uniek maakt. Praat op je gemak met onze docenten (die samen met jou een pint drinken) of meng je onder de studenten tijdens onze Meat & Greets.</p>
\t\t\t</section>
\t\t\t<section class=\"col-xs-12 col-sm-4 container__section\">
\t\t\t\t<h3 class=\"section__title\">Feedback</h3>
\t\t\t\t<p class=\"section__body\">Laat zeker en vast ook weten wat je van onze Hero vond, we helpen je graag verder als er problemen zijn ontstaan en schrikken er niet van terug om onze Heroes eens op de vingers te tikken als ze wat te laat uit bed stappen.</p>
\t\t\t</section>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"row-title\">
\t\t\t\tOnze IMD-Heroes
\t\t\t</h2>
\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imders"]) ? $context["imders"] : $this->getContext($context, "imders")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 60
            echo "\t\t\t\t <section class=\"col-xs-12 col-sm-4 text-center margin-alot-t\">
\t\t\t\t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_user_profile_show_id", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"center-block\">
\t\t\t\t\t\t<img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "picture", array()), "html", null, true);
            echo "\" alt=\"image\" class=\"img-responsive img-thumbnail img-circle center-block user-image-medium hoverImages\">
\t\t\t\t\t</a>
\t\t\t\t\t<h2 class=\"text-center\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t";
            // line 65
            $this->env->loadTemplate("rating.html.twig")->display($context);
            // line 66
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["user"], "imdYear", array()) != "")) {
                // line 67
                echo "\t\t\t\t\t\t<h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getImdYear", array(0 => "full-text"), "method"), "html", null, true);
                echo "</h4>
\t\t\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t\t\t";
                // line 73
                echo "\t\t\t\t\t";
            }
            // line 74
            echo "
\t\t\t\t</section>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t</div>
\t</div>
\t<div class=\"container-fluid bg-col-5\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"row-title\">
\t\t\t\tWat is <b class=\"brand\">HEROES</b> ?
\t\t\t</h2>
\t\t\t<section class=\"col-xs-12 center-block\">
\t\t\t\t<p>
\t\t\t\t\tHeb je interesse in programmeren en pixels? Dan nodigen we je graag uit om deel te nemen aan het <b class=\"brand\">HEROES</b> programma. <b class=\"brand\">HEROES</b> is ontworpen om iedereen die geinteresserd is in ontwerpen en ontwikkelen beter bekend te maken met de steeds groeiende mogelijkheden die het web biedt aan de hand van een interactieve tour op onze IMD campus samen met één van onze IMD Heroes.
\t\t\t\t</p>
\t\t\t</section>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"row-title text-center txt-col-black\">
\t\t\t\tZin in een onvergetelijke ervaring?
\t\t\t</h2>
\t\t\t<section class=\"col-xs-12\">
\t\t\t\t\t<div class=\"center-block action-container-override\">
\t\t\t\t\t\t";
        // line 98
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 99
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("imd_guest_login");
            echo "\" class=\"btn btn-default btn-action btn-spectre btn-lg center-block\">
\t\t\t\t\t\t\t\tInteresse? Kies er één uit
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 103
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("imd_app_guide_booking_date");
            echo "\" class=\"btn btn-default btn-action btn-spectre btn-lg center-block\">
\t\t\t\t\t\t\t\tSpreek af
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>
\t<div class=\"container-fluid bg-col-2\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"row-title\">
\t\t\t\tOnze Experiences
\t\t\t</h2>
\t\t\t";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) ? $context["bookings"] : $this->getContext($context, "bookings")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 117
            echo "\t\t\t\t<section class=\"col-xs-12 col-sm-4 container__section\">
\t\t\t\t\t<h3 class=\"section__title\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["b"], "guest", array()), "firstname", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t<p class=\"section__body\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "feedback", array()), "html", null, true);
            echo "</p>
\t\t\t\t</section>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 122,  251 => 119,  247 => 118,  244 => 117,  240 => 116,  229 => 107,  221 => 103,  213 => 99,  211 => 98,  188 => 77,  172 => 74,  169 => 73,  167 => 69,  161 => 67,  158 => 66,  156 => 65,  150 => 64,  145 => 62,  141 => 61,  138 => 60,  121 => 59,  87 => 28,  84 => 27,  76 => 23,  68 => 19,  66 => 18,  54 => 9,  50 => 8,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
