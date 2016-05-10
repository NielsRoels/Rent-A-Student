<?php

/* ImdAppBundle:Guide:choose.html.twig */
class __TwigTemplate_aa656ee412dc386b097dcc9a0985cab116212974a9cccd043de599e9585536da extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "\t<div class=\"container padding\">
\t\t<h1>Evenementen</h1>
\t\t<p>Hieronder vind je een overzicht van alle momenten wanneer een gids beschikbaar is.</p>
\t\t<hr/>
\t\t<section class=\"col-x-12\">
\t\t\t<section class=\"col-xs-12 col-sm-8\">
\t\t\t\t";
        // line 12
        $this->env->loadTemplate("calendar.html.twig")->display($context);
        // line 13
        echo "\t\t\t</section>
\t\t\t<section class=\"col-xs-12 col-sm-4 eventDetails\">
\t\t\t\t
\t\t\t</section>
\t\t</section>
\t</div>
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "\t";
        // line 22
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        // line 24
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\" type=\"text/javascript\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js\" type=\"text/javascript\"></script>
\t";
        // line 27
        echo "\t<script>
\t\t// events kunnen worden uitgelezen worden door de API van fullcalender
\t\t// twig variabelen kunnen worden opgevange door bv.
\t\t// var object = ";
        // line 31
        echo "\t\t// of
\t\t// var value = ";
        // line 33
        echo "\t\t// zonder de comment tags natuurlijk ma anders leest twig dees comments
\t\t\$(function (){
\t\t\t\$('#calendar').fullCalendar({
\t\t\t\tfirstDay: 1,
\t\t\t\t// configure header
\t\t\t\theader: {
\t\t\t\t    left:   '',
\t\t\t\t\tcenter: 'title',
\t\t\t\t\tright:  'prev,next'
\t\t\t\t},
\t\t\t\teventBackgroundColor: '#0053FF',
\t\t\t\tevents: [
\t\t\t\t\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 46
            echo "\t\t\t\t\t\t{
\t\t\t\t\t\t\ttitle: '";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "title", array()), "html", null, true);
            echo "',
\t\t\t\t\t\t\tstart: '";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "startDate", array()), "date", array()), "html", null, true);
            echo "',
\t\t\t\t\t\t\tend: '";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "endDate", array()), "date", array()), "html", null, true);
            echo "',
\t\t\t\t\t\t\tloc: '";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "address", array()), "html", null, true);
            echo "',
\t\t\t\t\t\t\teid: '";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "id", array()), "html", null, true);
            echo "',
\t\t\t\t\t\t\tdesc: '";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "bio", array()), "html", null, true);
            echo "'
\t\t\t\t\t\t},
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t],
\t\t\t\teventClick: function(calEvent, jsEvent, view) {
\t\t\t\t\t\$('.eventDetails').html('');
\t\t\t        var printEvent =
\t\t\t        \t'<h1>'+calEvent.title+'</h1>'
\t\t\t        \t+'<h3>'+calEvent.loc+'</h3>'
\t\t\t        \t+'<p>'+calEvent.desc+'</p>'
\t\t\t        \t+'<p><b>Starts at:</b></p><p>'+calEvent.start.format('MMMM Do YYYY, h:mm:ss a')+'</p>'
\t\t\t        \t+'<p><b>Ends at:</b></p><p>'+calEvent.end.format('MMMM Do YYYY, h:mm:ss a')+'</p>'
\t\t\t        \t+'<a href=\"book/'+calEvent.eid+'\" class=\"btn btn-spectre\"> Continue </a>'
\t\t\t        ;
\t\t\t        \$('.eventDetails').append(printEvent);
\t\t\t    }
\t\t\t});
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Guide:choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 55,  128 => 52,  124 => 51,  120 => 50,  116 => 49,  112 => 48,  108 => 47,  105 => 46,  101 => 45,  87 => 33,  84 => 31,  79 => 27,  75 => 24,  72 => 22,  70 => 21,  67 => 20,  57 => 13,  55 => 12,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
