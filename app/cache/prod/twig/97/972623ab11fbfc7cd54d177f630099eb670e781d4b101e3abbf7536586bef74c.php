<?php

/* FilmBundle::index.html.twig */
class __TwigTemplate_f933bfc6e05bbd3c183da8f6731018ac0727378e42766b246f37d5d64d0a275a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'A' => array($this, 'block_A'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Shop Homepage - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/logo.png"), "html", null, true);
        echo "\" alt=\"Filmothèque\" width=\"35\" height=\"35\"  class=\"moimg\"/><div class=\"moh1\"> Film</div></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("film_homepage");
        echo "\">Accueil</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("acteur_affiche");
        echo "\">Acteurs</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("film_index");
        echo "\">Films</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("film_affiche");
        echo "\">Categories</a>
                        </li>

                    </ul>



                    <form class=\"navbar-form navbar-right\" method=\"post\" action=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("film_recherche");
        echo "\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"motcle\">
                    </form>






                    <ul class=\"nav navbar-nav navbar-right\">    

                        <li>
                            ";
        // line 76
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 77
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            ";
        } else {
            // line 82
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 84
        echo "

                        </li>
                    </ul> 

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class=\"container\">
            ";
        // line 97
        $this->displayBlock('A', $context, $blocks);
        // line 195
        echo "    </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/js/jquery.js"), "html", null, true);
        echo "\"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
    }

    // line 97
    public function block_A($context, array $blocks = array())
    {
        // line 98
        echo "                <div class=\"row\">

                    <div class=\"col-md-3\">
                        <p class=\"lead\">Listes Des Categories</p>
                        <div class=\"list-group\">
                            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categ"]) ? $context["categ"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 104
            echo "                                <tr>
                                <a href=\"#\" class=\"list-group-item\">         <td> ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
            echo " </td> </tr> </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
                        </div>
                    </div>

                    <div class=\"col-md-9\">

                        <div class=\"row carousel-holder\">

                            <div class=\"col-md-12\">
                                <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                                    <ol class=\"carousel-indicators\">
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                                    </ol>
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <img class=\"slide-image\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/CREATE-Film-Festival-800x300.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img class=\"slide-image\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/horror_true_movies_1-800x300.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img class=\"slide-image\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/film/images/assassins-creed-810x300.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                    </div>
                                    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                                    </a>
                                    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class=\"row\">


                            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["film"]) ? $context["film"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 148
            echo "                                <div class=\"col-sm-4 col-lg-4 col-md-4\">
                                    <div class=\"thumbnail\">
                                        <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_details", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">  
                                            <img src=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["f"], "path", array()))), "html", null, true);
            echo "\" alt=\"\">
                                            <div class=\"caption\">

                                                <h4 class=\"pull-right\">\$24.99</h4>
                                                <h4>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "titre", array()), "html", null, true);
            echo "
                                                </h4>
                                                <p>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "description", array()), "html", null, true);
            echo "</p>    </div></a>
                                        <div class=\"ratings\">
                                            <p class=\"pull-right\">view ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "notif", array()), "html", null, true);
            echo "</p>
                                            <p>
                                                ";
            // line 161
            if (($this->getAttribute($context["f"], "notif", array()) >= 5)) {
                echo "}
                                                    <span class=\"glyphicon glyphicon-star\"></span>
                                                ";
            }
            // line 164
            echo "                                                ";
            if (($this->getAttribute($context["f"], "notif", array()) >= 10)) {
                echo "}
                                                    <span class=\"glyphicon glyphicon-star\"></span>
                                                ";
            }
            // line 167
            echo "                                                ";
            if (($this->getAttribute($context["f"], "notif", array()) >= 15)) {
                echo "}
                                                    <span class=\"glyphicon glyphicon-star\"></span>
                                                ";
            }
            // line 170
            echo "                                                ";
            if (($this->getAttribute($context["f"], "notif", array()) >= 20)) {
                echo "}
                                                    <span class=\"glyphicon glyphicon-star\"></span>
                                                ";
            }
            // line 173
            echo "                                                ";
            if (($this->getAttribute($context["f"], "notif", array()) >= 25)) {
                echo "}
                                                    <span class=\"glyphicon glyphicon-star\"></span>
                                                ";
            }
            // line 176
            echo "                                            </p>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "

                        </div>
                        <div class=\"row\">
                            ";
        // line 185
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["film"]) ? $context["film"] : null));
        echo "
                        </div>


                    </div>

                </div>

            </div>
        ";
    }

    public function getTemplateName()
    {
        return "FilmBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 185,  356 => 181,  346 => 176,  339 => 173,  332 => 170,  325 => 167,  318 => 164,  312 => 161,  307 => 159,  302 => 157,  297 => 155,  290 => 151,  286 => 150,  282 => 148,  278 => 147,  258 => 130,  252 => 127,  246 => 124,  227 => 107,  219 => 105,  216 => 104,  212 => 103,  205 => 98,  202 => 97,  192 => 219,  185 => 215,  163 => 195,  161 => 97,  146 => 84,  138 => 82,  132 => 79,  128 => 78,  123 => 77,  121 => 76,  106 => 64,  96 => 57,  90 => 54,  84 => 51,  78 => 48,  69 => 42,  42 => 18,  36 => 15,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/*         <title>Shop Homepage - Start Bootstrap Template</title>*/
/* */
/*         <!-- Bootstrap Core CSS -->*/
/*         <link href="{{asset('bundles/film/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <link href="{{asset('bundles/film/css/shop-homepage.css')}}" rel="stylesheet">*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <div class="container">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="#"><img src="{{asset('bundles/film/images/logo.png')}}" alt="Filmothèque" width="35" height="35"  class="moimg"/><div class="moh1"> Film</div></a>*/
/*                 </div>*/
/*                 <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li>*/
/*                             <a href="{{path('film_homepage')}}">Accueil</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{path('acteur_affiche')}}">Acteurs</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{path('film_index')}}">Films</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{path('film_affiche')}}">Categories</a>*/
/*                         </li>*/
/* */
/*                     </ul>*/
/* */
/* */
/* */
/*                     <form class="navbar-form navbar-right" method="post" action="{{path('film_recherche')}}">*/
/*                         <input type="text" class="form-control" placeholder="Search..." name="motcle">*/
/*                     </form>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                     <ul class="nav navbar-nav navbar-right">    */
/* */
/*                         <li>*/
/*                             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                                 </a>*/
/*                             {% else %}*/
/*                                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                             {% endif %}*/
/* */
/* */
/*                         </li>*/
/*                     </ul> */
/* */
/*                 </div>*/
/*                 <!-- /.navbar-collapse -->*/
/*             </div>*/
/*             <!-- /.container -->*/
/*         </nav>*/
/* */
/*         <!-- Page Content -->*/
/*         <div class="container">*/
/*             {% block A %}*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-md-3">*/
/*                         <p class="lead">Listes Des Categories</p>*/
/*                         <div class="list-group">*/
/*                             {%for c in categ %}*/
/*                                 <tr>*/
/*                                 <a href="#" class="list-group-item">         <td> {{c.nom}} </td> </tr> </a>*/
/*                             {%endfor%}*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-9">*/
/* */
/*                         <div class="row carousel-holder">*/
/* */
/*                             <div class="col-md-12">*/
/*                                 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*                                     <ol class="carousel-indicators">*/
/*                                         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*                                         <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*                                         <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*                                     </ol>*/
/*                                     <div class="carousel-inner">*/
/*                                         <div class="item active">*/
/*                                             <img class="slide-image" src="{{asset('bundles/film/images/CREATE-Film-Festival-800x300.jpg')}}" alt="">*/
/*                                         </div>*/
/*                                         <div class="item">*/
/*                                             <img class="slide-image" src="{{asset('bundles/film/images/horror_true_movies_1-800x300.jpg')}}" alt="">*/
/*                                         </div>*/
/*                                         <div class="item">*/
/*                                             <img class="slide-image" src="{{asset('bundles/film/images/assassins-creed-810x300.jpg')}}" alt="">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">*/
/*                                         <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                                     </a>*/
/*                                     <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">*/
/*                                         <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="row">*/
/* */
/* */
/*                             {%for f in film %}*/
/*                                 <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                                     <div class="thumbnail">*/
/*                                         <a href="{{path('film_details',{'id':f.id})}}">  */
/*                                             <img src="{{asset('uploads/'~f.path)}}" alt="">*/
/*                                             <div class="caption">*/
/* */
/*                                                 <h4 class="pull-right">$24.99</h4>*/
/*                                                 <h4>{{f.titre}}*/
/*                                                 </h4>*/
/*                                                 <p>{{f.description}}</p>    </div></a>*/
/*                                         <div class="ratings">*/
/*                                             <p class="pull-right">view {{f.notif}}</p>*/
/*                                             <p>*/
/*                                                 {% if f.notif >=5 %}}*/
/*                                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                                 {% endif %}*/
/*                                                 {% if f.notif >=10 %}}*/
/*                                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                                 {% endif %}*/
/*                                                 {% if f.notif >=15 %}}*/
/*                                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                                 {% endif %}*/
/*                                                 {% if f.notif >=20 %}}*/
/*                                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                                 {% endif %}*/
/*                                                 {% if f.notif >=25 %}}*/
/*                                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                                 {% endif %}*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/* */
/* */
/*                         </div>*/
/*                         <div class="row">*/
/*                             {{ knp_pagination_render(film) }}*/
/*                         </div>*/
/* */
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/*         {% endblock %}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/*     <div class="container">*/
/* */
/*         <hr>*/
/* */
/*         <!-- Footer -->*/
/*         <footer>*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <p>Copyright &copy; Your Website 2014</p>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="{{asset('bundles/film/js/jquery.js')}}"></script>*/
/* */
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{asset('bundles/film/js/bootstrap.min.js')}}"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
