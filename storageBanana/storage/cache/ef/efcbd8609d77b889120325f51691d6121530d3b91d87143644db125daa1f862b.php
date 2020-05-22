<?php

/* default/template/common/menu.twig */
class __TwigTemplate_05af62dbeb54669ca0e80eea3488528c22c96a60e71e6d7dabf2a3e461a52877 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            $context["i"] = 0;
            // line 3
            echo "
<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">

\t <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 7
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>

      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">

      <ul class=\"nav navbar-nav\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 16
                    echo " 
       <li class=\"dropdown\"><a href=\"";
                    // line 17
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>         
 <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 20
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 22
                            echo "                <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 24
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "            </div>
            <a href=\"";
                    // line 27
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
\t\t       
         
 </div>
        </li>
        ";
                } else {
                    // line 33
                    echo "        <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">
\t";
                    // line 34
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                    // line 35
                    echo "\t<center>
\t<img id='menu-icon' src='image/catalog/IconesDepartamento/c";
                    // line 36
                    echo (isset($context["i"]) ? $context["i"] : null);
                    echo ".png'>
\t<br>
\t<p class='menu-nome'>";
                    // line 38
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "<p>
\t</center>
\t</a></li>\t      
      <!--  <li><a href=\"";
                    // line 41
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li> !-->

        ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </ul>
    </div>
  </nav>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 45,  130 => 44,  122 => 41,  116 => 38,  111 => 36,  108 => 35,  106 => 34,  101 => 33,  88 => 27,  85 => 26,  78 => 24,  67 => 22,  63 => 21,  60 => 20,  56 => 19,  49 => 17,  46 => 16,  43 => 15,  39 => 14,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* {% set i = 0 %}*/
/* */
/* <div class="container">*/
/*   <nav id="menu" class="navbar">*/
/* */
/* 	 <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/* */
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/* */
/*       <ul class="nav navbar-nav">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*  */
/*        <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>         */
/*  <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}*/
/*             </div>*/
/*             <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a>*/
/* 		       */
/*          */
/*  </div>*/
/*         </li>*/
/*         {% else %}*/
/*         <li><a href="{{ category.href }}">*/
/* 	{% set i = i +1 %}*/
/* 	<center>*/
/* 	<img id='menu-icon' src='image/catalog/IconesDepartamento/c{{i}}.png'>*/
/* 	<br>*/
/* 	<p class='menu-nome'>{{ category.name }}<p>*/
/* 	</center>*/
/* 	</a></li>	      */
/*       <!--  <li><a href="{{ category.href }}">{{ category.name }}</a></li> !-->*/
/* */
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* {% endif %}*/
/* */
