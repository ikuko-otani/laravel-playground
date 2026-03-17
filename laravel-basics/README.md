# Routing

- Set up Laravel 12 project with `composer create-project`.
- Confirmed basic `Route::get('/')` returning a string.
- Practiced Route::get/post/put/delete with `/posts` endpoints.
- Used curl to send different HTTP verbs.
- Added route parameters `/users/{id}`
- Added a named route `profile`

# Controllers

- Practiced basic controllers by moving closure-based routes into dedicated controller class.
- Implemented controller-level middleware using the HasMiddleware interface for UserController.
- Created an ArticleController as a resource controller to understand standard CRUD actions (index, show, create, store, edit, update, destroy).
- Experimented with partial resource routes and apiResource for API-style endpoints.
- Registered a singleton ProfileController to model on-per-user resources like profiles.
- Used method injection to receive the Request object and route parameters in controller actions.


# Blade Templates

- Practiced basic Blade syntax, control structures, and components for a small task list UI.
- Used Blade echo syntax and basic loops to render dynamic lists.
- Organized Blade templates using Laravel's view naming convention, wheere dot notation maps to subdirectories under resources/views.
  - view('blade.demo') -> resources/views/blade/demo.blade.php
  - view('tasks.index') -> resources/views/tasks/index.blade.php
