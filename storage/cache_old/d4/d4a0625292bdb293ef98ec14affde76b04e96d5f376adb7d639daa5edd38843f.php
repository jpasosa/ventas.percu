<?php

/* journal2/template/common/search.twig */
class __TwigTemplate_4f7afcf41d8849e38bde1e33245f8d0853849620b0edb69f679340ef3ba33801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"search\" class=\"input-group j-min\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_placeholder_text"), "method");
        echo "\" autocomplete=\"off\" class=\"form-control input-lg\"/>
  <div class=\"button-search\">
    <button type=\"button\"><i></i></button>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="search" class="input-group j-min">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ journal2.settings.get('search_placeholder_text') }}" autocomplete="off" class="form-control input-lg"/>*/
/*   <div class="button-search">*/
/*     <button type="button"><i></i></button>*/
/*   </div>*/
/* </div>*/
/* */