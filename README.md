# Slim Framework 4 Digial Ocean App Template

Clonable repo to rapidly develop Slim 4 applications and launch them on digial ocean apps

# Configuration
You will need to change the App Spec for your digital ocean app to include serving the public directory failure to 
change the run command will result in a 403
```yaml
services:
- environment_slug: php
  github:
    branch: main
    deploy_on_push: true
    repo: geggleto/slim-do-app
  http_port: 8080
  instance_count: 1
  instance_size_slug: basic-xxs
  name: slim-do-app
  run_command: heroku-php-apache2 public/ <----- you need to add public/
  source_dir: /
```

# Live Demo
- https://slim-do-app-jgbjg.ondigitalocean.app/
- https://slim-do-app-jgbjg.ondigitalocean.app/hello