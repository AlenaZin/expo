<?php

namespace Deployer;

/**
 * Deploying recipe for deployer utility
 *
 * NOTE: you should add the following permission to the sudo file (with visudo command)
 *
 * user_name ALL=(ALL) NOPASSWD: /usr/bin/setfacl
 */

require 'recipe/common.php';

serverList('deploy/servers.yml');

set('ssh_type', 'native');
set('ssh_multiplexing', true);
set('keep_releases', 2);

// Do not use sudo to setup writable folders.
// You should setup access to setfacl via sudoers file on the server
set('writable_use_sudo', false);

set('repository', 'https://github.com/AlenaZin/expo.git');

set('shared_dirs', [
    'data',
    'app/frontend/runtime',
    'app/backend/runtime',
    'app/common/runtime',
    'app/console/runtime',
    'app/backend/web/media',
    'app/frontend/web/media',
]);

set('shared_files', [
    '.env',
]);

set('writable_dirs', [
    'data',
    'app/frontend/runtime',
    'app/backend/runtime',
    'app/common/runtime',
    'app/console/runtime',
    'app/backend/web/media',
    'app/frontend/web/media',
    'app/backend/web/assets',
    'app/frontend/web/assets',
]);

set('copy_dirs', [
    //    'app/vendor',
]);

// Temp, while deployer does not have this feature in it's release
task('deploy:copy_dirs', function () {
    $dirs = get('copy_dirs');
    foreach ($dirs as $dir) {
        //Delete directory if exists
        run("if [ -d $(echo {{release_path}}/$dir) ]; then rm -rf {{release_path}}/$dir; fi");
        //Copy directory
        run("if [ -d $(echo {{deploy_path}}/current/$dir) ]; then cp -rpf {{deploy_path}}/current/$dir {{release_path}}/$dir; fi");
    }
})->desc('Copy directories');

/**
 * Migrate database
 */
task('database:migrate', function () {
    run('php {{release_path}}/yii migrate/up --interactive=0');
})->desc('Migrate database');

task('deploy:links', function () {
    run('ln -sf {{deploy_path}}/shared/data/ {{release_path}}/app/backend/web/');
    run('ln -sf {{deploy_path}}/shared/data/ {{release_path}}/app/frontend/web/');
})->desc('Set links for data directory');

/**
 * Saving version of the application
 */
task('save_version', function () {
    run('cd {{release_path}} && git rev-parse --short HEAD > .version');
})->desc('Saving version');

task('reload:php71-fpm', function () {
    run('sudo /usr/sbin/service php7.1-fpm reload');
});

task('reload:php73-fpm', function () {
    run('sudo /usr/sbin/service php7.3-fpm reload');
});

task('npm_install', function () {
    run('cd {{release_path}}/spa && npm ci --allow-root --unsafe-perm=true');
});

task('npm_run_build', function () {
    run('cd {{release_path}}/spa && npm run build');
});

task('prepare', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:copy_dirs',
    // 'deploy:vendors',
    'deploy:symlink',
    'cleanup',
    'reload:php73-fpm',
])->desc('Prepare library, using first time deploy');

task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:copy_dirs',
    // 'deploy:vendors',
    // 'database:migrate',
    'save_version',
    'npm_install',
    'npm_run_build',
    'deploy:symlink',
    'deploy:links',
    'cleanup',
    'reload:php73-fpm'
])->desc('Deploy');

task('demo', [
    'branch:develop',
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:copy_dirs',
    'deploy:vendors',
    'database:migrate',
    'save_version',
    'api_url:develop',
    'deploy:links',
    'deploy:symlink',
    'cleanup',
    'reload:php73-fpm'
])->desc('Deploy demo');

after('deploy', 'success');


