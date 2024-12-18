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

/* @belgrade/layout/page--node--layout.html.twig */
class __TwigTemplate_625489648a4134d9a8f35500897c6de4 extends Template
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

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 46
        return "@belgrade/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@belgrade/layout/page.html.twig", "@belgrade/layout/page--node--layout.html.twig", 46);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["local_tasks_fixed", "attributes", "page"]);    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "
  ";
        // line 50
        if (($context["local_tasks_fixed"] ?? null)) {
            // line 51
            yield "    ";
            $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("belgrade/local-tasks.fixed");
            // line 52
            yield "  ";
        }
        // line 53
        yield "
  <main role=\"main\" ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
    <a id=\"main-content\" tabindex=\"-1\"></a>

      ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 57), "html", null, true);
        yield "

      ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 59)) {
            // line 60
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 60), "html", null, true);
            yield "
      ";
        }
        // line 62
        yield "
      ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 63)) {
            // line 64
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 64), "html", null, true);
            yield "
      ";
        }
        // line 66
        yield "  </main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@belgrade/layout/page--node--layout.html.twig";
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
        return array (  105 => 66,  99 => 64,  97 => 63,  94 => 62,  88 => 60,  86 => 59,  81 => 57,  75 => 54,  72 => 53,  69 => 52,  66 => 51,  64 => 50,  61 => 49,  54 => 48,  42 => 46,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@belgrade/layout/page--node--layout.html.twig", "/Users/hamad/WebServer/kickstart/web/themes/contrib/belgrade/templates/layout/page--node--layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 46, "if" => 50, "do" => 51);
        static $filters = array("escape" => 54);
        static $functions = array("attach_library" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if', 'do'],
                ['escape'],
                ['attach_library'],
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
