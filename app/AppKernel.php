<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\DoctrineBundle\DoctrineBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new LanguageFirst\UsuarioBundle\UsuarioBundle(),
            new LanguageFirst\TestBundle\TestBundle(),
            new LanguageFirst\TotalesBundle\TotalesBundle(),
            new LanguageFirst\TestRespondidosBundle\TestRespondidosBundle(),
            new LanguageFirst\TotalesTestRespondidosBundle\TotalesTestRespondidosBundle(),
            new LanguageFirst\FaseTestBundle\FaseTestBundle(),
            new LanguageFirst\SeccionesFaseBundle\SeccionesFaseBundle(),
            new LanguageFirst\PreguntasSeccionBundle\PreguntasSeccionBundle(),
            new LanguageFirst\RespuestasPreguntasBundle\RespuestasPreguntasBundle(),
            new LanguageFirst\OpcionesRespuestasBundle\OpcionesRespuestasBundle(),
            new LanguageFirst\RespuestasUsuariosBundle\RespuestasUsuariosBundle(),
            new LanguageFirst\AdminBundle\AdminBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
