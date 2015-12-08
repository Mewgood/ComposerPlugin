<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace WellCommerce\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

/**
 * Class ThemeInstaller
 *
 * @author Adam Piotrowski <adam@wellcommerce.org>
 */
class ThemeInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        list($vendor, $package) = explode('/', $package->getPrettyName());

        return 'web/themes/' . $package;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'wellcommerce-theme' === $packageType;
    }
} 
