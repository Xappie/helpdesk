<?php

/* rrhh/turnos/carga_de_turnos.twig */
class __TwigTemplate_2f58775d9a92a7a3b113ff45847d44ba69e3c1a6eaf6489b4f729265e32f3d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/turnos/carga_de_turnos.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portal/portal";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_appBody($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"content-header\">
    <h1>
        RRHH
        <small>Carga de Turnos</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li class=\"active\">Cargar Turnos</li>
    </ol>
</section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body col-sm-8\">
                    <div class=\"form-group\">
                        <form id=\"formturnos\" name=\"formturnos\" method=\"post\" enctype=\"multipart/form-data\">
                            <input class='filestyle' data-buttonText=\"Logo\" type=\"file\" name=\"imagefile\" id=\"imagefile\" onchange=\"document.getElementById('archivo').value=document.getElementById('imagefile').value\" tabindex=\"-1\" style=\"position:absolute; clip: rect(0px 0px 0px 0px);\" accept=\"file_extension|image/*|media_type\">
                            <div class=\"bootstrap-filestyle input-group\">
                                <input type=\"text\" class=\"form-control\" id=\"archivo\" placeholder=\"\" disabled=\"\">
                                <span class=\"group-span-filestyle input-group-btn\" tabindex=\"0\">
                                    <label for=\"imagefile\" class=\"btn btn-default \">
                                    <span class=\"icon-span-filestyle glyphicon glyphicon-share\"></span>
                                    <span class=\"buttonText\">Buscar Archivo</span>
                                    </label>
                                </span>
                            </div>
                            <div id=\"div_cargando\">
                                <a class=\"btn btn-success btn-social\" title=\"Exportar a Excel\" data-toggle=\"tooltip\" onclick=\"subirarchivoexcel()\">
                                    <i class=\"fa fa-arrow-up\"></i> Cargar Turnos
                                </a>
                            </div>
                        </form>
                    </div>

                    <p><strong>Ultimos 5 archivos cargados</strong></p>
                    <table class=\"table table-bordered\">
                        <thead>
                            <th>No</th>
                            <th>Fecha y hora</th>
                            <th>Nombre de Archivo</th>
                            <th>Usuario</th>
                            <th>Cantidad</th>
                        </thead>
                        <tbody>
                            ";
        // line 50
        $context["No"] = 1;
        // line 51
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_archivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_archivos"] ?? null))) {
                // line 52
                echo "                                <tr>
                                    <td>";
                // line 53
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                    <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_hora", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre_archivo", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_registros", array()), "html", null, true);
                echo "</td>
                                </tr>
                                ";
                // line 59
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 60
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </tbody>
                    </table>

                </div>
                <div class=\"box-body col-sm-4\">
                    <span><b>Formato de Archivo</b>
                    <p>Col A -> Rut</p>
                    <p>Col B -> Servicio</p>
                    <p>Col C -> Fecha</p>
                    <p>Col D -> Hora de Ingreso</p>
                    <p>Col E -> Hora de Salida</p>
                    <p>Col F -> Número de Semana</p>
                    <p>Col G -> Horas Turno</p>
                    <p>Col H -> Duracion Colacion</p>
                    <p>Col I -> Horario Colacion</p>
                    <p>Col J -> Hora Break 1</p>
                    <p>Col K -> Hora Break 2</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 85
    public function block_appScript($context, array $blocks = array())
    {
        // line 86
        echo "    <script src=\"views/app/js/rrhh/turnos.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/turnos/carga_de_turnos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 86,  148 => 85,  121 => 61,  114 => 60,  112 => 59,  107 => 57,  103 => 56,  99 => 55,  95 => 54,  91 => 53,  88 => 52,  82 => 51,  80 => 50,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/turnos/carga_de_turnos.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\rrhh\\turnos\\carga_de_turnos.twig");
    }
}
