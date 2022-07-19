<?php
/*
 * This file is part of the Github-Hivecom package.
 *
 * (c) AAPP
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GithubHivecom\Console;

class Application extends \Symfony\Component\Console\Application {
  public function __construct() {
    parent::__construct();

    // Identify all of the available console commands.
    $cmds = array(
      // new CommandInstall(),
      // new CommandDownload(),
    );

    // Add the commands after eliminating the implicit phonarc namespace.
    foreach ($cmds as &$cmd) {
      $cmd->setName(str_replace('github-hivecom:', '', $cmd->getName()));
      $this->add($cmd);
    }
  }
}