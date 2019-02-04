<?php

/* avar/cargaordenes/carga_pendientes.twig */
class __TwigTemplate_5e244d3e116b965bcbe81681def262761ff001cb929f7abeb0c703f8d2a1381f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "avar/cargaordenes/carga_pendientes.twig", 1);
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

    // line 2
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "
    <section class=\"content-header\">
        <h1>
            AVAR
            <small>Carga de Blindaje</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
            <li class=\"active\">Cargar Pendiente de blindaje</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-body col-sm-8\"\">
                        <div class=\"form-group\">
                            <form id=\"formblindaje\" name=\"formblindaje\" method=\"post\">
                                <input class='filestyle' data-buttontext=\"Logo\" id=\"blindfile\" onchange=\"document.getElementById('archivo').value=document.getElementById('blindfile').value\" tabindex=\"-1\" style=\"position:absolute; clip: rect(0px 0px 0px 0px);\" type=\"file\" name=\"files[]\" accept=\"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\">
                                <div class=\"bootstrap-filestyle input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"archivo\" placeholder=\"\" disabled=\"\">
                                    <span class=\"group-span-filestyle input-group-btn\" tabindex=\"0\">
                                        <label for=\"blindfile\" class=\"btn btn-default \">
                                            <span class=\"icon-span-filestyle glyphicon glyphicon-share\"></span>
                                            <span class=\"buttonText\">Buscar Archivo</span>
                                        </label>
                                    </span>
                                </div>
                                <div id=\"div_cargando\">
                                    <a class=\"btn btn-success btn-social\" title=\"Exportar a Excel\" data-toggle=\"tooltip\" onclick=\"subirarchivoexcel()\">
                                        <i class=\"fa fa-arrow-up\"></i>
                                        Cargar Turnos
                                    </a>
                                </div>
                            </form>
                        </div>

                        <p><strong>Ultimos 10 archivos cargados</strong></p>
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
        // line 55
        $context["No"] = 1;
        // line 56
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_archivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_archivos"] ?? null))) {
                // line 57
                echo "                                    <tr>
                                        <td>";
                // line 58
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_hora", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre_archivo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "q_registros", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                    ";
                // line 64
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 65
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            </tbody>
                        </table>

                    </div>
                    <div class=\"box-body col-sm-2\">
                        <span>
                            <b>Formato de Archivo</b>
                            <p>Col A -> RUT</p>
                            <p>Col B -> DESC_ACTIV</p>
                            <p>Col C -> LOCALIDAD</p>
                            <p>Col D -> NMRO_ORDEN</p>
                            <p>Col E -> NMRO_ACTIV</p>
                            <p>Col F -> FECHA_CREACION</p>
                            <p>Col G -> FECHA_COMPROMISO</p>
                            <p>Col H -> FECHA_COMPROMISO2</p>
                            <p>Col I -> CODI_HORARIO</p>
                            <p>Col J -> FECHA_INGRESO</p>
                            <p>Col K -> CONTEXTO</p>
                            <p>Col L -> TIPO_ACTIV</p>
                            <p>Col M -> ESTD_ACTIV</p>
                            <p>Col N -> CODI_AREAFUN</p>
                            <p>Col O -> DESC_AREAFUN</p>
                            <p>Col P -> RUT_TECNICO</p>
                            <p>Col Q -> CODI_TECNICO</p>
                            <p>Col R -> NODO</p>
                            <p>Col S -> SUBNODO</p>
                            <p>Col T -> DIRECCION</p>
                        </span>
                    </div>
                    <div class=\"box-body col-sm-2\">
                        <span>
                            <p>Col U -> FONO_CONTACTO</p>
                            <p>Col V -> OBSERVACION</p>
                            <p>Col W -> IDEN_VIVIENDA</p>
                            <p>Col X -> IDEN_SERVICIO</p>
                            <p>Col Y -> NMRO_SERVICIO</p>
                            <p>Col Z -> FONO</p>
                            <p>Col AA -> TV</p>
                            <p>Col AB -> INTERNET</p>
                            <p>Col AC -> FECHA_INGRESO_OT</p>
                            <p>Col AD -> FECHA_OT</p>
                            <p>Col AE -> HORA_OT</p>
                            <p>Col AF -> T</p>
                            <p>Col AG -> AREA_FUNCIONAL</p>
                            <p>Col AH -> AGENDAMIENTO_BLINDAJE</p>
                            <p>Col AI -> COMUNA</p>
                            <p>Col AJ -> ZONA</p>
                            <p>Col AK -> TIPO_CLIENTE</p>
                            <p>Col AL -> ACTIVIDAD</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 122
    public function block_appScript($context, array $blocks = array())
    {
        // line 123
        echo "    <script src=\"views/app/js/avar/avar.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "avar/cargaordenes/carga_pendientes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 123,  186 => 122,  127 => 66,  120 => 65,  118 => 64,  113 => 62,  109 => 61,  105 => 60,  101 => 59,  97 => 58,  94 => 57,  88 => 56,  86 => 55,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}

    <section class=\"content-header\">
        <h1>
            AVAR
            <small>Carga de Blindaje</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
            <li class=\"active\">Cargar Pendiente de blindaje</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-body col-sm-8\"\">
                        <div class=\"form-group\">
                            <form id=\"formblindaje\" name=\"formblindaje\" method=\"post\">
                                <input class='filestyle' data-buttontext=\"Logo\" id=\"blindfile\" onchange=\"document.getElementById('archivo').value=document.getElementById('blindfile').value\" tabindex=\"-1\" style=\"position:absolute; clip: rect(0px 0px 0px 0px);\" type=\"file\" name=\"files[]\" accept=\"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\">
                                <div class=\"bootstrap-filestyle input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"archivo\" placeholder=\"\" disabled=\"\">
                                    <span class=\"group-span-filestyle input-group-btn\" tabindex=\"0\">
                                        <label for=\"blindfile\" class=\"btn btn-default \">
                                            <span class=\"icon-span-filestyle glyphicon glyphicon-share\"></span>
                                            <span class=\"buttonText\">Buscar Archivo</span>
                                        </label>
                                    </span>
                                </div>
                                <div id=\"div_cargando\">
                                    <a class=\"btn btn-success btn-social\" title=\"Exportar a Excel\" data-toggle=\"tooltip\" onclick=\"subirarchivoexcel()\">
                                        <i class=\"fa fa-arrow-up\"></i>
                                        Cargar Turnos
                                    </a>
                                </div>
                            </form>
                        </div>

                        <p><strong>Ultimos 10 archivos cargados</strong></p>
                        <table class=\"table table-bordered\">
                            <thead>
                                <th>No</th>
                                <th>Fecha y hora</th>
                                <th>Nombre de Archivo</th>
                                <th>Usuario</th>
                                <th>Cantidad</th>
                            </thead>
                            <tbody>
                                {% set No = 1 %}
                                {% for d in db_archivos if false != db_archivos %}
                                    <tr>
                                        <td>{{ No }}</td>
                                        <td>{{ d.fecha_hora }}</td>
                                        <td>{{ d.nombre_archivo }}</td>
                                        <td>{{ d.name }}</td>
                                        <td>{{ d.q_registros }}</td>
                                    </tr>
                                    {% set No = No + 1 %}
                                {% endfor %}
                            </tbody>
                        </table>

                    </div>
                    <div class=\"box-body col-sm-2\">
                        <span>
                            <b>Formato de Archivo</b>
                            <p>Col A -> RUT</p>
                            <p>Col B -> DESC_ACTIV</p>
                            <p>Col C -> LOCALIDAD</p>
                            <p>Col D -> NMRO_ORDEN</p>
                            <p>Col E -> NMRO_ACTIV</p>
                            <p>Col F -> FECHA_CREACION</p>
                            <p>Col G -> FECHA_COMPROMISO</p>
                            <p>Col H -> FECHA_COMPROMISO2</p>
                            <p>Col I -> CODI_HORARIO</p>
                            <p>Col J -> FECHA_INGRESO</p>
                            <p>Col K -> CONTEXTO</p>
                            <p>Col L -> TIPO_ACTIV</p>
                            <p>Col M -> ESTD_ACTIV</p>
                            <p>Col N -> CODI_AREAFUN</p>
                            <p>Col O -> DESC_AREAFUN</p>
                            <p>Col P -> RUT_TECNICO</p>
                            <p>Col Q -> CODI_TECNICO</p>
                            <p>Col R -> NODO</p>
                            <p>Col S -> SUBNODO</p>
                            <p>Col T -> DIRECCION</p>
                        </span>
                    </div>
                    <div class=\"box-body col-sm-2\">
                        <span>
                            <p>Col U -> FONO_CONTACTO</p>
                            <p>Col V -> OBSERVACION</p>
                            <p>Col W -> IDEN_VIVIENDA</p>
                            <p>Col X -> IDEN_SERVICIO</p>
                            <p>Col Y -> NMRO_SERVICIO</p>
                            <p>Col Z -> FONO</p>
                            <p>Col AA -> TV</p>
                            <p>Col AB -> INTERNET</p>
                            <p>Col AC -> FECHA_INGRESO_OT</p>
                            <p>Col AD -> FECHA_OT</p>
                            <p>Col AE -> HORA_OT</p>
                            <p>Col AF -> T</p>
                            <p>Col AG -> AREA_FUNCIONAL</p>
                            <p>Col AH -> AGENDAMIENTO_BLINDAJE</p>
                            <p>Col AI -> COMUNA</p>
                            <p>Col AJ -> ZONA</p>
                            <p>Col AK -> TIPO_CLIENTE</p>
                            <p>Col AL -> ACTIVIDAD</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block appScript %}
    <script src=\"views/app/js/avar/avar.js\"></script>
{% endblock %}
", "avar/cargaordenes/carga_pendientes.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\avar\\cargaordenes\\carga_pendientes.twig");
    }
}
