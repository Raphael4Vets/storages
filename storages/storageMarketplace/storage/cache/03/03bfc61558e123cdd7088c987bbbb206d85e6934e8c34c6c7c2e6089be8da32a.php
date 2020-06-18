<?php

/* default/template/common/footer.twig */
class __TwigTemplate_c7133a012f235b49f6428301bce6159af769cb5db580c5889c06a92bd9b5d863 extends Twig_Template
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
        echo "<footer>
  <div class=\"container\">
<center id='footer-sm-center'>   
 <div class=\"row\">
      ";
        // line 5
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 6
            echo "      <div class=\"col-sm-3\">
        
        <ul class=\"list-unstyled\">
         <li>
\t\t<img id='footer-logo' src='/lumare/image/catalog/opencart-logo.png'>
\t</li>
        </ul>
      </div>
      ";
        }
        // line 15
        echo "      <div class=\"col-sm-3\">
        <h5>Endereço</h5>
        <ul class=\"list-unstyled\">
          <li>
<a href=''>
<table>
\t<tr>
\t\t<td><span class='material-icons'>location_on</span></td>
\t\t<td>&nbsp Rua Javari, 293 - Cambuci</td>
\t</tr>
\t<tr>
\t<td>&nbsp</td>
\t<td>&nbsp São Paulo - SP 03112-100</td>
\t</tr>
</table>

</a>
</li>
          </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>Telefones</h5>
        <ul class=\"list-unstyled\">
     

          <li>
<table>
        <tr>
                <td><span class='material-icons'>phone</span></td>
                <td>&nbsp&nbsp (11) 2067-4900</td>
        </tr>
</table>
</li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>Email</h5>
        <ul class=\"list-unstyled\">
\t<li>       
 <table>
        <tr>
                <td><span class='material-icons'>mail</span></td>
                <td>&nbsp&nbsp lumare@lumareimport.com.br</td>
        </tr>
</table>
 \t</li>
\t 
        </ul>
\t</div>
      </div>

<center>
<h5>Redes Sociais</h5>
</center>
<div id='footer-row-media'>
<a href='https://pt-br.facebook.com/lumareimport/' target='_blank'><img src='https://facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png?w=512&h=512' class='footer-medias-logo'></a>
<a href='https://www.instagram.com/lumare.import/?hl=pt-br'  target='_blank'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png' class='footer-medias-logo'></a>
<a href='https://www.youtube.com/user/DingoBrasil/videos'  target='_blank'><img src='https://i.pinimg.com/originals/60/00/5d/60005d802c2876c821bdab2bbdb9af2a.png' class='footer-medias-logo'></a>


    </div>
    
\t<center>
<hr>
    <p id='power'>
\t
\t<a href='https://grupo4vets.com.br/'>Powered by <img id='fvets' src='https://grupo4vets.com.br/images/logo.png'></a>
</p>
\t</center>
\t</center> 
 </div>
</footer>
";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 88
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body>
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

</html>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 90,  116 => 88,  112 => 87,  38 => 15,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/* <center id='footer-sm-center'>   */
/*  <div class="row">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3">*/
/*         */
/*         <ul class="list-unstyled">*/
/*          <li>*/
/* 		<img id='footer-logo' src='/lumare/image/catalog/opencart-logo.png'>*/
/* 	</li>*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3">*/
/*         <h5>Endereço</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li>*/
/* <a href=''>*/
/* <table>*/
/* 	<tr>*/
/* 		<td><span class='material-icons'>location_on</span></td>*/
/* 		<td>&nbsp Rua Javari, 293 - Cambuci</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 	<td>&nbsp</td>*/
/* 	<td>&nbsp São Paulo - SP 03112-100</td>*/
/* 	</tr>*/
/* </table>*/
/* */
/* </a>*/
/* </li>*/
/*           </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>Telefones</h5>*/
/*         <ul class="list-unstyled">*/
/*      */
/* */
/*           <li>*/
/* <table>*/
/*         <tr>*/
/*                 <td><span class='material-icons'>phone</span></td>*/
/*                 <td>&nbsp&nbsp (11) 2067-4900</td>*/
/*         </tr>*/
/* </table>*/
/* </li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>Email</h5>*/
/*         <ul class="list-unstyled">*/
/* 	<li>       */
/*  <table>*/
/*         <tr>*/
/*                 <td><span class='material-icons'>mail</span></td>*/
/*                 <td>&nbsp&nbsp lumare@lumareimport.com.br</td>*/
/*         </tr>*/
/* </table>*/
/*  	</li>*/
/* 	 */
/*         </ul>*/
/* 	</div>*/
/*       </div>*/
/* */
/* <center>*/
/* <h5>Redes Sociais</h5>*/
/* </center>*/
/* <div id='footer-row-media'>*/
/* <a href='https://pt-br.facebook.com/lumareimport/' target='_blank'><img src='https://facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png?w=512&h=512' class='footer-medias-logo'></a>*/
/* <a href='https://www.instagram.com/lumare.import/?hl=pt-br'  target='_blank'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png' class='footer-medias-logo'></a>*/
/* <a href='https://www.youtube.com/user/DingoBrasil/videos'  target='_blank'><img src='https://i.pinimg.com/originals/60/00/5d/60005d802c2876c821bdab2bbdb9af2a.png' class='footer-medias-logo'></a>*/
/* */
/* */
/*     </div>*/
/*     */
/* 	<center>*/
/* <hr>*/
/*     <p id='power'>*/
/* 	*/
/* 	<a href='https://grupo4vets.com.br/'>Powered by <img id='fvets' src='https://grupo4vets.com.br/images/logo.png'></a>*/
/* </p>*/
/* 	</center>*/
/* 	</center> */
/*  </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </body>*/
/*   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* */
/* </html>*/
/* */
