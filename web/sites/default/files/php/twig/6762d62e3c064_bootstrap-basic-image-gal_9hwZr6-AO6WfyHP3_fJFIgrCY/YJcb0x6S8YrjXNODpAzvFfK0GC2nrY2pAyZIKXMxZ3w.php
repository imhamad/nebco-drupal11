<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/belgrade/templates/misc/bootstrap-basic-image-gallery.html.twig */
class __TwigTemplate_e153a8871f29ca8838970e32859784d6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "
<div class=\"bootstrap-basic-image-gallery\">

  <div class=\"main-image\" data-bs-toggle=\"modal\" data-bs-slide-to=\"0\" data-bs-target=\"#";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 19), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main"] ?? null), "html", null, true);
        yield "</div>

  ";
        // line 21
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 21)) > 1)) {
            // line 22
            yield "    <div class=\"thumbnails\">
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 23));
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 24
                yield "        <div class=\"thumb ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "class", [], "any", false, false, true, 24), "html", null, true);
                yield "\" style=\"width:";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "width", [], "any", false, false, true, 24), "html", null, true);
                yield "%;\" data-bs-toggle=\"modal\" data-bs-slide-to=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                yield "\" data-bs-target=\"#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 24), "html", null, true);
                yield "\">
          ";
                // line 25
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["image"], "html", null, true);
                yield "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "    </div>
  ";
        }
        // line 30
        yield "
  <div class=\"modal fade ";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["lazyload"] ?? null), "html", null, true);
        yield "\" id=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 31), "html", null, true);
        yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 31), "html", null, true);
        yield "-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <div id=\"";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 35), "html", null, true);
        yield "\" class=\"carousel slide ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["lazyload"] ?? null), "html", null, true);
        yield "\" data-bs-interval=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "interval", [], "any", false, false, true, 35), "html", null, true);
        yield "\" data-bs-ride=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "autoplay", [], "any", false, false, true, 35), "html", null, true);
        yield "\">

            <div class=\"carousel-inner\" role=\"listbox\">
              ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "images", [], "any", false, false, true, 38));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["carousel_image"]) {
            // line 39
            yield "                <div class=\"carousel-item item slide-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 39)) {
                yield "active";
            }
            yield "\">
                  ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["carousel_image"], "html", null, true);
            yield "
                  <div class=\"carousel-caption\">";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["carousel_image"], "#caption", [], "any", false, false, true, 41), "html", null, true);
            yield "</div>
                </div>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['carousel_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
              ";
        // line 45
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 45)) > 1)) {
            // line 46
            yield "              <a class=\"carousel-control-prev left carousel-control\" href=\"#";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 46), "html", null, true);
            yield "\" role=\"button\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\"></span>
                <span class=\"sr-only\">";
            // line 48
            yield t("Previous", array());
            yield "</span>
              </a>
              <a class=\"carousel-control-next right carousel-control\" href=\"#";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 50), "html", null, true);
            yield "\" role=\"button\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\"></span>
                <span class=\"sr-only\">";
            // line 52
            yield t("Next", array());
            yield "</span>
              </a>
              ";
        }
        // line 55
        yield "            </div>

            ";
        // line 57
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 57)) > 1)) {
            // line 58
            yield "            <ol class=\"carousel-indicators\">
              ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "images", [], "any", false, false, true, 59)) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 60
                yield "                <li data-bs-target=\"#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 60), "html", null, true);
                yield "\" data-bs-slide-to=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["index"], "html", null, true);
                yield "\" class=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 60)) {
                    yield "active";
                }
                yield "\"></li>
              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "            </ol>
            ";
        }
        // line 64
        yield "
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["modal", "main", "thumbnails", "lazyload", "carousel", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/belgrade/templates/misc/bootstrap-basic-image-gallery.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  242 => 64,  238 => 62,  215 => 60,  198 => 59,  195 => 58,  193 => 57,  189 => 55,  183 => 52,  178 => 50,  173 => 48,  167 => 46,  165 => 45,  162 => 44,  145 => 41,  141 => 40,  132 => 39,  115 => 38,  103 => 35,  92 => 31,  89 => 30,  85 => 28,  76 => 25,  65 => 24,  61 => 23,  58 => 22,  56 => 21,  49 => 19,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/belgrade/templates/misc/bootstrap-basic-image-gallery.html.twig", "/Users/hamad/WebServer/kickstart/web/themes/contrib/belgrade/templates/misc/bootstrap-basic-image-gallery.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "for" => 23, "trans" => 48);
        static $filters = array("escape" => 19, "length" => 21);
        static $functions = array("range" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'trans'],
                ['escape', 'length'],
                ['range'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
