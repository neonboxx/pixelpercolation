<?php

/* index.twig */
class __TwigTemplate_e73a13c4c86f18f71c4f424fc2a49608e21ccc15370c24fa671f05d899390afb extends Twig_Template
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
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "styles/main.css\">
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "bower_components/modernizr/modernizr.js\"></script>
    <!-- endbuild -->
  </head>
  <body>
      <div id=\"fullpage\">
           <div class=\"menu col-md-6 col-md-offset-6 col-xs-12\">
            <ul id=\"myMenu\">
                <li data-menuanchor=\"home\" class=\"active\"><a href=\"#home\">Home</a></li>
                <li data-menuanchor=\"about\"><a href=\"#about\">About</a></li>
                <li data-menuanchor=\"portfolio\"><a href=\"#portfolio\">Portfolio</a></li>
                <li data-menuanchor=\"team\"><a href=\"#team\">Team</a></li>
                <li data-menuanchor=\"contact\"><a href=\"#contact\">Contact</a></li>
            </ul>
        </div>
      <div class=\"hero section row\" style=\"background-image:url('";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "files", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "templatefields", array()), "hero", array()), "html", null, true);
        echo "')\">
        <div class=\"hero-wrapper\">
            <div class=\"hero-logo\" style=\"background-image:url('";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "files", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "templatefields", array()), "logo", array()), "html", null, true);
        echo "')\"></div>
            <h1><span>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "templatefields", array()), "titlebold", array()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "templatefields", array()), "titlelight", array()), "html", null, true);
        echo "</h1>
            <h2>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser", array()), "html", null, true);
        echo "</h2>
        </div>
      </div>
        <div class=\"section about row\">
            <div class=\"col-md-10 col-md-offset-1 col-sm-12 centered\" >
                    <div class=\"col-xs-12 anim-in-down\">
                        <h1>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "aboutheader", array()), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"col-sm-4 anim-in-left\">
                        <p class=\"hidden-xs\" style=\"text-align:center\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "files", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "aboutimage1", array()), "html", null, true);
        echo "\" alt=\"\"></p>
                        <p>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "abouttext1", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-sm-4 anim-in-up\">
                    <p class=\"hidden-xs\" style=\"text-align:center\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "files", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "aboutimage2", array()), "html", null, true);
        echo "\" alt=\"\"></p>
                        <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "abouttext2", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-sm-4 anim-in-right\">
                    <p  class=\"hidden-xs\" style=\"text-align:center\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "files", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "aboutimage3", array()), "html", null, true);
        echo "\" alt=\"\"></p>
                        <p>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "abouttext3", array()), "html", null, true);
        echo "</p>
                    </div>
            </div>
        </div>
        <div class=\"row-hero portfolio section row\"style=\"background-image:url('";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "files", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "templatefields", array()), "hero2", array()), "html", null, true);
        echo "')\" >
            
        </div>
        <div class=\"section team row\">
            <div class=\"col-md-10 col-md-offset-1 col-sm-12 centered\" >
                <div class=\"col-xs-12 anim-in-down\">
                    <h1>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teamheader", array()), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"col-xs-4 anim-in-left\">
                    <p style=\"text-align:center\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "files", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teamimage1", array()), "html", null, true);
        echo "\" alt=\"\"></p>
                            <p>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teamtext1", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-xs-4 anim-in-up\">
                    <p style=\"text-align:center\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "files", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teamimage2", array()), "html", null, true);
        echo "\" alt=\"\"></p>
                    <p>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teamtext2", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-xs-4 anim-in-right\">
                    <p style=\"text-align:center\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "files", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teamimage3", array()), "html", null, true);
        echo "\" alt=\"\"></p>
                            <p>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teamtext3", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"section contact row\">
            <div class=\"col-xs-12 col-md-10 col-md-offset-1 centered\">
                <div class=\"col-sm-12 anim-in-down\">
                    <h1>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contactheader", array()), "html", null, true);
        echo "</h1>
                    <h2>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contactsubheader", array()), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"anim-in-right\">
                    <form class=\"form\">
                        <div class=\"form-group col-xs-12\">
                            <div id=\"name-col\" class=\"col-sm-4 col-sm-offset-2\">
                                <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"Name\">
                            </div>
                            <div id=\"email-col\" class=\"col-sm-4\">
                                <input type=\"email\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">
                            </div>
                        </div>
                        <div class=\"form-group  col-xs-12\">
                            <div class=\"col-sm-8 col-sm-offset-2\">
                                <textarea class=\"form-control\" id=\"inputMessage\" placeholder=\"Message\" rows=\"6\"></textarea>
                            </div>
                        </div>
                        <div class=\"form-group  col-xs-12 col-sm-6 col-sm-offset-3\">
                            <div id=\"submit-button\" class=\"col-xs-6\">
                                <button type=\"submit\" class=\"btn btn-default\">Send</button>
                            </div>
                            <div id=\"clear-button\" class=\"col-xs-6\">
                                <button class=\"btn btn-default\">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-xs-12 social-buttons\">
                <footer>
                    <h1>
                        <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "facebooklink", array()), "html", null, true);
        echo "\"><i class=\"fa fa-facebook-square\"></i></a>
                        <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "twitterlink", array()), "html", null, true);
        echo "\"><i class=\"fa fa-twitter-square\"></i></a>
                        <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "linkedinlink", array()), "html", null, true);
        echo "\"><i class=\"fa fa-linkedin-square\"></i></a>
                    </h1>
                    <p>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "footertext", array()), "html", null, true);
        echo "</p>
                </footer>
            </div>
    </div>
</div>

    <!--[if lt IE 7]>
      <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>


        <!-- build:js scripts/main.js -->
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "bower_components/jquery/jquery.js\"></script>
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "bower_components/fullpage.js/jquery.fullpage.min.js\"></script>
        <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "scripts/main.js\"></script>
        <!-- endbuild -->
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 140,  257 => 139,  253 => 138,  228 => 116,  223 => 114,  219 => 113,  215 => 112,  181 => 81,  177 => 80,  167 => 73,  162 => 72,  156 => 69,  151 => 68,  145 => 65,  140 => 64,  134 => 61,  124 => 55,  117 => 51,  112 => 50,  106 => 47,  101 => 46,  95 => 43,  90 => 42,  84 => 39,  75 => 33,  69 => 32,  64 => 31,  58 => 29,  41 => 15,  36 => 13,  29 => 9,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>{{record.title}}</title>*/
/*     <meta name="description" content="">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->*/
/*     <link rel="stylesheet" href="{{ paths.theme }}styles/main.css">*/
/*     <!-- build:js scripts/vendor/modernizr.js -->*/
/*     <script src="{{ paths.theme }}bower_components/modernizr/modernizr.js"></script>*/
/*     <!-- endbuild -->*/
/*   </head>*/
/*   <body>*/
/*       <div id="fullpage">*/
/*            <div class="menu col-md-6 col-md-offset-6 col-xs-12">*/
/*             <ul id="myMenu">*/
/*                 <li data-menuanchor="home" class="active"><a href="#home">Home</a></li>*/
/*                 <li data-menuanchor="about"><a href="#about">About</a></li>*/
/*                 <li data-menuanchor="portfolio"><a href="#portfolio">Portfolio</a></li>*/
/*                 <li data-menuanchor="team"><a href="#team">Team</a></li>*/
/*                 <li data-menuanchor="contact"><a href="#contact">Contact</a></li>*/
/*             </ul>*/
/*         </div>*/
/*       <div class="hero section row" style="background-image:url('{{ paths.files }}{{ record.templatefields.hero }}')">*/
/*         <div class="hero-wrapper">*/
/*             <div class="hero-logo" style="background-image:url('{{ paths.files }}{{ record.templatefields.logo }}')"></div>*/
/*             <h1><span>{{ record.templatefields.titlebold }}</span> {{ record.templatefields.titlelight }}</h1>*/
/*             <h2>{{ record.teaser }}</h2>*/
/*         </div>*/
/*       </div>*/
/*         <div class="section about row">*/
/*             <div class="col-md-10 col-md-offset-1 col-sm-12 centered" >*/
/*                     <div class="col-xs-12 anim-in-down">*/
/*                         <h1>{{ record.aboutheader }}</h1>*/
/*                     </div>*/
/*                     <div class="col-sm-4 anim-in-left">*/
/*                         <p class="hidden-xs" style="text-align:center"><img src="{{ paths.files }}{{ record.aboutimage1 }}" alt=""></p>*/
/*                         <p>{{ record.abouttext1 }}</p>*/
/*                     </div>*/
/*                     <div class="col-sm-4 anim-in-up">*/
/*                     <p class="hidden-xs" style="text-align:center"><img src="{{ paths.files }}{{ record.aboutimage2 }}" alt=""></p>*/
/*                         <p>{{ record.abouttext2 }}</p>*/
/*                     </div>*/
/*                     <div class="col-sm-4 anim-in-right">*/
/*                     <p  class="hidden-xs" style="text-align:center"><img src="{{ paths.files }}{{ record.aboutimage3 }}" alt=""></p>*/
/*                         <p>{{ record.abouttext3 }}</p>*/
/*                     </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row-hero portfolio section row"style="background-image:url('{{ paths.files }}{{ record.templatefields.hero2 }}')" >*/
/*             */
/*         </div>*/
/*         <div class="section team row">*/
/*             <div class="col-md-10 col-md-offset-1 col-sm-12 centered" >*/
/*                 <div class="col-xs-12 anim-in-down">*/
/*                     <h1>{{ record.teamheader }}</h1>*/
/*                 </div>*/
/*                 <div class="col-xs-4 anim-in-left">*/
/*                     <p style="text-align:center"><img src="{{ paths.files }}{{ record.teamimage1 }}" alt=""></p>*/
/*                             <p>{{ record.teamtext1 }}</p>*/
/*                 </div>*/
/*                 <div class="col-xs-4 anim-in-up">*/
/*                     <p style="text-align:center"><img src="{{ paths.files }}{{ record.teamimage2 }}" alt=""></p>*/
/*                     <p>{{ record.teamtext2 }}</p>*/
/*                 </div>*/
/*                 <div class="col-xs-4 anim-in-right">*/
/*                     <p style="text-align:center"><img src="{{ paths.files }}{{ record.teamimage3 }}" alt=""></p>*/
/*                             <p>{{ record.teamtext3 }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="section contact row">*/
/*             <div class="col-xs-12 col-md-10 col-md-offset-1 centered">*/
/*                 <div class="col-sm-12 anim-in-down">*/
/*                     <h1>{{ record.contactheader }}</h1>*/
/*                     <h2>{{ record.contactsubheader }}</h2>*/
/*                 </div>*/
/*                 <div class="anim-in-right">*/
/*                     <form class="form">*/
/*                         <div class="form-group col-xs-12">*/
/*                             <div id="name-col" class="col-sm-4 col-sm-offset-2">*/
/*                                 <input type="text" class="form-control" id="inputName" placeholder="Name">*/
/*                             </div>*/
/*                             <div id="email-col" class="col-sm-4">*/
/*                                 <input type="email" class="form-control" id="inputEmail" placeholder="Email">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group  col-xs-12">*/
/*                             <div class="col-sm-8 col-sm-offset-2">*/
/*                                 <textarea class="form-control" id="inputMessage" placeholder="Message" rows="6"></textarea>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group  col-xs-12 col-sm-6 col-sm-offset-3">*/
/*                             <div id="submit-button" class="col-xs-6">*/
/*                                 <button type="submit" class="btn btn-default">Send</button>*/
/*                             </div>*/
/*                             <div id="clear-button" class="col-xs-6">*/
/*                                 <button class="btn btn-default">Clear</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-12 social-buttons">*/
/*                 <footer>*/
/*                     <h1>*/
/*                         <a href="{{record.facebooklink}}"><i class="fa fa-facebook-square"></i></a>*/
/*                         <a href="{{record.twitterlink}}"><i class="fa fa-twitter-square"></i></a>*/
/*                         <a href="{{record.linkedinlink}}"><i class="fa fa-linkedin-square"></i></a>*/
/*                     </h1>*/
/*                     <p>{{record.footertext}}</p>*/
/*                 </footer>*/
/*             </div>*/
/*     </div>*/
/* </div>*/
/* */
/*     <!--[if lt IE 7]>*/
/*       <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>*/
/*     <![endif]-->*/
/* */
/*     <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->*/
/*     <script>*/
/*       (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=*/
/*       function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;*/
/*       e=o.createElement(i);r=o.getElementsByTagName(i)[0];*/
/*       e.src='//www.google-analytics.com/analytics.js';*/
/*       r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));*/
/*       ga('create','UA-XXXXX-X');ga('send','pageview');*/
/*     </script>*/
/* */
/* */
/*         <!-- build:js scripts/main.js -->*/
/*         <script src="{{ paths.theme }}bower_components/jquery/jquery.js"></script>*/
/*         <script src="{{ paths.theme }}bower_components/fullpage.js/jquery.fullpage.min.js"></script>*/
/*         <script src="{{ paths.theme }}scripts/main.js"></script>*/
/*         <!-- endbuild -->*/
/* </body>*/
/* </html>*/
/* */
