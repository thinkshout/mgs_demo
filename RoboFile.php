<?php
/**
 * Custom console commands for the Robo task runner.
 *
 * @see http://robo.li/
 */


class RoboFile extends \ThinkShout\RoboDrupal\Tasks
{

  /**
   * Cleanup migrations.
   *
   * @option string migrations
   *   Optional list of migrations to reset, separated by commmas.
   */
  public function migrateCleanup($opts = ['migrations' => '']) {
    $migrations = explode(',', $opts['migrations']);
    $project_properties = $this->getProjectProperties();
    foreach ($migrations as $migration) {
      $this->taskExec('drush mrs ' . $migration)->dir($project_properties['web_root'])->run();
    }
    $this->taskExec('drush mr --all && drush pmu migrate_google_sheets_example -y && drush pmu migrate_google_sheets_example -y && drush en migrate_google_sheets_example -y && drush ms')->dir($project_properties['web_root'])->run();
  }

}
