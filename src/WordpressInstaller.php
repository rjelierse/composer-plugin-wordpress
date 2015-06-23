<?php

namespace Sparse\Composer;

use Composer\Composer;
use Composer\Installer\LibraryInstaller;
use Composer\IO\IOInterface;
use Composer\Package\PackageInterface;
use Composer\Util\Filesystem;

/**
 * @author Raymond Jelierse <info@raymondjelierse.nl>
 */
class WordpressInstaller extends LibraryInstaller
{
    public function __construct( IOInterface $io, Composer $composer, $type, Filesystem $filesystem = null )
    {
        parent::__construct( $io, $composer, $type, $filesystem );

        switch ($type) {
            case 'wordpress-plugin':
                $this->vendorDir = 'wp-content/plugins';
                break;

            case 'wordpress-theme':
                $this->vendorDir = 'wp-content/themes';
                break;
        }
    }

    protected function getPackageBasePath( PackageInterface $package )
    {
        $name = $package->getPrettyName();

        if (false !== $position = strpos($name, '/')) {
            $name = substr($name, $position  + 1);
        }

        return $this->vendorDir . '/' . $name;
    }
}
