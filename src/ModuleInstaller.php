<?php namespace Pta\Installer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller
{
     /**
     * {@inheritdoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'modules/'.$package->getPrettyName();
    }

    /**
     * {@inheritdoc}
     */
    public function supports($packageType)
    {
        return 'core-module' === $packageType;

    }
}