<?php

namespace Sparse\Composer;

use Composer\Plugin\PluginInterface;
use Composer\IO\IOInterface;
use Composer\Composer;

/**
 * @author Raymond Jelierse <info@raymondjelierse.nl>
 */
class WordpressInstallerPlugin implements PluginInterface
{
    /**
     * The package types that are supported by this installer.
     *
     * @var array
     */
    private static $types = array(
        'wordpress-plugin',
        'wordpress-theme',
    );

    /**
     * {@inheritdoc}
     */
    public function activate( Composer $composer, IOInterface $io )
    {
        foreach (static::$types as $type) {
            $installer = new WordpressInstaller($io, $composer, $type);

            $composer->getInstallationManager()->addInstaller($installer);
        }
    }
}
